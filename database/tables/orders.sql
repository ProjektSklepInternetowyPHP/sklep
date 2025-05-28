drop table if exists orders;
create table orders (order_id int primary key auto_increment, ordered_date date not null, delivered_date date null, user_id int not null, address_id int not null);