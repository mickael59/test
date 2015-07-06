<?php

/**
 * The mega-shop loader and default handler file.
 * @package mega-shop
 * @subpackage core
 * @author mega-shop (contact@mega-shop.net)
 * @copyright mega-shop Project (http://www.mega-shop.net/)
 * @link http://www.mega-shop.net/
 * @license GPL (http://www.gnu.org/licenses/gpl.html)
 */
session_start();
require_once 'dryden/loader.inc.php';
require_once 'cnf/db.php';
debug_phperrors::SetMode('dev');
require_once 'inc/dbc.inc.php';
debug_phperrors::SetMode(ctrl_options::GetSystemOption('debug_mode'));
require_once 'inc/init.inc.php';
//This is where we check the session for hi-jacking
if(!runtime_sessionsecurity::antiSessionHijacking()){
    exit(header("location: ./?sessionIssue"));
}
?>
