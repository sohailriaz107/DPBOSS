<?php 
$i = 0;
while($row = mysqli_fetch_array($gh)){
  $frequency=$row['frequency'];
  $i++;
  //if this is first value in row, create new row
    if ($i % $frequency == 1) {

      ?>
      <tr>
        <td><?php if (!empty($row['fromDate'])) {
          echo $row['fromDate'];
        } ?><br/>to<br/><?php if (!empty($row['toDate'])) {
          echo $row['toDate'];
        } ?></td>
      <?php
    }

    if ($row['color']=='red') {
      $color='r';
    }
    else{
      $color='';
    }

?>

<td class="<?php echo $color; ?>"><?php echo $row['a']; ?><br><?php echo $row['b']; ?><br><?php echo $row['c']; ?></td>
<td class="<?php echo $color; ?>"><?php echo $row['d']; ?></td>
<td class="<?php echo $color; ?>"><?php echo $row['e']; ?><br><?php echo $row['f']; ?><br><?php echo $row['g']; ?></td>

<?php 
if ($i % $frequency == 0) {
        echo "</tr>";
    }
}
?>