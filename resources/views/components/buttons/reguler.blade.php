@props([
    'theme' => 'light',
    'block' => false,
    'rounded' => true,
    'fonts' => true
])

@php
switch ($theme) {
    case 'light':
        $thClass = 'bg-slate-700/25 hover:bg-slate-700';
        break;
    default:
        $thClass = '';
        break;
}

if($block){
    $thClass = $thClass . ' block';
}

if($rounded){
    $thClass = $thClass . ' rounded';
}

if($fonts){
    $thClass = $thClass . ' font-poppins font-medium tracking-wide';
}
@endphp

<button {{
    $attributes->merge(['class' => $attributes->prepends('outline-none active:outline-none focus:outline-none ring-0 active:ring-0 focus:ring-0 px-3 py-2 transition-all ' . $thClass)])->merge([
        'type' => 'button'
    ])
}}>
    {{ $slot }}
</button>