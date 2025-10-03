@props([
    'field',
    'label' => null,
    'options' => [],   // array of value => text
])

@php
    $oldValues = old($field, []); // retrieve old input or empty array
    if (is_string($oldValues)) {
        $oldValues = json_decode($oldValues, true) ?? [];
    }
@endphp

<div class="w-full" id="diet-preferences-wrapper">
    <p class="mb-4 text-sm text-muted-foreground">
        {{ $label }}
    </p>

    <div class="flex flex-wrap gap-2">
        @foreach ($options as $value => $text)
            @php
                $isChecked = in_array($value, $oldValues);
            @endphp
            <label
                class="diet-label inline-flex items-center px-2 py-0.5 border rounded-lg cursor-pointer text-xs font-medium {{ $isChecked ? 'bg-primary text-white' : '' }}">
                <input type="checkbox" value="{{ $value }}" class="diet-checkbox hidden"
                       {{ $isChecked ? 'checked' : '' }}>
                {{ $text }}
            </label>
        @endforeach
    </div>

    <!-- hidden input to track selected values -->
    <input type="hidden" name="{{ $field }}" id="{{ $field }}"
           value="{{ old($field, '[]') }}">
</div>
