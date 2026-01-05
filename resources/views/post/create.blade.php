<x-app-layout>
    <div class="py-4">
        <div class="max-w-5xl mx-auto sm:px-4 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-4 p-8">
                <form action="{{ route('post.store')  }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- Image -->
                    <div>
                        <x-input-label for="image" :value="__('Image')"/>
                        <input
                            class="mt-2 cursor-pointer bg-neutral-secondary-medium border text-heading
                            text-lg rounded-md focus:ring-brand focus:border-brand block border-1 shadow-xs placeholder:text-body
                            border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500
                            dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 w-full
                             file:bg-gray-300 dark:file:bg-gray-100 file:rounded-l-md file:border-0"
                            id="image" type="file" name="image">
                        <x-input-error :messages="$errors->get('image')" class="mt-2"/>
                    </div>

                    <!-- Title -->
                    <div class="mt-4">
                        <x-input-label for="title" :value="__('Title')"/>
                        <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"
                                      :value="old('title')" autofocus/>
                        <x-input-error :messages="$errors->get('title')" class="mt-2"/>
                    </div>

                    <!-- Category -->
                    <div class="mt-4">
                        <x-input-label for="category_id" :value="__('Category')"/>
                        <select id="category_id" name="category_id"
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500
                                dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full">
                            <option value="">Select category id</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('category_id')" class="mt-2"/>
                    </div>

                    <!-- Content -->
                    <div class="mt-4">
                        <x-input-label for="content" :value="__('Content')"/>
                        <x-input-textarea -input id="content" class="block mt-1 w-full" name="content"
                        >{{ old('content') }}</x-input-textarea>
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
