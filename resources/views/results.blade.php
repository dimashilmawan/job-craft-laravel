<x-layout>
  <h1>Result</h1>
  <ul class="mt-6 space-y-4">
    @foreach ($jobs as $job)
      <x-job-card-wide :job="$job" />
    @endforeach
  </ul>
</x-layout>
