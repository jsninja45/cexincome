-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 08, 2015 at 10:18 PM
-- Server version: 5.5.42-cll-lve
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `josh_lara`
--

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE IF NOT EXISTS `activations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `activations`
--

INSERT INTO `activations` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(1, 1, '912cJmPSHkNKXTqByLQMQN5wkj71FuHA', 1, '2015-09-17 09:56:45', '2015-09-17 09:56:45', '2015-09-17 09:56:45'),
(2, 2, '688nHfX2Hps7TXnvdEr1KjqrEkpFFfwI', 1, '2015-09-17 10:33:04', '2015-09-17 10:33:03', '2015-09-17 10:33:04'),
(3, 3, 'MEpyWDbfTvtIUmKmGbcGiPW6wJbW3jop', 1, '2015-09-23 14:46:02', '2015-09-23 14:46:02', '2015-09-23 14:46:02'),
(4, 4, 'H42NhQ5A8PGpXVQ1wdTTqL6HFnhoB82Q', 1, '2015-09-23 14:57:04', '2015-09-23 14:57:04', '2015-09-23 14:57:04'),
(5, 5, 'jR2au6JYWJALXnV5uJz8H5io0ejzb8CJ', 1, '2015-09-23 15:04:13', '2015-09-23 15:04:13', '2015-09-23 15:04:13'),
(6, 6, '6rQYE8l3niOXFl3zvuHeHrznKjtBGtKD', 1, '2015-09-23 15:05:52', '2015-09-23 15:05:52', '2015-09-23 15:05:52'),
(7, 7, 'HsYWu4YxR99brM4WIXV9bonrlrLkWfIV', 1, '2015-09-23 15:07:45', '2015-09-23 15:07:45', '2015-09-23 15:07:45'),
(8, 8, 'MQ2UXsG6RbXVBRVDjlRwQJP8waKQXg3a', 1, '2015-09-23 20:24:17', '2015-09-23 20:24:17', '2015-09-23 20:24:17'),
(9, 9, 'Pwxon0mjxsiaZTcpxLG6ET06jUytYbdr', 1, '2015-10-27 10:41:07', '2015-10-27 10:41:07', '2015-10-27 10:41:07');

-- --------------------------------------------------------

--
-- Table structure for table `Beneficiaries`
--

CREATE TABLE IF NOT EXISTS `Beneficiaries` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `FIRST_NAME` varchar(24) NOT NULL,
  `LAST_NAME` varchar(24) NOT NULL,
  `ADDRESS` varchar(100) NOT NULL,
  `CITY` varchar(24) NOT NULL,
  `STATE` varchar(24) NOT NULL,
  `COUNTRY` varchar(255) NOT NULL,
  `POSTCODE` varchar(24) NOT NULL,
  `CONTACT_NUMBER` varchar(24) NOT NULL,
  `TRANSFER_TYPE` varchar(50) NOT NULL,
  `ACCOUNT_NAME` varchar(255) NOT NULL,
  `ACCOUNT_NO` varchar(255) NOT NULL,
  `BSB` varchar(255) NOT NULL,
  `BANK` varchar(255) NOT NULL,
  `CREATED_AT` datetime NOT NULL,
  `UPDATED_AT` datetime NOT NULL,
  `CREATED_BY` varchar(24) NOT NULL,
  `UPDATED_BY` varchar(24) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `Beneficiaries`
--

INSERT INTO `Beneficiaries` (`id`, `FIRST_NAME`, `LAST_NAME`, `ADDRESS`, `CITY`, `STATE`, `COUNTRY`, `POSTCODE`, `CONTACT_NUMBER`, `TRANSFER_TYPE`, `ACCOUNT_NAME`, `ACCOUNT_NO`, `BSB`, `BANK`, `CREATED_AT`, `UPDATED_AT`, `CREATED_BY`, `UPDATED_BY`) VALUES
(1, 'Partha', 'Koley', 'Demo Address', 'Kolkata', 'West Bengal', 'Azerbaijan', '123456', '1234567890', 'Cash', '', '', '', '', '2015-09-23 06:54:40', '2015-10-18 08:46:55', '1', '1'),
(2, 'Agent', 'test', 'demo', 'test', 'demo state', 'Andorra', '123456', '1234567890', 'Cash', '', '', '', '', '2015-09-23 07:48:44', '2015-10-18 08:46:37', '1', '1'),
(6, 'John', 'Citizen', 'Wellington Rd', 'Sydney', 'NSW', 'United States', '2144', '0414 14 14 14', 'Cash', '', '', '', '', '2015-10-08 02:35:45', '2015-10-18 08:45:05', '1', '1'),
(5, 'test', 'test', 'test', 'Kolkata', 'West Bengal', 'Afghanistan', '12334', '4412', 'Cash', '', '', '', '', '2015-09-24 09:04:13', '2015-10-18 08:46:06', '1', '1'),
(7, 'adsfdasf', 'sadfadsfsadf', 'asdfasdfsadfa', 'adsfasd', 'aefgaa', 'Azerbaijan', '2345345', 'asdfadsf', 'Cash', '', '', '', '', '2015-10-09 09:21:58', '2015-10-18 08:44:42', '1', '1'),
(11, 'John ', 'Smith', '55 wellington Rd', 'Granville', 'NSW', 'Australia', '2100', '0411111111', 'Cash', '', '', '', '', '2015-10-27 03:42:02', '2015-10-27 03:42:02', '1', '1'),
(10, 'test', 'demo', 'test', 'Kolkata', 'W.B.', 'India', '12345', '1234567890', 'Account Transfer', 'testn', '1234567890', '123', 'testb', '2015-10-18 08:34:05', '2015-10-18 08:34:05', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `blog_category_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE IF NOT EXISTS `blog_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE IF NOT EXISTS `blog_comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `blog_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_slug_unique` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `slug`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(3, 'tests', 'tests', NULL, '2015-09-23 19:38:20', '2015-10-27 10:42:20'),
(4, 'test', 'test', NULL, '2015-09-23 19:38:34', '2015-09-23 19:48:46'),
(6, 'test-exchange', 'Test Exchange', NULL, '2015-10-27 10:43:21', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `company_currency`
--

CREATE TABLE IF NOT EXISTS `company_currency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `COMPANY_ID` int(11) NOT NULL,
  `CURRENCY` varchar(20) NOT NULL,
  `FROM_AMOUNT` int(11) NOT NULL,
  `TO_AMOUNT` int(11) NOT NULL,
  `MULTIPLIER` decimal(10,2) NOT NULL,
  `MID_MARKET_RATE` decimal(10,4) NOT NULL,
  `CREATED_AT` datetime NOT NULL,
  `UPDATED_AT` datetime NOT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `UPDATED_BY` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `company_currency`
--

INSERT INTO `company_currency` (`id`, `COMPANY_ID`, `CURRENCY`, `FROM_AMOUNT`, `TO_AMOUNT`, `MULTIPLIER`, `MID_MARKET_RATE`, `CREATED_AT`, `UPDATED_AT`, `CREATED_BY`, `UPDATED_BY`) VALUES
(1, 3, 'USD', 1, 100000, '1.40', '0.0000', '2015-11-02 07:19:25', '2015-11-05 05:11:39', 1, 1),
(2, 6, 'USD', 1, 100000, '1.50', '0.0000', '2015-11-02 07:20:05', '2015-11-05 05:11:26', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id_countries` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `iso_alpha2` varchar(2) DEFAULT NULL,
  `iso_alpha3` varchar(3) DEFAULT NULL,
  `iso_numeric` int(11) DEFAULT NULL,
  `currency_code` char(3) DEFAULT NULL,
  `currency_name` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id_countries`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=240 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id_countries`, `name`, `iso_alpha2`, `iso_alpha3`, `iso_numeric`, `currency_code`, `currency_name`) VALUES
(1, 'Afghanistan', 'AF', 'AFG', 4, 'AFN', 'Afghani'),
(2, 'Albania', 'AL', 'ALB', 8, 'ALL', 'Lek'),
(3, 'Algeria', 'DZ', 'DZA', 12, 'DZD', 'Dinar'),
(4, 'American Samoa', 'AS', 'ASM', 16, 'USD', 'Dollar'),
(5, 'Andorra', 'AD', 'AND', 20, 'EUR', 'Euro'),
(6, 'Angola', 'AO', 'AGO', 24, 'AOA', 'Kwanza'),
(7, 'Anguilla', 'AI', 'AIA', 660, 'XCD', 'Dollar'),
(9, 'Antigua and Barbuda', 'AG', 'ATG', 28, 'XCD', 'Dollar'),
(10, 'Argentina', 'AR', 'ARG', 32, 'ARS', 'Peso'),
(11, 'Armenia', 'AM', 'ARM', 51, 'AMD', 'Dram'),
(12, 'Aruba', 'AW', 'ABW', 533, 'AWG', 'Guilder'),
(13, 'Australia', 'AU', 'AUS', 36, 'AUD', 'Dollar'),
(14, 'Austria', 'AT', 'AUT', 40, 'EUR', 'Euro'),
(15, 'Azerbaijan', 'AZ', 'AZE', 31, 'AZN', 'Manat'),
(16, 'Bahamas', 'BS', 'BHS', 44, 'BSD', 'Dollar'),
(17, 'Bahrain', 'BH', 'BHR', 48, 'BHD', 'Dinar'),
(18, 'Bangladesh', 'BD', 'BGD', 50, 'BDT', 'Taka'),
(19, 'Barbados', 'BB', 'BRB', 52, 'BBD', 'Dollar'),
(20, 'Belarus', 'BY', 'BLR', 112, 'BYR', 'Ruble'),
(21, 'Belgium', 'BE', 'BEL', 56, 'EUR', 'Euro'),
(22, 'Belize', 'BZ', 'BLZ', 84, 'BZD', 'Dollar'),
(23, 'Benin', 'BJ', 'BEN', 204, 'XOF', 'Franc'),
(24, 'Bermuda', 'BM', 'BMU', 60, 'BMD', 'Dollar'),
(25, 'Bhutan', 'BT', 'BTN', 64, 'BTN', 'Ngultrum'),
(26, 'Bolivia', 'BO', 'BOL', 68, 'BOB', 'Boliviano'),
(27, 'Bosnia and Herzegovina', 'BA', 'BIH', 70, 'BAM', 'Marka'),
(28, 'Botswana', 'BW', 'BWA', 72, 'BWP', 'Pula'),
(29, 'Bouvet Island', 'BV', 'BVT', 74, 'NOK', 'Krone'),
(30, 'Brazil', 'BR', 'BRA', 76, 'BRL', 'Real'),
(31, 'British Indian Ocean Territory', 'IO', 'IOT', 86, 'USD', 'Dollar'),
(32, 'British Virgin Islands', 'VG', 'VGB', 92, 'USD', 'Dollar'),
(33, 'Brunei', 'BN', 'BRN', 96, 'BND', 'Dollar'),
(34, 'Bulgaria', 'BG', 'BGR', 100, 'BGN', 'Lev'),
(35, 'Burkina Faso', 'BF', 'BFA', 854, 'XOF', 'Franc'),
(36, 'Burundi', 'BI', 'BDI', 108, 'BIF', 'Franc'),
(37, 'Cambodia', 'KH', 'KHM', 116, 'KHR', 'Riels'),
(38, 'Cameroon', 'CM', 'CMR', 120, 'XAF', 'Franc'),
(39, 'Canada', 'CA', 'CAN', 124, 'CAD', 'Dollar'),
(40, 'Cape Verde', 'CV', 'CPV', 132, 'CVE', 'Escudo'),
(41, 'Cayman Islands', 'KY', 'CYM', 136, 'KYD', 'Dollar'),
(42, 'Central African Republic', 'CF', 'CAF', 140, 'XAF', 'Franc'),
(43, 'Chad', 'TD', 'TCD', 148, 'XAF', 'Franc'),
(44, 'Chile', 'CL', 'CHL', 152, 'CLP', 'Peso'),
(45, 'China', 'CN', 'CHN', 156, 'CNY', 'Yuan Renminbi'),
(46, 'Christmas Island', 'CX', 'CXR', 162, 'AUD', 'Dollar'),
(47, 'Cocos Islands', 'CC', 'CCK', 166, 'AUD', 'Dollar'),
(48, 'Colombia', 'CO', 'COL', 170, 'COP', 'Peso'),
(49, 'Comoros', 'KM', 'COM', 174, 'KMF', 'Franc'),
(50, 'Cook Islands', 'CK', 'COK', 184, 'NZD', 'Dollar'),
(51, 'Costa Rica', 'CR', 'CRI', 188, 'CRC', 'Colon'),
(52, 'Croatia', 'HR', 'HRV', 191, 'HRK', 'Kuna'),
(53, 'Cuba', 'CU', 'CUB', 192, 'CUP', 'Peso'),
(54, 'Cyprus', 'CY', 'CYP', 196, 'CYP', 'Pound'),
(55, 'Czech Republic', 'CZ', 'CZE', 203, 'CZK', 'Koruna'),
(56, 'Democratic Republic of the Congo', 'CD', 'COD', 180, 'CDF', 'Franc'),
(57, 'Denmark', 'DK', 'DNK', 208, 'DKK', 'Krone'),
(58, 'Djibouti', 'DJ', 'DJI', 262, 'DJF', 'Franc'),
(59, 'Dominica', 'DM', 'DMA', 212, 'XCD', 'Dollar'),
(60, 'Dominican Republic', 'DO', 'DOM', 214, 'DOP', 'Peso'),
(61, 'East Timor', 'TL', 'TLS', 626, 'USD', 'Dollar'),
(62, 'Ecuador', 'EC', 'ECU', 218, 'USD', 'Dollar'),
(63, 'Egypt', 'EG', 'EGY', 818, 'EGP', 'Pound'),
(64, 'El Salvador', 'SV', 'SLV', 222, 'SVC', 'Colone'),
(65, 'Equatorial Guinea', 'GQ', 'GNQ', 226, 'XAF', 'Franc'),
(66, 'Eritrea', 'ER', 'ERI', 232, 'ERN', 'Nakfa'),
(67, 'Estonia', 'EE', 'EST', 233, 'EEK', 'Kroon'),
(68, 'Ethiopia', 'ET', 'ETH', 231, 'ETB', 'Birr'),
(69, 'Falkland Islands', 'FK', 'FLK', 238, 'FKP', 'Pound'),
(70, 'Faroe Islands', 'FO', 'FRO', 234, 'DKK', 'Krone'),
(71, 'Fiji', 'FJ', 'FJI', 242, 'FJD', 'Dollar'),
(72, 'Finland', 'FI', 'FIN', 246, 'EUR', 'Euro'),
(73, 'France', 'FR', 'FRA', 250, 'EUR', 'Euro'),
(74, 'French Guiana', 'GF', 'GUF', 254, 'EUR', 'Euro'),
(75, 'French Polynesia', 'PF', 'PYF', 258, 'XPF', 'Franc'),
(76, 'French Southern Territories', 'TF', 'ATF', 260, 'EUR', 'Euro  '),
(77, 'Gabon', 'GA', 'GAB', 266, 'XAF', 'Franc'),
(78, 'Gambia', 'GM', 'GMB', 270, 'GMD', 'Dalasi'),
(79, 'Georgia', 'GE', 'GEO', 268, 'GEL', 'Lari'),
(80, 'Germany', 'DE', 'DEU', 276, 'EUR', 'Euro'),
(81, 'Ghana', 'GH', 'GHA', 288, 'GHC', 'Cedi'),
(82, 'Gibraltar', 'GI', 'GIB', 292, 'GIP', 'Pound'),
(83, 'Greece', 'GR', 'GRC', 300, 'EUR', 'Euro'),
(84, 'Greenland', 'GL', 'GRL', 304, 'DKK', 'Krone'),
(85, 'Grenada', 'GD', 'GRD', 308, 'XCD', 'Dollar'),
(86, 'Guadeloupe', 'GP', 'GLP', 312, 'EUR', 'Euro'),
(87, 'Guam', 'GU', 'GUM', 316, 'USD', 'Dollar'),
(88, 'Guatemala', 'GT', 'GTM', 320, 'GTQ', 'Quetzal'),
(89, 'Guinea', 'GN', 'GIN', 324, 'GNF', 'Franc'),
(90, 'Guinea-Bissau', 'GW', 'GNB', 624, 'XOF', 'Franc'),
(91, 'Guyana', 'GY', 'GUY', 328, 'GYD', 'Dollar'),
(92, 'Haiti', 'HT', 'HTI', 332, 'HTG', 'Gourde'),
(93, 'Heard Island and McDonald Islands', 'HM', 'HMD', 334, 'AUD', 'Dollar'),
(94, 'Honduras', 'HN', 'HND', 340, 'HNL', 'Lempira'),
(95, 'Hong Kong', 'HK', 'HKG', 344, 'HKD', 'Dollar'),
(96, 'Hungary', 'HU', 'HUN', 348, 'HUF', 'Forint'),
(97, 'Iceland', 'IS', 'ISL', 352, 'ISK', 'Krona'),
(98, 'India', 'IN', 'IND', 356, 'INR', 'Rupee'),
(99, 'Indonesia', 'ID', 'IDN', 360, 'IDR', 'Rupiah'),
(100, 'Iran', 'IR', 'IRN', 364, 'IRR', 'Rial'),
(101, 'Iraq', 'IQ', 'IRQ', 368, 'IQD', 'Dinar'),
(102, 'Ireland', 'IE', 'IRL', 372, 'EUR', 'Euro'),
(103, 'Israel', 'IL', 'ISR', 376, 'ILS', 'Shekel'),
(104, 'Italy', 'IT', 'ITA', 380, 'EUR', 'Euro'),
(105, 'Ivory Coast', 'CI', 'CIV', 384, 'XOF', 'Franc'),
(106, 'Jamaica', 'JM', 'JAM', 388, 'JMD', 'Dollar'),
(107, 'Japan', 'JP', 'JPN', 392, 'JPY', 'Yen'),
(108, 'Jordan', 'JO', 'JOR', 400, 'JOD', 'Dinar'),
(109, 'Kazakhstan', 'KZ', 'KAZ', 398, 'KZT', 'Tenge'),
(110, 'Kenya', 'KE', 'KEN', 404, 'KES', 'Shilling'),
(111, 'Kiribati', 'KI', 'KIR', 296, 'AUD', 'Dollar'),
(112, 'Kuwait', 'KW', 'KWT', 414, 'KWD', 'Dinar'),
(113, 'Kyrgyzstan', 'KG', 'KGZ', 417, 'KGS', 'Som'),
(114, 'Laos', 'LA', 'LAO', 418, 'LAK', 'Kip'),
(115, 'Latvia', 'LV', 'LVA', 428, 'LVL', 'Lat'),
(116, 'Lebanon', 'LB', 'LBN', 422, 'LBP', 'Pound'),
(117, 'Lesotho', 'LS', 'LSO', 426, 'LSL', 'Loti'),
(118, 'Liberia', 'LR', 'LBR', 430, 'LRD', 'Dollar'),
(119, 'Libya', 'LY', 'LBY', 434, 'LYD', 'Dinar'),
(120, 'Liechtenstein', 'LI', 'LIE', 438, 'CHF', 'Franc'),
(121, 'Lithuania', 'LT', 'LTU', 440, 'LTL', 'Litas'),
(122, 'Luxembourg', 'LU', 'LUX', 442, 'EUR', 'Euro'),
(123, 'Macao', 'MO', 'MAC', 446, 'MOP', 'Pataca'),
(124, 'Macedonia', 'MK', 'MKD', 807, 'MKD', 'Denar'),
(125, 'Madagascar', 'MG', 'MDG', 450, 'MGA', 'Ariary'),
(126, 'Malawi', 'MW', 'MWI', 454, 'MWK', 'Kwacha'),
(127, 'Malaysia', 'MY', 'MYS', 458, 'MYR', 'Ringgit'),
(128, 'Maldives', 'MV', 'MDV', 462, 'MVR', 'Rufiyaa'),
(129, 'Mali', 'ML', 'MLI', 466, 'XOF', 'Franc'),
(130, 'Malta', 'MT', 'MLT', 470, 'MTL', 'Lira'),
(131, 'Marshall Islands', 'MH', 'MHL', 584, 'USD', 'Dollar'),
(132, 'Martinique', 'MQ', 'MTQ', 474, 'EUR', 'Euro'),
(133, 'Mauritania', 'MR', 'MRT', 478, 'MRO', 'Ouguiya'),
(134, 'Mauritius', 'MU', 'MUS', 480, 'MUR', 'Rupee'),
(135, 'Mayotte', 'YT', 'MYT', 175, 'EUR', 'Euro'),
(136, 'Mexico', 'MX', 'MEX', 484, 'MXN', 'Peso'),
(137, 'Micronesia', 'FM', 'FSM', 583, 'USD', 'Dollar'),
(138, 'Moldova', 'MD', 'MDA', 498, 'MDL', 'Leu'),
(139, 'Monaco', 'MC', 'MCO', 492, 'EUR', 'Euro'),
(140, 'Mongolia', 'MN', 'MNG', 496, 'MNT', 'Tugrik'),
(141, 'Montserrat', 'MS', 'MSR', 500, 'XCD', 'Dollar'),
(142, 'Morocco', 'MA', 'MAR', 504, 'MAD', 'Dirham'),
(143, 'Mozambique', 'MZ', 'MOZ', 508, 'MZN', 'Meticail'),
(144, 'Myanmar', 'MM', 'MMR', 104, 'MMK', 'Kyat'),
(145, 'Namibia', 'NA', 'NAM', 516, 'NAD', 'Dollar'),
(146, 'Nauru', 'NR', 'NRU', 520, 'AUD', 'Dollar'),
(147, 'Nepal', 'NP', 'NPL', 524, 'NPR', 'Rupee'),
(148, 'Netherlands', 'NL', 'NLD', 528, 'EUR', 'Euro'),
(149, 'Netherlands Antilles', 'AN', 'ANT', 530, 'ANG', 'Guilder'),
(150, 'New Caledonia', 'NC', 'NCL', 540, 'XPF', 'Franc'),
(151, 'New Zealand', 'NZ', 'NZL', 554, 'NZD', 'Dollar'),
(152, 'Nicaragua', 'NI', 'NIC', 558, 'NIO', 'Cordoba'),
(153, 'Niger', 'NE', 'NER', 562, 'XOF', 'Franc'),
(154, 'Nigeria', 'NG', 'NGA', 566, 'NGN', 'Naira'),
(155, 'Niue', 'NU', 'NIU', 570, 'NZD', 'Dollar'),
(156, 'Norfolk Island', 'NF', 'NFK', 574, 'AUD', 'Dollar'),
(157, 'North Korea', 'KP', 'PRK', 408, 'KPW', 'Won'),
(158, 'Northern Mariana Islands', 'MP', 'MNP', 580, 'USD', 'Dollar'),
(159, 'Norway', 'NO', 'NOR', 578, 'NOK', 'Krone'),
(160, 'Oman', 'OM', 'OMN', 512, 'OMR', 'Rial'),
(161, 'Pakistan', 'PK', 'PAK', 586, 'PKR', 'Rupee'),
(162, 'Palau', 'PW', 'PLW', 585, 'USD', 'Dollar'),
(163, 'Palestinian Territory', 'PS', 'PSE', 275, 'ILS', 'Shekel'),
(164, 'Panama', 'PA', 'PAN', 591, 'PAB', 'Balboa'),
(165, 'Papua New Guinea', 'PG', 'PNG', 598, 'PGK', 'Kina'),
(166, 'Paraguay', 'PY', 'PRY', 600, 'PYG', 'Guarani'),
(167, 'Peru', 'PE', 'PER', 604, 'PEN', 'Sol'),
(168, 'Philippines', 'PH', 'PHL', 608, 'PHP', 'Peso'),
(169, 'Pitcairn', 'PN', 'PCN', 612, 'NZD', 'Dollar'),
(170, 'Poland', 'PL', 'POL', 616, 'PLN', 'Zloty'),
(171, 'Portugal', 'PT', 'PRT', 620, 'EUR', 'Euro'),
(172, 'Puerto Rico', 'PR', 'PRI', 630, 'USD', 'Dollar'),
(173, 'Qatar', 'QA', 'QAT', 634, 'QAR', 'Rial'),
(174, 'Republic of the Congo', 'CG', 'COG', 178, 'XAF', 'Franc'),
(175, 'Reunion', 'RE', 'REU', 638, 'EUR', 'Euro'),
(176, 'Romania', 'RO', 'ROU', 642, 'RON', 'Leu'),
(177, 'Russia', 'RU', 'RUS', 643, 'RUB', 'Ruble'),
(178, 'Rwanda', 'RW', 'RWA', 646, 'RWF', 'Franc'),
(179, 'Saint Helena', 'SH', 'SHN', 654, 'SHP', 'Pound'),
(180, 'Saint Kitts and Nevis', 'KN', 'KNA', 659, 'XCD', 'Dollar'),
(181, 'Saint Lucia', 'LC', 'LCA', 662, 'XCD', 'Dollar'),
(182, 'Saint Pierre and Miquelon', 'PM', 'SPM', 666, 'EUR', 'Euro'),
(183, 'Saint Vincent and the Grenadines', 'VC', 'VCT', 670, 'XCD', 'Dollar'),
(184, 'Samoa', 'WS', 'WSM', 882, 'WST', 'Tala'),
(185, 'San Marino', 'SM', 'SMR', 674, 'EUR', 'Euro'),
(186, 'Sao Tome and Principe', 'ST', 'STP', 678, 'STD', 'Dobra'),
(187, 'Saudi Arabia', 'SA', 'SAU', 682, 'SAR', 'Rial'),
(188, 'Senegal', 'SN', 'SEN', 686, 'XOF', 'Franc'),
(189, 'Serbia and Montenegro', 'CS', 'SCG', 891, 'RSD', 'Dinar'),
(190, 'Seychelles', 'SC', 'SYC', 690, 'SCR', 'Rupee'),
(191, 'Sierra Leone', 'SL', 'SLE', 694, 'SLL', 'Leone'),
(192, 'Singapore', 'SG', 'SGP', 702, 'SGD', 'Dollar'),
(193, 'Slovakia', 'SK', 'SVK', 703, 'SKK', 'Koruna'),
(194, 'Slovenia', 'SI', 'SVN', 705, 'EUR', 'Euro'),
(195, 'Solomon Islands', 'SB', 'SLB', 90, 'SBD', 'Dollar'),
(196, 'Somalia', 'SO', 'SOM', 706, 'SOS', 'Shilling'),
(197, 'South Africa', 'ZA', 'ZAF', 710, 'ZAR', 'Rand'),
(198, 'South Georgia and the South Sandwich Islands', 'GS', 'SGS', 239, 'GBP', 'Pound'),
(199, 'South Korea', 'KR', 'KOR', 410, 'KRW', 'Won'),
(200, 'Spain', 'ES', 'ESP', 724, 'EUR', 'Euro'),
(201, 'Sri Lanka', 'LK', 'LKA', 144, 'LKR', 'Rupee'),
(202, 'Sudan', 'SD', 'SDN', 736, 'SDD', 'Dinar'),
(203, 'Suriname', 'SR', 'SUR', 740, 'SRD', 'Dollar'),
(204, 'Svalbard and Jan Mayen', 'SJ', 'SJM', 744, 'NOK', 'Krone'),
(205, 'Swaziland', 'SZ', 'SWZ', 748, 'SZL', 'Lilangeni'),
(206, 'Sweden', 'SE', 'SWE', 752, 'SEK', 'Krona'),
(207, 'Switzerland', 'CH', 'CHE', 756, 'CHF', 'Franc'),
(208, 'Syria', 'SY', 'SYR', 760, 'SYP', 'Pound'),
(209, 'Taiwan', 'TW', 'TWN', 158, 'TWD', 'Dollar'),
(210, 'Tajikistan', 'TJ', 'TJK', 762, 'TJS', 'Somoni'),
(211, 'Tanzania', 'TZ', 'TZA', 834, 'TZS', 'Shilling'),
(212, 'Thailand', 'TH', 'THA', 764, 'THB', 'Baht'),
(213, 'Togo', 'TG', 'TGO', 768, 'XOF', 'Franc'),
(214, 'Tokelau', 'TK', 'TKL', 772, 'NZD', 'Dollar'),
(215, 'Tonga', 'TO', 'TON', 776, 'TOP', 'Pa''anga'),
(216, 'Trinidad and Tobago', 'TT', 'TTO', 780, 'TTD', 'Dollar'),
(217, 'Tunisia', 'TN', 'TUN', 788, 'TND', 'Dinar'),
(218, 'Turkey', 'TR', 'TUR', 792, 'TRY', 'Lira'),
(219, 'Turkmenistan', 'TM', 'TKM', 795, 'TMM', 'Manat'),
(220, 'Turks and Caicos Islands', 'TC', 'TCA', 796, 'USD', 'Dollar'),
(221, 'Tuvalu', 'TV', 'TUV', 798, 'AUD', 'Dollar'),
(222, 'U.S. Virgin Islands', 'VI', 'VIR', 850, 'USD', 'Dollar'),
(223, 'Uganda', 'UG', 'UGA', 800, 'UGX', 'Shilling'),
(224, 'Ukraine', 'UA', 'UKR', 804, 'UAH', 'Hryvnia'),
(225, 'United Arab Emirates', 'AE', 'ARE', 784, 'AED', 'Dirham'),
(226, 'United Kingdom', 'GB', 'GBR', 826, 'GBP', 'Pound'),
(227, 'United States', 'US', 'USA', 840, 'USD', 'Dollar'),
(228, 'United States Minor Outlying Islands', 'UM', 'UMI', 581, 'USD', 'Dollar '),
(229, 'Uruguay', 'UY', 'URY', 858, 'UYU', 'Peso'),
(230, 'Uzbekistan', 'UZ', 'UZB', 860, 'UZS', 'Som'),
(231, 'Vanuatu', 'VU', 'VUT', 548, 'VUV', 'Vatu'),
(232, 'Vatican', 'VA', 'VAT', 336, 'EUR', 'Euro'),
(233, 'Venezuela', 'VE', 'VEN', 862, 'VEF', 'Bolivar'),
(234, 'Vietnam', 'VN', 'VNM', 704, 'VND', 'Dong'),
(235, 'Wallis and Futuna', 'WF', 'WLF', 876, 'XPF', 'Franc'),
(236, 'Western Sahara', 'EH', 'ESH', 732, 'MAD', 'Dirham'),
(237, 'Yemen', 'YE', 'YEM', 887, 'YER', 'Rial'),
(238, 'Zambia', 'ZM', 'ZMB', 894, 'ZMK', 'Kwacha'),
(239, 'Zimbabwe', 'ZW', 'ZWE', 716, 'ZWD', 'Dollar');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=243 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country_code`, `country_name`) VALUES
(1, 'US', 'United States'),
(2, 'CA', 'Canada'),
(3, 'AF', 'Afghanistan'),
(4, 'AL', 'Albania'),
(5, 'DZ', 'Algeria'),
(6, 'DS', 'American Samoa'),
(7, 'AD', 'Andorra'),
(8, 'AO', 'Angola'),
(9, 'AI', 'Anguilla'),
(10, 'AQ', 'Antarctica'),
(11, 'AG', 'Antigua and/or Barbuda'),
(12, 'AR', 'Argentina'),
(13, 'AM', 'Armenia'),
(14, 'AW', 'Aruba'),
(15, 'AU', 'Australia'),
(16, 'AT', 'Austria'),
(17, 'AZ', 'Azerbaijan'),
(18, 'BS', 'Bahamas'),
(19, 'BH', 'Bahrain'),
(20, 'BD', 'Bangladesh'),
(21, 'BB', 'Barbados'),
(22, 'BY', 'Belarus'),
(23, 'BE', 'Belgium'),
(24, 'BZ', 'Belize'),
(25, 'BJ', 'Benin'),
(26, 'BM', 'Bermuda'),
(27, 'BT', 'Bhutan'),
(28, 'BO', 'Bolivia'),
(29, 'BA', 'Bosnia and Herzegovina'),
(30, 'BW', 'Botswana'),
(31, 'BV', 'Bouvet Island'),
(32, 'BR', 'Brazil'),
(33, 'IO', 'British lndian Ocean Territory'),
(34, 'BN', 'Brunei Darussalam'),
(35, 'BG', 'Bulgaria'),
(36, 'BF', 'Burkina Faso'),
(37, 'BI', 'Burundi'),
(38, 'KH', 'Cambodia'),
(39, 'CM', 'Cameroon'),
(40, 'CV', 'Cape Verde'),
(41, 'KY', 'Cayman Islands'),
(42, 'CF', 'Central African Republic'),
(43, 'TD', 'Chad'),
(44, 'CL', 'Chile'),
(45, 'CN', 'China'),
(46, 'CX', 'Christmas Island'),
(47, 'CC', 'Cocos (Keeling) Islands'),
(48, 'CO', 'Colombia'),
(49, 'KM', 'Comoros'),
(50, 'CG', 'Congo'),
(51, 'CK', 'Cook Islands'),
(52, 'CR', 'Costa Rica'),
(53, 'HR', 'Croatia (Hrvatska)'),
(54, 'CU', 'Cuba'),
(55, 'CY', 'Cyprus'),
(56, 'CZ', 'Czech Republic'),
(57, 'DK', 'Denmark'),
(58, 'DJ', 'Djibouti'),
(59, 'DM', 'Dominica'),
(60, 'DO', 'Dominican Republic'),
(61, 'TP', 'East Timor'),
(62, 'EC', 'Ecuador'),
(63, 'EG', 'Egypt'),
(64, 'SV', 'El Salvador'),
(65, 'GQ', 'Equatorial Guinea'),
(66, 'ER', 'Eritrea'),
(67, 'EE', 'Estonia'),
(68, 'ET', 'Ethiopia'),
(69, 'FK', 'Falkland Islands (Malvinas)'),
(70, 'FO', 'Faroe Islands'),
(71, 'FJ', 'Fiji'),
(72, 'FI', 'Finland'),
(73, 'FR', 'France'),
(74, 'FX', 'France, Metropolitan'),
(75, 'GF', 'French Guiana'),
(76, 'PF', 'French Polynesia'),
(77, 'TF', 'French Southern Territories'),
(78, 'GA', 'Gabon'),
(79, 'GM', 'Gambia'),
(80, 'GE', 'Georgia'),
(81, 'DE', 'Germany'),
(82, 'GH', 'Ghana'),
(83, 'GI', 'Gibraltar'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'ID', 'Indonesia'),
(101, 'IR', 'Iran (Islamic Republic of)'),
(102, 'IQ', 'Iraq'),
(103, 'IE', 'Ireland'),
(104, 'IL', 'Israel'),
(105, 'IT', 'Italy'),
(106, 'CI', 'Ivory Coast'),
(107, 'JM', 'Jamaica'),
(108, 'JP', 'Japan'),
(109, 'JO', 'Jordan'),
(110, 'KZ', 'Kazakhstan'),
(111, 'KE', 'Kenya'),
(112, 'KI', 'Kiribati'),
(113, 'KP', 'Korea, Democratic People''s Republic of'),
(114, 'KR', 'Korea, Republic of'),
(115, 'XK', 'Kosovo'),
(116, 'KW', 'Kuwait'),
(117, 'KG', 'Kyrgyzstan'),
(118, 'LA', 'Lao People''s Democratic Republic'),
(119, 'LV', 'Latvia'),
(120, 'LB', 'Lebanon'),
(121, 'LS', 'Lesotho'),
(122, 'LR', 'Liberia'),
(123, 'LY', 'Libyan Arab Jamahiriya'),
(124, 'LI', 'Liechtenstein'),
(125, 'LT', 'Lithuania'),
(126, 'LU', 'Luxembourg'),
(127, 'MO', 'Macau'),
(128, 'MK', 'Macedonia'),
(129, 'MG', 'Madagascar'),
(130, 'MW', 'Malawi'),
(131, 'MY', 'Malaysia'),
(132, 'MV', 'Maldives'),
(133, 'ML', 'Mali'),
(134, 'MT', 'Malta'),
(135, 'MH', 'Marshall Islands'),
(136, 'MQ', 'Martinique'),
(137, 'MR', 'Mauritania'),
(138, 'MU', 'Mauritius'),
(139, 'TY', 'Mayotte'),
(140, 'MX', 'Mexico'),
(141, 'FM', 'Micronesia, Federated States of'),
(142, 'MD', 'Moldova, Republic of'),
(143, 'MC', 'Monaco'),
(144, 'MN', 'Mongolia'),
(145, 'ME', 'Montenegro'),
(146, 'MS', 'Montserrat'),
(147, 'MA', 'Morocco'),
(148, 'MZ', 'Mozambique'),
(149, 'MM', 'Myanmar'),
(150, 'NA', 'Namibia'),
(151, 'NR', 'Nauru'),
(152, 'NP', 'Nepal'),
(153, 'NL', 'Netherlands'),
(154, 'AN', 'Netherlands Antilles'),
(155, 'NC', 'New Caledonia'),
(156, 'NZ', 'New Zealand'),
(157, 'NI', 'Nicaragua'),
(158, 'NE', 'Niger'),
(159, 'NG', 'Nigeria'),
(160, 'NU', 'Niue'),
(161, 'NF', 'Norfork Island'),
(162, 'MP', 'Northern Mariana Islands'),
(163, 'NO', 'Norway'),
(164, 'OM', 'Oman'),
(165, 'PK', 'Pakistan'),
(166, 'PW', 'Palau'),
(167, 'PA', 'Panama'),
(168, 'PG', 'Papua New Guinea'),
(169, 'PY', 'Paraguay'),
(170, 'PE', 'Peru'),
(171, 'PH', 'Philippines'),
(172, 'PN', 'Pitcairn'),
(173, 'PL', 'Poland'),
(174, 'PT', 'Portugal'),
(175, 'PR', 'Puerto Rico'),
(176, 'QA', 'Qatar'),
(177, 'RE', 'Reunion'),
(178, 'RO', 'Romania'),
(179, 'RU', 'Russian Federation'),
(180, 'RW', 'Rwanda'),
(181, 'KN', 'Saint Kitts and Nevis'),
(182, 'LC', 'Saint Lucia'),
(183, 'VC', 'Saint Vincent and the Grenadines'),
(184, 'WS', 'Samoa'),
(185, 'SM', 'San Marino'),
(186, 'ST', 'Sao Tome and Principe'),
(187, 'SA', 'Saudi Arabia'),
(188, 'SN', 'Senegal'),
(189, 'RS', 'Serbia'),
(190, 'SC', 'Seychelles'),
(191, 'SL', 'Sierra Leone'),
(192, 'SG', 'Singapore'),
(193, 'SK', 'Slovakia'),
(194, 'SI', 'Slovenia'),
(195, 'SB', 'Solomon Islands'),
(196, 'SO', 'Somalia'),
(197, 'ZA', 'South Africa'),
(198, 'GS', 'South Georgia South Sandwich Islands'),
(199, 'ES', 'Spain'),
(200, 'LK', 'Sri Lanka'),
(201, 'SH', 'St. Helena'),
(202, 'PM', 'St. Pierre and Miquelon'),
(203, 'SD', 'Sudan'),
(204, 'SR', 'Suriname'),
(205, 'SJ', 'Svalbarn and Jan Mayen Islands'),
(206, 'SZ', 'Swaziland'),
(207, 'SE', 'Sweden'),
(208, 'CH', 'Switzerland'),
(209, 'SY', 'Syrian Arab Republic'),
(210, 'TW', 'Taiwan'),
(211, 'TJ', 'Tajikistan'),
(212, 'TZ', 'Tanzania, United Republic of'),
(213, 'TH', 'Thailand'),
(214, 'TG', 'Togo'),
(215, 'TK', 'Tokelau'),
(216, 'TO', 'Tonga'),
(217, 'TT', 'Trinidad and Tobago'),
(218, 'TN', 'Tunisia'),
(219, 'TR', 'Turkey'),
(220, 'TM', 'Turkmenistan'),
(221, 'TC', 'Turks and Caicos Islands'),
(222, 'TV', 'Tuvalu'),
(223, 'UG', 'Uganda'),
(224, 'UA', 'Ukraine'),
(225, 'AE', 'United Arab Emirates'),
(226, 'GB', 'United Kingdom'),
(227, 'UM', 'United States minor outlying islands'),
(228, 'UY', 'Uruguay'),
(229, 'UZ', 'Uzbekistan'),
(230, 'VU', 'Vanuatu'),
(231, 'VA', 'Vatican City State'),
(232, 'VE', 'Venezuela'),
(233, 'VN', 'Vietnam'),
(234, 'VG', 'Virgin Islands (British)'),
(235, 'VI', 'Virgin Islands (U.S.)'),
(236, 'WF', 'Wallis and Futuna Islands'),
(237, 'EH', 'Western Sahara'),
(238, 'YE', 'Yemen'),
(239, 'YU', 'Yugoslavia'),
(240, 'ZR', 'Zaire'),
(241, 'ZM', 'Zambia'),
(242, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE IF NOT EXISTS `currency` (
  `id` int(11) DEFAULT NULL,
  `country` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `currency` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `code` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `symbol` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`id`, `country`, `currency`, `code`, `symbol`) VALUES
(NULL, 'Albania', 'Leke', 'ALL', 'Lek'),
(NULL, 'America', 'Dollars', 'USD', '$'),
(NULL, 'Afghanistan', 'Afghanis', 'AFN', '؋'),
(NULL, 'Argentina', 'Pesos', 'ARS', '$'),
(NULL, 'Aruba', 'Guilders', 'AWG', 'ƒ'),
(NULL, 'Australia', 'Dollars', 'AUD', '$'),
(NULL, 'Azerbaijan', 'New Manats', 'AZN', 'ман'),
(NULL, 'Bahamas', 'Dollars', 'BSD', '$'),
(NULL, 'Barbados', 'Dollars', 'BBD', '$'),
(NULL, 'Belarus', 'Rubles', 'BYR', 'p.'),
(NULL, 'Belgium', 'Euro', 'EUR', '€'),
(NULL, 'Beliz', 'Dollars', 'BZD', 'BZ$'),
(NULL, 'Bermuda', 'Dollars', 'BMD', '$'),
(NULL, 'Bolivia', 'Bolivianos', 'BOB', '$b'),
(NULL, 'Bosnia and Herzegovina', 'Convertible Marka', 'BAM', 'KM'),
(NULL, 'Botswana', 'Pula''s', 'BWP', 'P'),
(NULL, 'Bulgaria', 'Leva', 'BGN', 'лв'),
(NULL, 'Brazil', 'Reais', 'BRL', 'R$'),
(NULL, 'Britain (United Kingdom)', 'Pounds', 'GBP', '£'),
(NULL, 'Brunei Darussalam', 'Dollars', 'BND', '$'),
(NULL, 'Cambodia', 'Riels', 'KHR', '៛'),
(NULL, 'Canada', 'Dollars', 'CAD', '$'),
(NULL, 'Cayman Islands', 'Dollars', 'KYD', '$'),
(NULL, 'Chile', 'Pesos', 'CLP', '$'),
(NULL, 'China', 'Yuan Renminbi', 'CNY', '¥'),
(NULL, 'Colombia', 'Pesos', 'COP', '$'),
(NULL, 'Costa Rica', 'Colón', 'CRC', '₡'),
(NULL, 'Croatia', 'Kuna', 'HRK', 'kn'),
(NULL, 'Cuba', 'Pesos', 'CUP', '₱'),
(NULL, 'Cyprus', 'Euro', 'EUR', '€'),
(NULL, 'Czech Republic', 'Koruny', 'CZK', 'Kč'),
(NULL, 'Denmark', 'Kroner', 'DKK', 'kr'),
(NULL, 'Dominican Republic', 'Pesos', 'DOP ', 'RD$'),
(NULL, 'East Caribbean', 'Dollars', 'XCD', '$'),
(NULL, 'Egypt', 'Pounds', 'EGP', '£'),
(NULL, 'El Salvador', 'Colones', 'SVC', '$'),
(NULL, 'England (United Kingdom)', 'Pounds', 'GBP', '£'),
(NULL, 'Euro', 'Euro', 'EUR', '€'),
(NULL, 'Falkland Islands', 'Pounds', 'FKP', '£'),
(NULL, 'Fiji', 'Dollars', 'FJD', '$'),
(NULL, 'France', 'Euro', 'EUR', '€'),
(NULL, 'Ghana', 'Cedis', 'GHC', '¢'),
(NULL, 'Gibraltar', 'Pounds', 'GIP', '£'),
(NULL, 'Greece', 'Euro', 'EUR', '€'),
(NULL, 'Guatemala', 'Quetzales', 'GTQ', 'Q'),
(NULL, 'Guernsey', 'Pounds', 'GGP', '£'),
(NULL, 'Guyana', 'Dollars', 'GYD', '$'),
(NULL, 'Holland (Netherlands)', 'Euro', 'EUR', '€'),
(NULL, 'Honduras', 'Lempiras', 'HNL', 'L'),
(NULL, 'Hong Kong', 'Dollars', 'HKD', '$'),
(NULL, 'Hungary', 'Forint', 'HUF', 'Ft'),
(NULL, 'Iceland', 'Kronur', 'ISK', 'kr'),
(NULL, 'India', 'Rupees', 'INR', 'Rp'),
(NULL, 'Indonesia', 'Rupiahs', 'IDR', 'Rp'),
(NULL, 'Iran', 'Rials', 'IRR', '﷼'),
(NULL, 'Ireland', 'Euro', 'EUR', '€'),
(NULL, 'Isle of Man', 'Pounds', 'IMP', '£'),
(NULL, 'Israel', 'New Shekels', 'ILS', '₪'),
(NULL, 'Italy', 'Euro', 'EUR', '€'),
(NULL, 'Jamaica', 'Dollars', 'JMD', 'J$'),
(NULL, 'Japan', 'Yen', 'JPY', '¥'),
(NULL, 'Jersey', 'Pounds', 'JEP', '£'),
(NULL, 'Kazakhstan', 'Tenge', 'KZT', 'лв'),
(NULL, 'Korea (North)', 'Won', 'KPW', '₩'),
(NULL, 'Korea (South)', 'Won', 'KRW', '₩'),
(NULL, 'Kyrgyzstan', 'Soms', 'KGS', 'лв'),
(NULL, 'Laos', 'Kips', 'LAK', '₭'),
(NULL, 'Latvia', 'Lati', 'LVL', 'Ls'),
(NULL, 'Lebanon', 'Pounds', 'LBP', '£'),
(NULL, 'Liberia', 'Dollars', 'LRD', '$'),
(NULL, 'Liechtenstein', 'Switzerland Francs', 'CHF', 'CHF'),
(NULL, 'Lithuania', 'Litai', 'LTL', 'Lt'),
(NULL, 'Luxembourg', 'Euro', 'EUR', '€'),
(NULL, 'Macedonia', 'Denars', 'MKD', 'ден'),
(NULL, 'Malaysia', 'Ringgits', 'MYR', 'RM'),
(NULL, 'Malta', 'Euro', 'EUR', '€'),
(NULL, 'Mauritius', 'Rupees', 'MUR', '₨'),
(NULL, 'Mexico', 'Pesos', 'MXN', '$'),
(NULL, 'Mongolia', 'Tugriks', 'MNT', '₮'),
(NULL, 'Mozambique', 'Meticais', 'MZN', 'MT'),
(NULL, 'Namibia', 'Dollars', 'NAD', '$'),
(NULL, 'Nepal', 'Rupees', 'NPR', '₨'),
(NULL, 'Netherlands Antilles', 'Guilders', 'ANG', 'ƒ'),
(NULL, 'Netherlands', 'Euro', 'EUR', '€'),
(NULL, 'New Zealand', 'Dollars', 'NZD', '$'),
(NULL, 'Nicaragua', 'Cordobas', 'NIO', 'C$'),
(NULL, 'Nigeria', 'Nairas', 'NGN', '₦'),
(NULL, 'North Korea', 'Won', 'KPW', '₩'),
(NULL, 'Norway', 'Krone', 'NOK', 'kr'),
(NULL, 'Oman', 'Rials', 'OMR', '﷼'),
(NULL, 'Pakistan', 'Rupees', 'PKR', '₨'),
(NULL, 'Panama', 'Balboa', 'PAB', 'B/.'),
(NULL, 'Paraguay', 'Guarani', 'PYG', 'Gs'),
(NULL, 'Peru', 'Nuevos Soles', 'PEN', 'S/.'),
(NULL, 'Philippines', 'Pesos', 'PHP', 'Php'),
(NULL, 'Poland', 'Zlotych', 'PLN', 'zł'),
(NULL, 'Qatar', 'Rials', 'QAR', '﷼'),
(NULL, 'Romania', 'New Lei', 'RON', 'lei'),
(NULL, 'Russia', 'Rubles', 'RUB', 'руб'),
(NULL, 'Saint Helena', 'Pounds', 'SHP', '£'),
(NULL, 'Saudi Arabia', 'Riyals', 'SAR', '﷼'),
(NULL, 'Serbia', 'Dinars', 'RSD', 'Дин.'),
(NULL, 'Seychelles', 'Rupees', 'SCR', '₨'),
(NULL, 'Singapore', 'Dollars', 'SGD', '$'),
(NULL, 'Slovenia', 'Euro', 'EUR', '€'),
(NULL, 'Solomon Islands', 'Dollars', 'SBD', '$'),
(NULL, 'Somalia', 'Shillings', 'SOS', 'S'),
(NULL, 'South Africa', 'Rand', 'ZAR', 'R'),
(NULL, 'South Korea', 'Won', 'KRW', '₩'),
(NULL, 'Spain', 'Euro', 'EUR', '€'),
(NULL, 'Sri Lanka', 'Rupees', 'LKR', '₨'),
(NULL, 'Sweden', 'Kronor', 'SEK', 'kr'),
(NULL, 'Switzerland', 'Francs', 'CHF', 'CHF'),
(NULL, 'Suriname', 'Dollars', 'SRD', '$'),
(NULL, 'Syria', 'Pounds', 'SYP', '£'),
(NULL, 'Taiwan', 'New Dollars', 'TWD', 'NT$'),
(NULL, 'Thailand', 'Baht', 'THB', '฿'),
(NULL, 'Trinidad and Tobago', 'Dollars', 'TTD', 'TT$'),
(NULL, 'Turkey', 'Lira', 'TRY', 'TL'),
(NULL, 'Turkey', 'Liras', 'TRL', '£'),
(NULL, 'Tuvalu', 'Dollars', 'TVD', '$'),
(NULL, 'Ukraine', 'Hryvnia', 'UAH', '₴'),
(NULL, 'United Kingdom', 'Pounds', 'GBP', '£'),
(NULL, 'United States of America', 'Dollars', 'USD', '$'),
(NULL, 'Uruguay', 'Pesos', 'UYU', '$U'),
(NULL, 'Uzbekistan', 'Sums', 'UZS', 'лв'),
(NULL, 'Vatican City', 'Euro', 'EUR', '€'),
(NULL, 'Venezuela', 'Bolivares Fuertes', 'VEF', 'Bs'),
(NULL, 'Vietnam', 'Dong', 'VND', '₫'),
(NULL, 'Yemen', 'Rials', 'YER', '﷼'),
(NULL, 'Zimbabwe', 'Zimbabwe Dollars', 'ZWD', 'Z$');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_07_02_230147_migration_cartalyst_sentinel', 1),
('2014_10_04_174350_soft_delete_users', 1),
('2014_12_10_011106_add_fields_to_user_table', 1),
('2015_08_09_200015_create_blog_module_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `SENDER_ID` int(11) NOT NULL,
  `BENEFICIARY_ID` int(11) NOT NULL,
  `TRANSACTION_ID` int(11) NOT NULL,
  `AMOUNT` decimal(10,4) NOT NULL,
  `CREATED_AT` datetime NOT NULL,
  `UPDATED_AT` datetime NOT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `UPDATED_BY` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `SENDER_ID`, `BENEFICIARY_ID`, `TRANSACTION_ID`, `AMOUNT`, `CREATED_AT`, `UPDATED_AT`, `CREATED_BY`, `UPDATED_BY`) VALUES
(8, 6, 5, 2, '20.0000', '2015-10-29 07:32:38', '2015-10-29 07:32:38', 1, 1),
(7, 2, 5, 2, '10.0000', '2015-10-29 07:32:28', '2015-10-29 07:32:28', 1, 1),
(9, 8, 1, 3, '10.0000', '2015-10-29 07:36:06', '2015-10-29 07:36:06', 1, 1),
(10, 6, 11, 3, '20.0000', '2015-10-29 07:36:14', '2015-10-29 07:36:14', 1, 1),
(11, 6, 5, 3, '200.0000', '2015-10-29 07:36:23', '2015-10-29 07:36:23', 1, 1),
(12, 1, 2, 3, '100.0000', '2015-10-29 07:36:43', '2015-10-29 07:36:43', 1, 1),
(14, 1, 2, 4, '10.0000', '2015-10-29 07:41:52', '2015-10-29 07:41:52', 1, 1),
(15, 1, 1, 5, '10.0000', '2015-10-29 08:24:10', '2015-10-29 08:24:10', 1, 1),
(16, 1, 1, 6, '10.0000', '2015-10-29 08:36:19', '2015-10-29 08:36:19', 1, 1),
(17, 1, 1, 7, '100000.0000', '2015-11-02 05:32:55', '2015-11-02 05:32:55', 1, 1),
(18, 8, 1, 9, '20000.0000', '2015-11-02 05:35:32', '2015-11-02 05:35:32', 1, 1),
(19, 2, 2, 9, '1000.0000', '2015-11-02 05:35:49', '2015-11-02 05:35:49', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `persistences`
--

CREATE TABLE IF NOT EXISTS `persistences` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `persistences_code_unique` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=87 ;

--
-- Dumping data for table `persistences`
--

INSERT INTO `persistences` (`id`, `user_id`, `code`, `created_at`, `updated_at`) VALUES
(2, 1, 'BbUYUBbtoAGLoPa9a0yls7SMKDYKy2Q9', '2015-09-17 10:08:02', '2015-09-17 10:08:02'),
(3, 1, 'a17SakulrZapkxVLDLrzYppuS8AOLDVM', '2015-09-17 23:23:50', '2015-09-17 23:23:50'),
(4, 1, 'feuwG8IuklCsQfS5sYao5BetELtpdVfZ', '2015-09-18 13:28:52', '2015-09-18 13:28:52'),
(7, 1, 'rEhoq1hozE87Jqu662Ar3tDiUN9NFM3r', '2015-09-18 17:14:04', '2015-09-18 17:14:04'),
(8, 1, 'EtP6dPcFC91J3LEm6QDXqmvTz5qEnGUf', '2015-09-18 18:56:15', '2015-09-18 18:56:15'),
(9, 1, 'IecsOCIg4VDu84kjirecfzPbigcicphI', '2015-09-18 22:03:34', '2015-09-18 22:03:34'),
(10, 1, 'BBcsSdrBLaVRQyscrnXJ1vMs6I9mjUnW', '2015-09-18 22:13:11', '2015-09-18 22:13:11'),
(11, 1, 'XDanOGWKDCfxwamVr3KwS4dTjXlMaOKo', '2015-09-19 17:25:07', '2015-09-19 17:25:07'),
(12, 1, 'mh1LnBN7kL13yIzeSs3F3JFriz1aIJwq', '2015-09-21 12:02:21', '2015-09-21 12:02:21'),
(13, 1, 'VeAH7JAGoISgwJk0Pgs06YaoxFgbNCms', '2015-09-21 20:28:58', '2015-09-21 20:28:58'),
(14, 1, '41yY8ETLvkIkLvd6YsiB5zZ3kqxyu04J', '2015-09-21 22:58:29', '2015-09-21 22:58:29'),
(15, 1, 'jE8vRXdGp1uuXg3nmnLIzwDnbF4WmO9i', '2015-09-22 12:51:59', '2015-09-22 12:51:59'),
(16, 1, 'v8sgPzzPNbHyI1stt0xXh3ie0jmV1JNY', '2015-09-22 14:25:46', '2015-09-22 14:25:46'),
(17, 1, 'rrQSB2jXI8qeXwh1MMWBQWM185Q38JVH', '2015-09-22 17:25:09', '2015-09-22 17:25:09'),
(18, 1, 'i3ELqAmpYrXIFoN4FRzcRZR3KvSkHiC4', '2015-09-22 17:33:20', '2015-09-22 17:33:20'),
(19, 1, 'hK5Lzu6tgtjpouIXw09Vxvdqs8IlIz7G', '2015-09-22 17:43:18', '2015-09-22 17:43:18'),
(20, 1, 'JqyvtH9XleWROGIt7o1eWhVFB09ks6n5', '2015-09-23 11:46:19', '2015-09-23 11:46:19'),
(23, 1, 'NlOQaZ90Kwh30r2GRK2W4Or00RnL0HvQ', '2015-09-23 15:57:56', '2015-09-23 15:57:56'),
(24, 1, '2YbQwPtoKY9yg1NhyPdwEm1MPihpxOc3', '2015-09-23 17:26:54', '2015-09-23 17:26:54'),
(25, 1, 'kW1AFx6oZAssUkpNvizTPqsk8KLmWDiB', '2015-09-23 19:47:16', '2015-09-23 19:47:16'),
(26, 1, 'P3z1Mjm1pjgoCNZNupLXewvGjFSxN6Wh', '2015-09-23 20:05:14', '2015-09-23 20:05:14'),
(27, 1, 'F9kJvPAJGoqxNLaqyBZ9iREkgOlFcDKb', '2015-09-23 20:10:52', '2015-09-23 20:10:52'),
(28, 1, '1YIl5ZUb3E3zOv45yYcYL0CTlsGJYHvK', '2015-09-23 20:10:53', '2015-09-23 20:10:53'),
(31, 1, 'i9eKR7zXpChzHlnWtyggKDsbiFyZAGEp', '2015-09-24 13:10:20', '2015-09-24 13:10:20'),
(32, 1, 'VnMs3so4tumbIwIvBE7m3cuAgDDTnPMB', '2015-09-24 13:10:51', '2015-09-24 13:10:51'),
(33, 1, 'tlG7vtyv7CxpdT6fXEVBeTBZTopwzsRo', '2015-09-24 13:53:21', '2015-09-24 13:53:21'),
(34, 1, 'QpePh9sYqCLPUl86lj2Cv4urCe0EsYP8', '2015-09-24 16:07:45', '2015-09-24 16:07:45'),
(42, 1, 'fPrVHkZE6fqqlm2k5ANLT7c4FHPD1foe', '2015-09-25 02:11:50', '2015-09-25 02:11:50'),
(43, 1, 'qLf5Td0yPmxPfyWG12VYHuV6XRIQulwY', '2015-09-25 05:35:00', '2015-09-25 05:35:00'),
(44, 1, 'Z6exLDUH25PelLFKU4e2MB7LnF42fdbm', '2015-09-25 05:35:13', '2015-09-25 05:35:13'),
(46, 1, 'Il3i7t5cyd6FIaTuVay5FefgBrg1F6o8', '2015-09-26 15:50:31', '2015-09-26 15:50:31'),
(47, 1, '9MP7H3rlknvK8MjzWXf6OQt1ORABmHVC', '2015-10-03 06:12:27', '2015-10-03 06:12:27'),
(48, 1, 'hbswNuI9xr5kyh1AmTVuUWTeaZcY34tl', '2015-10-03 21:41:47', '2015-10-03 21:41:47'),
(49, 1, 'fzODHlN5hqw7xrhecz92lOY6vRrH4SIL', '2015-10-06 14:13:33', '2015-10-06 14:13:33'),
(51, 1, 'GkdB8n6TNyUKmYIoiQOvqK0MAZJ04LM2', '2015-10-07 03:51:51', '2015-10-07 03:51:51'),
(53, 1, 'S3nOkfiKAlU0YE7Vgh76In8K9eog6lY9', '2015-10-08 09:33:41', '2015-10-08 09:33:41'),
(54, 1, '0SgimjGPqwlxqLkgW0IdMTe2Fqq86NaI', '2015-10-08 09:33:41', '2015-10-08 09:33:41'),
(55, 1, 'eWuamRYJiBIlsIFTddeLsxgRh79VEx9P', '2015-10-09 08:20:31', '2015-10-09 08:20:31'),
(56, 1, '9gPiEY0xNmRp361c0zlNvZ9q17TJPUKy', '2015-10-09 12:00:30', '2015-10-09 12:00:30'),
(57, 1, 'fgG2uNOw2TMiqWM5kOCKoWAZ4TIslRgk', '2015-10-09 15:56:56', '2015-10-09 15:56:56'),
(58, 1, 'OnVDGVbUNpTteDJ3d2KmFjhZk77sC5VN', '2015-10-12 11:06:30', '2015-10-12 11:06:30'),
(59, 1, 'nrwyg7CUKaMs0QM6ODKtaabdWYAoWqo7', '2015-10-16 07:52:00', '2015-10-16 07:52:00'),
(60, 1, 'vxlhLwstBWRmT8nSmK9uDpdyz7B5K5Ml', '2015-10-16 20:11:54', '2015-10-16 20:11:54'),
(61, 1, 'yA28i02xuffpGRuPOpKHdKCXVAvSNBs3', '2015-10-17 17:02:33', '2015-10-17 17:02:33'),
(62, 1, 'N2fZxEdHuXSjyFj3ztmr7ruZqIgx5Y6W', '2015-10-18 11:11:52', '2015-10-18 11:11:52'),
(63, 1, 'RArKmlr7ffw4sXEUURn6F8WalYdrjbEk', '2015-10-18 11:42:29', '2015-10-18 11:42:29'),
(64, 1, '9L7BPG4PxOHvvxA4woMslYzYhFVxJ9Rr', '2015-10-19 14:27:23', '2015-10-19 14:27:23'),
(65, 1, 'LBGTcjI7tMAzjbWkCHVNtqYIFgSPrOe6', '2015-10-24 08:05:10', '2015-10-24 08:05:10'),
(66, 1, '8cPuU5Sy7R2qdkQ5RXU5iscitxiX4klw', '2015-10-24 11:35:20', '2015-10-24 11:35:20'),
(67, 1, '2TbTH1aV1wSblHCOCwA46ODm477PJZGW', '2015-10-24 11:35:22', '2015-10-24 11:35:22'),
(68, 1, 'WGejloPnhuNhsAcNPiAwceDTEfoU7vhF', '2015-10-26 06:26:00', '2015-10-26 06:26:00'),
(69, 1, 'TIbV8lqqNfSzXi7gyDxpfaw6MaclwI6A', '2015-10-26 12:56:44', '2015-10-26 12:56:44'),
(70, 1, '0wMOOCF9ldCztb014f4LnzBHuzYAKeNI', '2015-10-26 14:57:54', '2015-10-26 14:57:54'),
(71, 1, 'h8biZKKq01BjDaEOgQwPD9wXQLSqVXf5', '2015-10-27 10:40:02', '2015-10-27 10:40:02'),
(72, 1, '7zOmfSx6RwOyLOZQZX7n1dTVkvoxmGvF', '2015-10-27 11:33:55', '2015-10-27 11:33:55'),
(73, 1, 'nyl2dhuAiCwgpQm1fZqjPigPbdYD3ocB', '2015-10-27 11:34:44', '2015-10-27 11:34:44'),
(74, 1, 'MdcWWvRwxhyxpet5Ix6fPg9z5voQaVNo', '2015-10-28 11:47:36', '2015-10-28 11:47:36'),
(75, 1, 'Y6Nsz8DJQ3LaeRQDc1mL2OHyv3uk3DZb', '2015-10-28 13:06:19', '2015-10-28 13:06:19'),
(76, 1, 'tKiaXCOsOFsJUmBznTmkxPwqwYKKiPCJ', '2015-10-29 07:53:45', '2015-10-29 07:53:45'),
(77, 1, 'okP9buXwlOnBc3aY09TTvejWurwAGsBi', '2015-10-29 11:28:45', '2015-10-29 11:28:45'),
(78, 1, 'nVmV68eVgV94Mvhxt5DZE8dJN3DIF4nL', '2015-10-29 13:22:56', '2015-10-29 13:22:56'),
(79, 1, 'Uy0nuvgoQrWnv6xmza10JJAZvqaQ8npZ', '2015-11-02 12:32:02', '2015-11-02 12:32:02'),
(80, 1, '9BZIAP6kVvJ4aGtY3bQquCDkfCQfodZJ', '2015-11-02 14:01:24', '2015-11-02 14:01:24'),
(83, 1, 'VPHnJ6qRFHoa4EbFX3Y1IVS0U1Th9FUR', '2015-11-05 11:49:23', '2015-11-05 11:49:23'),
(84, 3, 'tgDDsm33uCgUWXQv35DVpS5Pq7didiao', '2015-11-05 12:09:18', '2015-11-05 12:09:18'),
(86, 8, '7Tf3xJkHsse8HvyyVfQtdjvp9lXnZfXy', '2015-11-08 14:11:50', '2015-11-08 14:11:50');

-- --------------------------------------------------------

--
-- Table structure for table `quote_expiry_time`
--

CREATE TABLE IF NOT EXISTS `quote_expiry_time` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `QE_TIME` int(11) NOT NULL,
  `CREATED_AT` datetime NOT NULL,
  `UPDATED_AT` datetime NOT NULL,
  `CREATED_BY` int(11) NOT NULL,
  `UPDATED_BY` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `quote_expiry_time`
--

INSERT INTO `quote_expiry_time` (`id`, `QE_TIME`, `CREATED_AT`, `UPDATED_AT`, `CREATED_BY`, `UPDATED_BY`) VALUES
(1, 30, '2015-10-27 00:00:00', '2015-10-27 10:04:15', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE IF NOT EXISTS `reminders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_slug_unique` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE IF NOT EXISTS `role_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`,`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(2, 1, '2015-09-17 10:33:04', '2015-09-17 10:33:04');

-- --------------------------------------------------------

--
-- Table structure for table `Senders`
--

CREATE TABLE IF NOT EXISTS `Senders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `FIRST_NAME` varchar(24) NOT NULL,
  `LAST_NAME` varchar(24) NOT NULL,
  `ADDRESS` varchar(500) NOT NULL,
  `CITY` varchar(255) NOT NULL,
  `STATE` varchar(255) NOT NULL,
  `COUNTRY` varchar(255) NOT NULL,
  `POST_CODE` varchar(255) NOT NULL,
  `CONTACT_NO` varchar(255) NOT NULL,
  `ACCOUNT_NAME` varchar(50) NOT NULL,
  `ACCOUNT_NUMBER` varchar(50) NOT NULL,
  `BSB` varchar(50) NOT NULL,
  `BANK` varchar(50) NOT NULL,
  `CREATED_AT` datetime NOT NULL,
  `UPDATED_AT` datetime NOT NULL,
  `CREATED_BY` varchar(24) NOT NULL,
  `UPDATED_BY` varchar(24) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `Senders`
--

INSERT INTO `Senders` (`id`, `FIRST_NAME`, `LAST_NAME`, `ADDRESS`, `CITY`, `STATE`, `COUNTRY`, `POST_CODE`, `CONTACT_NO`, `ACCOUNT_NAME`, `ACCOUNT_NUMBER`, `BSB`, `BANK`, `CREATED_AT`, `UPDATED_AT`, `CREATED_BY`, `UPDATED_BY`) VALUES
(1, 'Sudip', 'Sen', 'test', 'Kolkata', 'W.B.', 'India', '12345', '1234567890', '', '', '', '', '2015-09-23 06:54:40', '2015-10-18 08:48:20', '1', '1'),
(2, 'tet', 'dd', 'test', 'Kolkata', 'W.B.', 'India', '12345', '1234567890', 'test agent', '12345566', 'test', 'Axis', '2015-09-23 07:48:44', '2015-10-18 08:48:03', '1', '1'),
(6, 'Twerech', 'Cititzen', 'test', 'Kolkata', 'W.B.', 'India', '12345', '1234567890', '', '', '', '', '2015-10-08 02:35:45', '2015-10-18 08:47:42', '1', '1'),
(5, 'test', 'test', 'test', 'Kolkata', 'W.B.', 'India', '12345', '1234567890', '', '', '', '', '2015-09-24 09:04:13', '2015-10-18 08:48:41', '1', '1'),
(7, 'adfdasf', 'asdfdsaf', 'test', 'Kolkata', 'W.B.', 'India', '12345', '1234567890', '', '', '', '', '2015-10-09 09:21:58', '2015-10-18 08:47:28', '1', '1'),
(8, 'Test', 'Demo', 'test123', 'Kolkata', 'W.B.', 'India', '12345', '1234567890', '', '', '', '', '2015-10-18 06:06:10', '2015-10-18 07:53:37', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE IF NOT EXISTS `throttle` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `throttle_user_id_index` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=24 ;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `type`, `ip`, `created_at`, `updated_at`) VALUES
(1, NULL, 'global', NULL, '2015-09-23 12:13:51', '2015-09-23 12:13:51'),
(2, NULL, 'ip', '115.187.44.168', '2015-09-23 12:13:51', '2015-09-23 12:13:51'),
(3, 1, 'user', NULL, '2015-09-23 12:13:51', '2015-09-23 12:13:51'),
(4, NULL, 'global', NULL, '2015-09-24 13:10:14', '2015-09-24 13:10:14'),
(5, NULL, 'ip', '115.187.57.126', '2015-09-24 13:10:14', '2015-09-24 13:10:14'),
(6, 1, 'user', NULL, '2015-09-24 13:10:14', '2015-09-24 13:10:14'),
(7, NULL, 'global', NULL, '2015-09-24 19:45:46', '2015-09-24 19:45:46'),
(8, NULL, 'ip', '115.187.57.197', '2015-09-24 19:45:46', '2015-09-24 19:45:46'),
(9, 3, 'user', NULL, '2015-09-24 19:45:46', '2015-09-24 19:45:46'),
(10, NULL, 'global', NULL, '2015-10-09 11:57:40', '2015-10-09 11:57:40'),
(11, NULL, 'ip', '82.103.131.202', '2015-10-09 11:57:40', '2015-10-09 11:57:40'),
(12, NULL, 'global', NULL, '2015-10-29 11:28:17', '2015-10-29 11:28:17'),
(13, NULL, 'ip', '115.187.57.165', '2015-10-29 11:28:17', '2015-10-29 11:28:17'),
(14, 1, 'user', NULL, '2015-10-29 11:28:17', '2015-10-29 11:28:17'),
(15, NULL, 'global', NULL, '2015-11-02 14:43:03', '2015-11-02 14:43:03'),
(16, NULL, 'ip', '115.187.44.161', '2015-11-02 14:43:03', '2015-11-02 14:43:03'),
(17, 3, 'user', NULL, '2015-11-02 14:43:03', '2015-11-02 14:43:03'),
(18, NULL, 'global', NULL, '2015-11-02 14:43:10', '2015-11-02 14:43:10'),
(19, NULL, 'ip', '115.187.44.161', '2015-11-02 14:43:10', '2015-11-02 14:43:10'),
(20, 3, 'user', NULL, '2015-11-02 14:43:10', '2015-11-02 14:43:10'),
(21, NULL, 'global', NULL, '2015-11-08 14:11:46', '2015-11-08 14:11:46'),
(22, NULL, 'ip', '110.147.139.106', '2015-11-08 14:11:46', '2015-11-08 14:11:46'),
(23, 8, 'user', NULL, '2015-11-08 14:11:46', '2015-11-08 14:11:46');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `SELL_AMOUNT` decimal(10,4) NOT NULL,
  `PAYOUT_AMOUNT` decimal(10,4) NOT NULL,
  `SENDER_ID` bigint(11) NOT NULL,
  `BENEFICIARY_ID` bigint(11) NOT NULL,
  `DELIVERY_DATE` datetime NOT NULL,
  `CREATED_AT` datetime NOT NULL,
  `UPDATED_AT` datetime NOT NULL,
  `CREATED_BY` bigint(11) NOT NULL,
  `UPDATED_BY` bigint(11) NOT NULL,
  `CURRENCY_BUY` varchar(10) NOT NULL,
  `CURRENCY_SELL` varchar(10) NOT NULL,
  `EXCHANAGE_RATE` decimal(10,4) NOT NULL,
  `MID_MARKET_RATE` decimal(10,4) NOT NULL,
  `TRANSFER_TYPE` varchar(24) NOT NULL,
  `QUOTE_EXPIRY_DATETIME` datetime NOT NULL,
  `PURPOSE` varchar(2048) NOT NULL,
  `AGENT_ID` bigint(11) NOT NULL,
  `BUY_AMOUNT` decimal(10,4) NOT NULL,
  `COMPANY_ID` int(11) NOT NULL,
  `PAYMENT` int(11) NOT NULL,
  `EXP_TIME` int(11) NOT NULL,
  `SESSION_TM` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `SELL_AMOUNT`, `PAYOUT_AMOUNT`, `SENDER_ID`, `BENEFICIARY_ID`, `DELIVERY_DATE`, `CREATED_AT`, `UPDATED_AT`, `CREATED_BY`, `UPDATED_BY`, `CURRENCY_BUY`, `CURRENCY_SELL`, `EXCHANAGE_RATE`, `MID_MARKET_RATE`, `TRANSFER_TYPE`, `QUOTE_EXPIRY_DATETIME`, `PURPOSE`, `AGENT_ID`, `BUY_AMOUNT`, `COMPANY_ID`, `PAYMENT`, `EXP_TIME`, `SESSION_TM`) VALUES
(1, '100.0000', '0.0000', 0, 0, '0000-00-00 00:00:00', '2015-10-29 07:04:04', '2015-10-29 07:04:27', 1, 1, 'AUD', 'USD', '0.7109', '0.7109', '', '0000-00-00 00:00:00', '', 1, '71.0900', 0, 0, 1446104041, 1446102230),
(2, '100.0000', '0.0000', 0, 0, '0000-00-00 00:00:00', '2015-10-29 07:32:05', '2015-10-29 07:32:10', 1, 1, 'AUD', 'USD', '0.7114', '0.7114', '', '0000-00-00 00:00:00', '', 1, '71.1400', 0, 0, 1446105722, 1446103906),
(3, '1000.0000', '0.0000', 0, 0, '0000-00-00 00:00:00', '2015-10-29 07:33:43', '2015-10-29 07:34:27', 1, 1, 'AUD', 'USD', '0.7112', '0.7112', '', '0000-00-00 00:00:00', '', 1, '711.2000', 0, 0, 1446105821, 1446104002),
(4, '100.0000', '0.0000', 0, 0, '0000-00-00 00:00:00', '2015-10-29 07:40:23', '2015-10-29 07:40:27', 1, 1, 'AUD', 'USD', '0.7114', '0.7114', '', '0000-00-00 00:00:00', '', 1, '71.1400', 0, 0, 1446106217, 1446104387),
(5, '100.0000', '0.0000', 0, 0, '0000-00-00 00:00:00', '2015-10-29 08:23:54', '2015-10-29 08:23:58', 1, 1, 'AUD', 'USD', '0.7100', '0.7100', '', '0000-00-00 00:00:00', '', 1, '71.0000', 0, 0, 1446108832, 1446107003),
(6, '100.0000', '0.0000', 0, 0, '0000-00-00 00:00:00', '2015-10-29 08:36:04', '2015-10-29 08:36:08', 1, 1, 'AUD', 'USD', '0.7088', '0.7088', '', '0000-00-00 00:00:00', '', 1, '70.8800', 0, 0, 1446109561, 1446107750),
(7, '100000.0000', '0.0000', 0, 0, '0000-00-00 00:00:00', '2015-11-02 05:32:29', '2015-11-02 05:32:32', 1, 1, 'AUD', 'AED', '2.6186', '2.6190', '', '0000-00-00 00:00:00', '', 1, '261860.0000', 0, 0, 1446444147, 1446442335),
(8, '10000.0000', '0.0000', 0, 0, '0000-00-00 00:00:00', '2015-11-02 05:33:25', '2015-11-02 05:33:34', 1, 1, 'AUD', 'USD', '0.7136', '0.7136', '', '0000-00-00 00:00:00', '', 1, '7136.0000', 0, 0, 1446444203, 1446442393),
(9, '10000.0000', '0.0000', 0, 0, '0000-00-00 00:00:00', '2015-11-02 05:34:16', '2015-11-02 05:35:19', 1, 1, 'AUD', 'AED', '2.6184', '2.6188', '', '0000-00-00 00:00:00', '', 1, '26184.0000', 0, 0, 1446444254, 1446442445),
(10, '100.0000', '0.0000', 0, 0, '0000-00-00 00:00:00', '2015-11-02 08:16:35', '2015-11-02 08:16:40', 3, 3, 'AUD', 'USD', '1.4000', '1.4000', '', '0000-00-00 00:00:00', '', 3, '140.0000', 0, 0, 1446453995, 1446452186),
(11, '1000.0000', '0.0000', 0, 0, '0000-00-00 00:00:00', '2015-11-05 05:40:18', '2015-11-05 05:40:32', 3, 3, 'AUD', 'USD', '0.9999', '0.7142', '', '0000-00-00 00:00:00', '', 3, '999.8800', 0, 0, 1446703816, 1446702006);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `bio` text COLLATE utf8_unicode_ci,
  `gender` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `pic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ROLE` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `COMPANY_ID` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `last_login`, `first_name`, `last_name`, `created_at`, `updated_at`, `deleted_at`, `bio`, `gender`, `dob`, `pic`, `country`, `state`, `city`, `address`, `postal`, `ROLE`, `COMPANY_ID`) VALUES
(1, 'cm.partha@gmail.com', '$2y$10$yBmdgIZMwWlmSv3Muk1mlOSha8uRP1ng.RZ5F9rCgsz4lkHsRx0J2', NULL, '2015-11-08 13:29:02', 'partha', 'koley', '2015-09-17 09:56:45', '2015-11-08 13:29:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ADMIN', 0),
(3, 'agent@gmail.com', '$2y$10$wUzJ/Ag2jxmYLdajIW6FEOzAOoA8RhJNpI8IvhnDcfwSA5mLMHTiG', NULL, '2015-11-05 12:09:18', 'Agent', 'test', '2015-09-23 14:46:02', '2015-11-05 12:09:18', NULL, 'rwsr', 'male', '1990-07-13', 'q9PzqLTdIN.jpg', 'India', 'West Bengal', 'Kolkata', 'test', '123456', 'AGENT', 3),
(8, 'agent_admin@gmail.com', '$2y$10$Wawih8ufQRb9QdpMsvwM5uCeHxjQR2e8i8R3GsI4PJYR0wI9lq97a', NULL, '2015-11-08 14:11:50', 'Agent admin', 'test', '2015-09-23 20:24:17', '2015-11-08 14:11:50', NULL, 'test', 'male', '0000-00-00', NULL, 'India', 'test', 'test', 'wrrw', '313', 'AGENT_ADMIN', 6),
(9, 'tareq.ahmed2@gmail.com', '$2y$10$s03WUNlJnv2mK4foSTdcZODigy5faDkAGIlU.ukEikD/KDS7JySHq', NULL, NULL, 'Tareq', 'Ahmed', '2015-10-27 10:41:07', '2015-10-27 10:41:07', NULL, '', 'male', NULL, NULL, 'Australia', 'NSW', 'Sydney', 'Wellington Rd', '2192', 'AGENT', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
