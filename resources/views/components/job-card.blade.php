@props(['job' => $job])

<x-panel class="flex flex-col space-y-8 p-4 text-center">
  <p class="text-left">{{ $job->employer->name }}</p>
  <div class="font-semibold">
    <h3 class="transition-colors group-hover:text-blue-600"> <a href="{{ $job->url }}" target="_blank">
        {{ ucwords($job->title) }}
      </a></h3>
    <p>{{ $job->schedule }} - from {{ $job->salary }}</p>
  </div>
  <div class="flex items-center justify-between">
    <div class="flex gap-3">
      @foreach ($job->tags as $tag)
        <x-tag :tag="$tag" size="small" />
      @endforeach
    </div>
    <div class="h-12 w-12">
      <x-employer-logo :employer="$job->employer" width="48" />
    </div>
  </div>
</x-panel>
