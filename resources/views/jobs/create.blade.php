<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <form method="POST" action="/jobs">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-800 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-100">Create a New Job</h2>
                <p class="mt-1 text-sm leading-6 text-gray-400">We just need a handful of details from you.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm font-medium leading-6 text-gray-200">Title</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-lg shadow-sm ring-1 ring-inset ring-gray-700 focus-within:ring-2 focus-within:ring-inset focus-within:ring-appwrite-pink sm:max-w-md bg-appwrite-dark">
                                <input type="text" name="title" id="title"
                                       class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-100 placeholder:text-gray-500 focus:ring-0 sm:text-sm sm:leading-6"
                                       placeholder="Shift Leader" required>
                            </div>
                            @error('title')
                            <div class="text-sm text-red-600 mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm font-medium leading-6 text-gray-200">Salary</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-lg shadow-sm ring-1 ring-inset ring-gray-700 focus-within:ring-2 focus-within:ring-inset focus-within:ring-appwrite-pink sm:max-w-md bg-appwrite-dark">
                                <input type="text" name="salary" id="salary"
                                       class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-100 placeholder:text-gray-500 focus:ring-0 sm:text-sm sm:leading-6"
                                       placeholder="$50,000 Per Year" required>
                            </div>
                            @error('salary')
                            <div class="text-sm text-red-600 mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                {{--                @if ($errors->any())--}}
                {{--                    <div class="mt-10">--}}
                {{--                        <div class="text-sm text-red-600">--}}
                {{--                            <ul>--}}
                {{--                                @foreach ($errors->all() as $error)--}}
                {{--                                    <li>{{ $error }}</li>--}}
                {{--                                @endforeach--}}
                {{--                            </ul>--}}
                {{--                            @endif--}}
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/jobs" class="text-sm font-semibold leading-6 text-gray-400 hover:text-gray-200 transition-colors">Cancel</a>
            <button type="submit"
                    class="rounded-lg bg-appwrite-pink px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-appwrite-pink-hover transition-colors focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-appwrite-pink">
                Save
            </button>
        </div>
    </form>
</x-layout>
