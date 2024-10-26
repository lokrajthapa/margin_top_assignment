<x-app-layout>
    <div class="max-w-lg mx-auto bg-white p-10 rounded-lg shadow-md">
        <h2 class="text-3xl font-semibold mb-8 text-gray-900 text-center">Add Attendee</h2>

        <form action="{{ route('attendees.store') }}" method="POST" class="space-y-6">
            @csrf

            <!-- Name Field -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter attendee's name"
                    class="mt-2 w-full p-3 border @error('name') border-red-500 @else border-gray-300 @enderror rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition">
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email Field -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter attendee's email"
                    class="mt-2 w-full p-3 border @error('email') border-red-500 @else border-gray-300 @enderror rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition">
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Event Select Field -->
            <div>
                <label for="event_id" class="block text-sm font-medium text-gray-700">Event</label>
                <select id="event_id" name="event_id"
                    class="mt-2 w-full p-3 border @error('event_id') border-red-500 @else border-gray-300 @enderror rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition">
                    <option value="">Select event</option>
                    @foreach ($events as $event)
                        <option value="{{ $event->id }}" {{ old('event_id') == $event->id ? 'selected' : '' }}>
                            {{ $event->title }}
                        </option>
                    @endforeach
                </select>
                @error('event_id')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center">
                <button type="submit" class="w-full sm:w-auto bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-md transition duration-200 shadow-md focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                    Add Attendee
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
