create table member(
  id varchar(10) not null,
  pass varchar(10) not null,
  name varchar(7) not null,
  hp varchar(15) not null,
  email varchar(35) not null,
  primary key(id)
)ENGINE=INNODB CHARSET=UTF8;