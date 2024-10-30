<x-layout>
    <div class="flex flex-col gap-5 p-7 mt-3 lg:mt-0 lg:p-7">
        <div class="flex flex-col gap-3 mb-5">
            @can('edit', $job)
                <h3 class="text-md font-semibold">Azioni possibili</h3>
                <div>
                    <x-navigation.link-btn href="/jobs/{{ $job->id }}/edit">Modifica</x-navigation.link-btn>
                </div>
            @endcan
        </div>
        <!-- JOB OFFER -->
        <div class="flex flex-col gap-5">
            <div class="flex flex-col lg:flex-row mt-3 gap-7 lg:gap-32">
                <!-- Job Info -->
                <div class="flex flex-col gap-3 max-w-[950px] text-justify">
                    <h1 class="text-xl font-bold">{{ $job->title }}</h1>
                    <p>{!! $job->description !!}</p>
                </div>
                <!-- Business Info -->
                <div class="flex flex-col items-center gap-7 bg-zinc-100 p-11 rounded-md min-w-[250px] h-fit">
                    <div class="flex flex-col gap-1 items-center">
                        <!-- BUSINESS IMAGE -->
                        <div class="w-10 h-auto">
                            {!! str_replace(['width="144px"', 'height="144px"'], ['width="100%"', 'height="100%"'], $job->business->image) !!}
                        </div>
                        <h3>{{ $job->business->name }}</h3>
                    </div>
                    <!-- JOB OFFER INFO -->
                    <div class="flex flex-col items-start gap-1">
                        <div class="flex flex-row gap-5">
                            <img class="w-5 h-5" src="/images/ui/calendar.png" alt="calendar icon">
                            <p class="text-sm text-gray-500">{{ date('d-m-Y', strtotime($job->created_at)) }}</p>
                        </div>
                        <div class="flex flex-row gap-5">
                            <img class="w-5 h-5" src="/images/ui/position.png" alt="position icon">
                            <p class="text-sm">{{ $job->position }}</p>
                        </div>
                        <div class="flex flex-row gap-5">
                            <img class="w-5 h-5" src="/images/ui/money.png" alt="money icon">
                            <p class="text-sm font-light">{{ $job->salary }}</p>
                        </div>
                    </div>
                    <x-navigation.link-btn href="#">Invia la tua candidatura</x-navigation.link-btn>
                </div>
            </div>
        </div>
    </div>
</x-layout>
