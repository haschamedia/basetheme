<ul {{
    $attributes->merge(['class' => $attributes->prepends('flex flex-col gap-2 font-mono text-sm text-slate-400 bg-slate-950/50 px-3 py-4 rounded')])
}}>{{ $slot }}</ul>