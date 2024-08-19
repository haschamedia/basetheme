<button type="button" wire:click="closeModal" {{
    $attributes->merge(['class' => $attributes->prepends('absolute select-none transition rounded-full top-2 right-5')])
}}><x-base::icons.cancel class="text-xl"/></button>