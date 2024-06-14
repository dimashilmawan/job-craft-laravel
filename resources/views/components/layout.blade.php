<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  {{-- @vite('resources/js/app.js') --}}
  @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="bg-slate-50">
  <header>
    <nav class="flex h-16 items-center justify-between text-sm font-semibold">
      <div>
        <a href="/">
          <img class="h-10 w-10" src="{{ Vite::asset('resources/images/logo.svg') }}">
        </a>
      </div>
      <ul class="flex items-center gap-5">
        <li><a href="">Jobs</a></li>
        <li><a href="">Careers</a></li>
        <li><a href="">Salaries</a></li>
        <li><a href="">Companies</a></li>
      </ul>

      @guest
        <div class="space-x-3">
          <a href="/register">Sign up</a>
          <a href="/login">Login</a>
        </div>
      @endguest

      @auth
        <div class="flex items-center gap-3">
          <div>
            <a href="/jobs/create">Post a job</a>
          </div>
          <form action="/logout" method="POST">
            @csrf
            @method('DELETE')
            <button>Logout</button>
          </form>
        </div>
      @endauth
    </nav>
  </header>
  <main class="mx-auto max-w-5xl">
    {{ $slot }}
  </main>
</body>

</html>
