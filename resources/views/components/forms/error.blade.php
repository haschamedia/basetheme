@props([
    'message' => 'error data'
])
<span {{
    $attributes->merge(['class' => $attributes->prepends('text-xs text-red-600 font-open-sans block my-1')])
}}>{{ $message }}</span>