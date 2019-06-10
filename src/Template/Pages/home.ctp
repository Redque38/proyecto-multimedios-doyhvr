<!DOCTYPE html>
<html ng-app>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.8/angular-animate.js"></script>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.3/dist/css/foundation.min.css" integrity="sha256-xpOKVlYXzQ3P03j397+jWFZLMBXLES3IiryeClgU5og= sha384-gP4DhqyoT9b1vaikoHi9XQ8If7UNLO73JFOOlQV1RATrA7D0O7TjJZifac6NwPps sha512-AKwIib1E+xDeXe0tCgbc9uSvPwVYl6Awj7xl0FoaPFostZHOuDQ1abnDNCYtxL/HWEnVOMrFyf91TDgLPi9pNg==" crossorigin="anonymous">
    <?= $this->Html->css('style.css'); ?>
    <title>Document</title>
</head>

<body>
<form class="callout text-center">  
<h2>Registrar Usuarios</h2>
</form>
    <form class="callout text-left">  
        <div class="floated-label-wrapper">
            <label for="nombre">Nombre Completo</label>
            <input type="text" ng-model="nombre" id="nombre" name="nombre input" placeholder="Irwin Leal Elizondo..">
        </div>
        <div class="floated-label-wrapper">
            <label for="cedula" >Cédula</label>
            <input type="text" ng-model="cedula" id="cedula" name="cedula input" placeholder="604240914..">
        </div>
        <div class="floated-label-wrapper">
            <label for="direccion">Dirección</label>
            <input type="text" ng-model="direccion" id="direccion" name="direccion input" placeholder="Cocal, Puntarenas..">
        </div>
        <div class="floated-label-wrapper">
            <label for="telefono">Teléfono</label>
            <input type="text" ng-model="telefono" id="telefono" name="telefono input" placeholder="888-888">
        </div>
        <div class="floated-label-wrapper">
            <label for="email">Email</label>
            <input type="email" ng-model="email" id="email" name="email input" placeholder="IrwinL@correo.com">
        </div>
        <input class="button expanded" type="submit" value="Agregar">
    </form>
    
    <label>Nombre Completo: {{nombre}}</label>
    <label>Cédula: {{cedula}}</label>
    <label>Dirección: {{direccion}}</label>
    <label>Email: {{email}}</label>

</body>

</html>
