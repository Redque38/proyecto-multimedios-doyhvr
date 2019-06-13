<h2>Users</h2>
 
<!-- link to add new users page -->
<div class='upper-right-opt'>
    <?php echo $this->Html->link( '+ New User', array( 'action' => 'add' ) ); ?>
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
            
        <?php
            if(!empty($users)):
            //loop to show all retrieved records
            foreach( $users as $user ){
                echo "<tr>";
                    echo "<td>{$user->id}</td>";
                    echo "<td>{$user->nombre}</td>";
                    echo "<td>{$user->cedula}</td>";
                    echo "<td>{$user->telefono}</td>";
                    echo "<td>{$user->direccion}</td>";
                    echo "<td>{$user->email}</td>";
                    
                    //here are the links to edit and delete actions
                    echo "<td class='actions'>";
                        echo $this->Html->link( 'Edit', array('controller'=>'Users','action' => 'edit', $user->id) );
                        
                        //in cakephp 2.0, we won't use get request for deleting records
                        //we use post request (for security purposes)
                        echo $this->Form->postLink( 'Delete', array(
                                'action' => 'delete', 
                                $user->id), array(
                                    'confirm'=>'Are you sure you want to delete that user?' ) );
                    echo "</td>";
                echo "</tr>";
            }else:
                echo "<td>No record found</td>";
            endif;
        ?>
        </tbody>
    </table>

</form>