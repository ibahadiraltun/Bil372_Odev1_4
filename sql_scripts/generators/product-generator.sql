use imece;
create table product (
	m_syscode int not null auto_increment,
    m_code varchar(15) unique,
    m_name varchar(25),
    m_shortname varchar(10),
	m_parentcode varchar (15),
    m_abstract binary,
    m_category varchar(12),
    is_active binary,
    primary key (m_syscode)
);