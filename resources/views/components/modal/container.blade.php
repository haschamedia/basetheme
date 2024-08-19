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
    <div class="flex items-center justify-center shadow-lg max-w-7xl mx-auto h-screen z-80">
        <div class="rounded-xl transform my-auto w-[90%] md:w-[75%] lg:w-[60%] z-80 {{ $bg ?? 'bg-slate-300 text-slate-800' }}">
            <div class="shadow-lg relative">
                <x-base::modal.close/>
                <div class="px-4 lg:px-8 py-5 my-5 w-full max-h-[80vh] overflow-y-auto">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</div>
