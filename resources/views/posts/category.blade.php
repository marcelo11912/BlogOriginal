<x-app-layout>

    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        <h1 class="mb-4 uppercase text-center text-3xl font-bold">Categoria de {{ $category->name }}</h1>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
            @foreach ($posts as $post)
                <x-card-post :post="$post" />
            @endforeach

            <div class="mt-4">
                {{ $posts->links() }}
            </div>
        </div>

    </div>

</x-app-layout>
