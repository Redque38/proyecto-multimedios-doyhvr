<!doctype html>
<html ng-app>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <!-- link to add new users page -->
<div class='upper-right-opt'>
<?php  echo $this->html->link('Users',array('controller'=>'Users','action'=>'index'));  ?>
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
            <label for="cedula">cvCédula</label>
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
                    <?php 
                        echo $this->Form->create('User');
                        
                        echo $this->Form->input('nombre', array('value'=>'{{nombre}}','type'=>'hidden'));
                        echo $this->Form->input('cedula', array('value'=>'{{cedula}}','type'=>'hidden'));
                        echo $this->Form->input('direccion', array('value'=>'{{direccion}}','type'=>'hidden'));
                        echo $this->Form->input('telefono', array('value'=>'{telefono}','type'=>'hidden'));
                        echo $this->Form->input('email', array('value'=>'{{email}}','type'=>'hidden'));
                        echo $this->Form->input('password', array('value'=>'{{password}}','type'=>'hidden'));
                        
                        echo $this->Form->button(__('Add User'),['class'=>'button primary']);  

                        echo $this->Form->end();

                    ?>
        </div>    
        </div>
       
        </form>
        </div>
        <form class="callout text-left">
                <h1>Hello! Esto es una prueba de Angular.</h1>
                <label>Nombre Completo: {{nombre}}</label>
                <label>Cédula: {{cedula}}</label>
                <label>Dirección: {{direccion}}</label>
                <label>Telefono: {{telefono}}</label>
                <label>Email: {{email}}</label>
        </form>

        
    </body>
</html>
