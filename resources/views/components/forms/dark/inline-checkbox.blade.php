@props([
    'labelText',
    'input' => '',
    'isDisabled' => false,
    'isChecked' => false
])
<label {{
    $attributes->merge(['class' => $attributes->prepends('flex flex-2 gap-1 items-center cursor-pointer')])
    ->merge([
        'for' => ''
    ])
}}>
    <input type="checkbox" {{
        $input->attributes->merge(['class' => $attributes->prepends('appearance-none checked:text-amber-800 focus:text-amber-800 border-0 border-slate-600 active:border-slate-600 outline-none active:outline-none focus:outline-none ring-0 active:ring-0 focus:ring-0 bg-slate-400 active:bg-slate-400 focus:bg-slate-400 rounded')])
        ->merge([
            'name' => '',
            'id' => '',
            'disabled' => $isDisabled
        ])
    }} @if($isChecked) checked @endif>
    <span>{{ $labelText }}</span>
</label>