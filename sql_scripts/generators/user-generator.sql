use imece;
create table users (
    user_id int not null auto_increment,
    org_id int,
    user_name varchar(20),
    user_password int,
    user_shortname varchar(20),
    user_surname varchar(20),
    primary key (user_id)
);