<?php
/**
 * Created by PhpStorm.
 * User: Valeh
 * Date: 6.06.2016
 * Time: 15:10
 */

$arr =  [
    "name" => ["name1", "name2", "name3"],
    "last" => ["last1", "last2", "last3"],
    "ages" => [31,41,51]
];
?>

<table>
    <tr>
        <th>Name</th>
        <th>Lastname</th>
        <th>Age</th>
    </tr>

    <?php for($i = 0; $i < count($arr["name"]); $i++): ?>
        <tr>
            <?php foreach ($arr as $key => $val): ?>
                <td><?php echo $arr[$key][$i]; ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endfor; ?>

</table>