@props(['name', 'type' => 'text'])

<x-form.field>
    <x-form.label name="{{ $name }}"/>
    <input type="{{ $type }}" value="{{ old($name) }}" name="{{ $name }}" id="{{ $name }}" required class="border border-gray-400 p-2 w-full">
    <x-form.error name="{{ $name }}"/>
</x-form.field>
