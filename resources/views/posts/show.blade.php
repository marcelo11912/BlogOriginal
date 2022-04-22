<x-app-layout>
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        <h1 class="text-4xl font-bold text-gray-600">
            {{ $post->name }}
        </h1>
        <div class="text-lg text-gray-500 mb-2">
            {!! $post->extract !!}
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            {{-- //Contenido principal --}}
            <div class="lg:col-span-2">
                <figure>
                    @if ($post->image)
                        <img class="w-full h-80 object-cover object-center" src="{{ Storage::url($post->image->url) }}"
                            alt="">
                    @else
                        <img class="w-full h-80 object-cover object-center"
                            src="https://cdn.pixabay.com/photo/2019/12/08/19/50/winter-4682051_960_720.jpg" alt="">
                    @endif
                </figure>
                <div class="text-base text-gray-500 py-4">
                    {!! $post->body !!}
                </div>
            </div>
            {{-- //Contenido relacionado --}}
            <aside>
                <h1 class="text-2xl font-bold text-gray-600 mb-4">
                    Mas de {{ $post->category->name }}
                </h1>

                <ul>
                    @foreach ($similares as $similar)

                        <a href="{{ route('posts.show', $similar) }}">
                            <div class="grid grid-cols-2 gap-2">
                                <div class="mb-2">
                                    @if ($similar->image)
                                        <img class="w-full h-20 object-cover object-center "
                                            src="{{ Storage::url($similar->image->url) }}" alt="">
                                    @else
                                        <img class="w-full h-20 object-cover object-center "
                                            src="https://cdn.pixabay.com/photo/2019/12/08/19/50/winter-4682051_960_720.jpg">
                                    @endif
                                </div>
                                <div class="">
                                    <span class="ml-2 text-gray-600">{{ $similar->name }}</span>
                                </div>

                            </div>

                        </a>
                    @endforeach
                </ul>

            </aside>
        </div>
    </div>
</x-app-layout>
