@props([
    'labelText',
    'input' => '',
    'isDisabled' => false
])
<label {{
    $attributes->merge(['class' => $attributes->prepends('border border-slate-400 bg-slate-100/25 px-3 py-1 rounded')])
    ->merge([
        'for' => ''
    ])
}}>
    <span class="block font-open-sans text-xs text-basic/75 tracking-wide mb-1">{{ $labelText }}</span>
    <input {{
        $input->attributes->merge(['class' => $attributes->prepends('w-full border-0 focus:border-0 p-0 ring-0 focus:ring-0 outline-none focus:outline-none bg-transparent transition-all text-lg text-basic focus:text-primary placeholder:text-basic/25 font-medium')])
        ->merge([
            'type' => 'text',
            'name' => '',
            'id' => '',
            'disabled' => $isDisabled
        ])
    }}>
    {{ $input }}
</label>