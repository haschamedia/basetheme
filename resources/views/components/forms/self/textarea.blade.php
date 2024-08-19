@props([
    'labelText',
    'textarea' => ''
])
<label {{
    $attributes->merge(['class' => $attributes->prepends('border border-slate-400 bg-slate-100/25 px-3 py-1 rounded flex flex-col gap-1')])->merge([
        'for' => ''
    ])
}}>
    <span class="block font-open-sans text-xs text-secondary/75 tracking-wide mb-1">{{ $labelText }}</span>
    <textarea {{
        $textarea->attributes->merge(['class' => $attributes->prepends('w-full border-0 focus:border-0 p-0 ring-0 focus:ring-0 outline-none focus:outline-none bg-transparent transition-all text-lg text-secondary/75 focus:text-secondary placeholder:text-basic/75')])
        ->merge([
            'type' => 'text',
            'name' => '',
            'id' => '',
            'rows' => '4',
        ])
    }}>{{ $textarea }}</textarea>
    {{ $slot }}
</label>