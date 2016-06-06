<style>
    table, th, td {
        border: 1px solid #3c28a4;
        border-collapse: collapse;
    }
    th, td {
        padding: 5px;
    }
</style>

<?php
    $infos = ["Name" => "Valeh", "Lastname" => "ASADLI", "Age" => 21];
?>

<table style="width:100%">

    <tr>
        <?php foreach ($infos as $key => $val): ?>
            <th><?php echo $key; ?></th>
        <?php endforeach; ?>
    </tr>
    <tr>
        <?php foreach ($infos as $key => $val): ?>
            <td><?php echo $val . "<br>"; ?></td>
        <?php endforeach; ?>
    </tr>
</table>