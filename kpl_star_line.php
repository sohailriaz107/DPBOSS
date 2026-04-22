<div class="my-table mr-sl">
    <h4>NEW KALYAN STAR LINE</h4>
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
$kpl_star=file("txtdb/kpl_star_line_results.txt");
?>
            <tr>
                <td>10:00 AM</td>
                <td><?php
if (preg_match("/^[0-9]+$/i", $kpl_star[1])) {
if (!empty($kpl_star[1])) {
        $numa=(string)$kpl_star[1];
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
    <?php echo preg_replace('/\s+/','',$kpl_star[1].$jodia); ?></td>
                <td>04:00 PM</td>
                <td><?php
if (preg_match("/^[0-9]+$/i", $kpl_star[7])) {
if (!empty($kpl_star[7])) {
        $numa=(string)$kpl_star[7];
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
    <?php echo preg_replace('/\s+/','',$kpl_star[7].$jodia); ?></td>
            </tr>
            <tr>
                <td>11:00 PM</td>
                <td><?php
if (preg_match("/^[0-9]+$/i", $kpl_star[2])) {
if (!empty($kpl_star[2])) {
        $numa=(string)$kpl_star[2];
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
    <?php echo preg_replace('/\s+/','',$kpl_star[2].$jodia); ?></td>
                <td>05:00 PM</td>
                <td><?php
if (preg_match("/^[0-9]+$/i", $kpl_star[8])) {
if (!empty($kpl_star[8])) {
        $numa=(string)$kpl_star[8];
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
    <?php echo preg_replace('/\s+/','',$kpl_star[8].$jodia); ?></td>
            </tr>
            <tr>
                <td>12:00 PM</td>
                <td><?php
if (preg_match("/^[0-9]+$/i", $kpl_star[3])) {
if (!empty($kpl_star[3])) {
        $numa=(string)$kpl_star[3];
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
    <?php echo preg_replace('/\s+/','',$kpl_star[3].$jodia); ?></td>
                <td>06:00 PM</td>
                <td><?php
if (preg_match("/^[0-9]+$/i", $kpl_star[9])) {
if (!empty($kpl_star[9])) {
        $numa=(string)$kpl_star[9];
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
    <?php echo preg_replace('/\s+/','',$kpl_star[9].$jodia); ?></td>
            </tr>
            <tr>
                <td>01:00 PM</td>
                <td><?php
if (preg_match("/^[0-9]+$/i", $kpl_star[4])) {
if (!empty($kpl_star[4])) {
        $numa=(string)$kpl_star[4];
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
    <?php echo preg_replace('/\s+/','',$kpl_star[4].$jodia); ?></td>
                <td>07:00 PM</td>
                <td><?php
if (preg_match("/^[0-9]+$/i", $kpl_star[10])) {
if (!empty($kpl_star[10])) {
        $numa=(string)$kpl_star[10];
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
    <?php echo preg_replace('/\s+/','',$kpl_star[10].$jodia); ?></td>
            </tr>
            <tr>
                <td>02:00 PM</td>
                <td><?php
if (preg_match("/^[0-9]+$/i", $kpl_star[5])) {
if (!empty($kpl_star[5])) {
        $numa=(string)$kpl_star[5];
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
    <?php echo preg_replace('/\s+/','',$kpl_star[5].$jodia); ?></td>
                <td>08:00 PM</td>
                <td><?php
if (preg_match("/^[0-9]+$/i", $kpl_star[11])) {
if (!empty($kpl_star[11])) {
        $numa=(string)$kpl_star[11];
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
    <?php echo preg_replace('/\s+/','',$kpl_star[11].$jodia); ?></td>
            </tr>
            <tr>
                <td>03:00 PM</td>
                <td><?php
if (preg_match("/^[0-9]+$/i", $kpl_star[6])) {
if (!empty($kpl_star[6])) {
        $numa=(string)$kpl_star[6];
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
    <?php echo preg_replace('/\s+/','',$kpl_star[6].$jodia); ?></td>
                <td>09:00 PM</td>
                <td><?php
if (preg_match("/^[0-9]+$/i", $kpl_star[12])) {
if (!empty($kpl_star[12])) {
        $numa=(string)$kpl_star[12];
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
    <?php echo preg_replace('/\s+/','',$kpl_star[12].$jodia); ?></td>
            </tr>
        </tbody>
    </table>
</div>