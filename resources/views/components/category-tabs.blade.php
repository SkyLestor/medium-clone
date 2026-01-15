<div class="p-6 text-gray-900 dark:text-gray-100">
    <ul class="flex gap-6 overflow-x-auto whitespace-nowrap px-4 sm:justify-center sm:overflow-visible scrollbar-hide">
        <li>
            <a href="{{ route('dashboard') }}"
               class="{{ !request('category')
                ? 'inline-block py-3 px-2 border-b-2 border-indigo-500 text-indigo-600 dark:text-indigo-400 font-medium text-sm'
                : 'inline-block py-3 px-2 border-b-2 border-transparent text-gray-500 dark:text-gray-400
                   hover:text-gray-700 dark:hover:text-gray-200 hover:border-gray-300 transition-all duration-200' }}">
                @if(auth()->user())
                    Follows
                @else
                    All
                @endif
            </a>
        </li>

        @foreach($categories as $category)
            <li>
                <a href="{{ route('post.byCategory', $category) }}"
                   class="{{ Route::currentRouteNamed('post.byCategory') && request('category')->id == $category->id
                    ? 'inline-block py-3 px-2 border-b-2 border-indigo-500 text-indigo-600 dark:text-indigo-400 font-medium text-sm'
                    : 'inline-block py-3 px-2 border-b-2 border-transparent text-gray-500 dark:text-gray-400
                       hover:text-gray-700 dark:hover:text-gray-200 hover:border-gray-300 transition-all duration-200' }}">
                    {{ $category->name }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
