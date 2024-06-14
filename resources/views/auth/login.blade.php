<x-layout>
  <h1>Login</h1>
  <x-forms.form method="POST" action="/login">
    <x-forms.input name="email" type="email" label="email" />
    <x-forms.input name="password" type="password" label="password" />

    <x-forms.button>Login</x-forms.button>
  </x-forms.form>
</x-layout>
