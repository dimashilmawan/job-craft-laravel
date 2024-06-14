@props(['job' => $job])
<x-panel class="flex h-28 items-center gap-x-6 p-3">
  <div class="h-auto w-[6rem]">
    <x-employer-logo :employer="$job->employer" width="96" />
  </div>
  <div class="flex h-full flex-1 flex-col">
    <p class="text-black/85 text-sm">{{ $job->employer->name }}</p>
    <h3 class="mt-1 text-lg font-semibold transition-colors group-hover:text-blue-600/95">
      <a href="{{ $job->url }}" target="_blank">
        {{ ucwords($job->title) }}
      </a>
    </h3>
    <p class="text-black/85 mt-auto text-sm">{{ $job->schedule }} - from {{ $job->salary }}</p>
  </div>
  <div class="h-full">
    <div class="flex gap-3">
      @foreach ($job->tags as $tag)
        <x-tag :tag="$tag" />
      @endforeach
    </div>
  </div>
</x-panel>
