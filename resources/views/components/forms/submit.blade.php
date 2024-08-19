<button {{
    $attributes->merge(['class' => $attributes->prepends('inline-block bg-gradient-to-r from-amber-800 via-amber-700 to-amber-800 hover:from-amber-700 hover:via-amber-800 hover:to-amber-700 px-5 py-2 text-slate-300 font-lato font-semibold rounded transition-all uppercase tracking-wide')])->merge([
        'type' => 'submit'
    ])
}}>
    {{ $slot }}
</button>