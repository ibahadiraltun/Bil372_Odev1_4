use imece;
CREATE TABLE organizations (
	org_id int not null auto_increment,
	org_name varchar(20),
	parent_org int,
	org_abstract binary,
	org_address varchar(200),
	org_city integer,
	org_district varchar(50),
	org_type int,
	primary key (org_id)
);
