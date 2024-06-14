<x-layout>
  <h1>Register</h1>
  <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
    <x-forms.input name="name" label="name" />
    <x-forms.input name="email" type="email" label="email" />
    <x-forms.input name="password" type="password" label="password" />
    <x-forms.input name="password_confirmation" type="password" label="password confirmation" />

    <x-forms.divider />

    <x-forms.input name="employer" label="Employer name" />
    <x-forms.input name="logo" type="file" label="Employer logo" />

    <x-forms.button>Register</x-forms.button>
  </x-forms.form>
</x-layout>
