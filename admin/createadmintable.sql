DROP TABLE IF EXISTS admin_table;

CREATE TABLE admin_table (
    id smallint unsigned NOT NULL auto_increment,
    name varchar(100) NOT NULL,
    email varchar(100) NOT NULL,
    password varchar(100) NOT NULL,
    PRIMARY KEY (id)
);