<table  class="table table-hover">
    <thead>
      <tr>
        <th>buyer</th>
        <th>first</th>
        <th>second</th>
        <th>third</th>
        <th>fourth</th>
        <th>fifth</th>
      </tr>
    </thead>
    <tbody>
<?php 
    include('includes/header.php');
    
    $dbo->DoQuery('select * from buyers');
    $rows = $dbo->resultset();

    foreach($rows as $row){
        echo "<tr><td>" . $row['buyerName'] . "</td><td>" . $row['first'] . "</td><td>" . $row['second'] . "</td><td>" .
        $row['third'] . "</td><td>" . $row['fourth'] . "<td>" . $row['fifth'] . "</td></td></tr>";
    }   
?>
</tbody>
</table>
<div class="container" id="test"></div>
<?php
    $dbo->DoQuery('call generateBuyerMatchPattern()');
    $rows = $dbo->resultset();
    var_dump($rows);
?>

        