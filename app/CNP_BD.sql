CREATE DATABASE cnpjyg;

USE cnpjyg;

CREATE TABLE users(
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(60) NOT NULL,
  email VARCHAR(60) NOT NULL,
  password VARCHAR(254) NOT NULL,
  role ENUM('ADMIN','RH','NOMINA')
);

CREATE TABLE services(
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(254) NOT NULL
)

CREATE TABLE employees(
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(48) NOT NULL,
  ap_p VARCHAR(48) NOT NULL,
  ap_m VARCHAR(48) NOT NULL
  -- status ENUM('CONTRATADO',),
  -- service INT NOT NULL,
  -- barsit BOOLEAN,
  -- zavick BOOLEAN,
  -- recomendacion_doc BOOLEAN,
  -- recomendacion_date DATE,
  -- nacimiento_doc BOOLEAN,
  -- nacimiento_date DATE,
  -- policia_doc BOOLEAN,
  -- policia_date DATE,
  -- domicilio_doc BOOLEAN,
  -- domicilio_date DATE,
  -- estudios_doc BOOLEAN,
  -- estudios_date DATE,
  -- imss_doc BOOLEAN,
  -- imss_date DATE,
  -- curp_doc BOOLEAN,
  -- curp_date DATE,
  -- cartilla_doc BOOLEAN,
  -- cartilla_date DATE,
  -- ife BOOLEAN,

)

CREATE TABLE
