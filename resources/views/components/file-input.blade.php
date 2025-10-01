@props(['field', 'title', 'placeholder' => '', 'isMandatory' => false])

<div class="space-y-2">
    <label class="block text-sm font-medium text-gray-900" for="{{ $field }}">Upload {{ $title }} @if($isMandatory)
    <span class="text-destructive">*</span> @endif</label>
    <input
        class="block w-full text-sm text-gray-900 border shadow-2xs border-input rounded-lg cursor-pointer bg-inherit focus:outline-none p-2.5"
        id="{{ $field }}" name="{{ $field }}" type="file" placeholder="{{ $placeholder }}">
</div>