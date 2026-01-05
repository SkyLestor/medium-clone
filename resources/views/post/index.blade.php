<x-app-layout>
    <div class="py-4">
        <div class="max-w-5xl mx-auto sm:px-4 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <x-category-tabs></x-category-tabs>
            </div>
            <div class="mt-8 text-gray-900 dark:text-gray-100">
                <div class="p-4">
                    @forelse($posts as $post)
                        <x-post-item :post="$post"></x-post-item>
                    @empty
                        <div class="py-16 text-center">
                            No posts were found
                        </div>
                    @endforelse

                </div>
                <div class="max-w-3xl -mt-4 mb-3 mr-auto ml-auto">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
