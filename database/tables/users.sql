drop table if exists users;
create table users (user_id int primary key auto_increment, username varchar(32) not null, password text not null);