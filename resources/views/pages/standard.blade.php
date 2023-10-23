<x-app-layout>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <h2 class="p-6 font-semibold text-xl text-gray-800 leading-tight">
                <?php echo $page->name ?>
            </h2>
            <div class="p-6 text-gray-900">
                <?php echo $page->content ?>
            </div>
        </div>
    </div>

</x-app-layout>
