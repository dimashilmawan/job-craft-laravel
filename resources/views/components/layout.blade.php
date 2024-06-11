<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <header>
    <nav>
      <div><a href="/">Home</a></div>
      <ul>
        <li><a href="">Jobs</a></li>
        <li><a href="">Careers</a></li>
        <li><a href="">Salaries</a></li>
        <li><a href="">Companies</a></li>
      </ul>
      <div>
        <a href="/">Post a job</a>
      </div>
    </nav>
  </header>
  <main>
    {{ $slot }}
  </main>
</body>

</html>
