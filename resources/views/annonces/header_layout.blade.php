<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="UTF-8">
        <title> Gestion des annonces </title>
</head>

<body>
<header>
    <nav>
        <ul>
            <li><a href="{{route('add')}}"> Ajouter une annonce</a></li>
            <li><a href="{{route('list')}}"> Lister une annonce</a></li>
        </ul>
    </nav>
</header>
@yield('content')
</body>
</html>
