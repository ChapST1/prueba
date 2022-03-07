-- -------------------------------------------------------
-- Crear base de datos
-- -------------------------------------------------------
create database Sales;

use Sales;


-- -------------------------------------------------------
-- Crear base de tabla Brand
-- -------------------------------------------------------
create table Brand (
	cod_brand char(5) not null primary key,
    brand varchar(30) not null
);

-- -------------------------------------------------------
-- Crear base de tabla Product
-- -------------------------------------------------------
create table Product (
	cod_product char(5) not null primary key,
    product varchar(40) not null,
    stock int,
    price float,
    mesure char(1),
    cod_brand char(5) not null,
    foreign key (cod_brand) references Brand (cod_brand)
);


-- -------------------------------------------------------
-- Insertar datos a la tabla Customer
-- -------------------------------------------------------
create table Customer (
	cod_customer char(5) not null primary key,
    last_name varchar(40) not null,
    first_name varchar(40) not null,
    email varchar(40) not null,
    age int
    );
    
-- -------------------------------------------------------
-- Insertar datos a la tabla Supplier
-- -------------------------------------------------------
create table Supplier (
	cod_supplier char(5) not null primary key,
    bussines_name varchar(40) not null,
    contact_phone varchar(10) not null,
    email varchar(40) not null,
	bussines_category int
    );
    
-- -------------------------------------------------------
-- Insertar datos a la tabla Employee
-- -------------------------------------------------------
    create table Employee (
	cod_employee char(5) not null primary key,
    last_name varchar(40) not null,
    first_name varchar(40) not null,
    email varchar(60) not null,
	salary float
    );
   
-- -------------------------------------------------------
-- Insertar datos a la tabla Store
-- -------------------------------------------------------
    create table Store (
	cod_store char(5) not null primary key,
    name_store varchar(40) not null,
    district varchar(40) not null,
    province varchar(60) not null,
	quantity_employees float
    );


-- *******************************************************

-- -------------------------------------------------------
-- Insertar datos a la tabla Brand
-- -------------------------------------------------------
insert into Brand values
("M0001", "Costeño"),
("M0002", "Gloria"),
("M0003", "Del Valle"),
("M0004", "Coca Cola");
-- -------------------------------------------------------
-- Insertar datos a la tabla Product
-- -------------------------------------------------------
insert into Product values
("P0001", "Aceite", 150, 9.8, "L", "M0001"),
("P0002", "Gaseosa", 200, 6, "L", "M0004"),
("P0003", "Lentejas", 120, 7.3, "K", "M0003");

-- -------------------------------------------------------
-- Insertar datos a la tabla Customer
-- -------------------------------------------------------
insert into Customer values
("C0001", "Torres","Maria","tmaria@gmail.com", 25),
("C0002", "Alvarez","Rita","arita@gmail.com", 43),
("C0003", "Perez","Pedro","ppedro@gmail.com", 56);

-- -------------------------------------------------------
-- Insertar datos a la tabla Supplier
-- -------------------------------------------------------
insert into Supplier values
("S0001", "Provider1","987561247","pr1@company.com", 1),
("S0002", "Provider2","365478513","pr2@company.com", 2),
("S0003", "Provider3","874562147","pr3@company.com", 3);

-- -------------------------------------------------------
-- Insertar datos a la tabla Employee
-- -------------------------------------------------------
insert into Employee values
("E0001", "Hernandez","Roberto","hroberto@empresa.com", 930),
("E0002", "Fernadez","Olga","folga@empresa.com", 2500),
("E0003", "Rodriguez","Teresa","rteresa@empresa.com", 1500);


-- -------------------------------------------------------
-- Insertar datos a la tabla Store
-- -------------------------------------------------------
insert into Store values
("ST001", "SedePrincipal","Independencia","Lima", 120),
("ST002", "Sede1","Rimac","Lima", 42),
("ST003", "Sede2","Callao","Callao", 26);


-- -------------------------------------------------------
-- Procedimiento almacenado
-- -------------------------------------------------------
delimiter $$
create procedure BrandList()
begin
	select * from Brand order by Brand;
end; $$




