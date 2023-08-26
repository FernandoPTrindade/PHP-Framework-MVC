<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <style>
        :root{
            --bs-nav-link-color: white;
            --bs-nav-link-hover-color: #999999;
        }
        .navbar{
            padding: 10px;
        }
    </style>
</head> 
</head>
<body>
    <header> 
    <nav class="navbar da bg-dark">
        <a href="/" class="nav-link">Home</a>
        <a href="/entrar" class="nav-link">Entrar</a>
    </nav>
    </header>
    <main>
       {{content}}
    </main>
    <footer></footer>
</body>
</html>