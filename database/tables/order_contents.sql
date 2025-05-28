drop table if exists order_contents;
create table order_contents (order_content_id int primary key auto_increment, order_id int not null, product_id int not null, amount int not null);