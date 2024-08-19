<form {{ $attributes->merge([
    'method' => 'POST',
    'spellcheck' => 'false',
    'autocomplete' => 'off',
    'enctype' => 'multipart/form-data'
]) }}>
    @csrf
    {{ $slot }}
</form>