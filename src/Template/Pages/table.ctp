<h2>Registro Usuario</h2>
 
<!-- link to add new users page -->
<div class='upper-right-opt'>
<?php echo $this->html->link('+Nuevo Usuario',array('action'=>'home')); ?>
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
            </colgroup>
            <thead class="thead">
                <tr>
                <th><a href="#">ID<i class="fa fa-caret-down"></i></a></th>
                <th><a href="#">Nombre<i class="fa fa-caret-down"></i></a></th>
                <th><a href="#">Cédula<i class="fa fa-caret-down"></i></a></th>
                <th><a href="#">Dirección<i class="fa fa-caret-down"></i></a></th>
                <th><a href="#">Email<i class="fa fa-caret-down"></i></a></th>
                <th><a href="#">Modificar<i class="fa fa-caret-down"></i></a></th>
                <th><a href="#">Eliminar<i class="fa fa-caret-down"></i></a></th>
                </tr>
            </thead>
            
            <tbody class=tbody>
                <tr>
                <td class="listing-inquiry-status">
                    <h6 class="dashboard-table-text">$variableID</h6>
               </td>
                <td class="listing-inquiry-status">
                    <h6 class="dashboard-table-text">$variableNombre</h6>
                </td>
                <td class="listing-inquiry-status">
                    <h6 class="dashboard-table-text">$variableCedula</h6>
                </td>
                <td class="listing-inquiry-status">
                    <h6 class="dashboard-table-text">$variableDireccion</h6>
                </td>
                <td class="listing-inquiry-status">
                    <h6 class="dashboard-table-text">$variableEmail</h6>
                </td>
                <td class="listing-inquiry-status">
                        <h6 class="dashboard-table-text"><input class="button expanded warning" type="submit" value="Modificar"></h6>
                </td>
                <td class="listing-inquiry-status">
                    <h6 class="dashboard-table-text"><input class="button expanded alert" type="submit" value="Eliminar"></h6>   
                </td>
                </tr>
            </tbody>
<?php 
    //loop to show all retrieved records
    foreach( $users as $user ){
     
        echo "<tr>";
            echo "<td>{$user['User']['id']}</td>";
            echo "<td>{$user['User']['nombre']}</td>";
            echo "<td>{$user['User']['cedula']}</td>";
            echo "<td>{$user['User']['direccion']}</td>";
            echo "<td>{$user['User']['email']}</td>";
            echo "<td>{$user['User']['password']}</td>";
            //here are the links to edit and delete actions
            echo "<td class='actions'>";
                echo $this->Html->link( 'Edit', array('action' => 'edit', $user['User']['id']) );
                 
                //in cakephp 2.0, we won't use get request for deleting records
                //we use post request (for security purposes)
                echo $this->Form->postLink( 'Delete', array(
                        'action' => 'delete', 
                        $user['User']['id']), array(
                            'confirm'=>'Are you sure you want to delete that user?' ) );
            echo "</td>";
        echo "</tr>";
       }
     ?>
  </table>
</form>