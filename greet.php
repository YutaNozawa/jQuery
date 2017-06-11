<?php
/**
 * Created by PhpStorm.
 * User: hagez
 * Date: 2017/06/11
 * Time: 23:00
 */

// echo htmlspecialchars("hi!" . $_GET['name'], ENT_QUOTES, "utf-8");

$rs = array(
    "message" => htmlspecialchars("hi!" . $_GET['name'], ENT_QUOTES, "utf-8"),
    "length" => strlen($_GET['name'])
);

//ファイルの種類を知る方法の一つ
header('Content-Type: application/json; charset=utf-8');

echo json_encode($rs);

?>