@props([
    'type' => 'text',
    'shadow' => true
])

@php
if($shadow){
    $shadowStyle = 'shadow';
}
else{
    $shadowStyle = 'shadow-none';
}
@endphp

<input spellcheck="false" autocomplete="off" {{
    $attributes->merge(['class' => $attributes->prepends('bg-transparent border border-slate-400/75 focus:border-slate-300 outline-none focus:outline-none ring-0 focus:ring-0 transition-all delay-150 font-open-sans text-base text-slate-400 focus:text-slate-200 rounded w-full placeholder:text-slate-300 placeholder:text-[0.8em] ' . $shadowStyle)])->merge([
        'type' => $type,
    ])
}}/>
{{ $slot }}