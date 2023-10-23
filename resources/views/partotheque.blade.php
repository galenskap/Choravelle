<x-privatespace-layout>
    <h2 class="p-6 font-semibold text-xl text-gray-800 leading-tight">
        Partothèque
    </h2>

    <!-- Search form -->
    <form action="{{ route('partotheque') }}" method="GET" class="p-6 text-gray-900">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="title">
            Rechercher une chanson
        </label>
        <div class="flex flex-wrap -mx-3">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <input name="title" value="{{ request()->input('title') }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="title" type="text" placeholder="Titre de chanson">
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <button type="submit" class="px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 lh-corrected">
                    Chercher
                </button>
            </div>
        </div>
    </form>

    <div class="p-6 text-gray-900">
        <table class="table-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2">Titre</th>
                    <th class="px-4 py-2">Dernière mise à jour</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($songs as $song)
                <tr>
                    <td class="border px-4 py-2">{{ $song->title }}</td>
                    <td class="border px-4 py-2">{{ $song->updated_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-privatespace-layout>
