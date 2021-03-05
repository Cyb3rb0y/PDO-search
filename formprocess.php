<?php
    session_start();
    require_once 'classes/crud.php';

    $crud = new Crud();

    if(isset($_POST['submit'])){
        if(isset($_POST['artists']) && !empty($_POST['artists']) &&
            isset($_POST['art']) && !empty($_POST['art']) &&
            isset($_POST['title_eng']) && !empty($_POST['title_eng']) &&
            isset($_POST['title_de']) && !empty($_POST['title_de']) &&
            isset($_POST['sites']) && !empty($_POST['sites']) &&
            isset($_POST['complete']) && !empty($_POST['complete']) &&
            isset($_POST['translated']) && !empty($_POST['translated']) &&
            isset($_POST['editing']) && !empty($_POST['editing'])
        ){
            $artists    = $_POST['artists'];
            $art        = $_POST['art'];
            $title_eng  = $_POST['title_eng'];
            $title_de   = $_POST['title_de'];
            $sites      = $_POST['sites'];
            $complete   = $_POST['complete'];
            $translated = $_POST['translated'];
            $editing    = $_POST['editing'];

            if($crud->createComiclist($artists,$art,$title_eng,$title_de,$sites,$complete,$translated,$editing)){
                $_SESSION['msg-class'] = "success";
                $_SESSION['msg'] = "Eintragen war erfolgreich";
                header('location: index.php');
            }else{
                $_SESSION['msg-class'] = "danger";
                $_SESSION['msg'] = "Es ging etwas schief!";
                header('location: index.php');
            }
        }
    
    }
    if(isset($_POST['update'])){
        if(isset($_POST['artists']) && !empty($_POST['artists']) &&
            isset($_POST['art']) && !empty($_POST['art']) &&
            isset($_POST['title_eng']) && !empty($_POST['title_eng']) &&
            isset($_POST['title_de']) && !empty($_POST['title_de']) &&
            isset($_POST['sites']) && !empty($_POST['sites']) &&
            isset($_POST['complete']) && !empty($_POST['complete']) &&
            isset($_POST['translated']) && !empty($_POST['translated']) &&
            isset($_POST['editing']) && !empty($_POST['editing']) &&
            isset($_POST['id']) && !empty($_POST['id'])
        ){
            $artists    = $_POST['artists'];
            $art        = $_POST['art'];
            $title_eng  = $_POST['title_eng'];
            $title_de   = $_POST['title_de'];
            $sites      = $_POST['sites'];
            $complete   = $_POST['complete'];
            $translated = $_POST['translated'];
            $editing    = $_POST['editing'];
            $id         = $_POST['id'];

            if($crud->updateList($id,$artists,$art,$title_eng,$title_de,$sites,$complete,$translated,$editing)){
                $_SESSION['msg-class'] = "success";
                $_SESSION['msg'] = "Update war erfolgreich";
                header('location: index.php');
            }else{
                $_SESSION['msg-class'] = "danger";
                $_SESSION['msg'] = "Es ging etwas schief!";
                header('location: index.php');
            }
            
        }
    
    }
    // Wir ausgefürt 
    if (isset($_POST['subsearch'])){
        if(isset($_POST['search']) && !empty($_POST['search'])){
            $search    = $_POST['search'];
            if($crud->searchList($search)){
                $_SESSION['msg-class'] = "success";
                $_SESSION['msg'] = "Ergebnisse für <strong>".$search."</strong>";
                // soll später die anzahl der aus gelesenen Elemente anzeigen
                // Bsp: (<strong>5</strong> von <strong>5</strong>)
                # ( <strong>1".$row."</strong> von <strong>1".$row."</strong> )";
                header('location: index.php');
            }else{
                $_SESSION['msg-class'] = "danger";
                $_SESSION['msg'] = 'Keine Ergebnisse für "'.$search.'"!';
                header('location: index.php');
            }
        }
    }
?>