<x-app-layout>
    <div class="py-4">
        <div class="max-w-5xl mx-auto sm:px-4 lg:px-8">
            <div class="bg-gray-200 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <ul class="flex -mb-px space-x-8 justify-center">
                        <li>
                            <a href="#"
                               class="inline-block py-4 px-1 border-b-2 border-indigo-500 text-indigo-600 dark:text-indigo-400 font-medium text-sm">
                                All
                            </a>
                        </li>
                        @foreach($categories as $category)
                            <li>
                                <a href="#"
                                   class="inline-block py-4 px-1 border-b-2 border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200 hover:border-gray-300 transition-all duration-200">
                                    {{$category->name}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="mt-8 text-gray-900 dark:text-gray-100">
                <div class="p-4">
                    @foreach($posts as $post)
                        <div
                            class="flex bg-gray-200 dark:bg-gray-800 rounded-lg mb-8">
                            <div class="p-5 flex-1">
                                <a href="#">
                                    <h5 class="mt-1 mb-2 text-2xl font-semibold tracking-tight text-heading">
                                        {{ $post->title }}
                                    </h5>
                                </a>
                                <div class="text-body text-gray-700 dark:text-gray-400">
                                    {{ Str::words($post->content, 20) }}
                                </div>
                                <a href="#"
                                   class="mt-4 inline-flex items-center text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
                                    Read more
                                    <svg class="w-4 h-4 ms-1.5 rtl:rotate-180 -me-0.5" aria-hidden="true"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                         viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                                    </svg>
                                </a>
                            </div>
                            <a href="#">
                                <img class="w-48 h-full object-cover rounded-r-lg"
                                     src="{{ $post->image }}"
                                     alt=""/>
                            </a>
                        </div>
                    @endforeach

                </div>
                <div class="max-w-3xl -mt-4 mb-3 mr-auto ml-auto">
                    {{ $posts->onEachSide(1)->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
