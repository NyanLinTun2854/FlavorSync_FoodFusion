@props([
    'field',
    'label' => null,
    'options' => [],   // array of value => text
])

<div class="w-full" id="diet-preferences-wrapper">
    <p class="mb-4 text-sm text-muted-foreground">
        {{ $label }}
    </p>

    <div class="flex flex-wrap gap-2">
        @foreach ($options as $value => $text)
            <label
                class="diet-label inline-flex items-center px-2 py-0.5 border rounded-lg cursor-pointer text-xs font-medium">
                <input type="checkbox" value="{{ $value }}" class="diet-checkbox hidden">
                {{ $text }}
            </label>
        @endforeach
    </div>

    <!-- hidden input to track selected values -->
    <input type="hidden" name="{{ $field }}" id="{{ $field }}" value="[]">
</div>