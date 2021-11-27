<?
require "libs/rb.php";
R::setup( 'mysql:host=localhost;dbname=vlad_users', 'root', '' );

$data = $_POST;

session_start();

unset($_SESSION["logged_user"]);

header('Location: /');