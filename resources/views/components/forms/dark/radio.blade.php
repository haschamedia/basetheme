@props([
    'labelText',
    'input' => '',
    'isDisabled' => false
])
<label {{
    $attributes->merge(['class' => $attributes->prepends('flex flex-2 items-center border border-slate-300/25 px-3 py-2 rounded gap-1 cursor-pointer')])
    ->merge([
        'for' => ''
    ])
}}>
    <input type="radio" {{
        $input->attributes->merge(['class' => $attributes->prepends('appearance-none checked:text-amber-800 focus:text-amber-800 border-0 border-slate-600 active:border-slate-600 outline-none active:outline-none focus:outline-none ring-0 active:ring-0 focus:ring-0 bg-slate-400 active:bg-slate-400 focus:bg-slate-400 rounded')])
        ->merge([
            'name' => '',
            'id' => '',
            'disabled' => $isDisabled
        ])
    }}>
    <span>{{ $labelText }}</span>
</label>