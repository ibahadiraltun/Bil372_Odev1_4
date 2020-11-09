use imece;
create table brand_orgs (
	lot_id int not null auto_increment,
    org_id integer,
    brand_barcode char(13),
    quantity float,
    unit varchar(13),
    expiry_date date,
    baseprice integer,
    amount_in float,
    amount_ex float,
	primary key (lot_id, org_id, brand_barcode, expiry_date)
);