<?php
    
    
    switch ($_REQUEST['action']){
        case 'catalog':
            include_once('./goods.php');
            $goods = new goods;
            echo json_encode($goods -> getList());
        break;
        case 'card':
           
        break;
        case 'basket':
           include_once('./basket.php');
        break;
    }
    

