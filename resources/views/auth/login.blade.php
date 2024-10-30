<x-layout>
    <div class="mt-48 border rounded-md bg-zinc-50 p-4 lg:p-5">
        <div class="lg:w-[500px] flex flex-col justify-center mx-auto px-6 py-12 lg:px-8">
            <!-- Header -->
            <div class="sm:mx-auto sm:w-full sm:max-w-lg">
                <img class="mx-auto h-10 w-auto" src="/images/logo.svg" alt="The Job Post">
                <h2 class="text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Log in</h2>
            </div>

            @error('attempt')
                <div role="alert" class="w-72 lg:w-96 mt-5 mx-auto">
                    <div role="alert" class="mt-3 relative flex w-full p-3 text-sm text-white bg-red-500 rounded-md"
                        id="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
                        </svg>

                        {{ $message }}
                        <button onclick="closeAlert()"
                            class="flex items-center justify-center transition-all px-2 h-8 rounded-md bg-white text-black absolute top-1.5 right-1.5"
                            type="button">
                            Close
                        </button>
                    </div>
                </div>
            @enderror

            <div class="sm:mx-auto sm:w-full sm:max-w-xl flex flex-col items-center">
                <!-- Form -->
                <form class="w-72 lg:w-96 space-y-6" action="/login" method="POST">
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

    <!-- Script per permettere la chiusura dell'alert -->
    <script>
        function closeAlert() {
            const alertElement = document.getElementById('alert');
            alertElement.style.display = 'none'; // Hides the alert
        }
    </script>
</x-layout>
