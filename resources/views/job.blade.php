<x-layout>
    <x-slot:heading>
        Job description
    </x-slot:heading>

    <h1 class="font-bold text-xl mb-5 text-blue-500">{{ $job['title'] }} by {{ $job->employer->name }}</h1>
    <p class="mb-5">
        <strong>Salary for this position: </strong> {{ $job['salary'] }} per year.
    </p>

    <a href="/jobs/" class="hover:underline text-blue-500">
        <p>Back to all jobs</p>
    </a>
</x-layout>
