<?php
/**
 * Created by PhpStorm.
 * User: Valeh
 * Date: 6.06.2016
 * Time: 16:58
 */

$arr = [
    "coxDanisan" => ["Ferid", "İbrahim", 23],
    "uykucu" => ["Aysel", "Quliyev", 11],
    "aksioma" => ["Arzu", "Mammadblabla", 23],
    "yaxciOglan" => ["Cemil", "Ali", 12]
];
?>
<table>
    <tr>
        <th>Ad</th>
        <th>Soyad</th>
        <th>Yaş</th>
    </tr>

<?php foreach ($arr as $key => $val): ?>
    <tr>
        <?php for ($i = 0; $i < count($arr[$key]); $i++): ?>
            <td><?php echo $arr[$key][$i]; ?></td>
        <?php endfor;?>
    </tr>
<?php endforeach; ?>

</table>