
<?php
include_once '../../../vendor/autoload.php';

$auth = new App\admin\auth\Auth;
$a=$auth->set($_POST);
var_dump($a);
