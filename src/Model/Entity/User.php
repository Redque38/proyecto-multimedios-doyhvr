<?php
    namespace App\Model\Entity;

    use Cake\ORM\TableRegistry;

    // Prior to 3.6.0
    $user = TableRegistry::get('Users')->newEntity();

?>