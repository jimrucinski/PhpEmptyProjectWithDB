<?php 
    include('includes/header.php');
    
    $dbo->DoQuery('select * from buyers');
    $rows = $dbo->resultset();

    foreach($rows as $row){
        echo $row['buyerName'] . '<br/>';
    }

    var_dump($dbo);
    
?>

        