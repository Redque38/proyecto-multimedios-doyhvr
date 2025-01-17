<h2>Registro Usuario</h2>
 
<!-- link to add new users page -->
<div class='linkIndex'>
<?php echo $this->html->link('+Nuevo Usuario',array('controller'=>'Users','action'=>'add')); ?>
</div>
 
<form class="callout secondary">
        <table class="dashboard-table">
            <colgroup>
                <col width="auto">
                <col width="auto">
                <col width="auto">
                <col width="auto">
                <col width="auto">
                <col width="auto">
                <col width="auto">
                <col width="auto">
            </colgroup>
            <thead class="thead">
                <tr>
                <th><p>ID<i class="fa fa-caret-down"></i></p></th>
                <th><p>Nombre<i class="fa fa-caret-down"></i></p></th>
                <th><p>Cédula<i class="fa fa-caret-down"></i></p></th>
                <th><p>Telefono<i class="fa fa-caret-down"></i></p></th>
                <th><p>Dirección<i class="fa fa-caret-down"></i></p></th>
                <th><p>Email<i class="fa fa-caret-down"></i></p></th>
                <th><p>Modificar<i class="fa fa-caret-down"></i></p></th>
                <th><p>Eliminar<i class="fa fa-caret-down"></i></p></th>
                </tr>
            </thead>
            
            <tbody class=tbody>
    <?php
    if(!empty($users)):
    //loop to show all retrieved records
    foreach( $users as $user ){
        echo "<tr>";
            echo "<td class='listing-inquiry-status'> <h6 class='dashboard-table-text'>{$user->id}</h6></td>";
            echo "<td class='listing-inquiry-status'> <h6 class='dashboard-table-text'>{$user->nombre}</h6></td>";
            echo "<td class='listing-inquiry-status'> <h6 class='dashboard-table-text'>{$user->cedula}</h6></td>";
            echo "<td class='listing-inquiry-status'> <h6 class='dashboard-table-text'>{$user->telefono}</h6></td>";
            echo "<td class='listing-inquiry-status'> <h6 class='dashboard-table-text'>{$user->direccion}</h6></td>";
            echo "<td class='listing-inquiry-status'> <h6 class='dashboard-table-text'>{$user->email}</h6></td>";
            echo "<td class='listing-inquiry-status'> <h6 class='dashboard-table-text'>{$this->Html->link( 'Edit', array('controller'=>'Users','action' => 'edit', $user->id),array('class'=>'button expanded alert') )}</h6></td>";
            echo " <td class='listing-inquiry-status'><h6 class='dashboard-table-text'><input class='button expanded alert' type='submit' value='Eliminar'></h6></td>";
            echo "</td>";
        echo "</tr>";
    }else:
        echo "<td>No record found</td>";
    endif;
    ?>
    </tbody>
            
  </table>
</form>