@props([
    "content" => null,
    "text" => "",
    "size",
])

@php
switch ($size ?? null){
    case 'xs':
        $style = 'h-3 w-3';
        $text = 'text-sm';
        break;
    case 'sm':
        $style = 'h-4 w-4';
        $text = 'text-sm';
        break;
    case 'md':
        $style = 'h-8 w-8';
        $text = 'text-md';
        break;
    case 'lg':
        $style = 'h-16 w-16';
        $text = 'text-lg';
        break;
    default:
        $style = 'h-5 w-5';
        $text = '';
        break;
}
@endphp

<div {{
    $attributes->merge(['class' => $attributes->prepends('inline-block animate-spin rounded-full border-4 border-solid border-current border-r-transparent align-[-0.125em] motion-reduce:animate-[spin_1.5s_linear_infinite]')])->merge([
        'role' => 'status',
        'class' => $style
    ])
}}>
    <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
    ></span>
</div>
<div class="inline-block empty:hidden {{ $text }}">
    {{ $content }}
</div>