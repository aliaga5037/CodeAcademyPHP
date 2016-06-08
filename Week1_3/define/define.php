<?php
//
//    define("site", "follow.az");
//    echo site;
?>
<form action="" method="post">
    <label><input type="checkbox" name="meyveler[]" value="elma"/> Elma</label><br/>
    <label><input type="checkbox" name="meyveler[]" value="armut"/> Armut</label><br/>
    <label><input type="checkbox" name="meyveler[]" value="cilek"/> Çilek</label><br/>
    <label><input type="checkbox" name="meyveler[]" value="muz"/> Muz</label><br/>
    <input type="submit" value="Tamam">
</form>

<?php
if(isset($_POST['meyveler'])) {
    $meyveler = $_POST['meyveler'];

    echo 'Seçtiğiniz meyveler: <br/>';

    foreach($meyveler as $meyve) {
        echo ' * ' . $meyve . ' <br/>';
    }
} else {
    echo 'Hiç meyve seçmediniz.';
}
?>