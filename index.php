<?php
    session_start();
    $verion = '0.0.3';
    $dev = 'Cyb3rb0y';
    require_once 'formprocess.php';
?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
        <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./dist/style.css">
        <title>Liste</title>
    </head>
    <body>
        <div class="wapper">
            <div class="content">
                <!-- Header -->
                <header class="header">
                    <nav class="container container--pall flex flex-jc-sb flex-ai-c">
                        <a class"header__logo" href="/" >
                            <img src="./images/favicon-32x32.png" />
                        </a>
                        <!-- Alert Meldungen -->
                        <?php
                            if(isset($_SESSION['msg']) && isset($_SESSION['msg-class'])){
                        ?>
                            <div class="alert alert-my alert-<?= $_SESSION['msg-class'];?>" role="alert">
                                <?= $_SESSION['msg']; ?>
                            </div>
                        <?php
                            unset($_SESSION['msg']);
                            unset($_SESSION['msg-class']);
                            }
                        ?>
                        <a id="btnHamburger" href="#" class="header__toggle hide-for-desktop">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>

                        <div class="header__links hide-for-mobile">
                            <a href="/">Home</a>
                            <a href="#">Liste</a>
                            <a href="#">Form</a>
                        </div>
                    </nav>
                </header>

                <!-- Banner -->
                <div class="banner">
                </div>
                <!-- Breadcrumb -->
                <div class="breadcrumb">
                    <?php
                        include 'breadcrumbs.php';
                    ?>
                </div>
                <!-- Main Content -->
                <div class="main-content">
                    <?php
                        require_once 'form.php';
                        require_once 'list.php';
                        if(isset($_GET['edit'])){
                            $result = $crud->getList($_GET['edit']);
                            require_once 'edit_form.php';
                        }
                        // Wird nicht auf gerufen.
                        // Wo ist mein fehler hab schon alles mögliche versucht.
                        if(isset($_POST['subsearch'])){
                            $result = $crud->searchList($_POST['search']);
                            require_once 'search.php';
                        }
                    ?>
                </div>
                <div id="footer">
                    <div class="container-footer">
                        <div id="version" class="footerleft">
                            Version&nbsp; <?= $verion ?>
                        </div>
                        <div id="copyright" class="footercenter">
                        Design by <b><?= $dev ?></b>
                        </div>
                        <div id="date" class="footerright">
                        2020&nbsp;-&nbsp;2021 Developer <?= $dev ?></div>
                    </div>
                </div>
            </div>
        </div>
        <script src="./app/js/script.js"></script>
    </body>
</html>
