-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2016 at 07:44 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwl_ecom`
--
CREATE DATABASE IF NOT EXISTS `pwl_ecom` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pwl_ecom`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `email`) VALUES
('AD-001', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@students.amikom.ac.id');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` varchar(10) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `description`) VALUES
('K-001', 'Office Supplies', 'Office Supplies'),
('K-002', 'Technology', 'Technology'),
('K-003', 'Furniture', 'Furniture\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` varchar(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `postal_code` varchar(10) NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `firstname`, `lastname`, `username`, `password`, `phone`, `email`, `address`, `country`, `city`, `postal_code`, `picture`) VALUES
('CUS-001', 'Sarjahjid', 'sarjah', 'sarjah', '92a7c5f92cd68d7a6818a7a3c8d0ff90', '089321345678', '', '', 'Depok', 'Sleman', '', ''),
('CUS-002', 'Febri', 'Suhardianto', 'febri', '4689c75fd0935ff5818d62fd2083ed98', '089321345678', 'febri@gmail.com', 'Jl. Nusa Indah II', 'Depok', 'Sleman', '', ''),
('CUS-003', 'test 2', 'Suhardianto', 'febrisuhardianto', 'febri', '089321345678', 'febri@gmail.com', 'Jl. Nusa Indah II', 'Depok', 'Sleman', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` varchar(10) NOT NULL,
  `customer_id` varchar(10) NOT NULL,
  `order_date` date NOT NULL,
  `shipped_date` date NOT NULL,
  `shipper_id` varchar(10) NOT NULL,
  `ex_date_pay` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `customer_id`, `order_date`, `shipped_date`, `shipper_id`, `ex_date_pay`) VALUES
('ORD-001', 'CUS-001', '2016-12-01', '2016-12-02', 'SHIP-001', '2016-12-02'),
('ORD-002', 'CUS-002', '2016-12-04', '2016-12-04', 'SHIP-002', '2016-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `order_detail_id` varchar(10) NOT NULL,
  `order_id` varchar(10) NOT NULL,
  `product_id` varchar(10) NOT NULL,
  `unit_price` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`order_detail_id`, `order_id`, `product_id`, `unit_price`, `quantity`, `total`) VALUES
('ORDD-001', 'ORD-001', 'P-001', '38', '1', '38'),
('ORDD-002', 'ORD-002', 'P-002', '38', '1', '38'),
('ORDD-003', 'ORD-001', 'P-006', '38', '1', '78');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` varchar(10) NOT NULL,
  `supplier_id` varchar(10) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_description` text NOT NULL,
  `unit_price` double NOT NULL,
  `unit_in_stock` int(11) DEFAULT NULL,
  `discount` double NOT NULL,
  `picture` text NOT NULL,
  `sub_category_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `supplier_id`, `product_name`, `product_description`, `unit_price`, `unit_in_stock`, `discount`, `picture`, `sub_category_id`) VALUES
('P-001', 'S-001', 'Eldon Base for stackable storage shelf, platinum', 'Eldon Base for stackable storage shelf, platinumuse\r\n', 38.94, 30, 0.04, 'images/31.jpg', 'SK-001'),
('P-002', 'S-001', 'SAFCO Commercial Wire Shelving, Black', 'SAFCO Commercial Wire Shelving, Black', 138.14, 20, 0.07, 'images/32.jpg', 'SK-001'),
('P-003', 'S-001', 'SAFCO Mobile Desk Side File, Wire Frame', 'SAFCO Mobile Desk Side File, Wire Frame', 42.76, 12, 0.01, 'images/33.jpg', 'SK-001'),
('P-004', 'S-001', '1.7 Cubic Foot Compact "Cube" Office Refrigerators', '1.7 Cubic Foot Compact "Cube" Office Refrigerators', 208.16, 23, 0.1, 'images/34.jpg', 'SK-001'),
('P-005', 'S-001', 'Holmes HEPA Air Purifier', 'Holmes HEPA Air Purifier', 21.78, 12, 0.07, 'images/35.jpg', 'SK-001'),
('P-006', 'S-001', 'Hoover Portapower™ Portable Vacuum', 'Hoover Portapower™ Portable Vacuum', 4.48, 23, 0.01, 'images/36.jpg', 'SK-001'),
('P-007', 'S-003', 'Coffee Table New', '"Item Weight 48 pounds\r\nProduct Dimensions 28.1 x 42 x 17.9 inches\r\nItem model number T580-1\r\nAssembled Height 8.5 inches\r\nAssembled Width 31.5 inches\r\nAssembled Length 45.5 inches\r\nWeight 48 Pounds"\r\n', 71.37, 66, 0.25, 'images/1.jpg', 'SK-011'),
('P-008', 'S-003', 'Hasegawa FA02 Meeting Room Desk & Chair', '"Table:\r\n\r\n* Transitional style design\r\n* Substantial wooden construction\r\n* Comes with black finish \r\n* Made of high grade sturdy MDF material\r\n* Overall dimensions: L47.24"" x W27.56"" x H29.53"". \r\n* Weight: 45.19 pounds. \r\n\r\nChairs:\r\n\r\n* Elegant design with modern appearance\r\n* Perfectly meet your dinning entertainment needs.\r\n* Substantial metal construction\r\n* Black PU leather seat\r\n* Easy to clean.\r\n* Ergonomic high back design\r\n* Product dimensions: L23.23"" x W17.13"" x H38.58"". \r\n* Weight: 14.77 pounds for each"\r\n', 218.75, 54, 0.1, 'images/2.jpg', 'SK-011'),
('P-009', 'S-003', '94000 Series Queen Anne 45.5" Round Breakroom Table', '"Item Weight 74 pounds\r\nProduct Dimensions 48 x 48 x 29 inches\r\nAssembled Length 5 millimeters\r\nWeight 84 Pounds"\r\n', 296.18, 45, 0.03, 'images/3.jpg', 'SK-011'),
('P-010', 'S-003', 'South Shore Axess Collection 4-Shelf Bookcase', 'Measures 30.75 inches wide by 11.5 inches deep by 58.25 inches high; 5-year warranty\r\n', 100.98, 54, 0.1, 'images/4.jpg', 'SK-010'),
('P-011', 'S-003', 'Sauder Multimedia Storage Tower, Cinnamon Cherry', '"Six adjustable shelves make organization easy!\r\nO'' Sullivan is a sub brand of Sauder Woodworking. Sauder is the manufacturer.\r\nHolds 280 DVD''s or 426 CD''s.\r\nAssembled dimensions : 32.4"" W x 9.4"" D x 45.4"" H"\r\n', 200.98, 65, 0.02, 'images/5.jpg', 'SK-010'),
('P-012', 'S-003', 'Office Star High Back Faux Leather Executive Chair with Padded Arms, Black', '"Item Weight 40 pounds\r\nProduct Dimensions 27.2 x 26 x 47.5 inches\r\nItem model number FL7480-U6\r\nAssembled Height 47.5 inches\r\nAssembled Width 26 inches\r\nWeight 40 Pounds"\r\n', 200.98, 56, 0.02, 'images/6.jpg', 'SK-009'),
('P-013', 'S-003', 'Hon 2-Carton Armless Stacking Chairs', '"Armless guest chairs stack up to five high\r\nUse in meeting rooms, conference areas, cafeterias and reception areas\r\n2-1/4"" Wide x 19-3/4"" deep seat and 21-1/4"" Wide x 16-1/4"" high back are fully upholstered for comfort"\r\n', 291.73, 54, 0.05, 'images/7.jpg', 'SK-009'),
('P-014', 'S-003', 'Advantus Certificate Holder', '"Holds 9 x 12 inch certificate\r\nBlack with red interior Lining\r\nMade of durable polypropylene\r\nPerfect for diplomas, awards, business achievements, and more\r\nTwo full inside pockets that include archival polypropylene overlays"\r\n', 30.93, 87, 0, 'images/8.jpg', 'SK-009'),
('P-015', 'S-003', 'Indoor/Outdoor Clock', '"Shatter- and weather-resistant case, lens and dial.\r\nBuilt to handle elements of nature.\r\nEnergy-efficient."\r\n', 22.72, 66, 0.05, 'images/9.jpg', 'SK-009'),
('P-016', 'S-003', 'deflecto CM21442F 46 x 60 Clear EconoMat Anytime Use Chair Mat for Hard Floor', '"Non-studded, protective vinyl chairmat safeguards uncarpeted floors.\r\nFor anytime use on wood, tile, laminate and other hard floor surfaces.\r\nEasy-glide rolling surface provides effortless chair movement.\r\nProtective vinyl, nonstudded, no bevel chair mat\r\nMaximum clarity and transparency, allowing the beauty of carpeting to show through\r\nTextured top surface is slip and scuff-resistant\r\nProtect hard floors from caster wear\r\nQuality chair mats save carpets and floors, while making it easy to move your chair freely around the workstation or desk area"\r\n', 51.65, 64, 0.03, 'images/10.jpg', 'SK-009'),
('P-017', 'S-001', 'Stackable 3-Tier Office Tray & Pen Holder', '"MAKE YOUR LIFE EASIER, SIMPLER & ORGANIZED: Our document tray stops automatically at the back and prevents trays from sliding out which helps to keep the files in place. The drawer tiers won''t fall off even when you lift the organizer to move from one room to another room. Never worry about falling files. Due to its sliding trays, spaced 2"" apart, this unique holder is easier to load. There are even rubber feet on the bottom to protect it from slipping and your desktop from being scratched.\r\nSPACE-SAVING & CONVENIENT: With our stackable rack trays you can optimize your file & accessories organization and create more space than any other school, workplace/office organizer offers you. Access your papers easily, as the multiple compartments can be pulled out and help you tidy your work space by eliminating messy paperwork on your desk or table! Our business document sorting and inbox storage rack has plenty of room for your papers, files, mail, letters, receipts, recipes and folders."\r\n', 38.94, 45, 0.04, 'images/11.jpg', 'SK-001'),
('P-018', 'S-001', 'Bankers Box StaxonSteel Storage Drawers', '"Stacks 10 high - The higher the drawer system stacks, the more space, time and money you save\r\nSteel framework interlocks vertically and horizontally to withstand the heaviest day-to-day usage\r\nOur strongest system is also the easiest to assemble. Drawers snap together with poly-lock technology and are reinforced with steel wire\r\nFactory installed, high-impact drawer handle with index card holder for fast file retrieval (index cards included)\r\nMaximum Strength - Built for heavy daily usage and maximum stability"\r\n', 111.03, 57, 0.1, 'images/12.jpg', 'SK-001'),
('P-019', 'S-001', 'Genuine Xerox High Capacity Magenta Toner for the Phaser 6600 or WorkCentre 6605', '"For use with Xerox WorkCentre 6655\r\nHigh capacity for high-volume printing\r\nSpecially formulated for best image quality"\r\n', 223.02, 54, 0.07, 'images/13.jpg', 'SK-007'),
('P-020', 'S-001', ' Head Map Tacks', '"Round head map tacks mark locations on maps for easy and quick identification.\r\nRound head map tacks mark locations on maps for easy and quick identification."\r\n', 3.95, 56, 0.04, 'images/14.jpg', 'SK-005'),
('P-021', 'S-001', ' Premium Diagonal-Seam Gummed Envelopes', '#10 (4-1/8" x 9-1/2") ,Gummed closure with commercial flap, Ideal for auto-insertion machines, Sturdy diagonal-seam construction for extra strength and capacity, 24 lb. ivory paper\r\n', 15.74, 54, 0.07, 'images/15.jpg', 'SK-009'),
('P-022', 'S-001', 'Sharpie Accent Tank Style Highlighters', '"Tank style offers easy-gliding chisel tip for a smooth highlighting experience\r\nHighlights both wide and narrow lines of text\r\nBright, see-through color increases efficiency of information retrieval"\r\n', 2.84, 78, 0.06, 'images/16.jpg', 'SK-009'),
('P-023', 'S-001', 'YIYATOO Portable Cute Mini Corner Desk Table Dust Keyboard Office/Home Vacuum Cleaner Sweeper', '"New Pro Mini Table Dust Vacuum Cleaner Table Cleaning Assistance Keyboard Cleaning Dust for Home Office Small and portable for desk,table dust cleaning.\r\nRemovable bottom creative design, you can push the bottom when need dump the dust, it is easy and fast to clean.\r\nLightweight, easy to carry, quiet when clean dust, modern simple and elegant.Great for remove the dust on the surface of home appliance, laptop, computer keyboard or furniture.\r\nWireless, 3V working with 2*AA batteries (not included).\r\nPowered for under 10 minutes continuous cleaning, suction and full of fine dust for light / confetti / fruit scraps and sediment. But it can only absorb smaller objects"\r\n', 4.48, 67, 0.06, 'images/17.jpg', 'SK-002'),
('P-024', 'S-001', 'Avery Durable Binder', '"Binder features a DuraHinge design that''s stronger, lasts longer and resists tearing, and DuraEdge that makes the sides and top more pliable to resist splitting\r\nDeep texture film offers a smoother finish and features a linen pattern for high-quality look and feel\r\nSlant rings hold up to 500 sheets\r\nWide front and back binder panels fully cover standard dividers and sheet protectors\r\nOrganize and secure paper with two interior pockets"\r\n', 3.75, 57, 0.03, 'images/18.jpg', 'SK-009'),
('P-025', 'S-001', 'Martin Yale 1628 Desktop Letter Opener', '"Automatically feeds and opens a stack of envelopes at high-speed\r\nAccepts standard-sized business envelopes\r\nHandles a stack of envelopes up to 1 Inch high\r\nBlades are fully enclosed to protect fingers\r\nOperates at a speed of up to 3000 envelopes per hour"\r\n', 1637.53, 57, 0.04, 'images/19.jpg', 'SK-008'),
('P-026', 'S-001', 'Cardinal Premier ', '"ONE-TOUCH Easy Open rings open, close and lock with one simple motionONE-TOUCH Easy Open rings open, close and lock with one simple motion\r\nStore 11-inch x 17-inch documents\r\nSlant-D rings hold 25% more than standard round rings\r\nAwarded the Ease-of-Use Commendation from the Arthritis Foundation\r\nCover board made from 100% recycled fiber with at least 98% post-consumer fiber"\r\n', 8.69, 56, 0.01, 'images/20.jpg', 'SK-003'),
('P-027', 'S-002', 'VTech 20-2481 2.4 GHz DSS 2-Line Expandable Cordless Phone with Digital Answering System and Caller ID', '"2-line, 2.4GHz Digital Spread Spectrum phone system\r\nBuilt-in digital answering system\r\nMulti-handset system, expandable to 8 users\r\nBase speakerphone and keypad; handset speakerphone\r\nCall waiting/ Caller ID"\r\n', 179.99, 46, 0.05, 'images/21.jpg', 'SK-006'),
('P-028', 'S-002', 'AT&T 1726 Digital Answering System ', '"40 minutes of record time\r\nCaller ID number announce\r\n3 mailboxes\r\nMessage transfer between mailboxes\r\nAudible message alert"\r\n', 20.99, 69, 0.09, 'images/22.jpg', 'SK-006'),
('P-029', 'S-002', 'Sharp AL-1530CS Digital Laser Copier, Printer, Color Scanner', '"Flatbed design lets you print, copy, and scan right from your desktop\r\nUp to 15 cpm at 600 dpi, plus continuous copy function\r\n12 ppm printing at 600 dpi; scanning up to 2,400 dpi interpolated\r\nScanning software included; parallel and USB interfaces\r\n3-year warranty on parts, 1-year on labor"\r\n', 499.99, 67, 0, 'images/23.jpg', 'SK-008'),
('P-030', 'S-002', 'HP Photosmart 3310 All-in-One Printe', '"Color prints, copies, scans, and faxes\r\nUp to 32 ppm print speed, 4,800 dpi resolution\r\nPrint without PC using the 3.6-inch QVGA display\r\n4,800 dpi scan resolution, 48-bit color\r\nBuilt-in Ethernet, USB, and PictBridge interfaces; PC and Mac compatible"\r\n', 599.99, 54, 0.09, 'images/24.jpg', 'SK-008'),
('P-031', 'S-002', 'Canon P1-DHII Handheld/Portable Printing Calculator', '"12 digits and single live memory\r\nSerial impact printer with ink roller\r\nExtra-large Liquid Crystal Display\r\nDual paper supply system (internal/external installation)\r\nCanon AC adaptor AC-360 included"\r\n', 17.98, 57, 0.04, 'images/241.jpg', 'SK-008'),
('P-032', 'S-002', 'Brother MFC-J985DW XL Inkjet All-in-One Color Printer with 12 INKvestment Cartridges, Duplex and Wireless', '"Up to 2 years of ink included in the box\r\nInkjet printing for pennies and nickels, less than one cent per page for black and white printing, and less than five cents per page in color\r\nBased on average monthly print volumes of approximately 300 pages (70% black pages / 30% color pages) and approximate page yield in accordance with ISO/IEC 24711 using 12 cartridges provided\r\n12 Super High-yield ink cartridges provide approximately 7200 black pages / 3600 color pages total ink yield in the box\r\nWireless and Mobile Device printing and scanning from almost anywhere - smartphone, tablet, laptop, and desktop Computer"\r\n', 269.99, 43, 0.06, 'images/26.jpg', 'SK-008'),
('P-033', 'S-002', 'HP OfficeJet 4650 Wireless All-in-One Photo Printer with Mobile Printing,', '"Main functions of this HP color inkjet photo printer: copy, scan, fax, wireless printing, AirPrint, two-sided duplex printing, touchscreen, Instant Ink ready so you''ll never run out of ink, and more\r\nMobile printing: print from anywhere using your smartphone or tablet with the free HP ePrint app, easily print from your iPhone or iPad with AirPrint, print even without a network using Wireless Direct printing\r\n2-sided printing allows you to print on both sides of the page, cutting your paper use by up to 50%\r\nLaser quality text and brilliant color for all your documents and projects\r\nSave up to 50% on Ink with HP Instant Ink: ordered by your printer and delivered to your door before you run out (optional subscription required). Use Original HP 63 Ink cartridges to print up to 2x the pages as refilled cartridges\r\nFly through tasks with an all-in-one with fax and automatic document feeder\r\nPaper sizes supported: Letter, legal, 4 x 6 in, 5 x 7 in, 8 x 10 in, No. 10 envelopes\r\nOne-year limited hardware warranty; 24-hour, 7 days a week Web support"\r\n', 100.97, 68, 0.03, 'images/27.jpg', 'SK-008'),
('P-034', 'S-002', 'Microsoft Natural Multimedia Keyboard', '"Ergonomic design: Split, gently sloped shape encourages a natural hand, wrist, and\r\nMedia Center: Just press a button to start many of your favorite media programs,\r\nSleep Hot Key: Put your computer into ""sleep"" mode right from your desktop, protecting your data and saving energy.\r\nExperience a faster way to perform common tasks. Just press a key to open, close, save, and print documents, send and forward e-mails\r\nWith the press of a button, get instant access to Messenger, Mail, Internet, and Calculator commands."\r\n', 50.98, 66, 0.03, 'images/28.jpg', 'SK-007'),
('P-035', 'S-002', 'Logitech MK270 Wireless Keyboard/Mouse Combo', '"Reliable 2.4 GHz wireless connection: A tiny Logitech nano-receiver connects both the keyboard and mouse using just one USB port\r\nLong battery life: Get up to 36 months of keyboard power and 12 months of mouse power without changing batteries (Keyboard and mouse battery life may vary based on user and computing conditions)\r\nEight hot keys: Instantly access your movies, music, the Internet, e-mail, volume, play/pause and more\r\nAll-in-one setup: Includes a full-size keyboard with quiet, low-profile keys plus a portable contoured mouse for comfortable control\r\nPlug and play simplicity for Windows PCs: Works right out of the box with Windows 10 or later, Windows 8, 7, Windows Vista, Windows XP, Chrome OS. Not Bluetooth compatible. (Kindly refer the user manual given below for troubleshooting steps)"\r\n"Reliable 2.4 GHz wireless connection: A tiny Logitech nano-receiver connects both the keyboard and mouse using just one USB port\r\nLong battery life: Get up to 36 months of keyboard power and 12 months of mouse power without changing batteries (Keyboard and mouse battery life may vary based on user and computing conditions)\r\nEight hot keys: Instantly access your movies, music, the Internet, e-mail, volume, play/pause and more\r\nAll-in-one setup: Includes a full-size keyboard with quiet, low-profile keys plus a portable contoured mouse for comfortable control\r\nPlug and play simplicity for Windows PCs: Works right out of the box with Windows 10 or later, Windows 8, 7, Windows Vista, Windows XP, Chrome OS. Not Bluetooth compatible. (Kindly refer the user manual given below for troubleshooting steps)"\r\n', 15.98, 67, 0.09, 'images/29.jpg', 'SK-007'),
('P-036', 'S-002', 'Verbatim 700MB 52x 80 Minute Branded Recordable Disc CD-R - 100-Disc Spindle', '"Reinforced Packaging to Minimize Breakage. Models 94554 and 97458 are identical products. 97458 is in frustration free packaging. Verbatim strives for a greener planet.\r\n100 year archival life\r\nBrand of choice for OEM''s, medical grade, large corporate data centers, anywhere you need ultimate data security\r\nRugged, reusable ""cake box"" spindle to protect from dust and damage for long term storage\r\nShips in Certified Frustration-Free Packaging"\r\n', 45.19, 89, 0.04, 'images/30.jpg', 'SK-007');

-- --------------------------------------------------------

--
-- Table structure for table `shipper`
--

CREATE TABLE `shipper` (
  `shipper_id` varchar(10) NOT NULL,
  `shipper_company_name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipper`
--

INSERT INTO `shipper` (`shipper_id`, `shipper_company_name`, `phone`, `address`) VALUES
('SHIP-001', 'Storage Company', '0891234789654', 'Yogyakarta'),
('SHIP-002', 'Appliances Company', '081328764957', 'Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_category_id` varchar(10) NOT NULL,
  `category_id` varchar(10) NOT NULL,
  `sub_category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_category_id`, `category_id`, `sub_category_name`) VALUES
('SK-001', 'K-001', 'Storage & Organization'),
('SK-002', 'K-001', 'Appliances'),
('SK-003', 'K-001', 'Binders and Binder Accessories'),
('SK-004', 'K-001', 'Paper'),
('SK-005', 'K-001', 'Rubber Bands'),
('SK-006', 'K-002', 'Telephones and Communication'),
('SK-007', 'K-002', 'Computer Peripherals'),
('SK-008', 'K-002', 'Office Machines'),
('SK-009', 'K-003', 'Office Furnishings'),
('SK-010', 'K-003', 'Bookcases'),
('SK-011', 'K-003', 'Tables');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` varchar(10) NOT NULL,
  `company_name` varchar(40) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(25) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `postal_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `company_name`, `phone`, `email`, `address`, `country`, `city`, `postal_code`) VALUES
('S-001', 'Office Supplies Company', '', 'storage@gmail.com', '', '', '', ''),
('S-002', 'Technology Company', '', 'tecnology@gmailcom', '', '', '', ''),
('S-003', 'Furniture Company', '', 'furniture@gmail.com', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `verifikasi`
--

CREATE TABLE `verifikasi` (
  `verifikasi_id` varchar(10) NOT NULL,
  `nama_pengirim` varchar(50) NOT NULL,
  `bank_asal` varchar(50) NOT NULL,
  `bank_tujuan` varchar(50) NOT NULL,
  `nominal` varchar(20) NOT NULL,
  `order_id` varchar(10) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `nilai` int(2) NOT NULL,
  `verifikasi_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verifikasi`
--

INSERT INTO `verifikasi` (`verifikasi_id`, `nama_pengirim`, `bank_asal`, `bank_tujuan`, `nominal`, `order_id`, `gambar`, `nilai`, `verifikasi_date`) VALUES
('VER-001', 'sarjah', 'kjhk', 'hkjh', '100', 'ORD-001', 'images/verify/distant_peak-1680x1050.jpg', 2, '2016-12-01'),
('VER-002', '', '', '', '', 'ORD-002', '', 0, '2016-12-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `shipper`
--
ALTER TABLE `shipper`
  ADD PRIMARY KEY (`shipper_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_category_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `verifikasi`
--
ALTER TABLE `verifikasi`
  ADD PRIMARY KEY (`verifikasi_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
