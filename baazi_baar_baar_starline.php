<div class="my-table cm-sl mf-sl" style="background: yellow;border: 6px solid gold;border-style: outset;">
    <h4 style="font-size: 20px;background: red;color: white !;border-radius: 0px;text-shadow: none;margin: 0px;">MUMBAI STARLINE RESULT
	
	<a href="mumbai-starline-chart.php" style="padding: 3px 5px 2px;height:auto;width: auto;float: right;margin: -1px 0px 0px 0;background-color: #000;border-radius: 5px;font-size: 14px;color: white;text-shadow: none;">Chart</a> </h4>

    <table>
        <thead>
            <tr>
                <th>Round</th>
                <th>Result</th>
                <th>Round</th>
                <th>Result</th>
            </tr>
        </thead>
        <tbody>
<?php 
$main_star=file("txtdb/cm_star_line_results.txt");
?>
            <tr>
                <td>10:15 AM</td>
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
                <td>03:15 PM</td>
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
            </tr>
            <tr>
                <td>11:15 AM</td>
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
                <td>04:15 PM</td>
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
                <td>12:15 PM</td>
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
                <td>05:15 PM</td>
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
                <td>01:15 PM</td>
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
                <td>06:15 PM</td>
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
                <td>02:15 PM</td>
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
                <td>07:15 PM</td>
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
            
        </tbody>
    </table>
</div>