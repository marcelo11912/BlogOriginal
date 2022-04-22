<x-app-layout>
    @livewire('tab')
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 py-8 ">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($posts as $post)
                <article class="w-full h-80 py-4 bg-cover bg-center @if ($loop->first) md:col-span-2  @endif "
                    style="background-image: url(@if($post->image){{ Storage::url($post->image->url) }} @else https://cdn.pixabay.com/photo/2019/12/08/19/50/winter-4682051_960_720.jpg @endif )">
                    <div class="w-full h-full px-8 flex flex-col justify-center ">
                       <div class="py-3 ">
                           @foreach ($post->tag as $tags)
                           <a href="{{route('posts.tag',$tags)}}" class="border-0 drop-shadow-lg inline-block px-3 h-6 bg-{{$tags->color}}-600 text-white rounded-full">{{$tags->name}}</a>
                           @endforeach
                           
                       </div>
                       
                        <h1 class="text-4xl text-white leading-8 font-bold">
                            <a class= "drop-shadow-lg" href="{{route('posts.show',$post)}}">{{$post->name}}</a>
                        </h1>
                    </div>
                    <div class="text-right text-white leading-8  bg-gray-800 ">
                       <strong>Autor:</strong> <span class="mr-4">{{$post->user->name}}</span> 
                    </div>
                    
                </article>
                
            @endforeach
        </div>
        <div class="mb-4 py-8">
            {{$posts->links()}}
        </div>

    </div>
    

</x-app-layout>
