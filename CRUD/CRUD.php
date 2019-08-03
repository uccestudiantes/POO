<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>CRUD · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>

<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-3 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Crear</h4>
      </div>
      <div class="card-body">
        <button type="button" class="btn btn-lg btn-block btn-primary" id='crear'>Crear</button>
      </div>
    </div>
    <div class="card mb-3 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Actualizar</h4>
      </div>
      <div class="card-body">
        <button type="button" class="btn btn-lg btn-block btn-primary" id='actualiza'>Actualizar</button>
      </div>
    </div>
    <div class="card mb-3 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Consultar</h4>
      </div>
      <div class="card-body">
        <button type="button" class="btn btn-lg btn-block btn-primary">Consultar</button>
      </div>
    </div>
    <div class="card mb-3 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Borrar</h4>
      </div>
      <div class="card-body">
        <button type="button" class="btn btn-lg btn-block btn-primary">Borrar</button>
      </div>
    </div>
  </div>
  <div id="article"><article>   </article></div>
</div>
</body>
<script type="text/javascript">
      $(document).ready(function() {
        $("#crear").click(function(event) {
          $("#article").load('reporte.html');
        });
        $("#actualiza").click(function(event) {
          $("#article").load('informe.html');
        });
      });
    </script>
</html>