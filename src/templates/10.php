{% extends "layout.php" %}

{% block content %}
<div class= "container">

    <div class="jumbotron">
        <h1 class="display-4">Bienvenido a 10°</h1>
        <p class="lead">Aqui encontraras actividades relacionadas con 10°</p>
    </div>

    <div class="jumbotron">
        <h1 class="display-4">Biologia y quimica</h1>
        <p class="lead">Aqui encontraras actividades relacionadas con las materias de biologia y quimica</p>
        <hr class="my-4">
        <p>haz click aqui para ver todas actividades relacionadas con esta materia</p>
        <a class="btn btn-danger btn-lg" href="/10/Biologia_Quimica" role="button">Click aqui</a>
    </div>

    <div class="jumbotron">
        <h1 class="display-4">Sociales integradas</h1>
        <p class="lead">Aqui encontraras actividades relacionadas con las materias de Historia y geografia</p>
        <hr class="my-4">
        <p>haz click aqui para ver todas actividades relacionadas con esta materia</p>
        <a class="btn btn-danger btn-lg" href="/10/Sociales_integradas" role="button">Click aqui</a>
    </div>
    
    <div class="jumbotron">
        <h1 class="display-4">Español</h1>
        <p class="lead">Aqui encontraras actividades relacionadas con la materia</p>
        <hr class="my-4">
        <p>haz click aqui para ver todas actividades relacionadas con esta materia</p>
        <a class="btn btn-danger btn-lg" href="/10/Español" role="button">Click aqui</a>
    </div>

    <div class="jumbotron">
        <h1 class="display-4">Filosofia, religion y etica</h1>
        <p class="lead">Aqui encontraras actividades relacionadas con las materias de filosofia, etica y religion</p>
        <hr class="my-4">
        <p>haz click aqui para ver todas actividades relacionadas con esta materia</p>
        <a class="btn btn-danger btn-lg" href="/10/Filosofia" role="button">Click aqui</a>
    </div>

</div>
{% endblock %}