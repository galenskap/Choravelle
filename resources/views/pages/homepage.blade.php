<x-app-layout>
    <header class="header home">
        <img src="{{ asset('storage/' . $page->image) }}" alt="Photo du choeur" class="w-full">
    </header>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="main-container bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <h2 class="p-6 font-semibold text-xl text-gray-800 leading-tight">
                À propos du choeur
            </h2>
            <div class="p-6 text-gray-900">
                <?php echo $page->content ?>
            </div>
            <!-- bouton pour en savoir plus -->
            <div class="p-6 text-gray-900 a-right">
                <a href="{{ route('a-propos') }}" class="px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 ml-3">
                    En savoir plus
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
