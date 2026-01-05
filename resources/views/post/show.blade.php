<x-app-layout>
    <div class="py-4">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div
                class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg text-gray-900 dark:text-gray-100 mt-4 p-8">
                <h1 class=" text-4xl mb-4">{{ $post->title }}</h1>
                <!-- User Avatar -->
                <div class="flex gap-4">
                    @if($post->user->image)
                        <img class="w-14 h-14 rounded-full" src="{{ $post->user->imageUrl() }}"
                             alt="{{ $post->user->name }}">
                    @else
                        <img src="/dummy_avatar.png" class="w-14 h-14 rounded-full" alt="Dummy avatar">
                    @endif
                    <div class="mt-2">
                        <div class="flex gap-2">
                            <h3>
                                {{ $post->user->name }}
                            </h3>
                            &middot;
                            <a href="#" class="text-emerald-600 dark:text-emerald-300">
                                Follow
                            </a>
                        </div>
                        <div class="flex gap-2 text-gray-400 dark:text-gray-500 text-sm">
                            {{ $post->readTime() }} min read
                            &middot;
                            {{ $post->created_at->format('M d, Y') }}
                        </div>
                    </div>
                </div>
                <!-- User Avatar -->

                <x-likes-display/>

                <!-- Content Section -->
                <div class="mt-8">
                    <img src="{{ $post->imageUrl() }}" alt="{{ $post->title }}" class="w-full">
                    <div class="mt-4">
                        {{ $post->content }}
                    </div>

                    <div class="mt-8">
                        <span class="px-4 py-2 bg-gray-300 dark:bg-gray-600 rounded-full">
                            {{ $post->category->name }}
                        </span>
                    </div>

                </div>
                <!-- Content Section -->

                <x-likes-display/>

            </div>
        </div>
    </div>
</x-app-layout>
