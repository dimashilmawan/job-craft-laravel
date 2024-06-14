@props(['tag', 'size' => 'base'])
@php
  $classes = 'rounded-md font-semibold transition-colors hover:bg-white';

  if ($size === 'base') {
      $classes .= ' px-5 py-1.5 text-sm bg-slate-300/75';
  }
  if ($size === 'small') {
      $classes .= ' px-2 py-1 text-xs bg-slate-300/50';
  }

@endphp

<a class="{{ $classes }}" href="tags/{{ strtolower($tag->name) }}">{{ $tag->name }}</a>
