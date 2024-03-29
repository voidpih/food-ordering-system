<form wire:submit="signIn">
    <div class="w-full py-1">
        <div class="flex flex-col gap-4">
            <div class="grid space-y-2">
                <x-label for="email">Email address</x-label>
                <x-input type="email" placeholder="example@todak.com" wire:model="email" />
                @error('email')
                    <x-form-message>{{ $message }}</x-form-message>
                @enderror
            </div>
            <div class="grid space-y-2">
                <x-label for="email">Password</x-label>
                <x-input type="password" placeholder="********" wire:model="password" />
                @error('password')
                    <x-form-message>{{ $message }}</x-form-message>
                @enderror
            </div>
            <div class="mt-4 grid">
                <x-button type="submit">Sign in</x-button>
            </div>
        </div>
    </div>
</form>
