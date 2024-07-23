@props([
    'theme' => 'default'
])

@php
switch ($theme) {
    case 'primary':
        $styles = " bg-primary text-secondary";
        break;
    default:
        $styles = " bg-slate-700 text-slate-300";
        break;
}
@endphp

<span {{
    $attributes->merge(['class' => $attributes->prepends('inline-block px-2 py-0.5 rounded' . $styles)])
}}>{{ $slot }}</span>