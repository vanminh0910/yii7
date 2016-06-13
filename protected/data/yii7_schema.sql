-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.16 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for yii7
DROP DATABASE IF EXISTS `yii7`;
CREATE DATABASE IF NOT EXISTS `yii7` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `yii7`;


-- Dumping structure for table yii7.authassignment
DROP TABLE IF EXISTS `authassignment`;
CREATE TABLE IF NOT EXISTS `authassignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`),
  CONSTRAINT `authassignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii7.authassignment: ~9 rows (approximately)
/*!40000 ALTER TABLE `authassignment` DISABLE KEYS */;
INSERT INTO `authassignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
	('Accounts.Activation.*', '9', NULL, 'N;'),
	('Accounts.Activation.Activation', '9', NULL, 'N;'),
	('Accounts.Default.*', '44', NULL, 'N;'),
	('Accounts.Default.*', '9', NULL, 'N;'),
	('Accounts.Index.*', '44', NULL, 'N;'),
	('Accounts.Login.*', '44', NULL, 'N;'),
	('Accounts.Logout.*', '44', NULL, 'N;'),
	('Accounts.Profile.*', '44', NULL, 'N;'),
	('admin', '44', NULL, 'N;'),
	('admin', '9', NULL, 'N;'),
	('phuong', '9', NULL, 'N;'),
	('User.Admin.Create', '44', NULL, 'N;');
/*!40000 ALTER TABLE `authassignment` ENABLE KEYS */;


-- Dumping structure for table yii7.authitem
DROP TABLE IF EXISTS `authitem`;
CREATE TABLE IF NOT EXISTS `authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii7.authitem: ~207 rows (approximately)
/*!40000 ALTER TABLE `authitem` DISABLE KEYS */;
INSERT INTO `authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
	('Accounts.Activation.*', 1, 'act', 'act', 'N;'),
	('Accounts.Activation.Activation', 0, 'act', 'qqwee', 'N;'),
	('Accounts.Default.*', 1, NULL, NULL, 'N;'),
	('Accounts.Default.Index', 0, NULL, NULL, 'N;'),
	('Accounts.Index.*', 1, '23452345', NULL, 'N;'),
	('Accounts.Index.Create', 0, NULL, NULL, 'N;'),
	('Accounts.Index.Delete', 0, NULL, NULL, 'N;'),
	('Accounts.Index.Index', 0, NULL, NULL, 'N;'),
	('Accounts.Index.Update', 0, NULL, NULL, 'N;'),
	('Accounts.Index.View', 0, NULL, NULL, 'N;'),
	('Accounts.Login.*', 1, NULL, NULL, 'N;'),
	('Accounts.Login.Login', 0, NULL, NULL, 'N;'),
	('Accounts.Logout.*', 1, NULL, NULL, 'N;'),
	('Accounts.Logout.Logout', 0, NULL, NULL, 'N;'),
	('Accounts.Profile.*', 1, NULL, NULL, 'N;'),
	('Accounts.Profile.Profile', 0, NULL, NULL, 'N;'),
	('Accounts.Recovery.*', 1, NULL, NULL, 'N;'),
	('Accounts.Recovery.Recovery', 0, NULL, NULL, 'N;'),
	('Accounts.Register.*', 1, NULL, NULL, 'N;'),
	('Accounts.Register.Register', 0, NULL, NULL, 'N;'),
	('Accounts.Update.*', 1, NULL, NULL, 'N;'),
	('Accounts.Update.Update', 0, NULL, NULL, 'N;'),
	('admin', 2, 'role for admin', NULL, 'N;'),
	('Cms.Admin.*', 1, NULL, NULL, 'N;'),
	('Cms.Admin.Index', 0, NULL, NULL, 'N;'),
	('Cms.Attachment.*', 1, NULL, NULL, 'N;'),
	('Cms.Attachment.Add', 0, NULL, NULL, 'N;'),
	('Cms.Attachment.Delete', 0, NULL, NULL, 'N;'),
	('Cms.Block.*', 1, NULL, NULL, 'N;'),
	('Cms.Block.Create', 0, NULL, NULL, 'N;'),
	('Cms.Block.Delete', 0, NULL, NULL, 'N;'),
	('Cms.Block.Index', 0, NULL, NULL, 'N;'),
	('Cms.Block.Update', 0, NULL, NULL, 'N;'),
	('Cms.Image.*', 1, NULL, NULL, 'N;'),
	('Cms.Image.Add', 0, NULL, NULL, 'N;'),
	('Cms.Image.Delete', 0, NULL, NULL, 'N;'),
	('Cms.Language.*', 1, NULL, NULL, 'N;'),
	('Cms.Language.Change', 0, NULL, NULL, 'N;'),
	('Cms.Menu.*', 1, NULL, NULL, 'N;'),
	('Cms.Menu.AjaxSortable', 0, NULL, NULL, 'N;'),
	('Cms.Menu.Create', 0, NULL, NULL, 'N;'),
	('Cms.Menu.Delete', 0, NULL, NULL, 'N;'),
	('Cms.Menu.Index', 0, NULL, NULL, 'N;'),
	('Cms.Menu.Update', 0, NULL, NULL, 'N;'),
	('Cms.MenuItem.*', 1, NULL, NULL, 'N;'),
	('Cms.MenuItem.Add', 0, NULL, NULL, 'N;'),
	('Cms.MenuItem.Delete', 0, NULL, NULL, 'N;'),
	('Cms.MenuItem.Update', 0, NULL, NULL, 'N;'),
	('Cms.Message.*', 1, NULL, NULL, 'N;'),
	('Cms.Message.Create', 0, NULL, NULL, 'N;'),
	('Cms.Message.Delete', 0, NULL, NULL, 'N;'),
	('Cms.Message.Index', 0, NULL, NULL, 'N;'),
	('Cms.Message.Update', 0, NULL, NULL, 'N;'),
	('Cms.Page.*', 1, NULL, NULL, 'N;'),
	('Cms.Page.Create', 0, NULL, NULL, 'N;'),
	('Cms.Page.Delete', 0, NULL, NULL, 'N;'),
	('Cms.Page.Index', 0, NULL, NULL, 'N;'),
	('Cms.Page.Update', 0, NULL, NULL, 'N;'),
	('Cms.Page.View', 0, NULL, NULL, 'N;'),
	('Default.*', 1, NULL, NULL, 'N;'),
	('Default.Index', 0, NULL, NULL, 'N;'),
	('Language.Default.*', 1, NULL, NULL, 'N;'),
	('Language.Default.Create', 0, NULL, NULL, 'N;'),
	('Language.Default.Delete', 0, NULL, NULL, 'N;'),
	('Language.Default.Index', 0, NULL, NULL, 'N;'),
	('Language.Default.Update', 0, NULL, NULL, 'N;'),
	('Language.Default.View', 0, NULL, NULL, 'N;'),
	('Mail.Default.*', 1, NULL, NULL, 'N;'),
	('Mail.Default.Create', 0, NULL, NULL, 'N;'),
	('Mail.Default.Delete', 0, NULL, NULL, 'N;'),
	('Mail.Default.Index', 0, NULL, NULL, 'N;'),
	('Mail.Default.Update', 0, NULL, NULL, 'N;'),
	('Mail.Default.View', 0, NULL, NULL, 'N;'),
	('PasswordProtected.*', 1, NULL, NULL, 'N;'),
	('PasswordProtected.Index', 0, NULL, NULL, 'N;'),
	('phuong', 2, '123', '123', 'N;'),
	('retest', 2, 'retest', NULL, 'N;'),
	('Settings.Settings.*', 1, NULL, NULL, 'N;'),
	('Settings.Settings.Index', 0, NULL, NULL, 'N;'),
	('Shop.Category.*', 1, NULL, NULL, 'N;'),
	('Shop.Category.Admin', 0, NULL, NULL, 'N;'),
	('Shop.Category.Create', 0, NULL, NULL, 'N;'),
	('Shop.Category.Delete', 0, NULL, NULL, 'N;'),
	('Shop.Category.Index', 0, NULL, NULL, 'N;'),
	('Shop.Category.Update', 0, NULL, NULL, 'N;'),
	('Shop.Category.View', 0, NULL, NULL, 'N;'),
	('Shop.Customer.*', 1, NULL, NULL, 'N;'),
	('Shop.Customer.Admin', 0, NULL, NULL, 'N;'),
	('Shop.Customer.Create', 0, NULL, NULL, 'N;'),
	('Shop.Customer.Delete', 0, NULL, NULL, 'N;'),
	('Shop.Customer.Index', 0, NULL, NULL, 'N;'),
	('Shop.Customer.Update', 0, NULL, NULL, 'N;'),
	('Shop.Customer.View', 0, NULL, NULL, 'N;'),
	('Shop.Default.*', 1, NULL, NULL, 'N;'),
	('Shop.Default.Index', 0, NULL, NULL, 'N;'),
	('Shop.Image.*', 1, NULL, NULL, 'N;'),
	('Shop.Image.Admin', 0, NULL, NULL, 'N;'),
	('Shop.Image.Create', 0, NULL, NULL, 'N;'),
	('Shop.Image.Delete', 0, NULL, NULL, 'N;'),
	('Shop.Image.Index', 0, NULL, NULL, 'N;'),
	('Shop.Image.Update', 0, NULL, NULL, 'N;'),
	('Shop.Image.View', 0, NULL, NULL, 'N;'),
	('Shop.Install.*', 1, NULL, NULL, 'N;'),
	('Shop.Install.Index', 0, NULL, NULL, 'N;'),
	('Shop.Install.Install', 0, NULL, NULL, 'N;'),
	('Shop.Order.*', 1, NULL, NULL, 'N;'),
	('Shop.Order.Admin', 0, NULL, NULL, 'N;'),
	('Shop.Order.Confirm', 0, NULL, NULL, 'N;'),
	('Shop.Order.Create', 0, NULL, NULL, 'N;'),
	('Shop.Order.Failure', 0, NULL, NULL, 'N;'),
	('Shop.Order.Invoice', 0, NULL, NULL, 'N;'),
	('Shop.Order.Slip', 0, NULL, NULL, 'N;'),
	('Shop.Order.Success', 0, NULL, NULL, 'N;'),
	('Shop.Order.View', 0, NULL, NULL, 'N;'),
	('Shop.PaymentMethod.*', 1, NULL, NULL, 'N;'),
	('Shop.PaymentMethod.Admin', 0, NULL, NULL, 'N;'),
	('Shop.PaymentMethod.Choose', 0, NULL, NULL, 'N;'),
	('Shop.PaymentMethod.Create', 0, NULL, NULL, 'N;'),
	('Shop.PaymentMethod.Delete', 0, NULL, NULL, 'N;'),
	('Shop.PaymentMethod.Index', 0, NULL, NULL, 'N;'),
	('Shop.PaymentMethod.Update', 0, NULL, NULL, 'N;'),
	('Shop.PaymentMethod.View', 0, NULL, NULL, 'N;'),
	('Shop.Products.*', 1, NULL, NULL, 'N;'),
	('Shop.Products.Admin', 0, NULL, NULL, 'N;'),
	('Shop.Products.Create', 0, NULL, NULL, 'N;'),
	('Shop.Products.Delete', 0, NULL, NULL, 'N;'),
	('Shop.Products.Index', 0, NULL, NULL, 'N;'),
	('Shop.Products.Update', 0, NULL, NULL, 'N;'),
	('Shop.Products.View', 0, NULL, NULL, 'N;'),
	('Shop.ProductSpecification.*', 1, NULL, NULL, 'N;'),
	('Shop.ProductSpecification.Admin', 0, NULL, NULL, 'N;'),
	('Shop.ProductSpecification.Create', 0, NULL, NULL, 'N;'),
	('Shop.ProductSpecification.Delete', 0, NULL, NULL, 'N;'),
	('Shop.ProductSpecification.Index', 0, NULL, NULL, 'N;'),
	('Shop.ProductSpecification.Update', 0, NULL, NULL, 'N;'),
	('Shop.ProductSpecification.View', 0, NULL, NULL, 'N;'),
	('Shop.ShippingMethod.*', 1, NULL, NULL, 'N;'),
	('Shop.ShippingMethod.Admin', 0, NULL, NULL, 'N;'),
	('Shop.ShippingMethod.Choose', 0, NULL, NULL, 'N;'),
	('Shop.ShippingMethod.Create', 0, NULL, NULL, 'N;'),
	('Shop.ShippingMethod.Delete', 0, NULL, NULL, 'N;'),
	('Shop.ShippingMethod.Index', 0, NULL, NULL, 'N;'),
	('Shop.ShippingMethod.Update', 0, NULL, NULL, 'N;'),
	('Shop.ShippingMethod.View', 0, NULL, NULL, 'N;'),
	('Shop.Shop.*', 1, NULL, NULL, 'N;'),
	('Shop.Shop.Admin', 0, NULL, NULL, 'N;'),
	('Shop.Shop.Index', 0, NULL, NULL, 'N;'),
	('Shop.Shop.Install', 0, NULL, NULL, 'N;'),
	('Shop.ShoppingCart.*', 1, NULL, NULL, 'N;'),
	('Shop.ShoppingCart.Admin', 0, NULL, NULL, 'N;'),
	('Shop.ShoppingCart.Create', 0, NULL, NULL, 'N;'),
	('Shop.ShoppingCart.Delete', 0, NULL, NULL, 'N;'),
	('Shop.ShoppingCart.GetPriceTotal', 0, NULL, NULL, 'N;'),
	('Shop.ShoppingCart.Index', 0, NULL, NULL, 'N;'),
	('Shop.ShoppingCart.UpdateAmount', 0, NULL, NULL, 'N;'),
	('Shop.ShoppingCart.View', 0, NULL, NULL, 'N;'),
	('Shop.Tax.*', 1, NULL, NULL, 'N;'),
	('Shop.Tax.Admin', 0, NULL, NULL, 'N;'),
	('Shop.Tax.Create', 0, NULL, NULL, 'N;'),
	('Shop.Tax.Delete', 0, NULL, NULL, 'N;'),
	('Shop.Tax.Index', 0, NULL, NULL, 'N;'),
	('Shop.Tax.Update', 0, NULL, NULL, 'N;'),
	('Shop.Tax.View', 0, NULL, NULL, 'N;'),
	('Site.*', 1, NULL, NULL, 'N;'),
	('Site.Contact', 0, NULL, NULL, 'N;'),
	('Site.Error', 0, NULL, NULL, 'N;'),
	('Site.Index', 0, NULL, NULL, 'N;'),
	('Test.Default.*', 1, NULL, NULL, 'N;'),
	('Test.Default.Index', 0, NULL, NULL, 'N;'),
	('User.Activation.*', 1, NULL, NULL, 'N;'),
	('User.Activation.Activation', 0, NULL, NULL, 'N;'),
	('User.Admin.*', 1, NULL, NULL, 'N;'),
	('User.Admin.Admin', 0, NULL, NULL, 'N;'),
	('User.Admin.Create', 0, NULL, NULL, 'N;'),
	('User.Admin.Delete', 0, NULL, NULL, 'N;'),
	('User.Admin.Update', 0, NULL, NULL, 'N;'),
	('User.Admin.View', 0, NULL, NULL, 'N;'),
	('User.Default.*', 1, NULL, NULL, 'N;'),
	('User.Default.Index', 0, NULL, NULL, 'N;'),
	('User.Login.*', 1, NULL, NULL, 'N;'),
	('User.Login.Login', 0, NULL, NULL, 'N;'),
	('User.Logout.*', 1, NULL, NULL, 'N;'),
	('User.Logout.Logout', 0, NULL, NULL, 'N;'),
	('User.Profile.*', 1, NULL, NULL, 'N;'),
	('User.Profile.Changepassword', 0, NULL, NULL, 'N;'),
	('User.Profile.Edit', 0, NULL, NULL, 'N;'),
	('User.Profile.Profile', 0, NULL, NULL, 'N;'),
	('User.ProfileField.*', 1, NULL, NULL, 'N;'),
	('User.ProfileField.Admin', 0, NULL, NULL, 'N;'),
	('User.ProfileField.Create', 0, NULL, NULL, 'N;'),
	('User.ProfileField.Delete', 0, NULL, NULL, 'N;'),
	('User.ProfileField.Update', 0, NULL, NULL, 'N;'),
	('User.ProfileField.View', 0, NULL, NULL, 'N;'),
	('User.Recovery.*', 1, NULL, NULL, 'N;'),
	('User.Recovery.Recovery', 0, NULL, NULL, 'N;'),
	('User.Registration.*', 1, NULL, NULL, 'N;'),
	('User.Registration.Registration', 0, NULL, NULL, 'N;'),
	('User.User.*', 1, NULL, NULL, 'N;'),
	('User.User.Index', 0, NULL, NULL, 'N;'),
	('User.User.View', 0, NULL, NULL, 'N;'),
	('YiiLog.*', 1, NULL, NULL, 'N;'),
	('YiiLog.Admin', 0, NULL, NULL, 'N;'),
	('YiiLog.Create', 0, NULL, NULL, 'N;'),
	('YiiLog.Delete', 0, NULL, NULL, 'N;'),
	('YiiLog.Index', 0, NULL, NULL, 'N;'),
	('YiiLog.Update', 0, NULL, NULL, 'N;'),
	('YiiLog.View', 0, NULL, NULL, 'N;');
/*!40000 ALTER TABLE `authitem` ENABLE KEYS */;


-- Dumping structure for table yii7.authitemchild
DROP TABLE IF EXISTS `authitemchild`;
CREATE TABLE IF NOT EXISTS `authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `authitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `authitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii7.authitemchild: ~170 rows (approximately)
/*!40000 ALTER TABLE `authitemchild` DISABLE KEYS */;
INSERT INTO `authitemchild` (`parent`, `child`) VALUES
	('admin', 'Accounts.Activation.Activation'),
	('phuong', 'Accounts.Default.Index'),
	('admin', 'Accounts.Index.Create'),
	('admin', 'Accounts.Index.Delete'),
	('admin', 'Accounts.Index.Index'),
	('admin', 'Accounts.Index.Update'),
	('admin', 'Accounts.Index.View'),
	('admin', 'Accounts.Login.Login'),
	('admin', 'Accounts.Logout.Logout'),
	('admin', 'Accounts.Profile.Profile'),
	('admin', 'Accounts.Recovery.Recovery'),
	('admin', 'Accounts.Register.Register'),
	('admin', 'Accounts.Update.Update'),
	('admin', 'Cms.Admin.Index'),
	('admin', 'Cms.Attachment.*'),
	('admin', 'Cms.Attachment.Add'),
	('admin', 'Cms.Attachment.Delete'),
	('admin', 'Cms.Block.*'),
	('admin', 'Cms.Block.Create'),
	('admin', 'Cms.Block.Delete'),
	('admin', 'Cms.Block.Index'),
	('admin', 'Cms.Block.Update'),
	('admin', 'Cms.Image.Delete'),
	('admin', 'Cms.Language.*'),
	('admin', 'Cms.Language.Change'),
	('admin', 'Cms.Menu.*'),
	('phuong', 'Cms.Menu.AjaxSortable'),
	('admin', 'Cms.Menu.Create'),
	('admin', 'Cms.Menu.Delete'),
	('admin', 'Cms.Menu.Update'),
	('admin', 'Cms.MenuItem.*'),
	('admin', 'Cms.MenuItem.Add'),
	('admin', 'Cms.MenuItem.Delete'),
	('admin', 'Cms.MenuItem.Update'),
	('admin', 'Cms.Message.*'),
	('admin', 'Cms.Message.Create'),
	('admin', 'Cms.Message.Delete'),
	('admin', 'Cms.Message.Index'),
	('admin', 'Cms.Message.Update'),
	('admin', 'Cms.Page.Delete'),
	('admin', 'Cms.Page.Index'),
	('admin', 'Language.Default.*'),
	('admin', 'Language.Default.Create'),
	('admin', 'Language.Default.Delete'),
	('admin', 'Language.Default.Index'),
	('admin', 'Language.Default.Update'),
	('phuong', 'Language.Default.View'),
	('admin', 'Mail.Default.*'),
	('admin', 'Mail.Default.Create'),
	('admin', 'Mail.Default.Delete'),
	('admin', 'Mail.Default.Index'),
	('admin', 'Mail.Default.Update'),
	('admin', 'Mail.Default.View'),
	('admin', 'phuong'),
	('admin', 'Settings.Settings.*'),
	('admin', 'Settings.Settings.Index'),
	('admin', 'Shop.Category.*'),
	('admin', 'Shop.Category.Admin'),
	('admin', 'Shop.Category.Create'),
	('admin', 'Shop.Category.Delete'),
	('admin', 'Shop.Category.Index'),
	('admin', 'Shop.Category.Update'),
	('admin', 'Shop.Category.View'),
	('admin', 'Shop.Customer.*'),
	('admin', 'Shop.Customer.Admin'),
	('admin', 'Shop.Customer.Create'),
	('admin', 'Shop.Customer.Delete'),
	('admin', 'Shop.Customer.Index'),
	('admin', 'Shop.Customer.Update'),
	('admin', 'Shop.Customer.View'),
	('admin', 'Shop.Default.*'),
	('admin', 'Shop.Default.Index'),
	('admin', 'Shop.Image.*'),
	('admin', 'Shop.Image.Admin'),
	('admin', 'Shop.Image.Create'),
	('admin', 'Shop.Image.Delete'),
	('admin', 'Shop.Image.Index'),
	('admin', 'Shop.Image.View'),
	('admin', 'Shop.Install.*'),
	('admin', 'Shop.Install.Index'),
	('admin', 'Shop.Install.Install'),
	('admin', 'Shop.Order.*'),
	('admin', 'Shop.Order.Admin'),
	('admin', 'Shop.Order.Confirm'),
	('admin', 'Shop.Order.Create'),
	('admin', 'Shop.Order.Failure'),
	('admin', 'Shop.Order.Invoice'),
	('admin', 'Shop.Order.Slip'),
	('admin', 'Shop.Order.Success'),
	('admin', 'Shop.Order.View'),
	('admin', 'Shop.PaymentMethod.*'),
	('admin', 'Shop.PaymentMethod.Admin'),
	('admin', 'Shop.PaymentMethod.Choose'),
	('admin', 'Shop.PaymentMethod.Create'),
	('admin', 'Shop.PaymentMethod.Delete'),
	('admin', 'Shop.PaymentMethod.Index'),
	('admin', 'Shop.PaymentMethod.Update'),
	('admin', 'Shop.PaymentMethod.View'),
	('admin', 'Shop.Products.*'),
	('admin', 'Shop.Products.Admin'),
	('admin', 'Shop.Products.Create'),
	('admin', 'Shop.Products.Delete'),
	('admin', 'Shop.Products.Index'),
	('admin', 'Shop.Products.Update'),
	('admin', 'Shop.Products.View'),
	('admin', 'Shop.ProductSpecification.*'),
	('admin', 'Shop.ProductSpecification.Admin'),
	('admin', 'Shop.ProductSpecification.Create'),
	('admin', 'Shop.ProductSpecification.Delete'),
	('admin', 'Shop.ProductSpecification.Index'),
	('admin', 'Shop.ProductSpecification.Update'),
	('admin', 'Shop.ProductSpecification.View'),
	('admin', 'Shop.ShippingMethod.*'),
	('admin', 'Shop.ShippingMethod.Admin'),
	('admin', 'Shop.ShippingMethod.Choose'),
	('admin', 'Shop.ShippingMethod.Create'),
	('admin', 'Shop.ShippingMethod.Delete'),
	('admin', 'Shop.ShippingMethod.Index'),
	('admin', 'Shop.ShippingMethod.Update'),
	('admin', 'Shop.ShippingMethod.View'),
	('admin', 'Shop.Shop.*'),
	('admin', 'Shop.Shop.Admin'),
	('admin', 'Shop.ShoppingCart.*'),
	('admin', 'Shop.ShoppingCart.Admin'),
	('admin', 'Shop.ShoppingCart.Create'),
	('admin', 'Shop.ShoppingCart.Delete'),
	('admin', 'Shop.ShoppingCart.GetPriceTotal'),
	('admin', 'Shop.ShoppingCart.Index'),
	('admin', 'Shop.ShoppingCart.UpdateAmount'),
	('admin', 'Shop.ShoppingCart.View'),
	('admin', 'Shop.Tax.*'),
	('admin', 'Shop.Tax.Admin'),
	('admin', 'Shop.Tax.Create'),
	('admin', 'Shop.Tax.Delete'),
	('admin', 'Shop.Tax.Index'),
	('admin', 'Shop.Tax.Update'),
	('admin', 'Shop.Tax.View'),
	('admin', 'Site.*'),
	('admin', 'Test.Default.*'),
	('admin', 'Test.Default.Index'),
	('admin', 'User.Activation.*'),
	('admin', 'User.Activation.Activation'),
	('admin', 'User.Admin.Admin'),
	('admin', 'User.Admin.Create'),
	('admin', 'User.Admin.Delete'),
	('admin', 'User.Admin.Update'),
	('admin', 'User.Admin.View'),
	('admin', 'User.Default.*'),
	('admin', 'User.Default.Index'),
	('admin', 'User.Login.*'),
	('admin', 'User.Login.Login'),
	('admin', 'User.Logout.*'),
	('admin', 'User.Logout.Logout'),
	('admin', 'User.Profile.*'),
	('admin', 'User.Profile.Changepassword'),
	('phuong', 'User.Profile.Edit'),
	('admin', 'User.Profile.Profile'),
	('admin', 'User.ProfileField.*'),
	('admin', 'User.ProfileField.Admin'),
	('admin', 'User.ProfileField.Create'),
	('admin', 'User.ProfileField.Delete'),
	('admin', 'User.ProfileField.Update'),
	('admin', 'User.ProfileField.View'),
	('admin', 'User.Recovery.*'),
	('admin', 'User.Recovery.Recovery'),
	('admin', 'User.Registration.*'),
	('admin', 'User.Registration.Registration'),
	('admin', 'User.User.Index'),
	('admin', 'User.User.View'),
	('phuong', 'YiiLog.Create');
/*!40000 ALTER TABLE `authitemchild` ENABLE KEYS */;


-- Dumping structure for table yii7.cms_attachment
DROP TABLE IF EXISTS `cms_attachment`;
CREATE TABLE IF NOT EXISTS `cms_attachment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pageId` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `extension` varchar(50) NOT NULL,
  `mimeType` varchar(255) NOT NULL,
  `byteSize` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pageId` (`pageId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table yii7.cms_attachment: ~0 rows (approximately)
/*!40000 ALTER TABLE `cms_attachment` DISABLE KEYS */;
INSERT INTO `cms_attachment` (`id`, `created`, `pageId`, `name`, `filename`, `extension`, `mimeType`, `byteSize`) VALUES
	(1, '2014-10-22 16:11:40', 1, '123', 'china.docx', 'docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 593746);
/*!40000 ALTER TABLE `cms_attachment` ENABLE KEYS */;


-- Dumping structure for table yii7.cms_block
DROP TABLE IF EXISTS `cms_block`;
CREATE TABLE IF NOT EXISTS `cms_block` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NULL DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `published` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `name_deleted` (`name`,`deleted`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table yii7.cms_block: ~2 rows (approximately)
/*!40000 ALTER TABLE `cms_block` DISABLE KEYS */;
INSERT INTO `cms_block` (`id`, `created`, `updated`, `name`, `published`, `deleted`) VALUES
	(1, '2014-07-20 09:46:04', NULL, 'Index', 1, 0),
	(2, '2014-10-22 16:16:50', NULL, '123123', 1, 0);
/*!40000 ALTER TABLE `cms_block` ENABLE KEYS */;


-- Dumping structure for table yii7.cms_block_content
DROP TABLE IF EXISTS `cms_block_content`;
CREATE TABLE IF NOT EXISTS `cms_block_content` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `blockId` int(10) unsigned NOT NULL,
  `locale` varchar(50) NOT NULL,
  `body` longtext,
  PRIMARY KEY (`id`),
  UNIQUE KEY `blockId_locale` (`blockId`,`locale`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table yii7.cms_block_content: ~6 rows (approximately)
/*!40000 ALTER TABLE `cms_block_content` DISABLE KEYS */;
INSERT INTO `cms_block_content` (`id`, `blockId`, `locale`, `body`) VALUES
	(1, 1, 'en', '<div class="hero-unit"><h1>Welcome to Yii OpenCMS</h1>\r\n<p>Congratulations! You have successfully created your Yii CMS application.</p>\r\n</div>\r\n<h3>Example Content</h3>\r\n<p>You may change the content of this page by modifying the following two files:</p>'),
	(2, 1, 'es', '<div class="hero-unit"><h1>Bienvenido a OpenCMS</h1>\r\n<p>Felicidades! Ha creado correctamente la aplicación Yii CMS.</p>\r\n</div>\r\n<h3>Contenido de Ejemplo</h3>\r\n<p>Usted puede cambiar el contenido de esta página modificando los dos archivos siguientes:</p>'),
	(3, 1, 'br', '<div class="hero-unit"><h1>Bem-vindo ao Yii OpenCMS</h1>\r\n<p>Felicidades! Ha creado correctamente la aplicación Yii CMS.</p>\r\n</div>\r\n<h3>Contenido de Ejemplo</h3>\r\n<p>Usted puede cambiar el contenido de esta página modificando los dos archivos siguientes:</p>'),
	(4, 2, 'en', '<p>123123</p>\r\n'),
	(5, 2, 'vn', '<p>123123</p>\r\n'),
	(6, 1, 'vi', NULL);
/*!40000 ALTER TABLE `cms_block_content` ENABLE KEYS */;


-- Dumping structure for table yii7.cms_menu
DROP TABLE IF EXISTS `cms_menu`;
CREATE TABLE IF NOT EXISTS `cms_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `name_deleted` (`name`,`deleted`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table yii7.cms_menu: ~2 rows (approximately)
/*!40000 ALTER TABLE `cms_menu` DISABLE KEYS */;
INSERT INTO `cms_menu` (`id`, `created`, `updated`, `name`, `deleted`) VALUES
	(1, '2014-03-22 09:38:10', NULL, 'navigation', 0),
	(2, '2014-10-22 16:17:44', NULL, '123123', 0);
/*!40000 ALTER TABLE `cms_menu` ENABLE KEYS */;


-- Dumping structure for table yii7.cms_menu_item
DROP TABLE IF EXISTS `cms_menu_item`;
CREATE TABLE IF NOT EXISTS `cms_menu_item` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menuId` int(10) unsigned NOT NULL,
  `locale` varchar(50) NOT NULL,
  `label` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `weight` int(10) unsigned NOT NULL DEFAULT '0',
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `menuId_locale` (`menuId`,`locale`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table yii7.cms_menu_item: ~6 rows (approximately)
/*!40000 ALTER TABLE `cms_menu_item` DISABLE KEYS */;
INSERT INTO `cms_menu_item` (`id`, `menuId`, `locale`, `label`, `url`, `weight`, `visible`) VALUES
	(1, 1, 'en', 'About Us', 'aboutus', 1, 1),
	(2, 1, 'en', 'Home', '//site/index', 0, 1),
	(3, 1, 'es', 'Inicio', '//site/index', 0, 1),
	(4, 1, 'es', 'Acerca de', 'aboutus', 0, 1),
	(5, 2, 'vn', '123', '123', 0, 1),
	(6, 2, 'en', '123', '123', 0, 1);
/*!40000 ALTER TABLE `cms_menu_item` ENABLE KEYS */;


-- Dumping structure for table yii7.cms_message
DROP TABLE IF EXISTS `cms_message`;
CREATE TABLE IF NOT EXISTS `cms_message` (
  `id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(16) NOT NULL DEFAULT '',
  `translation` text NOT NULL,
  PRIMARY KEY (`id`,`language`),
  CONSTRAINT `FK_cms_message_cms_source_message` FOREIGN KEY (`id`) REFERENCES `cms_source_message` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table yii7.cms_message: ~36 rows (approximately)
/*!40000 ALTER TABLE `cms_message` DISABLE KEYS */;
INSERT INTO `cms_message` (`id`, `language`, `translation`) VALUES
	(1, 'br', ''),
	(1, 'en', ''),
	(1, 'es', ''),
	(53, 'br', 'Comentários'),
	(53, 'en', 'Body'),
	(53, 'es', 'Comentarios'),
	(97, 'br', 'Conosco'),
	(97, 'en', 'Contact Us'),
	(97, 'es', 'Contacto'),
	(100, 'br', 'Nome'),
	(100, 'en', 'Name'),
	(100, 'es', 'Nombre'),
	(108, 'br', 'Assunto'),
	(108, 'en', 'Subject'),
	(108, 'es', 'Asunto'),
	(110, 'br', ''),
	(110, 'en', 'Please enter the letters as they are shown in the image above. Letters are not case-sensitive.'),
	(110, 'es', 'Por favor introduce las letras tal como se muestran en la imagen. Las letras no distinguen entre mayúsculas y minúsculas.'),
	(112, 'br', ''),
	(112, 'en', 'Submit'),
	(112, 'es', 'Enviar'),
	(117, 'br', 'Comentários'),
	(117, 'en', 'Body'),
	(117, 'es', 'Comentarios'),
	(119, 'br', 'Código de Verificación'),
	(119, 'en', 'Verification Code'),
	(119, 'es', 'Código de Verificación'),
	(120, 'br', ''),
	(120, 'en', 'If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.'),
	(120, 'es', 'Si tiene consultas comerciales u otras preguntas, por favor completa el siguiente formulario para contactar con nosotros. Gracias.'),
	(122, 'br', ''),
	(122, 'en', 'Fields with {ast} are required'),
	(122, 'es', 'Campos con {ast} son requeridos'),
	(125, 'br', ''),
	(125, 'en', 'Contact'),
	(125, 'es', 'Contacto');
/*!40000 ALTER TABLE `cms_message` ENABLE KEYS */;


-- Dumping structure for table yii7.cms_page
DROP TABLE IF EXISTS `cms_page`;
CREATE TABLE IF NOT EXISTS `cms_page` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NULL DEFAULT NULL,
  `parentId` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `published` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `name_deleted` (`name`,`deleted`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table yii7.cms_page: ~5 rows (approximately)
/*!40000 ALTER TABLE `cms_page` DISABLE KEYS */;
INSERT INTO `cms_page` (`id`, `created`, `updated`, `parentId`, `name`, `type`, `published`, `deleted`) VALUES
	(1, '2014-03-22 09:19:46', NULL, 0, 'index', '', 1, 0),
	(2, '2014-03-22 09:38:23', NULL, 0, 'about', '', 1, 1),
	(3, '2014-03-22 09:39:37', NULL, 0, 'aboutus', '', 1, 0),
	(4, '2014-10-22 10:50:47', NULL, 0, '123', '', 1, 0),
	(5, '2014-10-22 16:14:12', NULL, 1, 'test', '0', 1, 0);
/*!40000 ALTER TABLE `cms_page` ENABLE KEYS */;


-- Dumping structure for table yii7.cms_page_content
DROP TABLE IF EXISTS `cms_page_content`;
CREATE TABLE IF NOT EXISTS `cms_page_content` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pageId` int(10) unsigned NOT NULL,
  `locale` varchar(50) NOT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `body` longtext,
  `url` varchar(255) DEFAULT NULL,
  `pageTitle` varchar(255) DEFAULT NULL,
  `breadcrumb` varchar(255) DEFAULT NULL,
  `metaTitle` varchar(255) DEFAULT NULL,
  `metaDescription` varchar(255) DEFAULT NULL,
  `metaKeywords` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `contentId_locale` (`pageId`,`locale`),
  CONSTRAINT `cms_page_content_ibfk_1` FOREIGN KEY (`pageId`) REFERENCES `cms_page` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- Dumping data for table yii7.cms_page_content: ~19 rows (approximately)
/*!40000 ALTER TABLE `cms_page_content` DISABLE KEYS */;
INSERT INTO `cms_page_content` (`id`, `pageId`, `locale`, `heading`, `body`, `url`, `pageTitle`, `breadcrumb`, `metaTitle`, `metaDescription`, `metaKeywords`) VALUES
	(1, 1, 'en', 'Index', '', 'index', 'Yii OpenCMS ', 'Index', 'Yii OpenCMS ', 'Simple cms based on Yii Framework', ''),
	(2, 1, 'es', 'Inicio', '', 'inicio', 'Yii OpenCMS', 'Inicio', 'Yii OpenCMS ', 'Simple cms basado en Yii Framework', ''),
	(3, 1, 'br', '', '', '', '', '', '', '', ''),
	(4, 2, 'en', 'About Us', '{{image:1}}\r\n<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tempor mauris ac purus iaculis congue. Curabitur et eros sem. In lacinia vehicula risus sed molestie. In velit ligula, bibendum sed cursus ac, pellentesque in elit. Integer feugiat eleifend nisl, vel convallis orci placerat eu. Pellentesque porta, leo quis molestie iaculis, ipsum lacus placerat justo, nec mollis lorem erat nec nisl. Proin varius elit vel dui adipiscing hendrerit. Sed mollis vestibulum quam, vel luctus quam imperdiet aliquam. Pellentesque a neque ut erat vulputate blandit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi et ligula neque, ut elementum lectus. Nam non lacus dolor. Nunc eget orci sed nulla lacinia eleifend viverra sit amet velit. Fusce auctor sem et leo pretium quis tincidunt magna auctor. Mauris porta arcu at lorem bibendum faucibus.</p>', 'about', 'About Us', 'About', '', '', ''),
	(5, 2, 'es', '', '', '', '', '', '', '', ''),
	(6, 2, 'br', '', '', '', '', '', '', '', ''),
	(7, 3, 'en', 'About Us', '<p>{{image:2}} Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<p>{{menu:Navigation}}</p>\r\n\r\n<p>{{block:index}}</p>\r\n', 'About-Us', 'About Us', 'About-Us', 'About-Us', 'About-Us Description', ''),
	(8, 3, 'es', 'Sobre Nosotros', '{{image:2}}\r\nLorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.	 	 ', 'sobre-nosotros', 'Sobre Nosotros', 'Sobre Nosotros', 'Sobre Nosotros', '', ''),
	(9, 3, 'br', 'Sobre Nós', '{{image:2}}\r\nO Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um espécime de livro. Este texto não só sobreviveu 5 séculos, mas também o salto para a tipografia electrónica, mantendo-se essencialmente inalterada. Foi popularizada nos anos 60 com a disponibilização das folhas de Letraset, que continham passagens com Lorem Ipsum, e mais recentemente com os programas de publicação como o Aldus PageMaker que incluem versões do Lorem Ipsum.', 'sobre-nos', 'Sobre Nós', 'Sobre Nós', '', '', ''),
	(10, 4, 'en', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(11, 4, 'vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(12, 1, 'vn', '123', '', '', '', '', '', '', ''),
	(13, 5, 'en', '123123', '<p>123123</p>\r\n', '', '', '', '', '', ''),
	(14, 5, 'vn', '12321', '<p>123123</p>\r\n', '', '', '', '', '', ''),
	(15, 3, 'vn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(16, 3, 'vi', '', '<p>Tie61ng vie65t</p>\r\n', '', '', '', '', '', ''),
	(17, 1, 'vi', '', '', '', '', '', '', '', ''),
	(18, 4, 'vi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(19, 5, 'vi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `cms_page_content` ENABLE KEYS */;


-- Dumping structure for table yii7.cms_source_message
DROP TABLE IF EXISTS `cms_source_message`;
CREATE TABLE IF NOT EXISTS `cms_source_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(32) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=168 DEFAULT CHARSET=latin1;

-- Dumping data for table yii7.cms_source_message: ~166 rows (approximately)
/*!40000 ALTER TABLE `cms_source_message` DISABLE KEYS */;
INSERT INTO `cms_source_message` (`id`, `category`, `message`) VALUES
	(1, 'CmsModule.core', 'Cms'),
	(2, 'CmsModule.core', 'Messages'),
	(3, 'CmsModule.core', 'Message'),
	(4, 'CmsModule.core', 'Create block'),
	(5, 'CrugeModule.admin', 'User Manager'),
	(6, 'CrugeModule.admin', 'Update Profile'),
	(7, 'CrugeModule.admin', 'Create User'),
	(8, 'CrugeModule.admin', 'Manage Users'),
	(9, 'CrugeModule.admin', 'Custom Fields'),
	(10, 'CrugeModule.admin', 'List Profile Fields'),
	(11, 'CrugeModule.admin', 'Create Profile Field'),
	(12, 'CrugeModule.admin', 'Roles and Assignments'),
	(13, 'CrugeModule.admin', 'Roles'),
	(14, 'CrugeModule.admin', 'Tasks'),
	(15, 'CrugeModule.admin', 'Operations'),
	(16, 'CrugeModule.admin', 'Assign Roles to Users'),
	(17, 'CrugeModule.admin', 'System'),
	(18, 'CrugeModule.admin', 'Sessions'),
	(19, 'CrugeModule.admin', 'System Variables'),
	(20, 'CmsModule.core', 'Blocks'),
	(21, 'CrugeModule.admin', 'Crear un nuevo Campo Personalizado'),
	(22, 'CrugeModule.admin', '*** You are working as Super Administrator ***'),
	(23, 'CrugeModule.logon', 'Login'),
	(24, 'CrugeModule.logon', 'Username'),
	(25, 'CrugeModule.logon', 'or'),
	(26, 'CrugeModule.logon', 'Email'),
	(27, 'CrugeModule.logon', 'Password'),
	(28, 'CrugeModule.logon', 'Remember this machine'),
	(29, 'CrugeModule.logon', 'Security code'),
	(30, 'CrugeModule.logon', 'Lost Password?'),
	(31, 'CrugeModule.logon', 'Register'),
	(32, 'CrugeModule.logger', 'PERMISSION IS REQUIRED'),
	(33, 'CrugeModule.logger', 'Returned User'),
	(34, 'CrugeModule.logon', 'Invalid username'),
	(35, 'CrugeModule.logon', 'Password may contain numbers or symbols ({symbols}) and between {min} and {max} characters'),
	(36, 'CrugeModule.logon', 'Please, confirm checking the checkbox'),
	(37, 'CrugeModule.logon', 'Please, check if you understand and accept the terms of use'),
	(38, 'CrugeModule.logon', 'Security code is mandatory'),
	(39, 'CrugeModule.logon', 'Security code is invalid'),
	(40, 'CrugeModule.logon', '\'{attribute}\' already in use'),
	(41, 'CmsModule.core', 'Pages'),
	(42, 'CmsModule.core', 'Create page'),
	(43, 'CmsModule.core', 'Created'),
	(44, 'CmsModule.core', 'Updated'),
	(45, 'CmsModule.core', 'System name'),
	(46, 'CmsModule.core', 'Parent'),
	(47, 'CmsModule.core', 'Type'),
	(48, 'CmsModule.core', '{name} page'),
	(49, 'CmsModule.core', 'Content'),
	(50, 'CmsModule.core', 'Page'),
	(51, 'CmsModule.core', 'Locale'),
	(52, 'CmsModule.core', 'Heading'),
	(53, 'CmsModule.core', 'Body'),
	(54, 'CmsModule.core', 'URL Alias'),
	(55, 'CmsModule.core', 'Page Title'),
	(56, 'CmsModule.core', 'Breadcrumb'),
	(57, 'CmsModule.core', 'Meta Title'),
	(58, 'CmsModule.core', 'Meta Description'),
	(59, 'CmsModule.core', 'Meta Keywords'),
	(60, 'CmsModule.core', 'Published'),
	(61, 'CmsModule.core', 'Available tags'),
	(62, 'CmsModule.core', 'displays a content block'),
	(63, 'CmsModule.core', 'displays a menu'),
	(64, 'CmsModule.core', 'creates an URL to a page'),
	(65, 'CmsModule.core', 'displays an image'),
	(66, 'CmsModule.core', 'creates a link to an attached file'),
	(67, 'CmsModule.core', 'creates a mailto link'),
	(68, 'CmsModule.core', 'creates a link to a page'),
	(69, 'CmsModule.core', 'creates an external link'),
	(70, 'CmsModule.core', 'creates a link to an anchor on the page'),
	(71, 'CmsModule.core', 'Properties'),
	(72, 'CmsModule.core', 'Images'),
	(73, 'CmsModule.core', 'Add image'),
	(74, 'CmsModule.core', 'No images found.'),
	(75, 'CmsModule.core', 'Tag'),
	(76, 'CmsModule.core', 'Attachments'),
	(77, 'CmsModule.core', 'Add file'),
	(78, 'CmsModule.core', 'No attachments found.'),
	(79, 'CmsModule.core', 'No parent'),
	(80, 'CmsModule.core', 'None'),
	(81, 'CmsModule.core', 'Save'),
	(82, 'CmsModule.core', 'Cancel'),
	(83, 'CmsModule.core', 'Are you sure you want to cancel? All changes will be lost.'),
	(84, 'CmsModule.core', 'Menus'),
	(85, 'CmsModule.core', 'Create menu'),
	(86, 'CmsModule.core', '{name} menu'),
	(87, 'CmsModule.core', 'Links'),
	(88, 'CmsModule.core', 'Menu'),
	(89, 'CmsModule.core', 'Label'),
	(90, 'CmsModule.core', 'URL'),
	(91, 'CmsModule.core', 'Weight'),
	(92, 'CmsModule.core', 'Visible'),
	(93, 'CmsModule.core', 'Add link'),
	(94, 'CmsModule.core', 'Page updated.'),
	(95, 'CmsModule.core', 'You are not allowed to access this page.'),
	(96, 'app', 'Discounts on rent a car. Best brands. Best prices. Rentingcarz.com'),
	(97, 'app', 'Contact Us'),
	(98, 'app', 'Contact Form'),
	(99, 'app', 'Regarding'),
	(100, 'app', 'Name'),
	(101, 'app', 'E-mail'),
	(102, 'app', 'Select'),
	(103, 'app', 'New Reservation'),
	(104, 'app', 'Existing Reservation'),
	(105, 'app', 'Refunds for Pay Now'),
	(106, 'app', 'Customer Service'),
	(107, 'app', 'Others'),
	(108, 'app', 'Subject'),
	(109, 'app', 'Comments'),
	(110, 'app', 'Please enter the letters as they are shown in the image above. Letters are not case-sensitive.'),
	(111, 'app', 'Fields with <span class="required">*</span> are required.'),
	(112, 'app', 'Submit'),
	(113, 'app', 'Information'),
	(114, 'CmsModule.core', 'Link added.'),
	(115, 'CmsModule.core', 'Message: {message}'),
	(116, 'CmsModule.core', 'Message updated.'),
	(117, 'app', 'Body'),
	(118, 'app', 'Email'),
	(119, 'app', 'Verification Code'),
	(120, 'app', 'If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.'),
	(122, 'app', 'Fields with {ast} are required'),
	(123, 'CmsModule.core', 'Message deleted.'),
	(124, 'app', 'Please enter the letters as they are shown in the image above.<br/>Letters are not case-sensitive.'),
	(125, 'app', 'Contact'),
	(126, 'CmsModule.core', 'Page deleted.'),
	(127, 'CmsModule.core', 'Image added.'),
	(128, 'CmsModule.core', 'Create'),
	(129, 'CmsModule.core', 'Block created.'),
	(130, 'CmsModule.core', '{name} block'),
	(131, 'CmsModule.core', 'Block'),
	(132, 'CmsModule.core', 'Block updated.'),
	(133, 'app', 'Login'),
	(134, 'app', 'Rights'),
	(135, 'app', 'Logout'),
	(136, 'AccountsModule', 'Incorrect username (length between 3 and 20 characters).'),
	(137, 'RightsModule.core', 'Name'),
	(138, 'RightsModule.core', 'Roles'),
	(139, 'RightsModule.core', 'Tasks'),
	(140, 'RightsModule.core', 'Operations'),
	(141, 'AccountsModule', 'Incorrect password (minimal length 4 symbols).'),
	(142, 'AccountsModule', 'Name is too long (must be less than 128 characters).'),
	(143, 'AccountsModule', 'This username already exists.'),
	(144, 'AccountsModule', 'This user\'s email address already exists.'),
	(145, 'AccountsModule', 'Invalid symbols (A-z0-9 allowed).'),
	(146, 'AccountsModule', 'Retype Password is incorrect.'),
	(147, 'RightsModule.core', 'Assignments'),
	(148, 'RightsModule.core', 'Here you can view which permissions has been assigned to each user.'),
	(149, 'RightsModule.core', 'No users found.'),
	(150, 'AccountsModule', 'Id'),
	(151, 'AccountsModule', 'User Name'),
	(152, 'AccountsModule', 'Password'),
	(153, 'AccountsModule', 'Retype Password'),
	(154, 'AccountsModule', 'Email'),
	(155, 'AccountsModule', 'First Name'),
	(156, 'AccountsModule', 'Last Name'),
	(157, 'AccountsModule', 'Verification Code'),
	(158, 'AccountsModule', 'activation key'),
	(159, 'AccountsModule', 'Registration date'),
	(160, 'AccountsModule', 'Last visit'),
	(161, 'AccountsModule', 'Status'),
	(162, 'AccountsModule', 'City'),
	(163, 'AccountsModule', 'Street'),
	(164, 'AccountsModule', 'Zip'),
	(165, 'AccountsModule', 'Phone'),
	(166, 'AccountsModule', 'Phone Type'),
	(167, 'test', 'Hello');
/*!40000 ALTER TABLE `cms_source_message` ENABLE KEYS */;


-- Dumping structure for table yii7.cruge_authassignment
DROP TABLE IF EXISTS `cruge_authassignment`;
CREATE TABLE IF NOT EXISTS `cruge_authassignment` (
  `userid` int(11) NOT NULL,
  `bizrule` text,
  `data` text,
  `itemname` varchar(64) NOT NULL,
  PRIMARY KEY (`userid`,`itemname`),
  KEY `fk_cruge_authassignment_cruge_authitem1` (`itemname`),
  KEY `fk_cruge_authassignment_user` (`userid`),
  CONSTRAINT `fk_cruge_authassignment_cruge_authitem1` FOREIGN KEY (`itemname`) REFERENCES `cruge_authitem` (`name`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cruge_authassignment_user` FOREIGN KEY (`userid`) REFERENCES `cruge_user` (`iduser`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table yii7.cruge_authassignment: ~0 rows (approximately)
/*!40000 ALTER TABLE `cruge_authassignment` DISABLE KEYS */;
/*!40000 ALTER TABLE `cruge_authassignment` ENABLE KEYS */;


-- Dumping structure for table yii7.cruge_authitem
DROP TABLE IF EXISTS `cruge_authitem`;
CREATE TABLE IF NOT EXISTS `cruge_authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table yii7.cruge_authitem: ~25 rows (approximately)
/*!40000 ALTER TABLE `cruge_authitem` DISABLE KEYS */;
INSERT INTO `cruge_authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
	('action_site_contact', 0, '', NULL, 'N;'),
	('action_site_error', 0, '', NULL, 'N;'),
	('action_site_index', 0, '', NULL, 'N;'),
	('action_site_login', 0, '', NULL, 'N;'),
	('action_site_logout', 0, '', NULL, 'N;'),
	('action_ui_editprofile', 0, '', NULL, 'N;'),
	('action_ui_fieldsadminlist', 0, '', NULL, 'N;'),
	('action_ui_rbacauthitemchilditems', 0, '', NULL, 'N;'),
	('action_ui_rbacauthitemcreate', 0, '', NULL, 'N;'),
	('action_ui_rbaclistroles', 0, '', NULL, 'N;'),
	('action_ui_rbaclisttasks', 0, '', NULL, 'N;'),
	('action_ui_systemupdate', 0, '', NULL, 'N;'),
	('action_ui_usermanagementadmin', 0, '', NULL, 'N;'),
	('action_yiiLog_admin', 0, '', NULL, 'N;'),
	('action_yiilog_create', 0, '', NULL, 'N;'),
	('action_yiilog_delete', 0, '', NULL, 'N;'),
	('action_yiilog_index', 0, '', NULL, 'N;'),
	('action_yiilog_update', 0, '', NULL, 'N;'),
	('action_yiilog_view', 0, '', NULL, 'N;'),
	('admin', 0, '', NULL, 'N;'),
	('administrator', 2, '', '', 'N;'),
	('cms', 0, '', NULL, 'N;'),
	('controller_site', 0, '', NULL, 'N;'),
	('controller_yiilog', 0, '', NULL, 'N;'),
	('manage', 0, '', NULL, 'N;');
/*!40000 ALTER TABLE `cruge_authitem` ENABLE KEYS */;


-- Dumping structure for table yii7.cruge_authitemchild
DROP TABLE IF EXISTS `cruge_authitemchild`;
CREATE TABLE IF NOT EXISTS `cruge_authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `crugeauthitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `cruge_authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `crugeauthitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `cruge_authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table yii7.cruge_authitemchild: ~0 rows (approximately)
/*!40000 ALTER TABLE `cruge_authitemchild` DISABLE KEYS */;
/*!40000 ALTER TABLE `cruge_authitemchild` ENABLE KEYS */;


-- Dumping structure for table yii7.cruge_field
DROP TABLE IF EXISTS `cruge_field`;
CREATE TABLE IF NOT EXISTS `cruge_field` (
  `idfield` int(11) NOT NULL AUTO_INCREMENT,
  `fieldname` varchar(20) NOT NULL,
  `longname` varchar(50) DEFAULT NULL,
  `position` int(11) DEFAULT '0',
  `required` int(11) DEFAULT '0',
  `fieldtype` int(11) DEFAULT '0',
  `fieldsize` int(11) DEFAULT '20',
  `maxlength` int(11) DEFAULT '45',
  `showinreports` int(11) DEFAULT '0',
  `useregexp` varchar(512) DEFAULT NULL,
  `useregexpmsg` varchar(512) DEFAULT NULL,
  `predetvalue` mediumblob,
  PRIMARY KEY (`idfield`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table yii7.cruge_field: ~0 rows (approximately)
/*!40000 ALTER TABLE `cruge_field` DISABLE KEYS */;
/*!40000 ALTER TABLE `cruge_field` ENABLE KEYS */;


-- Dumping structure for table yii7.cruge_fieldvalue
DROP TABLE IF EXISTS `cruge_fieldvalue`;
CREATE TABLE IF NOT EXISTS `cruge_fieldvalue` (
  `idfieldvalue` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `idfield` int(11) NOT NULL,
  `value` blob,
  PRIMARY KEY (`idfieldvalue`),
  KEY `fk_cruge_fieldvalue_cruge_user1` (`iduser`),
  KEY `fk_cruge_fieldvalue_cruge_field1` (`idfield`),
  CONSTRAINT `fk_cruge_fieldvalue_cruge_field1` FOREIGN KEY (`idfield`) REFERENCES `cruge_field` (`idfield`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_cruge_fieldvalue_cruge_user1` FOREIGN KEY (`iduser`) REFERENCES `cruge_user` (`iduser`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table yii7.cruge_fieldvalue: ~0 rows (approximately)
/*!40000 ALTER TABLE `cruge_fieldvalue` DISABLE KEYS */;
/*!40000 ALTER TABLE `cruge_fieldvalue` ENABLE KEYS */;


-- Dumping structure for table yii7.cruge_session
DROP TABLE IF EXISTS `cruge_session`;
CREATE TABLE IF NOT EXISTS `cruge_session` (
  `idsession` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `created` bigint(30) DEFAULT NULL,
  `expire` bigint(30) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `ipaddress` varchar(45) DEFAULT NULL,
  `usagecount` int(11) DEFAULT '0',
  `lastusage` bigint(30) DEFAULT NULL,
  `logoutdate` bigint(30) DEFAULT NULL,
  `ipaddressout` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idsession`),
  KEY `crugesession_iduser` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- Dumping data for table yii7.cruge_session: ~11 rows (approximately)
/*!40000 ALTER TABLE `cruge_session` DISABLE KEYS */;
INSERT INTO `cruge_session` (`idsession`, `iduser`, `created`, `expire`, `status`, `ipaddress`, `usagecount`, `lastusage`, `logoutdate`, `ipaddressout`) VALUES
	(17, 1, 1403570873, 1403572673, 0, '127.0.0.1', 1, 1403570873, NULL, NULL),
	(18, 1, 1403573917, 1403575717, 0, '127.0.0.1', 1, 1403573917, NULL, NULL),
	(19, 1, 1403576773, 1403578573, 0, '127.0.0.1', 1, 1403576773, 1403576774, '127.0.0.1'),
	(20, 1, 1403576783, 1403578583, 0, '127.0.0.1', 1, 1403576783, NULL, NULL),
	(21, 1, 1403579274, 1403581074, 1, '127.0.0.1', 1, 1403579274, NULL, NULL),
	(22, 1, 1405815083, 1405816883, 0, '127.0.0.1', 2, 1405816521, NULL, NULL),
	(23, 1, 1405817097, 1405818897, 0, '127.0.0.1', 1, 1405817097, 1405817097, '127.0.0.1'),
	(24, 1, 1405817105, 1405818905, 0, '127.0.0.1', 1, 1405817105, NULL, NULL),
	(25, 1, 1405819040, 1405820840, 0, '127.0.0.1', 1, 1405819040, 1405819040, '127.0.0.1'),
	(26, 1, 1405819047, 1405820847, 0, '127.0.0.1', 1, 1405819047, NULL, NULL),
	(27, 1, 1405821076, 1405826476, 1, '127.0.0.1', 2, 1405821125, NULL, NULL);
/*!40000 ALTER TABLE `cruge_session` ENABLE KEYS */;


-- Dumping structure for table yii7.cruge_system
DROP TABLE IF EXISTS `cruge_system`;
CREATE TABLE IF NOT EXISTS `cruge_system` (
  `idsystem` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `largename` varchar(45) DEFAULT NULL,
  `sessionmaxdurationmins` int(11) DEFAULT '30',
  `sessionmaxsameipconnections` int(11) DEFAULT '10',
  `sessionreusesessions` int(11) DEFAULT '1' COMMENT '1yes 0no',
  `sessionmaxsessionsperday` int(11) DEFAULT '-1',
  `sessionmaxsessionsperuser` int(11) DEFAULT '-1',
  `systemnonewsessions` int(11) DEFAULT '0' COMMENT '1yes 0no',
  `systemdown` int(11) DEFAULT '0',
  `registerusingcaptcha` int(11) DEFAULT '0',
  `registerusingterms` int(11) DEFAULT '0',
  `terms` blob,
  `registerusingactivation` int(11) DEFAULT '1',
  `defaultroleforregistration` varchar(64) DEFAULT NULL,
  `registerusingtermslabel` varchar(100) DEFAULT NULL,
  `registrationonlogin` int(11) DEFAULT '1',
  PRIMARY KEY (`idsystem`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table yii7.cruge_system: ~0 rows (approximately)
/*!40000 ALTER TABLE `cruge_system` DISABLE KEYS */;
INSERT INTO `cruge_system` (`idsystem`, `name`, `largename`, `sessionmaxdurationmins`, `sessionmaxsameipconnections`, `sessionreusesessions`, `sessionmaxsessionsperday`, `sessionmaxsessionsperuser`, `systemnonewsessions`, `systemdown`, `registerusingcaptcha`, `registerusingterms`, `terms`, `registerusingactivation`, `defaultroleforregistration`, `registerusingtermslabel`, `registrationonlogin`) VALUES
	(1, 'default', NULL, 90, 10, 1, -1, -1, 0, 0, 0, 0, _binary '', 0, '', '', 0);
/*!40000 ALTER TABLE `cruge_system` ENABLE KEYS */;


-- Dumping structure for table yii7.cruge_user
DROP TABLE IF EXISTS `cruge_user`;
CREATE TABLE IF NOT EXISTS `cruge_user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `regdate` bigint(30) DEFAULT NULL,
  `actdate` bigint(30) DEFAULT NULL,
  `logondate` bigint(30) DEFAULT NULL,
  `username` varchar(64) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL COMMENT 'Hashed password',
  `authkey` varchar(100) DEFAULT NULL COMMENT 'llave de autentificacion',
  `state` int(11) DEFAULT '0',
  `totalsessioncounter` int(11) DEFAULT '0',
  `currentsessioncounter` int(11) DEFAULT '0',
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table yii7.cruge_user: ~2 rows (approximately)
/*!40000 ALTER TABLE `cruge_user` DISABLE KEYS */;
INSERT INTO `cruge_user` (`iduser`, `regdate`, `actdate`, `logondate`, `username`, `email`, `password`, `authkey`, `state`, `totalsessioncounter`, `currentsessioncounter`) VALUES
	(1, NULL, NULL, 1405821125, 'admin', 'admin@tucorreo.com', 'admin', NULL, 1, 0, 0),
	(2, NULL, NULL, NULL, 'invitado', 'invitado', 'nopassword', NULL, 1, 0, 0);
/*!40000 ALTER TABLE `cruge_user` ENABLE KEYS */;


-- Dumping structure for table yii7.email_template
DROP TABLE IF EXISTS `email_template`;
CREATE TABLE IF NOT EXISTS `email_template` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `attach_file` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_type` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- Dumping data for table yii7.email_template: ~2 rows (approximately)
/*!40000 ALTER TABLE `email_template` DISABLE KEYS */;
INSERT INTO `email_template` (`id`, `name`, `create_at`, `update_at`, `attach_file`) VALUES
	(20, 'Activate', '2014-11-21 10:19:11', '2014-11-21 10:19:11', NULL),
	(21, 'recovery', '2014-11-21 10:22:50', '2014-11-24 14:50:15', NULL);
/*!40000 ALTER TABLE `email_template` ENABLE KEYS */;


-- Dumping structure for table yii7.email_translation
DROP TABLE IF EXISTS `email_translation`;
CREATE TABLE IF NOT EXISTS `email_translation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email_temp_id` int(11) NOT NULL,
  `lang_code` varchar(10) NOT NULL,
  `attach_file` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_EmailTrans_Lang` (`lang_code`),
  KEY `fk_EmailTrans_EmailTemp` (`email_temp_id`),
  CONSTRAINT `FK_email_translation_email_template` FOREIGN KEY (`email_temp_id`) REFERENCES `email_template` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

-- Dumping data for table yii7.email_translation: ~4 rows (approximately)
/*!40000 ALTER TABLE `email_translation` DISABLE KEYS */;
INSERT INTO `email_translation` (`id`, `email_temp_id`, `lang_code`, `attach_file`, `subject`, `content`) VALUES
	(42, 20, 'en', '', 'Activate Register User', '<p>hi, [username], please click below link to active your account</p>\r\n\r\n<p>[url]</p>\r\n'),
	(43, 20, 'vi', '', 'Kich hoat nguoi dung', '<p>Chao {username} nhan duong link {url} de kich hoat</p>\r\n'),
	(44, 21, 'en', 'Yii7 PHP Framework.xlsx;', 'Recovery password', '<p>click link to recovery your password {{url}}</p>\r\n'),
	(45, 21, 'vi', '', 'khoi phuc mat khau', '<p>nhan duong link {url} de khoi phuc mat khau.</p>\r\n');
/*!40000 ALTER TABLE `email_translation` ENABLE KEYS */;


-- Dumping structure for table yii7.image
DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ownerId` int(10) unsigned NOT NULL,
  `owner` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `extension` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `byteSize` int(10) unsigned NOT NULL,
  `mimeType` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table yii7.image: ~3 rows (approximately)
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
INSERT INTO `image` (`id`, `created`, `ownerId`, `owner`, `name`, `path`, `extension`, `filename`, `byteSize`, `mimeType`) VALUES
	(1, '2014-03-22 09:46:02', 2, 'CmsPage', 'logo', 'page', 'png', 'logo.png', 11329, 'image/png'),
	(2, '2014-07-20 08:44:21', 3, 'CmsPage', 'technicsqc11703806', 'page', 'jpg', 'technics-q-c-1170-380-6.jpg', 43290, 'image/jpeg'),
	(3, '2014-10-22 16:11:55', 1, 'CmsPage', '333', 'page', 'png', 'china.png', 635261, 'image/png');
/*!40000 ALTER TABLE `image` ENABLE KEYS */;


-- Dumping structure for table yii7.language
DROP TABLE IF EXISTS `language`;
CREATE TABLE IF NOT EXISTS `language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table yii7.language: ~2 rows (approximately)
/*!40000 ALTER TABLE `language` DISABLE KEYS */;
INSERT INTO `language` (`id`, `code`, `name`) VALUES
	(1, 'en', 'English'),
	(2, 'vi', 'Viet Nam');
/*!40000 ALTER TABLE `language` ENABLE KEYS */;


-- Dumping structure for table yii7.rights
DROP TABLE IF EXISTS `rights`;
CREATE TABLE IF NOT EXISTS `rights` (
  `itemname` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  PRIMARY KEY (`itemname`),
  CONSTRAINT `rights_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table yii7.rights: ~0 rows (approximately)
/*!40000 ALTER TABLE `rights` DISABLE KEYS */;
/*!40000 ALTER TABLE `rights` ENABLE KEYS */;


-- Dumping structure for table yii7.settings
DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(64) NOT NULL DEFAULT 'system',
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_key` (`category`,`key`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- Dumping data for table yii7.settings: ~13 rows (approximately)
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` (`id`, `category`, `key`, `value`) VALUES
	(1, 'site', 'title', 's:5:"YII 7";'),
	(2, 'site', 'tag_line', 's:4:"1234";'),
	(3, 'site', 'maintenance_mode', 's:1:"0";'),
	(4, 'dateTime', 'server_time_zone', 's:0:"";'),
	(5, 'dateTime', 'date_format', 's:5:"d/m/Y";'),
	(6, 'dateTime', 'time_format', 's:5:"g:i A";'),
	(7, 'email', 'admin_email', 's:17:"yte.tma@gmail.com";'),
	(8, 'email', 'smtp_server', 's:14:"smtp.gmail.com";'),
	(9, 'email', 'smtp_username', 's:17:"yte.tma@gmail.com";'),
	(10, 'email', 'smtp_password', 's:10:"12345678@X";'),
	(11, 'currency', 'base_currency', 's:1:"0";'),
	(12, 'firstLayerProtection', 'enable', 's:1:"0";'),
	(13, 'firstLayerProtection', 'password', 's:0:"";');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;


-- Dumping structure for table yii7.shop_address
DROP TABLE IF EXISTS `shop_address`;
CREATE TABLE IF NOT EXISTS `shop_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

-- Dumping data for table yii7.shop_address: ~35 rows (approximately)
/*!40000 ALTER TABLE `shop_address` DISABLE KEYS */;
INSERT INTO `shop_address` (`id`, `firstname`, `lastname`, `street`, `zipcode`, `city`, `country`) VALUES
	(1, 'Admin', 'User', 'test', 'test', 'test', 'vn'),
	(2, 'Admin', 'User', 'test', 'test', 'test', 'vn'),
	(3, 'Admin', 'User', 'test', 'test', 'test', 'vn'),
	(4, 'Admin', 'User', 'test', 'test', 'test', 'vn'),
	(5, 'Admin', 'User', 'test', 'test', 'test', 'vn'),
	(6, 'Admin', 'User', 'test', 'test', 'test', 'vn'),
	(7, 'Admin', 'User', 'test', 'test', 'test', 'vn'),
	(8, 'Admin', 'User', 'test', 'test', 'test', 'vn'),
	(9, 'Admin', 'User', 'test', 'test', 'test', 'vn'),
	(10, 'Admin', 'User', 'test', 'test', 'test', 'vn'),
	(11, 'Admin', 'User', 'test', 'test', 'test', 'vn'),
	(12, 'Admin', 'User', 'test', 'test', 'test', 'vn'),
	(13, 'Admin', 'User', 'test', 'test', 'test', 'vn'),
	(14, 'Admin', 'User', 'test', 'test', 'test', 'vn'),
	(15, 'Admin', 'User', 'test', 'test', 'test', 'vn'),
	(16, 'Admin', 'User', 'test', 'test', 'test', 'vn'),
	(17, 'Admin', 'User', 'test', 'test', 'test', 'vn'),
	(18, 'Admin', 'User', 'test', 'test', 'test', 'vn'),
	(19, 'Admin', 'User', 'test', 'test', 'test', 'vn'),
	(20, 'Admin', 'User', 'test', 'test', 'test', 'vn'),
	(21, 'Admin', 'User', 'test', 'test', 'test', 'vn'),
	(22, 'Admin', 'User', 'test', 'test', 'test', 'vn'),
	(23, 'Admin', 'User', 'test', 'test', 'test', 'vn'),
	(24, 'Admin', 'User', 'test', 'test', 'test', 'vn'),
	(25, 'Admin', 'User', 'test', 'test', 'test', 'vn'),
	(26, 'Admin', 'User', 'test', 'test', 'test', 'vn'),
	(27, 'Admin', 'User', 'test', 'test', 'test', 'vn'),
	(28, 'Admin', 'User', 'test', 'test', 'test', 'vn'),
	(29, 'Admin', 'User', 'test', 'test', 'test', 'vn'),
	(30, 'Admin', 'User', 'test', 'test', 'test', 'vn'),
	(31, 'Admin', 'User', 'test', 'test', 'test', 'vn'),
	(32, 'Admin', 'User', 'test', 'test', 'test', 'vn'),
	(33, 'Admin', 'User', 'test', 'test', 'test', 'vn'),
	(34, 'Admin', 'User', 'test', 'test', 'test', 'vn'),
	(35, 'Admin', 'User', 'test', 'test', 'test', 'vn');
/*!40000 ALTER TABLE `shop_address` ENABLE KEYS */;


-- Dumping structure for table yii7.shop_category
DROP TABLE IF EXISTS `shop_category`;
CREATE TABLE IF NOT EXISTS `shop_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `title` varchar(45) NOT NULL,
  `description` text,
  `language` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- Dumping data for table yii7.shop_category: ~9 rows (approximately)
/*!40000 ALTER TABLE `shop_category` DISABLE KEYS */;
INSERT INTO `shop_category` (`category_id`, `parent_id`, `title`, `description`, `language`) VALUES
	(1, 0, 'Tablet', '', ''),
	(2, 0, 'Phone', '', NULL),
	(3, 0, 'PC', '', ''),
	(8, 1, 'Apple', '', NULL),
	(9, 1, 'SamSung', '', NULL),
	(10, 1, 'LG', '', NULL),
	(11, 2, 'Apple', '', NULL),
	(12, 2, 'Nokia', '', NULL),
	(13, 2, 'SamSung', '', NULL);
/*!40000 ALTER TABLE `shop_category` ENABLE KEYS */;


-- Dumping structure for table yii7.shop_customer
DROP TABLE IF EXISTS `shop_customer`;
CREATE TABLE IF NOT EXISTS `shop_customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `address_id` int(11) NOT NULL,
  `delivery_address_id` int(11) NOT NULL,
  `billing_address_id` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Dumping data for table yii7.shop_customer: ~0 rows (approximately)
/*!40000 ALTER TABLE `shop_customer` DISABLE KEYS */;
INSERT INTO `shop_customer` (`customer_id`, `user_id`, `address_id`, `delivery_address_id`, `billing_address_id`, `email`) VALUES
	(7, 9, 17, 0, 0, 'webmaster@example.com');
/*!40000 ALTER TABLE `shop_customer` ENABLE KEYS */;


-- Dumping structure for table yii7.shop_image
DROP TABLE IF EXISTS `shop_image`;
CREATE TABLE IF NOT EXISTS `shop_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table yii7.shop_image: ~2 rows (approximately)
/*!40000 ALTER TABLE `shop_image` DISABLE KEYS */;
INSERT INTO `shop_image` (`id`, `filename`) VALUES
	(1, 'ipad-air-gray_1.png'),
	(2, 'ipad-mini-2-silver_2_1_1.png');
/*!40000 ALTER TABLE `shop_image` ENABLE KEYS */;


-- Dumping structure for table yii7.shop_order
DROP TABLE IF EXISTS `shop_order`;
CREATE TABLE IF NOT EXISTS `shop_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `delivery_address_id` int(11) NOT NULL,
  `billing_address_id` int(11) NOT NULL,
  `ordering_date` int(11) NOT NULL,
  `ordering_done` tinyint(1) DEFAULT NULL,
  `ordering_confirmed` tinyint(1) DEFAULT NULL,
  `payment_method` int(11) NOT NULL,
  `shipping_method` int(11) NOT NULL,
  `comment` text,
  PRIMARY KEY (`order_id`),
  KEY `fk_order_customer` (`customer_id`),
  CONSTRAINT `fk_order_customer1` FOREIGN KEY (`customer_id`) REFERENCES `shop_customer` (`customer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table yii7.shop_order: ~6 rows (approximately)
/*!40000 ALTER TABLE `shop_order` DISABLE KEYS */;
INSERT INTO `shop_order` (`order_id`, `customer_id`, `delivery_address_id`, `billing_address_id`, `ordering_date`, `ordering_done`, `ordering_confirmed`, `payment_method`, `shipping_method`, `comment`) VALUES
	(1, 7, 3, 4, 1416542700, NULL, NULL, 1, 1, ''),
	(2, 7, 24, 25, 1416554884, NULL, NULL, 5, 1, ''),
	(3, 7, 28, 29, 1416555490, NULL, NULL, 5, 1, ''),
	(4, 7, 30, 31, 1417054736, NULL, NULL, 5, 1, ''),
	(5, 7, 32, 33, 1417054970, NULL, NULL, 5, 1, ''),
	(6, 7, 34, 35, 1417057076, NULL, NULL, 1, 1, '');
/*!40000 ALTER TABLE `shop_order` ENABLE KEYS */;


-- Dumping structure for table yii7.shop_order_capture
DROP TABLE IF EXISTS `shop_order_capture`;
CREATE TABLE IF NOT EXISTS `shop_order_capture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `products` text NOT NULL,
  `shipping` text NOT NULL,
  `payment` text NOT NULL,
  `order_day` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`,`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table yii7.shop_order_capture: ~6 rows (approximately)
/*!40000 ALTER TABLE `shop_order_capture` DISABLE KEYS */;
INSERT INTO `shop_order_capture` (`id`, `order_id`, `products`, `shipping`, `payment`, `order_day`) VALUES
	(1, 1, '[{"amount":"1","name":"Mac air","price":"600","id":"1","tax_name":"7%","tax_value":"7","variations":[{"spec_name":"Color","variation_name":"mau","variation_adjust":"0"},{"spec_name":"Size","variation_name":"so","variation_adjust":"0"}]}]', '{"method":"Delivery by postal Service","tax_name":"19%","tax_value":"19"}', '{"method":"cash","tax_name":"19%","tax_value":"19"}', '2014-11-20'),
	(2, 2, '[{"amount":"1","name":"Mac air","price":"600","id":"1","tax_name":"7%","tax_value":"7","variations":[{"spec_name":"Size","variation_name":"so","variation_adjust":"0"}]}]', '{"method":"Delivery by postal Service","tax_name":"19%","tax_value":"19"}', '{"method":"paypal","tax_name":"19%","tax_value":"19"}', '2014-11-21'),
	(3, 3, '[{"amount":"1","name":"Mac air","price":"600","id":"1","tax_name":"7%","tax_value":"7","variations":[{"spec_name":"Size","variation_name":"so","variation_adjust":"0"}]}]', '{"method":"Delivery by postal Service","tax_name":"19%","tax_value":"19"}', '{"method":"paypal","tax_name":"19%","tax_value":"19"}', '2014-11-21'),
	(4, 4, '[{"amount":"1","name":"Mac air","price":"600","id":"1","tax_name":"7%","tax_value":"7","variations":[{"spec_name":"Color","variation_name":"mau","variation_adjust":"0"},{"spec_name":"Size","variation_name":"so","variation_adjust":"0"}]},{"amount":"1","name":"Mac air","price":"600","id":"1","tax_name":"7%","tax_value":"7","variations":[{"spec_name":"Size","variation_name":"so","variation_adjust":"0"}]}]', '{"method":"Delivery by postal Service","tax_name":"19%","tax_value":"19"}', '{"method":"paypal","tax_name":"19%","tax_value":"19"}', '2014-11-26'),
	(5, 5, '[{"amount":"1","name":"Mac air","price":"600","id":"1","tax_name":"7%","tax_value":"7","variations":[{"spec_name":"Size","variation_name":"so","variation_adjust":"0"}]},{"amount":"1","name":"Mac air","price":"600","id":"1","tax_name":"7%","tax_value":"7","variations":[{"spec_name":"Size","variation_name":"so","variation_adjust":"0"}]}]', '{"method":"Delivery by postal Service","tax_name":"19%","tax_value":"19"}', '{"method":"paypal","tax_name":"19%","tax_value":"19"}', '2014-11-26'),
	(6, 6, '[{"amount":"1","name":"Mac air","price":"600","id":"1","tax_name":"7%","tax_value":"7","variations":[{"spec_name":"Size","variation_name":"so","variation_adjust":"0"}]}]', '{"method":"Delivery by postal Service","tax_name":"19%","tax_value":"19"}', '{"method":"cash","tax_name":"19%","tax_value":"19"}', '2014-11-26');
/*!40000 ALTER TABLE `shop_order_capture` ENABLE KEYS */;


-- Dumping structure for table yii7.shop_order_position
DROP TABLE IF EXISTS `shop_order_position`;
CREATE TABLE IF NOT EXISTS `shop_order_position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `specifications` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table yii7.shop_order_position: ~8 rows (approximately)
/*!40000 ALTER TABLE `shop_order_position` DISABLE KEYS */;
INSERT INTO `shop_order_position` (`id`, `order_id`, `product_id`, `amount`, `specifications`) VALUES
	(1, 1, 1, 1, '{"2":["60"],"1":["61"]}'),
	(2, 2, 1, 1, '{"1":["61"]}'),
	(3, 3, 1, 1, '{"1":["61"]}'),
	(4, 4, 1, 1, '{"2":["60"],"1":["61"]}'),
	(5, 4, 1, 1, '{"1":["61"]}'),
	(6, 5, 1, 1, '{"1":["61"]}'),
	(7, 5, 1, 1, '{"1":["61"]}'),
	(8, 6, 1, 1, '{"1":["61"]}');
/*!40000 ALTER TABLE `shop_order_position` ENABLE KEYS */;


-- Dumping structure for table yii7.shop_payment_method
DROP TABLE IF EXISTS `shop_payment_method`;
CREATE TABLE IF NOT EXISTS `shop_payment_method` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text,
  `tax_id` int(11) NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table yii7.shop_payment_method: ~5 rows (approximately)
/*!40000 ALTER TABLE `shop_payment_method` DISABLE KEYS */;
INSERT INTO `shop_payment_method` (`id`, `title`, `description`, `tax_id`, `price`) VALUES
	(1, 'cash', 'You pay cash', 1, 0),
	(2, 'advance Payment', 'You pay in advance, we deliver', 1, 0),
	(3, 'cash on delivery', 'You pay when we deliver', 1, 0),
	(4, 'invoice', 'We deliver and send a invoice', 1, 0),
	(5, 'paypal', 'You pay by paypal', 1, 0);
/*!40000 ALTER TABLE `shop_payment_method` ENABLE KEYS */;


-- Dumping structure for table yii7.shop_products
DROP TABLE IF EXISTS `shop_products`;
CREATE TABLE IF NOT EXISTS `shop_products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `tax_id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `description` text,
  `price` varchar(45) DEFAULT NULL,
  `language` varchar(45) DEFAULT NULL,
  `specifications` text,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`product_id`),
  KEY `fk_products_category` (`category_id`),
  CONSTRAINT `fk_products_category` FOREIGN KEY (`category_id`) REFERENCES `shop_category` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table yii7.shop_products: ~2 rows (approximately)
/*!40000 ALTER TABLE `shop_products` DISABLE KEYS */;
INSERT INTO `shop_products` (`product_id`, `category_id`, `image_id`, `tax_id`, `title`, `description`, `price`, `language`, `specifications`, `status`) VALUES
	(1, 8, 1, 2, 'Mac air', '<p>Mac os</p>\r\n', '600', NULL, '{"Size":"s","Color":"xanh","Some random attribute":"","Material":"vai","Specific number":""}', 1),
	(2, 8, 0, 1, 'Mac mini', '<p>Mini</p>\r\n', '400', NULL, '{"Size":"","Color":"","Some random attribute":"","Material":"","Specific number":""}', 1);
/*!40000 ALTER TABLE `shop_products` ENABLE KEYS */;


-- Dumping structure for table yii7.shop_product_specification
DROP TABLE IF EXISTS `shop_product_specification`;
CREATE TABLE IF NOT EXISTS `shop_product_specification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `is_user_input` tinyint(1) DEFAULT NULL,
  `required` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table yii7.shop_product_specification: ~3 rows (approximately)
/*!40000 ALTER TABLE `shop_product_specification` DISABLE KEYS */;
INSERT INTO `shop_product_specification` (`id`, `title`, `is_user_input`, `required`) VALUES
	(1, 'Size', 1, 1),
	(2, 'Color', 0, 0),
	(4, 'Material', 0, 1);
/*!40000 ALTER TABLE `shop_product_specification` ENABLE KEYS */;


-- Dumping structure for table yii7.shop_product_variation
DROP TABLE IF EXISTS `shop_product_variation`;
CREATE TABLE IF NOT EXISTS `shop_product_variation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `specification_id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price_adjustion` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

-- Dumping data for table yii7.shop_product_variation: ~3 rows (approximately)
/*!40000 ALTER TABLE `shop_product_variation` DISABLE KEYS */;
INSERT INTO `shop_product_variation` (`id`, `product_id`, `specification_id`, `position`, `title`, `price_adjustion`) VALUES
	(56, 2, 5, -10, 'Test', 0),
	(60, 1, 2, -10, 'mau', 0),
	(61, 1, 1, -10, 'so', 0);
/*!40000 ALTER TABLE `shop_product_variation` ENABLE KEYS */;


-- Dumping structure for table yii7.shop_shipping_method
DROP TABLE IF EXISTS `shop_shipping_method`;
CREATE TABLE IF NOT EXISTS `shop_shipping_method` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text,
  `tax_id` int(11) NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table yii7.shop_shipping_method: ~0 rows (approximately)
/*!40000 ALTER TABLE `shop_shipping_method` DISABLE KEYS */;
INSERT INTO `shop_shipping_method` (`id`, `title`, `description`, `tax_id`, `price`) VALUES
	(1, 'Delivery by postal Service', 'We deliver by Postal Service. 2.99 units of money are charged for that', 1, 2.99);
/*!40000 ALTER TABLE `shop_shipping_method` ENABLE KEYS */;


-- Dumping structure for table yii7.shop_tax
DROP TABLE IF EXISTS `shop_tax`;
CREATE TABLE IF NOT EXISTS `shop_tax` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `percent` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table yii7.shop_tax: ~0 rows (approximately)
/*!40000 ALTER TABLE `shop_tax` DISABLE KEYS */;
INSERT INTO `shop_tax` (`id`, `title`, `percent`) VALUES
	(1, '19%', 19),
	(2, '7%', 7);
/*!40000 ALTER TABLE `shop_tax` ENABLE KEYS */;


-- Dumping structure for table yii7.tbl_account
DROP TABLE IF EXISTS `tbl_account`;
CREATE TABLE IF NOT EXISTS `tbl_account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `first_name` varchar(128) NOT NULL,
  `last_name` varchar(128) NOT NULL,
  `activation_key` varchar(128) NOT NULL DEFAULT '',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `street` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `phone_type` varchar(255) DEFAULT NULL,
  `last_visit` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `status` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8;

-- Dumping data for table yii7.tbl_account: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_account` DISABLE KEYS */;
INSERT INTO `tbl_account` (`id`, `username`, `password`, `email`, `first_name`, `last_name`, `activation_key`, `create_at`, `update_at`, `street`, `city`, `zip`, `phone`, `phone_type`, `last_visit`, `status`) VALUES
	(9, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'webmaster@example.com', 'Admin', 'User', '9a24eff8c15a6a141ece27eb6947da0f', '2014-09-30 10:29:41', '2014-12-18 11:24:42', '', '', '', '', NULL, '2014-09-30 23:44:50', 1);
/*!40000 ALTER TABLE `tbl_account` ENABLE KEYS */;


-- Dumping structure for table yii7.yiilog
DROP TABLE IF EXISTS `yiilog`;
CREATE TABLE IF NOT EXISTS `yiilog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(128) DEFAULT NULL,
  `category` varchar(128) DEFAULT NULL,
  `logtime` int(11) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1345 DEFAULT CHARSET=latin1;

-- Dumping data for table yii7.yiilog: ~0 rows (approximately)
/*!40000 ALTER TABLE `yiilog` DISABLE KEYS */;
/*!40000 ALTER TABLE `yiilog` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
