create database if not exists posible_tember;
use posible_tember;

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);


create table acuerdos_de_negocio(
	id int auto_increment,
    nombre varchar(20) not null,
    max_publicaciones int not null,
    min_publicaciones int not null,
	idUser int,
    
    constraint pk_acuerdo primary key (id),
    constraint fk_acuerdo_user foreign key (idUser) references `users`(id),
    constraint unq_acuerdo unique(nombre)
    );
    
create table objetivos(
	id int auto_increment,
    titulo varchar(255) not null,
    descripcion varchar(255) not null,
    idAcuerdo int,
    
    constraint pk_items primary key (id),
	constraint fk_objetivos_acuerdo foreign key (idAcuerdo) references acuerdos_de_negocio(id),
	constraint unq_objetivos unique(nombre)
    );

create table items(
	id int auto_increment,
    nombre varchar(255) not null,

    constraint pk_items primary key (id),
	constraint unq_items unique(nombre)
    );

create table items_x_acuerdo(
	id int auto_increment,
    idItem int,
    idAcuerdo int,
    fecha date not null,
    
    constraint pk_itemsx_acuerdo primary key (id),
	constraint fk_items_acuerdo foreign key (idAcuerdo) references acuerdos_de_negocio(id),
	constraint fk_acuerdo_items foreign key (idItem) references items(id)
    );
    
create table facturaciones(
	id int auto_increment,
    metodo varchar(20) not null,
	desde date,
	hasta date,
    idAcuerdo int,

    constraint pk_facturacion primary key (id),
    constraint fk_acuerdo_faacturacion foreign key (idAcuerdo) references acuerdos_de_negocio(id),
    );
