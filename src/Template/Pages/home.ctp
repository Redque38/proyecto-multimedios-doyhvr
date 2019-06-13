<!doctype html>
<html ng-app>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
    </head>
    <body>
        <!-- link to add new users page -->
<div class='upper-right-opt'>
    <?php echo $this->Html->link( 'List Users', array( 'action' => 'table' ) ); ?>
</div>
<body>
        <div class="floated-label-wrapper">
        <form class="callout text-center">
        <h1>Registrar Usuarios</h1>
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
        <div class="floated-label-wrapper">
            <label for="password">Password</label>
            <input class="input" type="password" ng-model="password" id="password" name="password input" placeholder="Password">
        </div>

        <div class="floated-label-wrapper">
            <label for="password2">Confirmar Password</label>
            <input class="input" type="password" ng-model="password2" id="password2" name="password input" placeholder="Confirmar Password">
        </div>
        <div class=button_div>
            <?php  echo $this->html->link('Users',array('controller'=>'users','action'=>'index'));  ?>
            <input class="button expanded" type="submit" value="Login">
            <input class="button expanded" type="submit" value="Agregar">
            <input class="button expanded" type="submit" value="Modificar">
            <input class="button expanded" type="submit" value="Eliminar">
        </div>    
        </div>
         <?php 
//this is our add form, name the fields same as database column names
echo $this->Form->create('User');
 
    echo $this->Form->input('nombre');
    echo $this->Form->input('cedula');
    echo $this->Form->input('direccion');
    echo $this->Form->input('email');
    echo $this->Form->input('password', array('type'=>'password'));
    
?>
        </form>
        


        <form class="callout text-left">
                <h1>Hello!</h1>
                <label>Nombre Completo: {{nombre}}</label>
                <label>Cédula: {{cedula}}</label>
                <label>Dirección: {{direccion}}</label>
                <label>Telefono: {{telefono}}</label>
                <label>Email: {{email}}</label>
        </form>

        
    </body>
</html>
