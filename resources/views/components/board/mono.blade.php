@props([
    'theme' => 'default'
])

@php

$th = "";
switch ($theme){
    case 'primary':
        $th = " bg-amber-950 text-slate-300";
        break;
    case 'teal':
        $th = " bg-teal-950 text-slate-300";
        break;
    case 'cyan':
        $th = " bg-cyan-950 text-slate-300";
        break;
    case 'green':
        $th = " bg-green-950 text-slate-300";
        break;
    case 'light':
        $th = " bg-slate-400 text-slate-800";
        break;
    case 'mono':
        $th = " bg-slate-800 text-slate-200";
        break;
    default:
        $th = " bg-slate-950/50 text-slate-400";
        break;
}

@endphp

<ul {{
    $attributes->merge(['class' => $attributes->prepends('flex flex-col gap-2 font-mono text-sm px-3 py-4 rounded' . $th)])
}}>{{ $slot }}</ul>