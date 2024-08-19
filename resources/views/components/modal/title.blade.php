@props([
    'margin' => true
])

@php
if($margin){
    $thClass = "mb-8";
}
else{
    $thClass = "";
}
@endphp

<div {{
    $attributes->merge(['class' => $attributes->prepends('font-semibold font-sub-title ' . $thClass)])
}}>
    {{ $slot }}
</div>