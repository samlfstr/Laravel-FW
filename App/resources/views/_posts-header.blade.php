<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest <span class="text-blue-500">Laravel From Scratch</span> News
    </h1>

    <h2 class="inline-flex mt-2">By Lary Laracore <img src="./images/lary-head.svg"
                                                       alt="Head of Lary the mascot"></h2>

    <p class="text-sm mt-14">
        Another year. Another update. We're refreshing the popular Laravel series with new content.
        I'm going to keep you guys up to speed with what's going on!
    </p>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">


        <!--  Category -->
        <div class="relative lg:inline-flex bg-gray-100 rounded-xl">

            <div x-data="{ show:false }" @click.away="show = false">
                <button @click="show = !show"
                        class="flex-1 appearance-none bg-transparent py-1 pl-3 pr-9 text-sm font-semibold lg:w-32 text-left flex lg:inline-flex w-full m-1">
                    Category
                </button>

                <div x-show=" show " class="py-1 absolute bg-gray-100 w-full rounded-xl mt-1 z-50"
                     style="display: none">
                    <a href="#"
                       class="block text-left px-3 py-0.3 text-sm hover:bg-blue-500 hover:text-white focus:bg-blue-500 focus:text-white rounded-lg">One</a>
                    <a href="#"
                       class="block text-left px-3 py-0.3 text-sm hover:bg-blue-500 hover:text-white focus:bg-blue-500 focus:text-white rounded-lg">Two</a>
                    <a href="#"
                       class="block text-left px-3 py-0.3 text-sm  hover:bg-blue-500 hover:text-white focus:bg-blue-500 focus:text-white rounded-lg">Three</a>
                </div>
                <svg class="transform -rotate-90 absolute pointer-events-none inline-flex relative" style="right: 12px;"
                     width="22"
                     height="22" viewBox="0 0 22 22">
                    <g fill="none" fill-rule="evenodd">
                        <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                        </path>
                        <path fill="#222"
                              d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                    </g>
                </svg>
            </div>

            {{-- HOW TO USE FOREACH LOOP TO GO THROUGH A OPTION TAG AND SHOW EACH ITEM --
            <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                        @foreach($categories as $category)
                            <option value="{{$category->slug}}">{{$category->name}}</option>
                        @endforeach
                    </select>
            --}}
        </div>

        <!-- Other Filters -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
            <div x-data="{ show : false }" class="p-1">
                <button @click="show = !show"> Drop down</button>
                <div x-show="show" class="grid absolute w-full text-left pl-1">
                    <a href="#" class="bg-gray-100">One</a>
                    <a href="#" class="bg-gray-100">Two</a>
                    <a href="#" class="bg-gray-100">Three</a>
                </div>
            </div>
        </div>

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="#">
                <input type="text" name="search" placeholder="Find something"
                       class="bg-transparent placeholder-black font-semibold text-sm">
            </form>
        </div>
    </div>
</header>
