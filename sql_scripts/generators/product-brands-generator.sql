use imece;
create table product_brands (
	brand_barcode varchar(13),
    m_syscode integer,
    brand_name varchar(100),
    manufacturer_id integer,
    primary key (brand_barcode, m_syscode)
);