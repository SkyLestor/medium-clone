<div
    class="flex bg-white dark:bg-gray-800 rounded-lg mb-8 border border-gray-100 shadow-sm shadow-gray-400
    dark:border-gray-700 dark:shadow-gray-800">
    <div class="p-5 flex-1">
        <a href="{{ route('post.show', [
                'username' => $post->user->username,
                'post' => $post->slug
                ]) }}">
            <h5 class="mt-1 mb-2 text-2xl font-semibold tracking-tight text-heading dark:text-gray-200">
                {{ $post->title }}
            </h5>
        </a>
        <div class="text-body text-gray-700 dark:text-gray-400">
            {{ Str::words($post->content, 20) }}
        </div>
        <a href="{{ route('post.show', [
                'username' => $post->user->username,
                'post' => $post->slug
                ]) }}">
            {{ $post->getCreatedAtFormatted() }}
        </a>
    </div>
    <a href="{{ route('post.show', [
                'username' => $post->user->username,
                'post' => $post->slug
                ]) }}">
        <img class="w-48 h-full max-h-56 object-cover rounded-r-lg"
             src="{{ $post->imageUrl('preview') }}"
             alt=""/>
    </a>
</div>
