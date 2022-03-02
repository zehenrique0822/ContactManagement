<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/styles.css">
    <title>@yield('title') - LARAVEL 1</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=League+Gothic&family=Montserrat:ital,wght@0,400;1,200&family=Oswald:wght@600&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>CRUD CONTATOS</h1>
    </header>
    <hr/>
    <section>
        @yield('content')
    </section>
    <hr/>
    <footer>
        Desenvolvido por José Henrique
    </footer>    
</body>
</html>