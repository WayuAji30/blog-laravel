<x-app-layout title="More Blogs - QuickNews" description="{{ __('home.description') }}">
    <div class="w-full grid grid-cols-4 gap-10">
        <div class="md:col-span-3 col-span-4 lg:order-1 order-2">
            <livewire:post-list />
        </div>
        <div id="side-bar"
            class="border-t border-t-gray-100 md:border-t-none lg:order-2 order-1 col-span-4 md:col-span-1 px-3 md:px-6 space-y-10 py-6 pt-10 md:border-l border-gray-100 lg:h-screen h-fit lg:sticky static top-0">
            @include('posts.partials.search-box')

            @include('posts.partials.categories-box')
        </div>
    </div>
</x-app-layout>