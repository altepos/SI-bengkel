-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `mydb` ;

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` ;
SHOW WARNINGS;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `role`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `role` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `role` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `role` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `user` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  `nama_depan` VARCHAR(45) NULL,
  `nama_belakang` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `alamat` VARCHAR(45) NULL,
  `no_identitas` VARCHAR(45) NULL,
  `terakhir_login` DATETIME NULL,
  `tanggal_dibuat` VARCHAR(45) NULL,
  `role_id` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `merek`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `merek` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `merek` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nama` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `kategori`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `kategori` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `kategori` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nama` VARCHAR(100) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `barang`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `barang` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `barang` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `barcode` VARCHAR(45) NULL,
  `nama` VARCHAR(200) NULL,
  `deskripsi` TEXT NULL,
  `harga_jual` INT NULL,
  `total_stok` INT NULL,
  `jasa` INT NULL,
  `potongan_harga` INT NULL,
  `letak_gudang` VARCHAR(45) NULL,
  `merek_id` INT NOT NULL,
  `kategori_id` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `status`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `status` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `status` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `status` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `transaksi`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `transaksi` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `transaksi` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cash_pay` INT NULL,
  `cash_back` INT NULL,
  `tanggal` VARCHAR(45) NULL,
  `user_id` INT NOT NULL,
  `status_id` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `supplier`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `supplier` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `supplier` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nama` VARCHAR(200) NULL,
  `alamat` TEXT NULL,
  `no_telp` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `belanja`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `belanja` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `belanja` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tanggal` INT NULL,
  `total` INT NULL,
  `user_id` INT NOT NULL,
  `supplier_id` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `belanja_detail`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `belanja_detail` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `belanja_detail` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `stok_masuk` INT NULL,
  `harga_beli` INT NULL,
  `barang_id` INT NOT NULL,
  `belanja_id` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `transaksi_detail`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `transaksi_detail` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `transaksi_detail` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `harga_terjual` INT NULL,
  `jumlah_terjual` INT NULL,
  `transaksi_id` INT NOT NULL,
  `belanja_id` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `phone`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `phone` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `phone` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `no_telp` VARCHAR(45) NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

SHOW WARNINGS;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
