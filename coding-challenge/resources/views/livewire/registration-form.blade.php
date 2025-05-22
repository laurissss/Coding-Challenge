<div>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-800">Registrieren</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form wire:submit="save" class="space-y-6" >
                <div>
                    <label class="block text-sm font-medium text-gray-800">Name:</label>
                    <div class="mt-2">
                    <input type="text" wire:model.blur="name" required class="block w-full rounded-md px-3 py-1.5 text-base  outline-1 -outline-offset-1 outline-gray-300  focus:outline-green-600 focus:outline-2 sm:text-sm">
                    </div>
                </div>

                <div>
                    <label class="block text-sm/6 font-medium text-gray-800">Email:</label>
                    <div class="mt-2">
                    <input type="email" wire:model.blur="email" required class="block w-full rounded-md px-3 py-1.5 text-base  outline-1  outline-gray-300 placeholder:text-gray-400 focus:outline-2  focus:outline-green-600 sm:text-sm/6">
                    </div>
                    <div>
                        @error('email') <span class="error text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm/6 font-medium text-gray-800">Passwort:</label>
                    <div class="mt-2">
                    <input type="password" wire:model.blur="password" required class="block w-full rounded-md px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:outline-green-600 sm:text-sm/6">
                    </div>
                    <p class="text-gray-400 text-sm">Anforderungen: 8 Zeichen lang, klein und groß Buchstaben, mindestens eine Zahl und mindestend ein Symbol </p>
                    <div>
                        @error('password') <span class="error text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm/6 font-medium text-gray-800">Passwort wiederholen:</label>
                    <div class="mt-2">
                    <input type="password" wire:model.blur="repeat_password" required class="block w-full rounded-md px-3 py-1.5 text-base outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:outline-green-600 sm:text-sm/6">
                    </div>
                    <div>
                        @error('repeat_password') <span class="error text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-green-600 px-3 py-1.5 text-sm font-semibold text-white shadow-xs hover:bg-green-700 focus-visible:outline-2">Registrieren</button>
                </div>
            </form>

        </div>
    </div>
</div>

