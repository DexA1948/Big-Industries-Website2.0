DROP TABLE IF EXISTS youtubevideos_table;
CREATE TABLE youtubevideos_table
(
  id              char(7),
  link            varchar(255) NOT NULL,                      

  PRIMARY KEY     (id)
);