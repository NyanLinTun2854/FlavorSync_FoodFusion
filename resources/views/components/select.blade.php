@props([
    'field',
    'label',
    'options' => [],
    'placeholder' => 'Select an option',
    'selected' => null,
    'width' => 'w-full',
    'isMandatory' => false,
    'isPlaceholderDisabled' => true
])

<div class="w-full">
    <label for="{{ $field }}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        {{ $label }}
        @if($isMandatory) <span class="text-destructive">*</span> @endif
    </label>
    <select id="{{ $field }}" name="{{ $field }}"
        class="bg-inherit border border-input shadow-2xs text-gray-900 text-sm rounded-lg focus:ring-ring/50 focus:border-ring block {{ $width }} py-2.5 px-1"
        aria-label="{{ $label }}">
        
        <option value="" @if($isPlaceholderDisabled) disabled @endif {{ is_null($selected) ? 'selected' : '' }}>
            {{ $placeholder }}
        </option>

        @foreach ($options as $value => $text)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }}>
                {{ $text }}
            </option>
        @endforeach
    </select>
</div>
