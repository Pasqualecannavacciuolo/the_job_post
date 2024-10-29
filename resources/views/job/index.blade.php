<x-layout>
    <div class="flex flex-col gap-5 p-4 lg:p-7">
        <h1 class="p-1 text-xl font-bold">Naviga tra le offerte</h1>
        <div class="flex flex-col gap-5">
            <!-- JOB OFFER -->
            @foreach ($jobs as $job)
                <div class="flex flex-col w-full bg-zinc-50 rounded-md shadow-md">
                    <div class="flex flex-row p-4 justify-between">
                        <div class="flex flex-col gap-1">
                            <p class="text-xs text-zinc-500">{{ $job->business->name }}</p>
                            <h1 class="font-semibold">{{ $job->title }}</h1>
                        </div>
                        <div>
                            <x-badges.badge>{{ $job->status }}</x-badges.badge>
                        </div>
                    </div>
                    <div class="p-4">
                        <p>
                            {{ $job->description }}
                        </p>
                    </div>
                    <div class="flex flex-row p-4 justify-between">
                        <div class="flex flex-col gap-1">
                            <p class="text-md">{{ $job->salary }}</p>
                        </div>
                        <div>
                            <x-buttons.default-button>Scopri</x-buttons.default-button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
