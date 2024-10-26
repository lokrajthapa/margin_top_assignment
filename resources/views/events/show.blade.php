<x-app-layout>
    <div class="max-w-lg mx-auto bg-white p-10 rounded-lg shadow-md">
        <h2 class="text-3xl font-semibold mb-8 text-gray-900 text-center">Event Details</h2>

        <!-- Title Field -->
        <div class="mb-4">
            <h3 class="text-lg font-semibold text-gray-700">Title</h3>
            <p class="text-gray-900 mt-2">{{ $event->title }}</p>
        </div>

        <!-- Description Field -->
        <div class="mb-4">
            <h3 class="text-lg font-semibold text-gray-700">Description</h3>
            <p class="text-gray-900 mt-2">{{ $event->description }}</p>
        </div>

        <!-- Date Field -->
        <div class="mb-4">
            <h3 class="text-lg font-semibold text-gray-700">Date</h3>
            <p class="text-gray-900 mt-2">{{ $event->date_format  }}</p>
        </div>

        <!-- Location Field -->
        <div class="mb-4">
            <h3 class="text-lg font-semibold text-gray-700">Location</h3>
            <p class="text-gray-900 mt-2">{{ $event->location }}</p>
        </div>

        <!-- Category Field -->
        <div class="mb-4">
            <h3 class="text-lg font-semibold text-gray-700">Category</h3>
            <p class="text-gray-900 mt-2">{{ $event->category->name }}</p>
        </div>

        <!-- Back Button -->
        <div class="flex justify-center mt-6">
            <a href="{{ route('events.index') }}" class="w-full sm:w-auto bg-gray-600 hover:bg-gray-700 text-white font-semibold py-3 px-6 rounded-md transition duration-200 shadow-md focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-50">
                Back to Events
            </a>
        </div>
    </div>
</x-app-layout>
