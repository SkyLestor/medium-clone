<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="flex">
                    <div class="flex-1">
                        <div>
                            <h1 class="text-5xl dark:text-white">
                                {{ $user->name }}
                            </h1>
                        </div>
                        <div class="mt-4 mr-10">
                            @forelse($posts as $post)
                                <x-post-item :post="$post"></x-post-item>
                            @empty
                                <div class="py-16 text-center dark:text-gray-300">
                                    No posts were found
                                </div>
                            @endforelse
                        </div>
                    </div>

                    @if (auth()->user() && auth()->user()->id !== $user->id)
                        <x-follow-ctr :user="$user">
                            <x-user-avatar :user="$user" size="w-24 h-24"/>
                            <h3 class="dark:text-gray-300">
                                {{ $user->name }}
                            </h3>
                            <p class="text-gray-500">
                                <span x-text="followersCount"></span> followers
                            </p>
                            <p>
                                {{ $user->bio }}
                            </p>
                            <div class="mt-4">
                                <button @click="follow()" class="rounded-full px-4 py-2"
                                        x-text="following ? 'Unfollow' : 'Follow' "
                                        :class="following ? 'bg-red-600' :'bg-emerald-600'">
                                </button>
                            </div>
                        </x-follow-ctr>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
