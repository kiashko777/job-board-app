<x-layout>
    <x-slot:heading>
        Job description
    </x-slot:heading>

    <h1 class="font-bold text-xl mb-5 text-gray-100">{{ $job->title }}</h1>
    <p class="text-appwrite-pink mb-3">{{ $job->employer->name }}</p>
    <p class="mb-5 text-gray-400">
        <strong class="text-gray-200">Salary for this position:</strong> {{ $job->salary }} per year.
    </p>

    <div class="mt-8 flex gap-4">
        @can('edit', $job)
            <a href="/jobs/{{ $job->id }}/edit"
               class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-lg shadow-sm text-white bg-appwrite-pink hover:bg-appwrite-pink-hover transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-appwrite-pink">Edit</a>

            <form method="POST" action="/jobs/{{ $job->id }}"
                  onsubmit="return confirm('Are you sure you want to delete this job?');">
                @csrf
                @method('DELETE')
                <button type="submit"
                        class="inline-flex items-center px-4 py-2 border border-gray-700 text-sm font-medium rounded-lg text-gray-300 bg-appwrite-dark hover:bg-gray-800 transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-700">
                    Delete
                </button>
            </form>
        @endcan
    </div>

    <p class="mt-8">
        <a href="/jobs/" class="hover:text-appwrite-pink text-gray-400 transition-colors">
            ← Back to all jobs
        </a>
    </p>
</x-layout>
