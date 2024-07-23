@props([
    'end' => false
])

@php
if($end){
    $thClass = 'justify-end';
}
else{
    $thClass = '';
}
@endphp

@if(!empty($errors->all()))
<div class="border border-red-200 rounded px-4 py-5 bg-red-50/75">
    <h6 class="font-semibold text-start text-sm text-red-800 mb-2">{{ 'Invalid Data' }}</h6>
    <ul class="flex flex-col gap-1">
        @foreach($errors->all() as $err)
            <li class="text-sm text-red-600 font-open-sans flex items-center gap-1 {{ $thClass }}">
                <x-base::icons.alert/>
                {{ $err }}
            </li>
        @endforeach
    </ul>
</div>
@endif