create table free (
   num int not null auto_increment,
   id varchar(15) not null,
   name  varchar(10) not null,
   subject varchar(100) not null,
   content text not null,
   regist_day varchar(20),
   hit int,
   is_html varchar(1),
   file_name_0 varchar(40),
   file_name_1 varchar(40),
   file_copied_0 varchar(30),
   file_copied_1 varchar(30),
   primary key(num)
)engine=innoDB charset=utf8;

