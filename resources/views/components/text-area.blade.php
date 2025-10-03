@props([
    'field',
    'title',
    'defaultValue' => null,
    'placeholder' => '',
    'isMandatory' => false,
])

<div class="space-y-2">
    <label for="{{ $field }}" class="block text-sm font-medium text-gray-900 dark:text-white">
        {{ $title }}
        @if($isMandatory) <span class="text-destructive">*</span> @endif
    </label>
    <textarea
        id="{{ $field }}"
        rows="4"
        name="{{ $field }}"
        class="block p-2.5 w-full text-sm text-gray-900 bg-inherit rounded-lg border border-input shadow-2xs focus:ring-ring/50 focus:border-ring"
        @if($isMandatory) required @endif
        placeholder="{{ $placeholder ?? null }}"
    >{{ old($field, $defaultValue) }}</textarea>
</div>
