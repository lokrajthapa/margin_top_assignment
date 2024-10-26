<x-app-layout>
    <div class="max-w-lg mx-auto bg-white p-10 rounded-lg shadow-md">
        <h2 class="text-3xl font-semibold mb-8 text-gray-900 text-center">Create Category</h2>

        <form action="{{ route('categories.store') }}" method="POST" class="space-y-6">
            @csrf

            <!-- Name Field -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter category name"
                    class="mt-2 w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition">
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                  @enderror
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center">
                <button type="submit" class="w-full sm:w-auto bg-blue-600 hover:bg-blue-700 text-black font-semibold py-3 px-6 rounded-md transition duration-200 shadow-md focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                    Add Category
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
