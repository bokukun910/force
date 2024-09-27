<?php
session_start();
require_once './processing.php';

$jsondata = file_get_contents("php://input");
$post_data = json_decode($jsondata, true);

// jsデータ確認用
// $response = $post_data['requestdata'];
// echo json_encode($response);

//確認時この下から消す
$model = $post_data['model'];
$action = $post_data['action'];
$content = $post_data['requestdata'];
$instance = new $model;

// $res = $instance->__construct();
$res = $instance->$action($content);
// // 上のコードでやっていることの中身
// // if ($action == 'signup') {
// //     $res = $instance->signup($content);
// // } elseif ($action == 'view_mentor') {
// //     $res = $instance->view_mentor();
// // }
echo json_encode($res);
