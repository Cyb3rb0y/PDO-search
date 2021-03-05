<?php
    $urlDir = (isset($_GET["dir"])) ? $_GET["dir"] : ""; // Steht hinter der URL dann als z.b. seite.tld/album.php?dir=ordner/zweiter/

    $home="http://list.comix.de"; // Hier Ihre Domain
    $pie=explode("/",$urlDir);
    $tr=' > '; // Alternativ: '>',':', '/','|'
    $b=count($pie);

    // Page
    $page = '';
    $p = '';
    if (isset($_GET['page'])){$p = $_GET['page'];}
    if($p == 'impressum'){$page = 'impressum.php';}
?>

<div class="breadcrumb__links">
    <span class="breadcrumb__btd-home">
        <a href="<?= $home?>">
            <span class="icon icon-home"></span>
        </a>
    </span>
<?php
    if ($_GET['page']){
?>
    <span>
        <?= $tr ?>
        <a href="<?= $home ?>?page=<?= $p ?>">
            <span class="text"><?=$p?></span>
        </a>
    </span>
<?php
    }else{


    }
?>
</div>
<!-- Sollte so richtig sein -->
<div class="breadcrumb__search">
    <form method="post" action="formprocess.php">
        <input type="text" name="search" placeholder="Suchen"/>
        <input type="submit" name="subsearch" VALUES="Suchen" />
    </form>
</div>
