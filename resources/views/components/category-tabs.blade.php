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
