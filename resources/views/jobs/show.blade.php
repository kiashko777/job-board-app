<x-layout>
    <x-slot:heading>
        Job description
    </x-slot:heading>

    <h1 class="font-bold text-xl mb-5 text-blue-500">{{ $job->title }} by {{ $job->employer->name }}</h1>
    <p class="mb-5">
        <strong>Salary for this position: </strong> {{ $job->salary }} per year.
    </p>

    <div class="mt-8 flex gap-4">
        <a href="/jobs/{{ $job->id }}/edit"
           class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Edit</a>

        <form method="POST" action="/jobs/{{ $job->id }}"
              onsubmit="return confirm('Are you sure you want to delete this job?');">
            @csrf
            @method('DELETE')
            <button type="submit"
                    class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                Delete
            </button>
        </form>
    </div>

    <p class="mt-8">
        <a href="/jobs/" class="hover:underline text-blue-500">
            <p>Back to all jobs</p>
        </a>
    </p>
</x-layout>
