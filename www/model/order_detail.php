<?php
require_once MODEL_PATH . 'functions.php';
require_once MODEL_PATH . 'db.php';

function insert_order_datail($db, $order_id, $item_id, $price, $amount){
      $sql = "
            INSERT INTO
            order_details(
            order_id,
            item_id,
            price,
            amount
            )
            VALUES(:order_id, :item_id, :price, :amount)
      ";
      $params = array(':order_id' => $order_id, ':item_id' => $item_id, ':price' => $price, 'amount' => $amount);
      return execute_query($db, $sql, $params);
}