<div
x-data="{
    showModal: @entangle($attributes->wire('model'))
}"
x-show="showModal"
x-cloak
    x-transition.opacity
x-on:keydown.escape.window="showModal = false"
class="fixed inset-0 z-80">
    <div x-show="showModal" class="fixed inset-0 transform z-80" wire:click="closeModal">
        <div class="absolute inset-0 bg-slate-800 opacity-75"></div>
    </div>
    <div class="max-w-7xl mx-auto h-screen flex flex-col z-80">
        <div class="z-80 rounded-e-xl my-[30%] lg:my-[10%] w-[90%] lg:w-[80%] max-h-[70%] md:max-h-[80%] lg:max-h-[80%] border-s-4 border-cyan-800 {{ $bg ?? 'bg-slate-300 text-slate-800' }} shadow-lg relative">
            @if($heading)
            <div class="absolute left-3 -translate-y-4 min-w-[30%] max-w-[70%] md:max-w-[70%] bg-amber-900 text-amber-100 px-3 md:px-5 py-2 md:py-3 rounded shadow-lg">
                <h3 class="font-semibold font-poppins text-lg tracking-wide leading-4">
                    {{ $heading }}
                </h3>
                @if($description)<span class="text-sm text-amber-500">{{ $description }}</span>@endif
            </div>
            @endif
            <x-base::modal.close/>
            <div class="w-full max-h-[90vh] overflow-y-auto px-4 lg:px-8 py-8 my-12 shadow-inner">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>