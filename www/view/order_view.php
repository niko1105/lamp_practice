<!DOCTYPE html>
<html lang = "ja">
<head>
      <?php include VIEW_PATH . 'templates/head.php'; ?>
      <title>購入履歴画面</title>
      <link rel="stylesheet" href="<?php print h(STYLESHEET_PATH . 'order.css'); ?>">
</head>
<body>
<?php include VIEW_PATH . 'templates/header_logined.php'; ?>
  <h1>購入履歴</h1>
  <div class="container">

    <?php include VIEW_PATH . 'templates/messages.php'; ?>

    <?php if(count($orders) > 0){ ?>
      <table class="table table-bordered">
        <thead class="thead-light">
          <tr>
            <th>注文番号</th>
            <th>購入日時</th>
            <th>合計金額</th>
            <th>購入明細画面へ</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($orders as $order){ ?>
          <tr>
            <td><?php print h($order['order_id']);?></td>
            <td><?php print h($order['created']); ?></td>
            <td><?php print h(number_format($order['total_price'])); ?>円</td>
            <td>
              <form action="order_detail.php" method="get">
                <input type="submit" value="購入明細表示" class="btn btn-primary btn-block">
                <input type="hidden" name="order_id" value="<?php print h($order['order_id']);?>">
              </form>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <?php } else { ?>
      <p>カートに商品はありません。</p>
    <?php } ?> 
 </div>
</body>
</html>