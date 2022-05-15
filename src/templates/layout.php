<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apuntes GNF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url_for('static', filename='css/main.css') }}">
</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/home">Apuntes GNF</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/6">6°</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/7">7°</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/8">8°</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/9">9°</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/10">10°</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/11">11°</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/recomendados">Aplicaciones y Paginas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    
            {% block content %}
            {% endblock %}
    
</body>

</html>