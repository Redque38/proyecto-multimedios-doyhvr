<!doctype html>
<html ng-app>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.9.1/styles/github.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
    </head>
    <body>
        <div>
        <form class="callout text-center">
        <h2>Registrar Usuarios</h2>
        <div class="floated-label-wrapper">
            <label for="nombre">Nombre Completo</label>
            <input class="input" type="text" ng-model="nombre" id="nombre" name="nombre input" placeholder="Nombre Completo">
        </div>
        <div class="floated-label-wrapper">
            <label for="cedula">Cédula</label>
            <input class="input" type="text" ng-model="cedula" id="cedula" name="cedula input" placeholder="Cedula">
        </div>
        <div class="floated-label-wrapper">
            <label for="direccion">Dirección</label>
            <input class="input" type="text" ng-model="direccion" id="direccion" name="direccion input" placeholder="Direccion">
        </div>
        <div class="floated-label-wrapper">
            <label for="telefono">Teléfono</label>
            <input class="input" type="text" ng-model="telefono" id="telefono" name="telefono input" placeholder="Telefono">
        </div>
        <div class="floated-label-wrapper">
            <label for="email">Email</label>
            <input class="input" type="email" ng-model="email" id="email" name="email input" placeholder="Email">
        </div>
        <input class="button expanded" type="submit" value="Agregar">
            <h1>Hello {{nombre}}!</h1>
        </div>
        </form>

    </body>
</html>