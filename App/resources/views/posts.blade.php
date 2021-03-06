<x-layout>
    <x-slot name="header">
        @include('_posts-header')
        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            <x-post-featured-card :post="$posts[0]" />
            <x-post-grid :posts="$posts"/>
        </main>
    </x-slot>
</x-layout>
