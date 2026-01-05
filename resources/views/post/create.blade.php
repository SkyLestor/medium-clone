<x-app-layout>
    <div class="py-4">
        <div class="max-w-5xl mx-auto sm:px-4 lg:px-8">
            <div class="bg-gray-200 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <form action="{{ route('post.store')  }}" method="post">

                    <!-- Image -->
                    <div>
                        <x-input-label for="image" :value="__('Image')"/>
                        <input
                            class="mt-2 cursor-pointer bg-neutral-secondary-medium border text-heading
                            text-sm rounded-md focus:ring-brand focus:border-brand block border-1 shadow-xs placeholder:text-body
                            border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500
                            dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600"
                            id="image" type="file">
                        <x-input-error :messages="$errors->get('content')" class="mt-2"/>
                    </div>

                    <!-- Title -->
                    <div class="mt-4">
                        <x-input-label for="title" :value="__('Title')"/>
                        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"
                                      :value="old('title')" required autofocus/>
                        <x-input-error :messages="$errors->get('title')" class="mt-2"/>
                    </div>

                    <!-- Content -->
                    <div class="mt-4">
                        <x-input-label for="content" :value="__('Content')"/>
                        <x-input-textarea -input id="content" class="block mt-1 w-full" name="content"
                                          :value="old('content')" required/>
                        <x-input-error :messages="$errors->get('content')" class="mt-2"/>
                    </div>

                    <x-primary-button class="mt-4">
                        Submit
                    </x-primary-button>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>
