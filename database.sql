use pokedex;

create table Usuario(
nombre varchar(30),
pass varchar(30),
primary key(nombre)
);

create table Pokemon(
id int,
nombre varchar(30),
descripcion varchar(500),
tipo varchar (30),
imagen varchar(500),
primary key(id)
);


INSERT INTO Usuario (nombre,pass) 
		VALUES('temple','1234');


  INSERT INTO Pokemon (id,nombre,descripcion,tipo,imagen) 
		VALUES(1,'Bul','sapo1','planta','Bul'),
		VALUES(2,'Ivysaur','sapo2','planta','Ivysaur'),   
		VALUES(3,'Venusaur','sapo3','planta','Venusaur'),   
		VALUES(4,'Pikachu','raton electrectico','electrico','Pikachu');   
        





select * from pokemon;
select * from usuario;

                    
