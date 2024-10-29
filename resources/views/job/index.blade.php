<x-layout>
    <div class="flex flex-col gap-5 p-4 lg:p-7">
        <h1 class="p-1 text-xl font-bold">Naviga tra le offerte</h1>

        <!-- Wrapper griglia -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5"> <!-- Griglia responsive -->
            <!-- JOB OFFER -->
            @foreach ($jobs as $job)
                <div class="flex flex-col bg-sky-50/10 rounded-md shadow-md min-h-[200px] max-w-[300px] w-full mx-auto">
                    <!-- Larghezza fissa per uniformità -->
                    <div class="flex flex-row p-4 justify-between">
                        <div class="flex flex-col gap-1">
                            <!-- BUSINESS IMAGE -->
                            <div class="w-10 h-auto">
                                {!! str_replace(['width="144px"', 'height="144px"'], ['width="100%"', 'height="100%"'], $job->business->image) !!}
                            </div>
                        </div>
                        <div>
                            <x-badges.badge>{{ $job->status }}</x-badges.badge>
                        </div>
                    </div>
                    <div class="flex flex-col p-4 flex-grow">
                        <!-- BUSINESS NAME -->
                        <p class="text-xs text-zinc-500">{{ $job->business->name }}</p>

                        <!-- JOB TITLE -->
                        <h1 class="font-semibold">{{ $job->title }}</h1>
                    </div>
                    <div class="flex flex-row p-4 justify-between">
                        <div class="flex flex-col gap-1">
                            <x-badges.info>{{ $job->salary }}</x-badges.info>
                        </div>
                        <div>
                            <x-navigation.link-btn href="/jobs/{{ $job->id }}">Scopri</x-navigation.link-btn>
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
