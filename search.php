<div class="container__list">
    <div class="card">
        <h2 class="card__header">
            Suche
        </h2>
        <div class="card__body notification">
        <table>
            <tr>
                <th>Artist(s)</th>
                <th>Art</th>
                <th>Title eng</th>
                <th>Title de</th>
                <th>Seiten</th>
                <th>Komplett</th>
                <th>Übersetzt</th>
                <th>In bearbeitung</th>
                <th>Actions</th>
            </tr>
            <?php
                $results = $crud->searchList($search);
                foreach($results as $row) {
                    ?>
            <tr>
                <td><?= $row["artists"]; ?></td>
                <td><?= $row["art"]; ?></td>
                <td><?= $row["title_eng"]; ?></td>
                <td><?= $row["title_de"]; ?></td>
                <td class="seiten"><?= $row["sites"]; ?></td>
                <?php if($row['complete'] == 0) { ?>
                    <td><center><span class="icon icon-checkbox-unchecked"></span></center></td>
                <?php }else{?>
                    <td><center><span class="icon icon-checkbox-checked"></span></center></td>
                <?php }  ?>
                <?php if($row['translated'] == 0) { ?>
                    <td><center><span class="icon icon-checkbox-unchecked"></span></center></td>
                <?php }else{?>
                    <td><center><span class="icon icon-checkbox-checked"></span></center></td>
                <?php }  ?>
                <?php if($row['editing'] == 0) { ?>
                    <td><center><span class="icon icon-checkbox-unchecked"></span></center></td>
                <?php }else{?>
                    <td><center><span class="icon icon-checkbox-checked"></span></center></td>
                <?php }  ?>
                <td><a class="btn btn-primary" href="index.php?edit=<?= $row["id"]; ?>">EDIT</a></td>
            </tr>
            <?php    }
            ?>
            <?php
            unset($array); //Löschen von Variablen
            foreach($results as $row) {
            $array[] = $row["sites"];
            $summe=array_sum($array); //Hier werden alle im Array enthaltenen Zahlen addiert
            }
            ?>
            <tr>
                <td colspan="9" class="seiten">Seiten/Bilder Gesammt: <?= $summe; ?></td>
            </tr>
            </table>
        </div>
    </div>
</div>