<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <div class="space-y-4">
        @foreach($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 bg-appwrite-dark border border-gray-800 rounded-lg hover:border-appwrite-pink transition-colors">
                <div class="font-bold text-appwrite-pink mb-2">{{ $job->employer->name }}</div>
                <div class="text-gray-100">
                    <strong class="font-bold">{{ $job ['title'] }}:</strong>
                    <span class="text-gray-400">Pays {{ $job ['salary'] }} per year.</span>
                </div>
            </a>
        @endforeach
        <div class="mt-6">
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
