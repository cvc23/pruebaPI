create table states( 
    id int not null primary key, 
    name varchar(255) not null
);
create table municipalities(
    id int not null primary key, 
    name varchar(255) not null, 
    stateId int not null, 
    foreign key (stateId) references states(id) 
);
create table pdfMunicipalities( 
    id int not null primary key, 
    link varchar(255) not null, 
    municipalityId int not null, 
    foreign key (municipalityId) references municipalities(id) 
);

insert into states values(1, 'Jalisco');
insert into states values(2, 'Guanajuato');
insert into states values(3, 'Michoacan');
insert into states values(4, 'Queretaro');
insert into states values(5, 'Puebla');

insert into municipalities values(1, 'Guadalajara',1);
insert into municipalities values(2, 'Guanajuato',2);
insert into municipalities values(3, 'Morelia',3);
insert into municipalities values(4 , 'Santiago de queretaro',4);
insert into municipalities values(5, 'Puebla de zaragoza',5);
insert into municipalities values(6, 'Uruapan',3);
insert into municipalities values(7, 'Churumuco',3);

insert into pdfMunicipalities values(1, '/pdf/dummy.pdf', 1);
insert into pdfMunicipalities values(2, '/pdf/dummy.pdf', 2);
insert into pdfMunicipalities values(3, '/pdf/dummy.pdf', 3); 
insert into pdfMunicipalities values(4, '/pdf/dummy.pdf', 6); 
insert into pdfMunicipalities values(5, '/pdf/dummy.pdf', 7);
insert into pdfMunicipalities values(6, '/pdf/dummy.pdf', 4); 
insert into pdfMunicipalities values(7, '/pdf/dummy.pdf', 5); 



