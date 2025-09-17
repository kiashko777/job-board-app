<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <div class="space-y-4">
        @foreach($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-300 rounded-lg">
                <div class="font-bold text-blue-600 mb-5">{{ $job->employer->name }}</div>
                <strong class="font-bold text-blue-500">{{ $job ['title'] }}: </strong> Pays {{ $job ['salary'] }} per
                year.
            </a>
        @endforeach
        {{ $jobs->links() }}
    </div>
</x-layout>
