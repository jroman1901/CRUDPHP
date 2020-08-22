--Creación de la BD.
CREATE DATABASE php2 character set utf8;


CREATE TABLE usuarios (
id int(10) unsigned NOT NULL AUTO_INCREMENT,
nombres varchar(120) DEFAULT NULL,
app varchar(120) DEFAULT NULL,
apm varchar(120) DEFAULT NULL,
correo varchar(120) DEFAULT NULL,
PRIMARY KEY (id))




INSERT INTO usuarios (nombres, app, apm, correo) values 
('Marissa','Mayer','Mayer','mmayer@yahoo.com'),
('Elon','Musk','Maye','errolm@spacex.com'),
('Steve','Jobs','San','jobs@apple.com'),
('Sheryl','Sandberg','Fox','sheryl@feme.com'),
('Lea','Verou','Me','lea@verou.me'),
('Gustavo','Angulo','Dj','gustavo@djtavo.pe'),
('Boby','Fisher','Roque','fisher@fide.com');

