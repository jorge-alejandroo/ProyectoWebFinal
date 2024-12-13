create database Operadora_Turistica;

use Operadora_Turistica;

CREATE TABLE Empleado (
    Id_Empleado INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(45),
    Apellido VARCHAR(45),
    Tipo VARCHAR(45),
    Fecha_Nacimiento DATE,
    CURP VARCHAR(45),
    Genero VARCHAR(45),
    Telefono VARCHAR(45),
    Correo VARCHAR(45)
);

CREATE TABLE Cliente (
    Id_Cliente INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(45),
    Apellido VARCHAR(45),
    Telefono VARCHAR(45) NULL,
    Correo VARCHAR(45),
    CURP VARCHAR(45) NULL,
    Contraseña VARCHAR(6)
);

CREATE TABLE Chat (
    Id_Chat INT AUTO_INCREMENT PRIMARY KEY,
    Id_Cliente INT,
    Id_Empleado INT,
    Id_Mensaje INT,
    Contenido VARCHAR(150),
    Fecha_Hora DATETIME,
    FOREIGN KEY (Id_Cliente) REFERENCES Cliente(Id_Cliente),
    FOREIGN KEY (Id_Empleado) REFERENCES Empleado(Id_Empleado)
);

CREATE TABLE TipoServicios (
    Id_TipoServicios INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(45)
);

CREATE TABLE Servicios (
    Id_Servicios INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(45),
    Descripcion VARCHAR(45),
    Id_TipoServicios INT,
    Costo DECIMAL(10, 2),
    FOREIGN KEY (Id_TipoServicios) REFERENCES TipoServicios(Id_TipoServicios)
);

CREATE TABLE Paquete (
    Id_Paquete INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(45),
    Costo DECIMAL(10, 2)
);

CREATE TABLE DetallePaquete (
    Id_DetallePaquete INT AUTO_INCREMENT PRIMARY KEY,
    Id_Paquete INT,
    Id_Servicios INT,
    Id_TipoServicios INT,
    Hora_Salida TIME,
    Hora_Llegada TIME,
    Fecha DATE,
    Cupo INT,
    FOREIGN KEY (Id_Paquete) REFERENCES Paquete(Id_Paquete),
    FOREIGN KEY (Id_Servicios) REFERENCES Servicios(Id_Servicios),
    FOREIGN KEY (Id_TipoServicios) REFERENCES TipoServicios(Id_TipoServicios)
);

CREATE TABLE Reserva (
    Id_Reserva INT AUTO_INCREMENT PRIMARY KEY,
    Fecha DATETIME,
    Pasajeros INT,
    Estatus VARCHAR(45),
    Id_Cliente INT,
    Precio DECIMAL(10, 2),
    Id_Servicios INT,
    Id_TipoServicios INT,
    Id_Paquete INT,
    FOREIGN KEY (Id_Cliente) REFERENCES Cliente(Id_Cliente),
    FOREIGN KEY (Id_Servicios) REFERENCES Servicios(Id_Servicios),
    FOREIGN KEY (Id_TipoServicios) REFERENCES TipoServicios(Id_TipoServicios),
    FOREIGN KEY (Id_Paquete) REFERENCES Paquete(Id_Paquete)
);

CREATE TABLE Notificaciones (
    Id_Notificaciones INT AUTO_INCREMENT PRIMARY KEY,
    Aviso VARCHAR(50),
    Id_Cliente INT,
    Id_DetallePaquete INT,
    Id_Paquete INT,
    Id_Servicios INT,
    Id_TipoServicios INT,
    FOREIGN KEY (Id_Cliente) REFERENCES Cliente(Id_Cliente),
    FOREIGN KEY (Id_DetallePaquete) REFERENCES DetallePaquete(Id_DetallePaquete),
    FOREIGN KEY (Id_Paquete) REFERENCES Paquete(Id_Paquete),
    FOREIGN KEY (Id_Servicios) REFERENCES Servicios(Id_Servicios),
    FOREIGN KEY (Id_TipoServicios) REFERENCES TipoServicios(Id_TipoServicios)
);

SELECT * FROM Empleado;
Drop database operadora_turistica;

INSERT INTO Empleado (Nombre, Apellido, Tipo, Fecha_Nacimiento, CURP, Genero, Telefono, Correo) 
VALUES 
('Juan', 'Perez', 'Vendedor', '1985-06-15', 'PEPJ850615HCSRNN03', 'Masculino', '9617414312', 'juan@gmail.com'),
('Maria', 'Garcia', 'Administrador', '1990-09-23', 'GARM900923MCSRRN06', 'Femenino', '9617689015', 'maria@gmail.com'),
('Carlos', 'Lopez', 'Supervisor', '1982-11-01', 'LOPC821101HCSRRL04', 'Masculino', '9611412113', 'carlos@gmail.com'),
('Ana', 'Sanchez', 'Vendedor', '1995-02-12', 'SAAE950212MCSRRN08', 'Femenino', '9611712468', 'ana@gmail.com'),
('Luis', 'Rodriguez', 'Contador', '1988-04-10', 'RODL880410HCSRRN05', 'Masculino', '9614156198', 'luis@gmail.com');

INSERT INTO Cliente (Nombre, Apellido, Telefono, Correo, CURP, Contraseña) 
VALUES 
('Jose', 'Martinez', '9611234561', 'jose@gmail.com', 'MAJJ850101HCSRRS06','1234'),
('Laura', 'Fernandez', '9611234562', 'laura@gmail.com', 'FELM900503MCSRRL07','1234'),
('Pedro', 'Hernandez', '9611234563', 'pedro@gmail.com', 'HEHP860702HCSRRT04','1234'),
('Carmen', 'Diaz', '9611234564', 'carmen@gmail.com', 'DIAC920821MCSRRN08','1234'),
('Sofia', 'Castillo', '9611234565', 'sofia@gmail.com', 'CASM951202MCSRRS05','1234');

INSERT INTO Chat (Id_Cliente, Id_Empleado, Id_Mensaje, Contenido, Fecha_Hora) 
VALUES 
(1, 1, 1, 'Hola, necesito información.', '2024-10-01 10:00:00'),
(2, 2, 2, 'Gracias por contactarnos.', '2024-10-01 11:00:00'),
(3, 3, 3, '¿Cuáles son sus servicios?', '2024-10-02 12:00:00'),
(4, 4, 4, 'Tenemos varias opciones.', '2024-10-02 13:00:00'),
(5, 5, 5, 'Gracias por la información.', '2024-10-03 14:00:00');

/*PROYECTO*/

INSERT INTO Paquete (Nombre, Costo)
VALUES
    ('Paquetes a Puerto Vallarta', 9996.00),
    ('Paquetes a Huatulco', 10000.00),
    ('Paquetes a Cabo San Lucas', 8999.00),
    ('Paquetes a Mazatlán', 6000.00),
    ('Paquetes a Cancún', 6496.00),
    ('Paquetes a Playa del Carmen', 9996.00),
    ('Paquetes a Riviera Maya', 9283.00),
    ('Paquetes a Mérida', 8499.00);
    
INSERT INTO TipoServicios (Nombre)
VALUES
    ('Hospedaje'),
    ('Vuelo'),
    ('Todo incluido'),
    ('Transporte'),
    ('Excursiones');

INSERT INTO Servicios (Nombre, Descripcion, Id_TipoServicios, Costo)
VALUES
    ('Hospedaje Puerto Vallarta', 'Incluye hotel 4 estrellas', 1, 4000.00),
    ('Vuelo a Puerto Vallarta', 'Vuelo redondo MEX-PVR', 2, 2500.00),
    ('Todo Incluido Puerto Vallarta', 'Comidas y bebidas incluidas', 3, 3496.00),
    ('Hospedaje Cancún', 'Incluye hotel 5 estrellas', 1, 4000.00),
    ('Vuelo a Cancún', 'Vuelo redondo MEX-CUN', 2, 2496.00),
    ('Todo Incluido Cancún', 'Comidas y bebidas incluidas', 3, 3496.00),
    -- Agrega más servicios para los otros paquetes
    ('Hospedaje Huatulco', 'Incluye hotel frente al mar', 1, 5000.00),
    ('Vuelo a Huatulco', 'Vuelo redondo MEX-HUX', 2, 3000.00),
    ('Todo Incluido Huatulco', 'Comidas y bebidas incluidas', 3, 2000.00);

INSERT INTO DetallePaquete (Id_Paquete, Id_Servicios, Id_TipoServicios, Hora_Salida, Hora_Llegada, Fecha, Cupo)
VALUES
    (1, 1, 1, '08:00:00', '11:00:00', '2024-12-02', 20), -- Paquete Puerto Vallarta
    (1, 2, 2, '08:00:00', '11:00:00', '2024-12-02', 20),
    (1, 3, 3, '08:00:00', '11:00:00', '2024-12-02', 20),
    (2, 4, 1, '09:00:00', '12:00:00', '2024-11-09', 15), -- Paquete Huatulco
    (2, 5, 2, '09:00:00', '12:00:00', '2024-11-09', 15),
    (2, 6, 3, '09:00:00', '12:00:00', '2024-11-09', 15),
    -- Agrega más detalles para otros paquetes
    (3, 7, 1, '07:00:00', '10:00:00', '2024-11-11', 25);
