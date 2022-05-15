{% extends "layout.php" %}

{% block content %}
<style>
.carousel-item {
  height: 100vh;
  min-height: 10vh;
}
.carousel-caption{
  bottom: 50vh;
}
.carousel-caption h5{
  font-size: 30px;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-top: 25px;
  font-weight: 900;
}
.carousel-caption p{
  font-size: 18px;
  margin: auto;
  width: 60%;
  font-weight: 900;
}
.carousel-caption a{
  text-transform: uppercase;
  padding: 10px 30px;
  display: inline-block;
  color: #fff;
  margin-top: 15px;
  border-radius: 50px;
}
</style>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
  </ol>
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://cdn.discordapp.com/attachments/827534894581678090/827535008523616256/Imagen_1.png" class="d-block w-100" alt="Bienvenido">
        <div class="carousel-caption d-none d-md-block">
          <div class="container">
            <h5>Bienvenido a apuntes GNF</h5>
            <p>Busca tu grado, la materia que necesites y encuentra informacion</p>
            <a class="btn btn-danger" href="/about" role="button">Mas informacion</a>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://cdn.discordapp.com/attachments/827534894581678090/827535042292744192/imagen_2.png" class="d-block w-100" alt="Colegio">
        <div class="carousel-caption data-target d-md-block">
          <h5>Entra a la pagina oficial del GNF</h5>
          <p>Gimnacio Nicolas de Federman</p>
          <a class="btn btn-danger" href="https://www.colegiogimnasionicolasdefederman.com" target="_blank" role="button">click aqui</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://cdn.discordapp.com/attachments/827534894581678090/827535651196895271/imagen_3.jpg" class="d-block w-100" alt="APPS">
        <div class="carousel-caption d-none d-md-block">
          <h5>Aplicaciones y paginas web</h5>
          <p>estas son algunas de las aplicaciones o paginas web que te recomendamos.</p>
          <a class="btn btn-danger" href="/recomendados" role="button">click aqui</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://cdn.discordapp.com/attachments/827534894581678090/827665951835029504/imagen_6.png" class="d-block w-100" alt="Coments">
        <div class="carousel-caption d-none d-md-block">
          <h5>Ayudanos a mejorar</h5>
          <p>Buscamos que nustra pagina sea lo mas comoda y funcional posible, haci que si tienes alguna propuesta para mejorar nuestra pagina da click abajo y escribenos tu propuesta</p>
          <a class="btn btn-danger" href="/contact" target="_blank" role="button">click aqui</a>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Next</span>
</a>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
</div>
{% endblock %}