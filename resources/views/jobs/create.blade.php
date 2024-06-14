<x-layout>
  <h1>Create a job</h1>
  <x-forms.form method="POST" action="/jobs">
    <x-forms.input name="title" label="title" placeholder="Web developer" />
    <x-forms.input name="salary" label="salary" placeholder="$50,000 USD" />
    <x-forms.input name="location" type="location" placeholder="Remote" label="location" />

    <x-forms.select name="schedule" label="Schedule">
      <option value="Full time">Full time</option>
      <option value="Part time">Part time</option>
    </x-forms.select>

    <x-forms.input name="url" type="url" placeholder="http://jobstreet.com" label="url" />
    <x-forms.checkbox name="featured" label="Feature (Costs Extra)" />

    <x-forms.divider />

    <x-forms.input name="tags" label="Tags (comma separated)" placeholder="laracasts, video, education" />

    <x-forms.button>Publish</x-forms.button>
  </x-forms.form>

</x-layout>
