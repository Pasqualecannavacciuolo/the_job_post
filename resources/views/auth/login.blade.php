<x-layout>
    <div class="border rounded-md bg-zinc-50 lg:p-5 mt-48 lg:mt-32">
        <!-- Form -->
        <div class="lg:w-[500px] flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-lg">
                <img class="mx-auto h-10 w-auto" src="/images/logo.svg" alt="The Job Post">
                <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Log in</h2>
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-xl">
                <form class="space-y-6" action="/login" method="POST">
                    @csrf
                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email
                            address</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="email" required
                                class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6">
                            <x-forms.error name="email" />
                        </div>
                    </div>
                    <!-- Password -->
                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password"
                                class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                        </div>
                        <div class="mt-2">
                            <input id="password" name="password" type="password" autocomplete="current-password"
                                required
                                class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6">
                            <x-forms.error name="password" />
                        </div>
                    </div>

                    <div>
                        <x-buttons.form-button type="submit">Log in</x-buttons.form-button>

                    </div>
                </form>


            </div>
        </div>

    </div>
</x-layout>
