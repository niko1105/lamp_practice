CREATE TABLE purchase_history (
    order_id INT AUTO_INCREMENT,
    user_id INT,
    purchase_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    item_name VARCHAR(100) COLLATE utf8_general_ci,
    price INT DEFAULT 0,
    amount INT DEFAULT 0,
    primary key(order_id)
);

-- 第１正規化
CREATE TABLE purchase_details (
    order_id INT AUTO_INCREMENT,
    item_name VARCHAR(100) COLLATE utf8_general_ci,
    price INT DEFAULT 0,
    amount INT DEFAULT 0,
    primary key(order_id)
);



