<?php

require_once dirname(__FILE__) . '/../config.php';

require_once $conf->root_path.'/app/CalcCtrl.class.php';

$ctrl = new CalcCtrl();
$ctrl->process();

/*
function getParams(&$form) {
    $form['amount'] = isset($_REQUEST ['amount']) ? $_REQUEST['amount'] : null;
	$form['years'] = isset($_REQUEST ['years']) ? $_REQUEST['years'] : null;
	$form['interest'] = isset($_REQUEST ['interest']) ? $_REQUEST['interest'] : null;
}

function validate(&$form,&$messages){
    if ( ! (isset($form['amount']) && isset($form['years']) && isset($form['interest']))) {
        return false;
    }

    if ($form['amount'] == "") {
        $messages [] = 'Nie podano kwoty pożyczki';
    }
    if ($form['years'] == "") {
        $messages [] = 'Nie podano liczby lat';
    }
    if ($form['interest'] == "") {
        $messages [] = 'Nie podano oprocentowania';
    }
    if (count($messages) != 0)
        return false;

    if (!is_numeric($form['amount'])) {
        $messages [] = 'Pierwsza wartość nie jest liczbą rzeczywistą';
    }
    if (!is_numeric($form['years'])) {
        $messages [] = 'Druga wartość nie jest liczbą rzeczywistą';
    }
    if (!is_numeric($form['interest'])) {
        $messages [] = 'Trzecia wartość nie jest liczbą rzeczywistą';
    }
    if (count($messages) != 0)
        return false;
    else
        return true;
}

function process(&$form, &$messages, &$result) {
    //global $role;

    $form['amount'] = intval($form['amount']);
	$form['years'] = intval($form['years']);
	$form['interest'] = floatval($form['interest']);

    $result = ($form['amount']/($form['years']*12)) + ($form['amount']/($form['years']*12) * ($form['interest']/100));
}

$form = null;
$result = null;
$messages = array();

getParams($form);
if(validate($form,$messages)){
	process($form,$messages,$result);
}

$smarty = new Smarty();

$smarty->assign('app_url',$conf->app_url);
$smarty->assign('root_path',$conf->root_path);
$smarty->assign('page_title','Credit-Calc');
$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header','Szablony Smarty');

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);

// 5. Wywołanie szablonu
$smarty->display($conf->root_path.'/app/calc_view.tpl');
*/