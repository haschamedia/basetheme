@props([
    'theme' => 'default'
])

@php
switch ($theme) {
    case 'dark':
        $styles = " border-slate-700 bg-zinc-900 text-zinc-400";
        break;
    case 'warning':
        $styles = " border-amber-700 bg-amber-800 text-slate-300";
        break;
    default:
        $styles = " border-zinc-600 bg-slate-200/75 text-slate-800";
        break;
}
@endphp

<div {{
    $attributes->merge(['class' => $attributes->prepends('px-3 py-4 rounded-e-md shadow border-s-8 text-[0.9em]' . $styles)])
}}>{{ $slot }}</div>