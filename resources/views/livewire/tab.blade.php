<div>
    <style>
        #journal-scroll::-webkit-scrollbar {
            height: 5px;
            cursor: pointer;
            /*background-color: rgba(229, 231, 235, var(--bg-opacity));*/

        }

        #journal-scroll::-webkit-scrollbar-track {
            background-color: rgba(229, 231, 235, var(--bg-opacity));
            cursor: pointer;
            /*background: red;*/
        }

        #journal-scroll::-webkit-scrollbar-thumb {
            cursor: pointer;
            background-color: black;
            /*outline: 1px solid slategrey;*/
        }

    </style>
    <div class="max-w-4xl mx-auto px-2 sm:px-6 lg:px-8 py-8 text-center">
        <h1 class="text-4xl mb-5">Todas las Categorias</h1>
        <div class="flex justify-center space-x-2 md:max-w-lg xl:max-w-5xl 2xl:max-w-7xl lg:max-w-3xl whitespace-nowrap overflow-x-auto" id="journal-scroll">            
            @foreach ($categories as $category)
            <a href="{{route('posts.category',$category)}}" class=" p-2 pl-5 pr-5 bg-transparent text-gray-500 text-lg rounded-lg hover:bg-gray-500 hover:text-gray-100 focus:border-4 focus:border-gray-300 mb-2 capitalize">{{$category->name}}</a>
            @endforeach
        </div>


    </div>

</div>
