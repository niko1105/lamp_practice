<?php
require_once '../conf/const.php';
require_once '../model/functions.php';
require_once '../model/user.php';
require_once '../model/item.php';

session_start();

if(is_logined() === false){
  redirect_to(LOGIN_URL);
}

$db = get_db_connect();
$user = get_login_user($db);
$sort_button = get_get('sort_button');
$sort = get_get('sort');
$items = get_items($db, $is_open, $sort);

$token = get_csrf_token();

include_once VIEW_PATH . 'index_view.php';