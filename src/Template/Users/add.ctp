<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <!-- link to add new users page -->
<div class='linkHome'>
<?php  echo $this->html->link('Lista Usuarios',array('controller'=>'Users','action'=>'index'));  ?>
</div>
<body>
<h1 class="h1_add">Registro de Usuarios</h1>
<?php 
        echo $this->Form->create('User' ,array('class'=>'callout text-left'));    
        echo $this->Form->input('nombre', array('class'=>'input', 'ng-model'=>'nombre', 'id'=>'nombre',  'placeholder'=>'Nombre completo') );
        echo $this->Form->input('cedula', array('class'=>'input', 'ng-model'=>'cedula', 'id'=>'cedula',  'placeholder'=>'Cedula'));
        echo $this->Form->input('direccion', array('class'=>'input', 'ng-model'=>'direccion', 'id'=>'direccion',  'placeholder'=>'Direccion'));
        echo $this->Form->input('telefono', array('class'=>'input', 'ng-model'=>'telefono', 'id'=>'telefono',  'placeholder'=>'Telefono'));
        echo $this->Form->input('email', array('class'=>'input', 'ng-model'=>'email', 'id'=>'email',  'placeholder'=>'Correo electronico'));
        echo $this->Form->input('password', array('class'=>'input', 'ng-model'=>'password', 'id'=>'password',  'placeholder'=>'Contraseña'));
        
        echo $this->Form->button(__('Add User'),['class'=>'button primary']);  

        echo $this->Form->end();

        ?>
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