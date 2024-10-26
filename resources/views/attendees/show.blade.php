<x-app-layout>
    <div class="max-w-lg mx-auto bg-white p-10 rounded-lg shadow-md">
        <h2 class="text-3xl font-semibold mb-8 text-gray-900 text-center">Attendee Details</h2>

        <!-- Name Field -->
        <div class="mb-4">
            <h3 class="text-lg font-semibold text-gray-700">Name</h3>
            <p class="text-gray-900 mt-2">{{ $attendee->name }}</p>
        </div>

        <!-- Email Field -->
        <div class="mb-4">
            <h3 class="text-lg font-semibold text-gray-700">Email</h3>
            <p class="text-gray-900 mt-2">{{ $attendee->email }}</p>
        </div>

        <!-- Event Field -->
        <div class="mb-4">
            <h3 class="text-lg font-semibold text-gray-700">Event</h3>
            <p class="text-gray-900 mt-2">{{ $attendee->event->title ?? 'N/A' }}</p>
        </div>

        <!-- Back Button -->
        <div class="flex justify-center mt-6">
            <a href="{{ route('attendees.index') }}" class="w-full sm:w-auto bg-gray-600 hover:bg-gray-700 text-white font-semibold py-3 px-6 rounded-md transition duration-200 shadow-md focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-50">
                Back to Attendees
            </a>
        </div>
    </div>
</x-app-layout>
