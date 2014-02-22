-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Aug 21, 2013 at 07:40 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `bookstore_db`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `book_info`
-- 

CREATE TABLE `book_info` (
  `ISBN` varchar(13) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Author` varchar(50) NOT NULL,
  `Translator` varchar(50) default NULL,
  `Category` varchar(50) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Amount` int(11) default NULL,
  `Detail` varchar(70) default NULL,
  PRIMARY KEY  (`ISBN`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `book_info`
-- 

INSERT INTO `book_info` VALUES ('1234567890911', 'เชาวลิตxx', 'กองคำxx', '', 's', 'แบงก์xx', 11, '');
