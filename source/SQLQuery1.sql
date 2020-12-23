create database techweb
create TABLE admin(
	id int primary key AUTO_INCREMENT,
	username varchar(250),
	password varchar(250)
);
create table chitietphong(
	so_phong int, 
	thang int,
	ten_nguoi_thue varchar(250),
	so_dien_thoai text,
	email text,
	mo_ta text,
	dien int,
	nuoc int,
	dich_vu int,
	user varchar(250),
	id_phong int primary key AUTO_INCREMENT
);
create table phong(
	so_phong int,
	dia_chi text,
	dien_tich int,
	gia_phong int,
	user varchar(250)
);
create table taikhoan(
	id int primary key AUTO_INCREMENT,
	username varchar(250),
	password varchar(250),
	email text,
	so_dien_thoai text
);
create table tintuc(
	id_tintuc int primary key AUTO_INCREMENT,
	title text,
	mo_ta text,
	gia int,
	dien_tich int,
	dia_chi text, 	
	hinh_anh text
);
