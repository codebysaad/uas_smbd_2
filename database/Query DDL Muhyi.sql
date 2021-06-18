CREATE DATABASE db_inventory

USE db_inventory

CREATE TABLE Users 
(id Varchar(5) PRIMARY KEY,
username Varchar(50), 
pasword Varchar(255),
access Varchar(5))

CREATE TABLE Barang
(kdBrg Varchar(10) PRIMARY KEY,
nama Varchar(50),
jenis Varchar(50),
kondisi Varchar(12))

CREATE TABLE Inventory
(nup Varchar(20) PRIMARY KEY,
kdBrg Varchar(10) FOREIGN KEY(kdBrg) REFERENCES Barang(kdBrg),
pic Varchar(5) FOREIGN KEY(pic) REFERENCES Users(id))