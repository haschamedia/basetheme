<li {{
    $attributes->merge(['class' => $attributes->prepends('grid grid-cols-12')])
}}>
    <span {{
        $label->attributes->merge(['class' => $attributes->prepends('col-span-4 lg:col-span-4')])
    }}>{{ $label }}</span>
    <div {{
        $details->attributes->merge(['class' => $attributes->prepends('col-span-8 lg:col-span-8')])
    }}>{{ $details }}</div>
</li>