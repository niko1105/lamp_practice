<?php
require_once '../conf/const.php';
require_once MODEL_PATH . 'functions.php';
require_once MODEL_PATH . 'user.php';
require_once MODEL_PATH . 'item.php'; 
require_once MODEL_PATH . 'order_detail.php';

session_start();

if(is_logined() === false){
  redirect_to(LOGIN_URL);
}

$db = get_db_connect();
$user = get_login_user($db);
$order_id = get_post('order_id');
$order = select_order($db,$order_id);
$token = get_post('csrf_token');

$order_details = get_order_details($db, $order_id);

include_once VIEW_PATH . 'order_detail_view.php';