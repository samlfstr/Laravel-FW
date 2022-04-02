<x-layout>
    <x-slot name="header">
        @include('_posts-header')
        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            <x-example :payement="$payement"/>
        </main>
    </x-slot>
</x-layout>
