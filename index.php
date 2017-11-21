<?php
require 'model/template_class.php';
//echo __DIR__;


//echo $_SERVER['HTTP_REFERER'];
//echo $_SERVER['REQUEST_URI']; // show full request
//echo $_SERVER['PHP_SELF'];
//echo $_SERVER['QUERY_STRING'];
//echo __DIR__;
//echo $_REQUEST['route']; // show small request
//echo $_SERVER['PATH_INFO'];
//print_r($_GET);
$options = $_GET;


session_start();
/* saveJSONToFile(json_encode(setActionAccessRules()), 'pwd/accessrules.json'); */
// saveJSONToFile(json_encode(setActionAccessRules()), 'pwd/accessrules1.json');


//$_SESSION['action'] = 'error';
$_SESSION['action'] = $_REQUEST['route'];
$_SESSION['operation'] = 'read';
$_SESSION['usr'] = 'admin';

if (empty($_SESSION['action'])) {
  $_SESSION['action'] = 'home';
}
    /*
     * if (($_REQUEST['l_name'] != "") && ($_REQUEST['p_name'] != "")) {
     * auth($_REQUEST['l_name'], $_REQUEST['p_name']);
     * } elseif (($_POST['l_name'] != "") && ($_POST['p_name'] != "")) {
     * auth($_POST['l_name'], $_POST['p_name']);
     * } elseif (($_SESSION['usr'] != 'guest') && ($_SESSION['usr'] != '')) {
     * echo "</br>" . "=========== SESSION ===================";
     * echo "</br>" . $_SESSION['usr'];
     * } elseif (($_SESSION['usr'] === 'guest')) {
     * show_html("Login or password can't be empty!");
     * } else {
     * show_html("");
     * }
     */
//} else {
    if (! checkAccessRules($_SESSION['action'], $_SESSION['operation'], $_SESSION['usr'])) {
      //  $_SESSION['action'] = 'api1';
      //  $_SESSION['operation'] = 'read';
      //  $_SESSION['action_mess'] = 'Access denied';
    }
    goOver($_SESSION['action'], $_SESSION['operation'], $options);
//}
//echo $_REQUEST['route'];

//addRules();
//delRules('temp2');


function checkAccessRules($action, $operation, $usr)
{
    $rules = setActionAccessRules();
    if (in_array($usr, get_object_vars(get_object_vars($rules)[$action])[$operation])) {
        return true;
    }
    return false;
}

function setActionAccessRules()
{
    return json_decode(readTxtFile('pwd/accessrules.json'));
}

function delRules($delAction)
{
    $rules = get_object_vars(setActionAccessRules());
    unset($rules[$delAction]);
    saveJSONToFile(json_encode($rules), 'pwd/accessrules.json');
}

function addRules($addAction)
{
    $rules = get_object_vars(setActionAccessRules());
    saveJSONToFile(json_encode($rules += $addAction), 'pwd/accessrules.json');
}

function goOver($action, $operation, $options)
{
  //echo $action;
    switch ($action) {
        case 'logout':
          //session_destroy();
          showLogin();
          // after login need set start page for each user
          break;
        case 'login':
          showLogin();
          break;
        case 'home':
          showHome();
          break;
        case 'listdevices':
          showAdmin();
          // after login need set start page for each user
          break;
        case 'api1':
        echo 'api1';
          showApi1($options);
          // after login need set start page for each user
          break;
        case 'settings':
          showAdmin();
          // after login need set start page for each user
          break;
        case 'error':
            showError();
            // after login need set start page for each user
            break;
    }
}

function saveJSONToFile($jsonStr, $filename)
{
    $fd = fopen($filename, "w");
    if (! $fd)
        exit("File can't be written!");
    flock($fd, LOCK_EX);
    fwrite($fd, $jsonStr);
    fflush($fd);
    flock($fd, LOCK_UN);
    fclose($fd);
}

function readTxtFile($filename)
{
    $fd = fopen($filename, "r");
    if (! $fd)
        exit("Can't open file " . $filename . "!");
    $str = fread($fd, filesize($filename));
    fclose($fd);
    return $str;
}

/********************************************
MODEL
*********************************************/
function getModelText() {
//$fileWithModelPath = 'template/' . 'blocks/' . 'devicepanel.html';
$fileWithModelPath = 'template/' . 'template.html';
$str = '';
if (file_exists($fileWithModelPath))
{
  $str = readTxtFile($fileWithModelPath);
     //include $fileWithModelPath;
}
return $str;
}


/********************************************
SHOW JSON API
*********************************************/
function showApi1($options) {
  echo " set_ip = " . $options['set_ip'];
  return true;
}

/********************************************
SHOW PAGES
*********************************************/
function showLogin() {
  $tpl = new template_class();
  $fileWithModelPath = 'template/template.tpl';
  $tpl->get_tpl(readTxtFile($fileWithModelPath));
  $fileWithModelPath = 'template/' . 'blocks/' . 'mainloginform.tpl';
  $tpl->set_value('content', readTxtFile($fileWithModelPath));
  $tpl->tpl_parse();
  echo $tpl->html;
}

function showHome() {
  $tpl = new template_class();
  $fileWithModelPath = 'template/template.tpl';
  $tpl->get_tpl($fileWithModelPath);
  $txtHeader = 'template/' . 'blocks/' . 'simpleheader.tpl';
  $txtMainMenu = 'template/' . 'blocks/' . 'hmainmenu.tpl';
  $txtTPL = readTxtFile($txtHeader) . readTxtFile($txtMainMenu);
  $tpl->set_value('content', $txtTPL);
  $tpl->tpl_parse();
  echo $tpl->html;
}

function showError() {
  $tpl = new template_class();
  $fileWithModelPath = 'template/template.tpl';
//  $tpl->get_tpl(readTxtFile($fileWithModelPath));
  $tpl->get_tpl($fileWithModelPath);
  $fileWithModelPath = 'template/' . 'blocks/' . 'err.tpl';
  $tpl->set_value('content', readTxtFile($fileWithModelPath));
  $tpl->tpl_parse();
  echo $tpl->html;
}

function showAdmin() {
  $tpl = new template_class();
  $fileWithModelPath = 'template/template.tpl';
  $tpl->get_tpl($fileWithModelPath);
  $fileWithModelPath = 'template/' . 'blocks/' . 'admin.tpl';
  $tpl->set_value('content', readTxtFile($fileWithModelPath));
  $tpl->tpl_parse();
  echo $tpl->html;
}

?>
