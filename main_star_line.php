<div class="my-table mr-sl">
    <h4>MAIN BOMBAY STARLINE</h4>
    <table>
        <thead>
            <tr>
                <th>Time</th>
                <th>Result</th>
                <th>Time</th>
                <th>Result</th>
            </tr>
        </thead>
        <tbody>
<?php 
$main_star=file("txtdb/main_star_line_results.txt");
?>
            <tr>
                <td>09:05 AM</td>
                <td><?php
if (preg_match("/^[0-9]+$/i", $main_star[1])) {
if (!empty($main_star[1])) {
        $numa=(string)$main_star[1];
        $aa=$numa[0]; $ba=$numa[1]; $ca=$numa[2];
        $suma=$aa+$ba+$ca;
        $jodia='-'.substr($suma, -1);
    }
    else{ $jodia=''; $colora=''; }
}
else{
    $jodia=''; $colora='';
}
?>
    <?php echo preg_replace('/\s+/','',$main_star[1].$jodia); ?></td>
                <td>03:05 PM</td>
                <td><?php
if (preg_match("/^[0-9]+$/i", $main_star[7])) {
if (!empty($main_star[7])) {
        $numa=(string)$main_star[7];
        $aa=$numa[0]; $ba=$numa[1]; $ca=$numa[2];
        $suma=$aa+$ba+$ca;
        $jodia='-'.substr($suma, -1);
    }
    else{ $jodia=''; $colora=''; }
}
else{
    $jodia=''; $colora='';
}
?>
    <?php echo preg_replace('/\s+/','',$main_star[7].$jodia); ?></td>
            </tr>
            <tr>
                <td>10:05 AM</td>
                <td><?php
if (preg_match("/^[0-9]+$/i", $main_star[2])) {
if (!empty($main_star[2])) {
        $numa=(string)$main_star[2];
        $aa=$numa[0]; $ba=$numa[1]; $ca=$numa[2];
        $suma=$aa+$ba+$ca;
        $jodia='-'.substr($suma, -1);
    }
    else{ $jodia=''; $colora=''; }
}
else{
    $jodia=''; $colora='';
}
?>
    <?php echo preg_replace('/\s+/','',$main_star[2].$jodia); ?></td>
                <td>04:05 PM</td>
                <td><?php
if (preg_match("/^[0-9]+$/i", $main_star[8])) {
if (!empty($main_star[8])) {
        $numa=(string)$main_star[8];
        $aa=$numa[0]; $ba=$numa[1]; $ca=$numa[2];
        $suma=$aa+$ba+$ca;
        $jodia='-'.substr($suma, -1);
    }
    else{ $jodia=''; $colora=''; }
}
else{
    $jodia=''; $colora='';
}
?>
    <?php echo preg_replace('/\s+/','',$main_star[8].$jodia); ?></td>
            </tr>
            <tr>
                <td>11:05 AM</td>
                <td><?php
if (preg_match("/^[0-9]+$/i", $main_star[3])) {
if (!empty($main_star[3])) {
        $numa=(string)$main_star[3];
        $aa=$numa[0]; $ba=$numa[1]; $ca=$numa[2];
        $suma=$aa+$ba+$ca;
        $jodia='-'.substr($suma, -1);
    }
    else{ $jodia=''; $colora=''; }
}
else{
    $jodia=''; $colora='';
}
?>
    <?php echo preg_replace('/\s+/','',$main_star[3].$jodia); ?></td>
                <td>05:05 PM</td>
                <td><?php
if (preg_match("/^[0-9]+$/i", $main_star[9])) {
if (!empty($main_star[9])) {
        $numa=(string)$main_star[9];
        $aa=$numa[0]; $ba=$numa[1]; $ca=$numa[2];
        $suma=$aa+$ba+$ca;
        $jodia='-'.substr($suma, -1);
    }
    else{ $jodia=''; $colora=''; }
}
else{
    $jodia=''; $colora='';
}
?>
    <?php echo preg_replace('/\s+/','',$main_star[9].$jodia); ?></td>
            </tr>
            <tr>
                <td>12:05 PM</td>
                <td><?php
if (preg_match("/^[0-9]+$/i", $main_star[4])) {
if (!empty($main_star[4])) {
        $numa=(string)$main_star[4];
        $aa=$numa[0]; $ba=$numa[1]; $ca=$numa[2];
        $suma=$aa+$ba+$ca;
        $jodia='-'.substr($suma, -1);
    }
    else{ $jodia=''; $colora=''; }
}
else{
    $jodia=''; $colora='';
}
?>
    <?php echo preg_replace('/\s+/','',$main_star[4].$jodia); ?></td>
                <td>06:05 PM</td>
                <td><?php
if (preg_match("/^[0-9]+$/i", $main_star[10])) {
if (!empty($main_star[10])) {
        $numa=(string)$main_star[10];
        $aa=$numa[0]; $ba=$numa[1]; $ca=$numa[2];
        $suma=$aa+$ba+$ca;
        $jodia='-'.substr($suma, -1);
    }
    else{ $jodia=''; $colora=''; }
}
else{
    $jodia=''; $colora='';
}
?>
    <?php echo preg_replace('/\s+/','',$main_star[10].$jodia); ?></td>
            </tr>
            <tr>
                <td>01:05 PM</td>
                <td><?php
if (preg_match("/^[0-9]+$/i", $main_star[5])) {
if (!empty($main_star[5])) {
        $numa=(string)$main_star[5];
        $aa=$numa[0]; $ba=$numa[1]; $ca=$numa[2];
        $suma=$aa+$ba+$ca;
        $jodia='-'.substr($suma, -1);
    }
    else{ $jodia=''; $colora=''; }
}
else{
    $jodia=''; $colora='';
}
?>
    <?php echo preg_replace('/\s+/','',$main_star[5].$jodia); ?></td>
                <td>07:05 PM</td>
                <td><?php
if (preg_match("/^[0-9]+$/i", $main_star[11])) {
if (!empty($main_star[11])) {
        $numa=(string)$main_star[11];
        $aa=$numa[0]; $ba=$numa[1]; $ca=$numa[2];
        $suma=$aa+$ba+$ca;
        $jodia='-'.substr($suma, -1);
    }
    else{ $jodia=''; $colora=''; }
}
else{
    $jodia=''; $colora='';
}
?>
    <?php echo preg_replace('/\s+/','',$main_star[11].$jodia); ?></td>
            </tr>
            <tr>
                <td>02:05 PM</td>
                <td><?php
if (preg_match("/^[0-9]+$/i", $main_star[6])) {
if (!empty($main_star[6])) {
        $numa=(string)$main_star[6];
        $aa=$numa[0]; $ba=$numa[1]; $ca=$numa[2];
        $suma=$aa+$ba+$ca;
        $jodia='-'.substr($suma, -1);
    }
    else{ $jodia=''; $colora=''; }
}
else{
    $jodia=''; $colora='';
}
?>
    <?php echo preg_replace('/\s+/','',$main_star[6].$jodia); ?></td>
                <td>08:05 PM</td>
                <td><?php
if (preg_match("/^[0-9]+$/i", $main_star[12])) {
if (!empty($main_star[12])) {
        $numa=(string)$main_star[12];
        $aa=$numa[0]; $ba=$numa[1]; $ca=$numa[2];
        $suma=$aa+$ba+$ca;
        $jodia='-'.substr($suma, -1);
    }
    else{ $jodia=''; $colora=''; }
}
else{
    $jodia=''; $colora='';
}
?>
    <?php echo preg_replace('/\s+/','',$main_star[12].$jodia); ?></td>
            </tr>
        </tbody>
    </table>
</div>