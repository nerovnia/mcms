<?php
// session_destroy();
session_start();
echo "</br>" . "Session 1 usr: " . $_SESSION['usr'];
//echo "</br>" . "Session 1 action: " . $_SESSION['action'];
if (($_SESSION['action'] === '')||($_SESSION['action'] === 'login')) {
    if (($_REQUEST['l_name'] != "") && ($_REQUEST['p_name'] != "")) {
        auth($_REQUEST['l_name'], $_REQUEST['p_name']);
    } elseif (($_POST['l_name'] != "") && ($_POST['p_name'] != "")) {
        auth($_POST['l_name'], $_POST['p_name']);
    } elseif (($_SESSION['usr'] != 'guest') && ($_SESSION['usr'] != '')) {
        echo "</br>" . "===========    SESSION    ===================";
        echo "</br>" . $_SESSION['usr'];
    } elseif (($_SESSION['usr'] === 'guest')) {
        show_html("Login or password can't be empty!");
    } else {
        show_html("");
    }
} else {
    switch ($_SESSION['action']) {
        case 'enter_admin':
            echo 'You enter to admin panel action!';
            break;
        case '':
            $_SESSION['usr'] = 'guest';
            show_html("");
            $_SESSION['action'] = 'login';
            break;
        case '':
            break;
        case '':
            break;
        case '':
            break;
        case '':
            break;
        case '':
            break;
        case '':
            break;
        case '':
            break;
        default:
    }
}

function auth($login, $password)
{
    echo "auth()";
    /*
     //    session_destroy();
     //    session_start();
     $_SESSION['usr'] = 'guest';
     if (($login > 30) || ($password > 30)) {
     show_html("Login or password limit of chars!");
     } else {
     $json = readAuthJSON();
     foreach ($json as $e) {
     if (($login === $e->{'login'}) && ($password === $e->{'password'})) {
     echo "</br>" . "========================";
     $_SESSION['action'] = 'enter_admin';
     $_SESSION['usr'] = $login;
     show_homepage();
     break;
     } else {
     $_SESSION['action'] = 'login';
     show_html("login or password is wrong!");
     }
     }
     }
     */
}

function show_html($err)
{
    echo "show_html()";
    /*
     $mainloginform = readFile("template/blocks/mainloginform.html");
     include "template/template.html";
     */
}

function show_homepage()
{
    echo "show_homepage()";
    /*
     include "template/template.html";
     */
}


function readAuthJSON()
{
    echo "readAuthJSON()";
    /*
     $filename = "pwd/sequrity";
     $fd = fopen($filename, "r");
     if (! $fd)
     exit("Can't open file sequrity!");
     $str = fread($fd, filesize($filename));
     fclose($fd);
     */
     return json_decode(readFile("pwd/sequrity.json"));
     /*
      * while(list($key, $val) = each($jsdec)) {
      * echo $key . "</br>";
      * echo $val . "</br>";
      * }
      */
}

/*
function readFile($filename) {
    echo "readFile()";
    
     $fd = fopen($filename, "r");
     if (! $fd)
     exit("Can't open file " . $filename . "!");
     $str = fread($fd, filesize($filename));
     fclose($fd);
     return $str;
     
}
*/
     
     
     /*
      * $rules = array(
      * "login" => array(
      * read => array("admin", "user", "guest"),
      * write => array("admin", "user", "guest")
      * ),
      * "home" => array(
      * read => array("admin", "user", "guest"),
      * write => array("admin", "user", "guest")
      * ),
      * "admin" => array(
      * read => array("admin"),
      * write => array("admin")
      * ),
      * "listdevices" => array(
      * read => array("admin", "user"),
      * write => array("admin")
      * ),
      * "devicessettings" => array(
      * read => array("admin", "user"),
      * write => array("admin", "user")
      * ),
      * "setdeviceto" => array(
      * read => array("admin", "user"),
      * write => array("admin", "user")
      * ),
      * "error" => array(
      * read => array("admin", "user", "guest"),
      * write => array("admin")
      * ),
      * );
      * return $rules;
      */
     
     /*
           $rules1 = array(
        "temp1" => array(
            read => array(
                "admin",
                "user",
                "guest"
            ),
            write => array(
                "admin",
                "user",
                "guest"
            )
        ),
        "temp2" => array(
            read => array(
                "admin",
                "user",
                "guest"
            ),
            write => array(
                "admin",
                "user",
                "guest"
            )
        )
    );

      */
?>