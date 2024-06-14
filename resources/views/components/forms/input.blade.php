@props(['label' => '', 'name'])

@php
  $defaults = [
      'type' => 'text',
      'id' => $name,
      'name' => $name,
      'class' => 'rounded-xl bg-slate-200/85 border border-white/10 px-4 py-2 w-full',
      'value' => old($name),
  ];
@endphp

<x-forms.field :$label :$name>
  <input {{ $attributes($defaults) }}>
</x-forms.field>
