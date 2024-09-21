 create database autoVentasluis;
USE autoVentasluis;
-- Crear tabla Cliente
CREATE TABLE Cliente (
    idCliente INT PRIMARY KEY,
    FechaRegistro DATE,
    Nombre VARCHAR(50),
    Apellido VARCHAR(50),
    DNI VARCHAR(20),
    Direccion VARCHAR(100),
    Telefono VARCHAR(15),
    Email VARCHAR(50),
    MarcaVehiculo VARCHAR(50)
);

-- Crear tabla Sucursal
CREATE TABLE Sucursal (
    idSucursal INT PRIMARY KEY,
    Nombre VARCHAR(50),
    Direccion VARCHAR(100),
    Telefono VARCHAR(15),
    Gerente VARCHAR(50)
);

-- Crear tabla Empleado
CREATE TABLE Empleado (
    idEmpleado INT PRIMARY KEY,
    FechaContratacion DATE,
    Nombre VARCHAR(50),
    Apellido VARCHAR(50),
    DNI VARCHAR(20),
    Cargo VARCHAR(50),
    SalarioBase DECIMAL(10,2),
    idSucursal INT,
    FOREIGN KEY (idSucursal) REFERENCES Sucursal(idSucursal)
);

-- Crear tabla Marca
CREATE TABLE Marca (
    idMarca INT PRIMARY KEY,
    Nombre VARCHAR(50)
);

-- Crear tabla Modelo
CREATE TABLE Modelo (
    idModelo INT PRIMARY KEY,
    Nombre VARCHAR(50),
    idMarca INT,
    FOREIGN KEY (idMarca) REFERENCES Marca(idMarca)
);

-- Crear tabla Vehiculo
CREATE TABLE Vehiculo (
    idVehiculo INT PRIMARY KEY,
    Anio YEAR,
    idModelo INT,
    idMarca INT,
    Chasis VARCHAR(17),
    Precio DECIMAL(10,2),
    VIN VARCHAR(17),
    Color VARCHAR(20),
    Disponible TINYINT(1),
    FOREIGN KEY (idModelo) REFERENCES Modelo(idModelo),
    FOREIGN KEY (idMarca) REFERENCES Marca(idMarca)

);

-- Crear tabla VehiculoSucursal
CREATE TABLE VehiculoSucursal (
    idVehiculoSucursal INT PRIMARY KEY,
    idVehiculo INT,
    idSucursal INT,
    cantidad INT,
    FOREIGN KEY (idVehiculo) REFERENCES Vehiculo(idVehiculo),
    FOREIGN KEY (idSucursal) REFERENCES Sucursal(idSucursal)
);

-- Crear tabla Venta
CREATE TABLE Venta (
    idVenta INT PRIMARY KEY,
    FechaVenta DATE,
    PrecioFinal DECIMAL(10,2),
    MetodoPago VARCHAR(50),
    idCliente INT,
    idEmpleado INT,
    idVehiculo INT,
    FOREIGN KEY (idCliente) REFERENCES Cliente(idCliente),
    FOREIGN KEY (idEmpleado) REFERENCES Empleado(idEmpleado),
    FOREIGN KEY (idVehiculo) REFERENCES Vehiculo(idVehiculo)
);
-- Crear tabla ComprobanteVenta
CREATE TABLE ComprobanteVenta (
    idComprobante INT PRIMARY KEY,
    idVenta INT,
    NumeroComprobante VARCHAR(20),
    FechaEmision DATE,
    TipoComprobante VARCHAR(50),
    FOREIGN KEY (idVenta) REFERENCES Venta(idVenta)
);

-- Crear tabla Seguro
CREATE TABLE Seguro (
    idSeguro INT PRIMARY KEY,
    FechaInicio DATE,
    FechaFin DATE,
    TipoSeguro VARCHAR(50),
    CompaniaSeguro VARCHAR(100),
    PrimaAnual DECIMAL(10,2),
    idVenta INT,
    FOREIGN KEY (idVenta) REFERENCES Venta(idVenta)
);

-- Crear tabla PlanServicios
CREATE TABLE PlanServicios (
    idPlanServicio INT PRIMARY KEY,
    FechaInicio DATE,
    Duracion VARCHAR(50),
    CostoTotal DECIMAL(10,2),
    idVehiculo INT,
    FOREIGN KEY (idVehiculo) REFERENCES Vehiculo(idVehiculo)
);

-- Crear tabla Servicio
CREATE TABLE Servicio (
    idServicio INT PRIMARY KEY,
    NombreServicio VARCHAR(50),
    Descripcion VARCHAR(200),
    PrecioBase DECIMAL(8,2)
);

-- Crear tabla PlanServicioDetalle
CREATE TABLE PlanServicioDetalle (
    idPlanServicio INT,
    idServicio INT,
    FechaUltimoServicio DATE,
    cantidad INT,
    PRIMARY KEY (idPlanServicio, idServicio),
    FOREIGN KEY (idPlanServicio) REFERENCES PlanServicios(idPlanServicio),
    FOREIGN KEY (idServicio) REFERENCES Servicio(idServicio)
);

-- Crear tabla Repuestos
CREATE TABLE Repuestos (
    idRepuesto INT PRIMARY KEY,
    Nombre VARCHAR(50),
    Descripcion VARCHAR(200),
    Precio DECIMAL(10,2)
);

-- Crear tabla ProductoRepuesto
CREATE TABLE ProductoRepuesto (
    idProductoRepuesto INT PRIMARY KEY,
    idProducto INT,
    idRepuesto INT,
    cantidad INT,
    FechaAsociacion DATE,
    FOREIGN KEY (idRepuesto) REFERENCES Repuestos(idRepuesto)
);

-- Crear tabla Producto
CREATE TABLE Producto (
    idProducto INT PRIMARY KEY,
    Nombre VARCHAR(100),
    Descripcion VARCHAR(255),
    Precio DECIMAL(10,2),
    Stock INT
);

-- Crear tabla Promocion
CREATE TABLE Promocion (
    idPromocion INT PRIMARY KEY,
    FechaInicio DATE,
    FechaFin DATE,
    DescripcionPromocion VARCHAR(100),
    Descuento DECIMAL(5,2)
);

-- Crear tabla Proveedor
CREATE TABLE Proveedor (
    idProveedor INT PRIMARY KEY,
    NombreEmpresa VARCHAR(100),
    ContactoNombre VARCHAR(50),
    Telefono VARCHAR(15),
    Email VARCHAR(50),
    Direccion VARCHAR(100),
    Ciudad VARCHAR(50),
    Pais VARCHAR(50),
    TerminosPago VARCHAR(100)
);

-- Crear tabla Financiamiento
CREATE TABLE Financiamiento (
    idFinanciamiento INT PRIMARY KEY,
    PlazoMeses INT,
    MontoFinanciado DECIMAL(10,2),
    TasaInteres DECIMAL(5,2),
    CuotaMensual DECIMAL(10,2),
    idVenta INT,
    FOREIGN KEY (idVenta) REFERENCES Venta(idVenta)
);

