<div class="my-table cm-sl">
    <h4 style="font-size: 18px;">NEW KALYAN STARLINE
	
	<a href="new-kalyan-starline-chart.php" style="padding: 3px 5px 2px;height: auto;width: auto;float: right;margin: -1px 0px 0px 0;background-color: #000;border-radius: 5px;font-size: 14px;color: white;text-shadow: none;">Chart</a> </h4>

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
$cm_star=file("txtdb/cm_star_line_results.txt");
?>
            <tr>
                <td>10:00 AM</td>
                <td><?php
if (preg_match("/^[0-9]+$/i", $cm_star[1])) {
if (!empty($cm_star[1])) {
        $numa=(string)$cm_star[1];
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
    <?php echo preg_replace('/\s+/','',$cm_star[1].$jodia); ?></td>
                <td>04:00 PM</td>
                <td><?php
if (preg_match("/^[0-9]+$/i", $cm_star[7])) {
if (!empty($cm_star[7])) {
        $numa=(string)$cm_star[7];
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
    <?php echo preg_replace('/\s+/','',$cm_star[7].$jodia); ?></td>
            </tr>
            <tr>
                <td>11:00 AM</td>
                <td><?php
if (preg_match("/^[0-9]+$/i", $cm_star[2])) {
if (!empty($cm_star[2])) {
        $numa=(string)$cm_star[2];
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
    <?php echo preg_replace('/\s+/','',$cm_star[2].$jodia); ?></td>
                <td>05:00 PM</td>
                <td><?php
if (preg_match("/^[0-9]+$/i", $cm_star[8])) {
if (!empty($cm_star[8])) {
        $numa=(string)$cm_star[8];
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
    <?php echo preg_replace('/\s+/','',$cm_star[8].$jodia); ?></td>
            </tr>
            <tr>
                <td>12:00 PM</td>
                <td><?php
if (preg_match("/^[0-9]+$/i", $cm_star[3])) {
if (!empty($cm_star[3])) {
        $numa=(string)$cm_star[3];
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
    <?php echo preg_replace('/\s+/','',$cm_star[3].$jodia); ?></td>
                <td>06:00 PM</td>
                <td><?php
if (preg_match("/^[0-9]+$/i", $cm_star[9])) {
if (!empty($cm_star[9])) {
        $numa=(string)$cm_star[9];
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
    <?php echo preg_replace('/\s+/','',$cm_star[9].$jodia); ?></td>
            </tr>
            <tr>
                <td>01:00 PM</td>
                <td><?php
if (preg_match("/^[0-9]+$/i", $cm_star[4])) {
if (!empty($cm_star[4])) {
        $numa=(string)$cm_star[4];
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
    <?php echo preg_replace('/\s+/','',$cm_star[4].$jodia); ?></td>
                <td>07:00 PM</td>
                <td><?php
if (preg_match("/^[0-9]+$/i", $cm_star[10])) {
if (!empty($cm_star[10])) {
        $numa=(string)$cm_star[10];
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
    <?php echo preg_replace('/\s+/','',$cm_star[10].$jodia); ?></td>
            </tr>
            <tr>
                <td>02:00 PM</td>
                <td><?php
if (preg_match("/^[0-9]+$/i", $cm_star[5])) {
if (!empty($cm_star[5])) {
        $numa=(string)$cm_star[5];
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
    <?php echo preg_replace('/\s+/','',$cm_star[5].$jodia); ?></td>
                <td>08:00 PM</td>
                <td><?php
if (preg_match("/^[0-9]+$/i", $cm_star[11])) {
if (!empty($cm_star[11])) {
        $numa=(string)$cm_star[11];
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
    <?php echo preg_replace('/\s+/','',$cm_star[11].$jodia); ?></td>
            </tr>
            <tr>
                <td>03:00 AM</td>
                <td><?php
if (preg_match("/^[0-9]+$/i", $cm_star[6])) {
if (!empty($cm_star[6])) {
        $numa=(string)$cm_star[6];
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
    <?php echo preg_replace('/\s+/','',$cm_star[6].$jodia); ?></td>
                <td>09:00 PM</td>
                <td><?php
if (preg_match("/^[0-9]+$/i", $cm_star[12])) {
if (!empty($cm_star[12])) {
        $numa=(string)$cm_star[12];
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
    <?php echo preg_replace('/\s+/','',$cm_star[12].$jodia); ?></td>
            </tr>
        </tbody>
    </table>
</div>