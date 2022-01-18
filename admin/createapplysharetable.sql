DROP TABLE IF EXISTS applyshare_table;
CREATE TABLE applyshare_table
(
  id                    smallint unsigned NOT NULL auto_increment,
  submittedDate         date NOT NULL,                              
  petitionername        varchar(200) NOT NULL,                      
  contactnumber         varchar(20) NOT NULL,
  email                 varchar(200),
  currentaddress        varchar(200),   
  citizenshipaddress    varchar(200),  
  changedaddress        varchar(200),   
  appliedkitta          varchar(11) NOT NULL,
  appliedamount         varchar(11) NOT NULL,
  depositedamount       varchar(11) NOT NULL,
  sourceoffund          varchar(200) NOT NULL,
  petitionerphoto       varchar(500) NOT NULL,
  voucherphoto          varchar(500) NOT NULL,
  citizenshipphoto      varchar(500) NOT NULL,                             

  PRIMARY KEY     (id)
);