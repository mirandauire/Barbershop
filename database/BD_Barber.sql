alter table cliente drop column CPF;

alter table cliente add column CPF varchar(20) not null unique;

alter table cliente add column senha varchar(20) not null unique;

alter table cliente add column email varchar(20) not null unique;