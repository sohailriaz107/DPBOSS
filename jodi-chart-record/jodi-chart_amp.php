<?php
$i = 0;
while($row = mysqli_fetch_array($gh)){
  $frequency=$row['frequency'];
    $i++;
    //if this is first value in row, create new row
    if ($i % $frequency == 1) {
        echo "<tr>";
    }
  $col = $row['color'];
  if ($row['color']=='red') {
      $color='r';
  }
  else{
    $color='';
  }
    echo "<td class='".$color."'>".$row['d']."</td>";
    //if this is third value in row, end row
    if ($i % $frequency == 0) {
        echo "</tr>";
    }
}
//if the counter is not divisible by 3, we have an open row
$spacercells = $frequency - ($i % $frequency);
if ($spacercells < $frequency) {
    for ($j=1; $j<=$spacercells; $j++) {
        echo "<td></td>";
    }
    echo "</tr>";
}
?>