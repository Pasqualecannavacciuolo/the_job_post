<x-layout>
    <div class="border rounded-md bg-zinc-50 lg:p-5 mt-11">
        <div class="lg:w-[900px] flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-lg">
                <h2 class="text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Modifica offerta di
                    lavoro</h2>
            </div>

            <div class=" flex flex-col items-center">
                <!-- Form -->
                <form class="space-y-6 w-full" action="/jobs/{{ $job->id }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <!-- Title -->
                    <div>
                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Titolo</label>
                        <div class="mt-2">
                            <input value="{{ $job->title }}" id="title" name="title" type="text" required
                                class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6">
                            <x-forms.error name="title" />
                        </div>
                    </div>
                    <!-- Description -->
                    <div>
                        <label for="editor"
                            class="block text-sm font-medium leading-6 text-gray-900">Descrizione</label>
                        <div class="mt-2">
                            <input id="x-description" type="hidden" name="description" value="{{ $job->description }}">
                            <trix-editor id="description" input="x-description"
                                class="trix-content block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300"
                                placeholder="Una descrizione dettagliata del lavoro..."></trix-editor>
                            <x-forms.error name="description" />
                        </div>
                    </div>
                    <!-- Salary -->
                    <div>
                        <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Stipendio lordo
                            annuo</label>
                        <div class="mt-2">
                            <input value="{{ $job->salary }}" id="salary" name="salary" type="text" required
                                class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6">
                            <x-forms.error name="salary" />
                        </div>
                    </div>

                    <div>
                        <x-buttons.form-button type="submit">Salva</x-buttons.form-button>
                    </div>
                </form>


            </div>
        </div>

    </div>
</x-layout>
