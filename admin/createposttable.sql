DROP TABLE IF EXISTS post_table;
CREATE TABLE post_table
(
  id              smallint unsigned NOT NULL auto_increment,
  publicationDate date NOT NULL,                              
  title           varchar(255) NOT NULL,                      
  summary         text,                              
  content         mediumtext,
  photopath       text,                       

  PRIMARY KEY     (id)
);