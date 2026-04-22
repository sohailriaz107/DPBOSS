<?php 
$i = 0;
while($row = mysqli_fetch_array($gh)){
  $frequency=$row['frequency'];
  $i++;
  //if this is first value in row, create new row
    if ($i % $frequency == 1) {

      ?>
      <tr>
        <td><p align="center"><?php if (!empty($row['fromDate'])) {
          echo $row['fromDate'];
        } ?><br/>to<br/><?php if (!empty($row['toDate'])) {
          echo $row['toDate'];
        } ?></p></td>
      <?php
    }

    if ($row['color']=='red') {
      $color='chart-44';
    }
    else{
      $color='chart-69';
    }

?>

<td style="border-right:0">
  <p class="<?php echo $color; ?>"><?php echo $row['a']; ?><br><?php echo $row['b']; ?><br><?php echo $row['c']; ?></p>
</td>
<td style="border-left:0; border-right:0;">
  <p class="chart-bold <?php echo $color; ?>"><?php echo $row['d']; ?></p>
</td>

<td style="border-left:0">
  <p class="<?php echo $color; ?>"><?php echo $row['e']; ?><br><?php echo $row['f']; ?><br><?php echo $row['g']; ?></p>
</td>

<?php 
if ($i % $frequency == 0) {
        echo "</tr>";
    }
}
?>