<?php 
    session_start();
    require_once('../models/allModels.php');
    $error = false;
    if(isset($_REQUEST['save']))
    {
        $null = false;
        if(empty(trim($_REQUEST['name'])) || empty(trim($_REQUEST['buyingPrice'])) || empty(trim($_REQUEST['sellingPrice'])))
        {
            header('location: ../views/index.php?empty');
            exit;
        }else
        {
            $result = set($_REQUEST['name'],$_REQUEST['buyingPrice'],$_REQUEST['sellingPrice']);
            if($result)
            {
                if(isset($_REQUEST['checked']))
                {
                    $_SESSION['display'] = true;
                    header('location: ../views/index.php?updated');
                }
                exit;
            }else $error = true;
        }
    }
    
    
    if($error)
    {
        header('location: ../views/index.php?error');
    }
?>