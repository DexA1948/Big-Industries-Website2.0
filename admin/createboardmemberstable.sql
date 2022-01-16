DROP TABLE IF EXISTS boardmembers_table;

CREATE TABLE boardmembers_table (
    id smallint unsigned NOT NULL auto_increment,
    name varchar(100) NOT NULL,
    dob date,
    email varchar(200),
    address varchar(200),
    phoneno varchar(14),
    details text,
    photopath text,
    PRIMARY KEY (id)
);