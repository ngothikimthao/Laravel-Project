
-- Hàm tính tổng giá trị mặt hàng hết hạn sử dụng.
delimiter $$
CREATE DEFINER=`root`@`localhost` FUNCTION `loss_amount`() RETURNS int(11)
begin
 declare loss_amount int default 0;
 set loss_amount = (select sum(products.sale_price * products.quantity) as total  from products where status=0);
 return loss_amount ;
end $$
delimiter ;
SHOW CREATE view view_products;
-- Hiển thị ra danh sách khách hàng mua nhiều hơn 10 đơn hàng. Để làm thẻ thành viên và nhận ưu đãi
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_customer_orders` AS
 select `customers`.`cus_id` AS `cus_id`,`customers`.`cus_name` AS `cus_name`,count(`orders`.`ord_id`) AS `count(orders.ord_id)`
 from (`orders` left join `customers` on((`customers`.`cus_id` = `orders`.`cus_id`)))
 group by `customers`.`cus_id` 
 having (count(`orders`.`ord_id`) > 10);
-- Hiển thị tất cả các sản phẩm có danh mục là son môi. Để khách hàng có thể tìm kiếm dễ dàng hơn
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_list_products` AS 
select `products`.`prod_id` AS `prod_id`,`products`.`prod_name` AS `prod_name`,`products`.`sale_price` AS `sale_price` 
from (`products` left join `categories` on(((`products`.`cat_id` = `categories`.`cat_id`) and (`categories`.`cat_name` = 'son môi')))) 
group by `categories`.`cat_id`;
-- Hiển thị tất cả các sản phẩm có giá dưới 200000
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_products` AS 
select `products`.`prod_id` AS `prod_id`,`products`.`prod_name` AS `prod_name`,`products`.`sale_price` AS `sale_price`,`suppliers`.`sup_name` AS `sup_name` 
from (`products` join `suppliers`) where ((`products`.`sale_price` < 200000) and (`products`.`sup_id` = `suppliers`.`sup_id`));
-- Trạng thái của sản phẩm chỉ có thể là 0 hoặc 1;
drop trigger if exists `Error_product_insert_validation_status`;
delimiter $$
create trigger `Error_product_insert_validation_status`
before insert on productview_customer_orders
for each row
begin 
	if ( new.status != 0 or new.status != 1) then 
	signal sqlstate '45000'
	set message_text= 'the product inserted is invalid, status is only 0 or 1! ';
	end if;
end$$
delimiter ;
-- Nếu số lượng sản phẩm order lớn hơn số lượng còn có trong kho thì không cho phép
drop trigger if exists `Error_prod_orders_insert`;
delimiter $$
create trigger `Error_prod_orders_insert`
before insert on prod_orders
for each row
begin 
	if ( new.quantity < 0 or new.quantity >
		(select product.quantity from product where new.prod_id=product.id)) then 
	signal sqlstate '45000'
	set message_text= 'the prod_orders inserted is invalid, its quantity must be smaller than in product';
	end if;
end$$
delimiter ;
-- Giá của sản sẩm và số lượng nhập vào phải lớn hơn 0;
drop trigger if exists `Error_product_insert_validation_quantity_price`;
delimiter $$
create trigger `Error_product_insert_validation_quantity_price`
after insert on product
for each row
begin 
if ( new.quantity < 0 or new.price < 0) then 
signal sqlstate '45000'
set message_text= 'the product inserted is invalid, price or quantity <0  ';
end if;
end$$
delimiter ;
-- Sản phẩm order phải có trạng thái =1;
drop trigger if exists `insert_validation_status`;
delimiter $$
create trigger `insert_validation_status`
before insert on prod_orders
for each row
begin 
	if ( (select product.status from product where product.id = new .prod_id) != 1) then 
	signal sqlstate '45000'
	set message_text= 'the product inserted is invalid, status is 1';
	end if;
end$$
delimiter ;
-- Thay đổi số lượng sản phẩm thì ghi vào bảng product_audit
create table product_audit(
prod_id int,
message varchar(255)
);
DROP TRIGGER IF EXISTS `PRODUCT_UPDATE_QUANTITY`;
DELIMITER $$
CREATE TRIGGER `PRODUCT_UPDATE_QUANTITY` AFTER UPDATE ON `products`
FOR EACH ROW
BEGIN
	IF OLD.quantity != NEW.quantity THEN
	INSERT INTO product_audit
	(prod_id, message) 
	VALUES 
	(OLD.prod_id, CONCAT('the quantity changes from', old.quantity, 'to', New.quantity));
	END IF;
END$$
DELIMITER ;

DROP TRIGGER IF EXISTS `PRODUCT_UPDATE_PRICE`;
DELIMITER $$
CREATE TRIGGER `PRODUCT_UPDATE_PRICE` AFTER UPDATE ON `products`
FOR EACH ROW
BEGIN
	IF OLD.price != NEW.price THEN
	INSERT INTO product_audit
	(prod_id, message) 
	VALUES 
	(OLD.prod_id, CONCAT('the price changes from', old.price, 'to', New.price));
	END IF;
END$$
DELIMITER ;
-- 
create table expired_product(
prod_id int,
prod_name varchar(255),
message varchar(255)
);
DROP TRIGGER IF EXISTS `PRODUCT_UPDATE_STATUS`;
DELIMITER $$
CREATE TRIGGER `PRODUCT_UPDATE_STATUS` AFTER UPDATE ON `products`
FOR EACH ROW
BEGIN
	IF OLD.expired_date - curdate() <0 THEN
     begin
		update product set status = 0;
		INSERT INTO expired_product
		(prod_id,prod_name, message) 
		VALUES 
		(OLD.prod_id, OLD.prod_name,CONCAT('the date changes from', old.status, 'to', New.status));
    end;
	END IF;
END$$
DELIMITER ;

select * from products;
-- update status
delimiter $$

create procedure update_prod_status(){
	update products set status = 0 where  expired_date - curdate() < 0 ;
}
delimiter ;






