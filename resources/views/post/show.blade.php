<x-app-layout>
    <div class="py-4">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div
                class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg text-gray-900 dark:text-gray-100 mt-4 p-8">
                <h1 class=" text-4xl mb-4">{{ $post->title }}</h1>
                <!-- User Avatar -->
                <div class="flex gap-4">
                    <x-user-avatar :user="$post->user"/>
                    <div class="mt-2">
                        <x-follow-ctr :user="$post->user" class="flex gap-2 border-0">
                            <a href="{{ route('profile.show', $post->user) }}" class="hover:underline">
                                {{ $post->user->name }}
                            </a>
                            @if (auth()->user() && auth()->user()->id !== $post->user->id)
                                &middot;
                            <button @click="follow()" class="cursor-pointer hover:underline"
                                    x-text="following ? 'Unfollow' : 'Follow'"
                                    :class="following ? 'text-red-600 dark:text-red-400' : 'text-emerald-600 dark:text-emerald-300'">
                            </button>
                            @endif
                        </x-follow-ctr>
                        <div class="flex gap-2 text-gray-400 dark:text-gray-500 text-sm">
                            {{ $post->readTime() }} min read
                            &middot;
                            {{ $post->getCreatedAtFormatted() }}
                        </div>
                    </div>
                </div>
                <!-- User Avatar -->
                @if($post->user_id === Auth::id())
                    <div class="mt-4">
                        <x-primary-button href="{{ route('post.edit', $post->slug) }}">
                            Edit Post
                        </x-primary-button>

                        <form class="inline-block" action="{{ route('post.destroy', $post) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <x-danger-button>
                                Delete Post
                            </x-danger-button>
                        </form>

                    </div>
                @endif

                <x-likes-display :post="$post"/>

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

                <x-likes-display :post="$post"/>

            </div>
        </div>
    </div>
</x-app-layout>
