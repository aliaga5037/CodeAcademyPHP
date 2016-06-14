<?php
// Shirket ucun Ishcilerin siyahisi yaradilmalidir, yaradilan butun ishcilerin siyahisi table
// sheklinde muvafiq melumatlarla ekrana cixmali ve hal hazirki gunde dogum gunu olan ishcinin
// melumatlari qirmizi rengle yazilmalidir.
class Workers {
    public $infos = [];
    public $currentDate;

    public function addWorker($name, $lastname, $pos, $birth){
        $person = [$name, $lastname, $pos, $birth];
        array_push($this->infos, $person);
    }
    
    public function getDate() {
        return $this->currentDate = date("d/m");
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Company</title>
</head>
<body>
<table>
    <tr>
        <th>Ad</th>
        <th>Soyad</th>
        <th>Status</th>
        <th>Dogum tarixi</th>
    </tr>

    <?php
        $workers = new Workers;
        $workers->addWorker("Valeh","ASADLI","Developer","14/04");
        $workers->addWorker("Orxan","Abbaslı","Developer","13/06");
        $today = $workers->getDate();
    ?>

        <?php for($i = 0; $i < count($workers->infos); $i++): ?>
            <tr>
                <?php foreach ($workers->infos[$i] as $users): ?>
                    <?php if ($users == $today){ ?>
                        <td style="color: red;"><?php echo $users; ?></td>
                    <?php } else { ?>
                        <td><?php echo $users; ?></td>
                    <?php } ?>
                <?php endforeach; ?>
            </tr>
        <?php endfor; ?>
</table>
</body>
</html>