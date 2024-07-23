@props([
    'theme' => 'primary',
    'block' => false,
    'rounded' => true,
    'fonts' => true
])

@php
switch ($theme) {
    case 'primary':
        $thClass = 'from-amber-950 via-amber-700 to-amber-950 hover:from-amber-800 hover:via-amber-900 hover:to-amber-800 text-slate-200';
        break;
    case 'secondary':
        $thClass = 'from-slate-950 via-slate-700 to-slate-950 hover:from-slate-800 hover:via-slate-900 hover:to-slate-800 text-slate-200';
        break;
    case 'success':
        $thClass = 'from-green-950 via-green-700 to-green-950 hover:from-green-800 hover:via-green-900 hover:to-green-800 text-slate-200';
        break;
    case 'danger':
        $thClass = 'from-red-950 via-red-700 to-red-950 hover:from-red-800 hover:via-red-900 hover:to-red-800 text-slate-200';
        break;
    case 'light':
        $thClass = 'from-slate-300 via-slate-200 to-slate-300 hover:from-slate-200 hover:via-slate-300 hover:to-slate-300 text-slate-800 border border-slate-300';
        break;
    case 'shady':
        $thClass = 'from-slate-50 via-slate-100 to-slate-100 hover:from-slate-200 hover:via-slate-100 hover:to-slate-200 text-slate-800 border border-slate-400';
        break;
    case 'blank':
        $thClass = '';
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
    $thClass = $thClass . ' font-poppins font-medium';
}
@endphp

<button {{
    $attributes->merge(['class' => $attributes->prepends('outline-none active:outline-none ring-0 active:outline-none bg-gradient-to-r tracking-wider px-5 py-2 transition-all ' . $thClass)])->merge([
        'type' => 'button'
    ])
}}>
    {{ $slot }}
</button>