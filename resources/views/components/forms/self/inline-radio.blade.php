@props([
    'labelText',
    'input' => '',
    'isDisabled' => false
])
<label x-data="{ isChecked: false }" {{
    $attributes->merge(['class' => $attributes->prepends('flex flex-wrap items-center gap-1 cursor-pointer')])
    ->merge([
        'for' => ''
    ])
}}>
    <input type="radio" {{
        $input->attributes->merge(['class' => $attributes->prepends('appearance-none checked:text-primary focus:text-primary border-0 border-slate-600 active:border-slate-600 outline-none active:outline-none focus:outline-none ring-0 active:ring-0 focus:ring-0 bg-slate-400 active:bg-slate-400 focus:bg-slate-400 rounded')])
        ->merge([
            'name' => '',
            'id' => '',
            'disabled' => $isDisabled
        ])
    }}>
    <span class="text-slate-800">{{ $labelText }}</span>
</label>