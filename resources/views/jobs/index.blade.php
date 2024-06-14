<x-layout>
  <div class="space-y-10 py-10">
    <section class="text-center">
      <h1 class="text-5xl font-bold">Let's find your next job</h1>
      <form class="mt-6" action="/search">
        <input class="bg-slate-200/85 w-full max-w-2xl rounded-lg px-5 py-3" name="q" type="text">
      </form>
    </section>
    <section>
      <x-section-heading>Top Job</x-section-heading>
      <ul class="mt-6 grid gap-6 lg:grid-cols-3">
        @foreach ($featuredJob as $job)
          <x-job-card :job="$job" />
        @endforeach
      </ul>
    </section>
    <section>
      <x-section-heading>Tags</x-section-heading>
      <ul class="mt-6 flex gap-3 lg:grid-cols-3">
        @foreach ($tags as $tag)
          <li>
            <x-tag :tag="$tag" />
          </li>
        @endforeach
      </ul>
    </section>
    <section>
      <x-section-heading>Recent Jobs</x-section-heading>
      <ul class="mt-6 space-y-4">
        @foreach ($jobs as $job)
          <x-job-card-wide :job="$job" />
        @endforeach
      </ul>
    </section>
  </div>
</x-layout>
