@props([
    'field',
    'title',
    'type' => 'text',
    'defaultValue' => null,
    'placeholder' => '',
    'isMandatory' => false,
])

<div class="space-y-2">
    <label for="{{ $field }}" class="block text-sm font-medium text-gray-900">
        {{ $title }} @if($isMandatory) <span class="text-destructive">*</span> @endif
    </label>

    <input
        type="{{ $type }}"
        id="{{ $field }}"
        name="{{ $field }}"
        value="{{ old($field, $defaultValue) }}"
        placeholder="{{ $placeholder }}"
        @if($isMandatory) required @endif
        class="bg-inherit border border-input shadow-2xs text-gray-900 text-sm rounded-lg focus:ring-ring/50 focus:border-ring block w-full p-2.5"
        autocomplete="{{ $type === 'password' ? 'new-password' : 'on' }}"
    />
</div>
