@props(['width' => '90', 'employer'])

<img class="aspect-square h-auto rounded-lg object-cover" src="{{ asset($employer->logo) }}" alt="employer logo"
  width="{{ $width }}">
{{-- <img class="rounded-lg" class="h-auto" src="{{ $employer->logo }}" alt="employer logo" :width="$width"> --}}
