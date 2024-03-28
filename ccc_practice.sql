-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2024 at 02:09 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccc_practice`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `banner_image` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `show_on` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_image`, `status`, `show_on`) VALUES
(1, 'big_sale.jpg', 1, 'Big Sale'),
(2, 'earbuds.jpg', 1, 'earbuds sale'),
(3, 'friday_sale.jpg', 1, 'friday sale');

-- --------------------------------------------------------

--
-- Table structure for table `catalog_category`
--

CREATE TABLE `catalog_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catalog_category`
--

INSERT INTO `catalog_category` (`category_id`, `category_name`, `status`) VALUES
(1, 'Apparel', 1),
(2, 'Electronics', 1),
(3, 'Furniture', 1),
(4, 'Footwear', 1),
(5, 'Accessories', 1),
(6, 'Sports and Outdoors', 1),
(7, 'Beauty and Personal Care', 1),
(8, 'Toys and Games', 1),
(9, 'Books and Stationery', 1),
(10, 'Home Improvement', 1);

-- --------------------------------------------------------

--
-- Table structure for table `catalog_product`
--

CREATE TABLE `catalog_product` (
  `product_id` int(11) NOT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `size` text DEFAULT NULL,
  `inventory` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `image_link` text DEFAULT NULL,
  `link` text DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `price` decimal(12,2) NOT NULL,
  `mfr_cost` decimal(12,2) NOT NULL,
  `shipping_cost` decimal(12,2) NOT NULL,
  `total_cost` decimal(12,2) NOT NULL,
  `margin_percentage` decimal(5,2) NOT NULL,
  `min_price` decimal(12,2) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catalog_product`
--

INSERT INTO `catalog_product` (`product_id`, `sku`, `name`, `color`, `size`, `inventory`, `description`, `image_link`, `link`, `category_id`, `price`, `mfr_cost`, `shipping_cost`, `total_cost`, `margin_percentage`, `min_price`, `status`) VALUES
(1, 'SKU001', 'T-shirt', 'Red', 'All Size Available', 96, 'Comfortable cotton t-shirt', 'tshirt.png', 'link1.html', 1, 19.99, 15.00, 5.00, 24.99, 20.00, 15.00, 1),
(2, 'SKU002', 'Jeans', 'Blue', 'Large', 98, 'Classic blue denim jeans', 'jeans.png', 'link2.html', 1, 29.99, 20.00, 7.00, 37.99, 25.00, 22.00, 1),
(3, 'SKU003', 'Running Shoes', 'white', 'Small', 97, 'Lightweight and breathable running shoes', 'shoes.png', 'link3.html', 1, 59.99, 45.00, 10.00, 69.99, 15.00, 50.00, 0),
(4, 'SKU004', 'Sunglasses', 'Black', 'Medium', 94, 'UV protection stylish sunglasses', 'sunglasses.png', 'link4.html', 1, 39.99, 30.00, 8.00, 47.99, 20.00, 35.00, 1),
(5, 'SKU005', 'Smartphone Case', 'Black', 'Small', 95, 'Durable case for smartphone protection', 'cover.png', 'link5.html', 2, 14.99, 10.00, 3.00, 17.99, 20.00, 12.00, 1),
(6, 'SKU006', 'Winter Jacket', 'Grey', 'Large', 98, 'Warm and stylish winter jacket', 'winterjacket.png', 'link6.html', 1, 89.99, 75.00, 12.00, 101.99, 15.00, 95.00, 1),
(7, 'SKU007', 'Bluetooth Headphones', 'White', 'Medium', 99, 'Wireless headphones with superior sound quality', 'headphone.png', 'link7.html', 2, 99.99, 80.00, 15.00, 114.99, 15.00, 95.00, 1),
(8, 'SKU008', 'Smartwatch', 'Black', 'Small', -4, 'Feature-rich smartwatch with fitness tracking', 'smartwatch.png', 'link8.html', 2, 129.99, 100.00, 15.00, 144.99, 20.00, 130.00, 1),
(9, 'SKU009', 'Office Desk', 'Brown', 'Large', 100, 'Spacious and sturdy office desk', 'officedesk.png', 'link9.html', 3, 199.99, 150.00, 25.00, 224.99, 20.00, 190.00, 1),
(10, 'SKU010', 'Sofa', 'Gray', 'Extra Large', 99, 'Comfortable sofa for your living room', 'sofa.png', 'link10.html', 3, 499.99, 400.00, 50.00, 549.99, 10.00, 480.00, 1),
(11, 'SKU011', 'Athletic Shoes', 'blue', 'Medium', 96, 'High-performance athletic shoes', 'athleticshoes.png', 'link11.html', 1, 79.99, 65.00, 12.00, 91.99, 20.00, 75.00, 1),
(12, 'SKU012', 'Leather Jacket', 'Brown', 'Large', 100, 'Stylish and durable leather jacket', 'leatherjacket.png', 'link12.html', 1, 149.99, 120.00, 20.00, 169.99, 15.00, 140.00, 1),
(13, 'SKU013', 'Wireless Speaker', 'Blue', 'Small', 99, 'Portable wireless speaker for on-the-go music', 'wireless_speaker.png', 'link13.html', 2, 29.99, 25.00, 5.00, 34.99, 15.00, 20.00, 1),
(14, 'SKU014', 'Gaming Laptop', 'Black', 'Medium', 98, 'High-performance gaming laptop with advanced features', 'gaminglaptop.png', 'link14.html', 2, 1299.99, 1100.00, 30.00, 1329.99, 15.00, 1200.00, 1),
(15, 'SKU015', 'Bookshelf', 'White', 'Large', 100, 'Sturdy bookshelf for organizing your books', 'bookself.png', 'link15.html', 3, 79.99, 60.00, 15.00, 94.99, 20.00, 70.00, 1),
(16, 'SKU016', 'Coffee Table', 'Brown', 'Medium', 99, 'Classic coffee table for your living room', 'coffeetable.png', 'link16.html', 3, 49.99, 40.00, 10.00, 59.99, 20.00, 35.00, 1),
(17, 'SKU017', 'Sneakers', 'black', 'Medium', 99, 'Casual and comfortable sneakers', 'sneaker.png', 'link17.html', 1, 49.99, 35.00, 8.00, 57.99, 20.00, 40.00, 1),
(18, 'SKU018', 'Flip Flops', 'Red', 'Small', 100, 'Lightweight flip flops for casual wear', 'flipflop.png', 'link18.html', 1, 19.99, 15.00, 5.00, 24.99, 25.00, 15.00, 1),
(19, 'SKU019', 'Smart Home Camera', 'White', 'Small', 100, 'Security camera for smart home monitoring', 'smarthomecamera.png', 'link19.html', 2, 89.99, 75.00, 10.00, 99.99, 10.00, 80.00, 1),
(20, 'SKU020', 'Bluetooth Headphones', 'Black', 'Large', 97, 'Wireless headphones with noise cancellation', 'headphoneblack.png', 'link20.html', 2, 129.99, 100.00, 15.00, 144.99, 10.00, 120.00, 1),
(21, 'SKU021', 'Office Desk', 'Brown', 'Large', 98, 'Spacious office desk for your workspace', 'officedesk2.png', 'link21.html', 3, 179.99, 150.00, 25.00, 204.99, 15.00, 160.00, 1),
(22, 'SKU022', 'Dining Chair', 'Gray', 'Medium', 100, 'Modern dining chair for your dining room', 'diningchair.png', 'link22.html', 3, 69.99, 50.00, 10.00, 79.99, 15.00, 60.00, 1),
(23, 'SKU023', 'Winter Jacket', 'Black', 'Large', 99, 'Warm and stylish winter jacket', 'winter_jacket_black.png', 'link23.html', 1, 129.99, 100.00, 20.00, 149.99, 15.00, 120.00, 1),
(27, 'SKU0031', 'HP mouse', 'Black', 'Normal', 100, 'new mouse', 'mouse.png', NULL, 1, 45.00, 54.00, 54.00, 454.00, 5.00, 54.00, 0),
(28, 'SKU0033', 'Keyboard', 'Black', 'Normal', 0, 'New lighing keyboard  ', 'keyboard.png', NULL, 1, 1.00, 1.00, 1.00, 1.00, 1.00, 1.00, 1),
(29, 'SKU035', 'T-shirt', 'Red', 'Medium', 96, 'Comfortable cotton t-shirt', 'tshirt.png', 'link1.html', 1, 19.99, 15.00, 5.00, 24.99, 20.00, 0.00, 1),
(30, 'SKU036', 'T-shirt', 'Blue', 'Large', 72, 'Soft cotton t-shirt', 'bluetshirt.png', 'link2.html', 1, 22.99, 18.00, 5.00, 27.99, 20.00, 0.00, 1),
(31, 'SKU037', 'Hoodie', 'Black', 'Small', 50, 'Cozy black hoodie', 'blackhoodie.png', 'link3.html', 2, 34.99, 28.00, 6.00, 40.99, 15.00, 0.00, 1),
(32, 'SKU038', 'Sweatpants', 'Gray', 'Large', 64, 'Comfortable gray sweatpants', 'graysweatpants.png', 'link4.html', 3, 29.99, 25.00, 4.00, 33.99, 13.00, 0.00, 1),
(33, 'SKU039', 'Jeans', 'Dark Blue', '32x34', 40, 'Durable dark blue jeans', 'jeans.png', 'link5.html', 3, 39.99, 30.00, 5.00, 44.99, 12.50, 0.00, 1),
(34, 'SKU040', 'Shorts', 'Green', 'Medium', 80, 'Lightweight green shorts', 'greenshorts.png', 'link6.html', 3, 17.99, 13.00, 4.00, 21.99, 22.00, 0.00, 1),
(35, 'SKU041', 'Shirt', 'White', 'Small', 55, 'Casual white shirt', 'whiteshirt.png', 'link7.html', 1, 24.99, 20.00, 4.00, 28.99, 16.00, 0.00, 1),
(36, 'SKU042', 'Socks', 'Assorted', 'One Size', 120, 'Assorted socks pack', 'socks.png', 'link8.html', 4, 9.99, 7.50, 2.00, 11.99, 20.00, 0.00, 1),
(37, 'SKU043', 'Jacket', 'Blue', 'Medium', 68, 'Stylish blue jacket', 'bluejacket.png', 'link9.html', 2, 59.99, 45.00, 7.00, 66.99, 15.00, 0.00, 1),
(38, 'SKU044', 'Sweater', 'Gray', 'Medium', 72, 'Soft gray sweater', 'graysweater.png', 'link10.html', 2, 49.99, 40.00, 7.00, 56.99, 14.00, 0.00, 1),
(39, 'SKU045', 'Dress', 'Black', 'Small', 42, 'Elegant black dress', 'blackdress.png', 'link11.html', 5, 79.99, 60.00, 10.00, 89.99, 12.50, 0.00, 1),
(40, 'SKU046', 'Skirt', 'Striped', 'Medium', 35, 'Casual striped skirt', 'stripedskirt.png', 'link12.html', 5, 29.99, 25.00, 5.00, 34.99, 16.67, 0.00, 1),
(41, 'SKU047', 'Blouse', 'Floral', 'Small', 60, 'Fashionable floral blouse', 'floralblouse.png', 'link13.html', 5, 34.99, 28.00, 6.00, 40.99, 17.15, 0.00, 1),
(42, 'SKU048', 'Sweatshirt', 'Red', 'Large', 50, 'Cozy red sweatshirt', 'redsweatshirt.png', 'link14.html', 2, 39.99, 32.00, 6.00, 45.99, 14.99, 0.00, 1),
(43, 'SKU049', 'Shoes', 'Black', '9', 20, 'Classic black shoes', 'blackshoes.png', 'link15.html', 6, 89.99, 70.00, 10.00, 99.99, 11.11, 0.00, 1),
(44, 'SKU050', 'Sandals', 'Brown', '8', 15, 'Stylish brown sandals', 'brownsandals.png', 'link16.html', 6, 49.99, 40.00, 6.00, 55.99, 16.00, 0.00, 1),
(45, 'SKU051', 'Hat', 'Blue', 'One Size', 40, 'Casual blue hat', 'bluehat.png', 'link17.html', 7, 14.99, 12.00, 2.00, 16.99, 13.34, 0.00, 1),
(46, 'SKU052', 'Belt', 'Black', 'Medium', 25, 'Classic black belt', 'blackbelt.png', 'link18.html', 8, 19.99, 16.00, 3.00, 22.99, 15.01, 0.00, 1),
(47, 'SKU053', 'Gloves', 'Gray', 'One Size', 55, 'Warm gray gloves', 'graygloves.png', 'link19.html', 9, 12.99, 10.00, 2.00, 14.99, 15.40, 0.00, 1),
(48, 'SKU035', 'T-shirt', 'Red', 'Medium', 96, 'Comfortable cotton t-shirt', 'tshirt.png', 'link1.html', 1, 19.99, 15.00, 5.00, 24.99, 20.00, 0.00, 1),
(49, 'SKU036', 'T-shirt', 'Blue', 'Large', 72, 'Soft cotton t-shirt', 'bluetshirt.png', 'link2.html', 1, 22.99, 18.00, 5.00, 27.99, 20.00, 0.00, 1),
(50, 'SKU037', 'Hoodie', 'Black', 'Small', 50, 'Cozy black hoodie', 'blackhoodie.png', 'link3.html', 2, 34.99, 28.00, 6.00, 40.99, 15.00, 0.00, 1),
(51, 'SKU038', 'Sweatpants', 'Gray', 'Large', 64, 'Comfortable gray sweatpants', 'graysweatpants.png', 'link4.html', 3, 29.99, 25.00, 4.00, 33.99, 13.00, 0.00, 1),
(52, 'SKU039', 'Jeans', 'Dark Blue', '32x34', 40, 'Durable dark blue jeans', 'jeans.png', 'link5.html', 3, 39.99, 30.00, 5.00, 44.99, 12.50, 0.00, 1),
(53, 'SKU040', 'Shorts', 'Green', 'Medium', 80, 'Lightweight green shorts', 'greenshorts.png', 'link6.html', 3, 17.99, 13.00, 4.00, 21.99, 22.00, 0.00, 1),
(54, 'SKU041', 'Shirt', 'White', 'Small', 55, 'Casual white shirt', 'whiteshirt.png', 'link7.html', 1, 24.99, 20.00, 4.00, 28.99, 16.00, 0.00, 1),
(55, 'SKU042', 'Socks', 'Assorted', 'One Size', 120, 'Assorted socks pack', 'socks.png', 'link8.html', 4, 9.99, 7.50, 2.00, 11.99, 20.00, 0.00, 1),
(56, 'SKU043', 'Jacket', 'Blue', 'Medium', 68, 'Stylish blue jacket', 'bluejacket.png', 'link9.html', 2, 59.99, 45.00, 7.00, 66.99, 15.00, 0.00, 1),
(57, 'SKU044', 'Sweater', 'Gray', 'Medium', 72, 'Soft gray sweater', 'graysweater.png', 'link10.html', 2, 49.99, 40.00, 7.00, 56.99, 14.00, 0.00, 1),
(92, 'SKU060', 'Scarf', 'Red', 'One Size', 50, 'Warm red scarf', 'redscarf.png', 'link26.html', 16, 19.99, 15.00, 4.00, 23.99, 20.01, 0.00, 1),
(93, 'SKU061', 'Leggings', 'Black', 'Medium', 70, 'Stretchy black leggings', 'blackleggings.png', 'link27.html', 3, 27.99, 22.00, 5.00, 32.99, 17.86, 0.00, 1),
(94, 'SKU062', 'Sweatshirt', 'Gray', 'Large', 55, 'Comfy gray sweatshirt', 'graysweatshirt.png', 'link28.html', 2, 34.99, 28.00, 6.00, 40.99, 17.15, 0.00, 1),
(95, 'SKU063', 'Beanie', 'Blue', 'One Size', 40, 'Cozy blue beanie', 'bluebeanie.png', 'link29.html', 7, 12.99, 10.00, 3.00, 15.99, 18.53, 0.00, 1),
(96, 'SKU064', 'Jacket', 'Black', 'Small', 60, 'Stylish black jacket', 'blackjacket.png', 'link30.html', 2, 49.99, 40.00, 7.00, 56.99, 14.99, 0.00, 1),
(97, 'SKU065', 'Backpack', 'Black', 'One Size', 35, 'Durable black backpack', 'blackbackpack.png', 'link31.html', 11, 49.99, 38.00, 8.00, 57.99, 16.01, 0.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ccc_brand`
--

CREATE TABLE `ccc_brand` (
  `id` int(11) NOT NULL,
  `mfr_id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ccc_brand`
--

INSERT INTO `ccc_brand` (`id`, `mfr_id`, `name`) VALUES
(1, 1, 'Siera'),
(2, 1, 'Signature'),
(3, 2, 'Acme'),
(4, 3, 'Lettner'),
(5, 3, 'Alisdair');

-- --------------------------------------------------------

--
-- Table structure for table `ccc_category`
--

CREATE TABLE `ccc_category` (
  `cat_id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ccc_category`
--

INSERT INTO `ccc_category` (`cat_id`, `name`) VALUES
(1, 'Outdoor'),
(2, 'Decor'),
(3, 'Bar & Game Room'),
(4, 'Bedroom'),
(5, 'Dining & Kitchen'),
(6, 'Lighting'),
(7, 'Living Room'),
(8, 'Mattresses'),
(9, 'Office');

-- --------------------------------------------------------

--
-- Table structure for table `ccc_mfr`
--

CREATE TABLE `ccc_mfr` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ccc_mfr`
--

INSERT INTO `ccc_mfr` (`id`, `name`) VALUES
(1, 'Ashley'),
(2, 'ACME'),
(3, 'ART');

-- --------------------------------------------------------

--
-- Table structure for table `ccc_product`
--

CREATE TABLE `ccc_product` (
  `product_id` int(50) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `manufacturer_cost` int(50) NOT NULL,
  `shipping_cost` int(50) NOT NULL,
  `total_cost` int(50) NOT NULL,
  `price` int(50) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ccc_product`
--

INSERT INTO `ccc_product` (`product_id`, `product_name`, `sku`, `product_type`, `category_name`, `manufacturer_cost`, `shipping_cost`, `total_cost`, `price`, `status`, `created_at`, `updated_at`, `cat_id`) VALUES
(1, 'Camera', 'DSHJ2345', 'Bundle', 'Office', 5000, 200, 5200, 5500, 'Enabled', '2024-01-01', '2024-01-07', 9),
(3, 'AC ', 'DGHU7383', 'Simple', 'Bar & Game Room', 50000, 1000, 51000, 53000, 'Enabled', '2024-01-01', '2024-01-23', 3),
(23, ' Mirror', 'JHDS3432', 'Bundle', 'Decor', 300, 100, 700, 1000, 'Enabled', '2024-01-01', '2024-01-24', 2),
(30, 'AC', 'UDHF3672', 'Bundle', 'Bar & Game Room', 135, 45, 160, 250, 'Enabled', '2024-01-01', '2024-01-24', 3),
(33, ' Curtains', 'KJDK7373', 'Bundle', 'Decor', 4000, 500, 4500, 5000, 'Enabled', '2023-12-31', '2024-01-24', 2),
(34, ' Clock', 'JSDU7822', 'Simple', 'Mattresses', 10000, 500, 10500, 12000, 'Disabled', '2024-01-01', '2024-01-25', 8),
(36, ' Desktop', 'JSKH3342', 'Simple', 'Living Room', 30000, 500, 30500, 33000, 'Enabled', '2024-01-14', '2024-01-27', 7),
(37, 'Table', 'JHDU8782', 'Simple', 'Dining & Kitchen', 10000, 1000, 11000, 12000, 'Enabled', '2023-12-31', '2024-01-25', 5),
(39, 'Chair', 'JHDU8782', 'Bundle', 'Dining & Kitchen', 10000, 1000, 11000, 12000, 'Enabled', '2023-12-31', '2024-01-25', 5),
(40, 'Dishes', 'KJSA4222', 'Simple', 'Dining & Kitchen', 3000, 300, 3300, 3500, 'Disbaled', '2023-12-31', '2024-01-26', 5),
(41, 'Lights', 'HJHJ2242', 'Bundle', 'Decor', 10000, 1000, 11000, 13000, 'Enabled', '2024-01-15', '2024-01-30', 2),
(45, 'Led', 'SSHO9892', 'Simple', 'Living Room', 25000, 500, 25500, 27000, 'Disabled', '2024-01-08', '2024-01-29', 7),
(49, 'Cobat', 'HJSI8383', 'Simple', 'Bedroom', 14000, 1000, 15000, 16000, 'Enabled', '2023-12-04', '2024-01-28', 4),
(50, 'Router', 'HDSH7384', 'Bundle', 'Office', 5000, 200, 5200, 6000, 'Enabled', '2024-01-11', '2024-01-28', 9),
(53, 'Sofa', 'JDHO3392', 'Bundle', 'Living Room', 15000, 1000, 16000, 17000, 'Enabled', '2024-01-28', '2024-02-05', 7);

-- --------------------------------------------------------

--
-- Table structure for table `ccc_temp_converter`
--

CREATE TABLE `ccc_temp_converter` (
  `id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `temprature` float NOT NULL,
  `unit` varchar(255) NOT NULL,
  `convert_unit` varchar(255) NOT NULL,
  `result` float NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ccc_temp_converter`
--

INSERT INTO `ccc_temp_converter` (`id`, `session_id`, `user_name`, `temprature`, `unit`, `convert_unit`, `result`, `created_at`) VALUES
(2, 1, 'Mayank', 2, 'Celcious', 'Fahrenhit', 35.6, '2024-03-06 14:41:42'),
(3, 1, 'Mayank', 22.5, 'Celcious', 'Fahrenhit', 72.5, '2024-03-06 14:49:12'),
(4, 1, 'Mayank', 22.5, 'Celcious', 'Fahrenhit', 72.5, '2024-03-06 14:53:12'),
(5, 1, 'Ravi', 36, 'Celcious', 'Fahrenhit', 96.8, '2024-03-06 16:13:16'),
(6, 1, 'new', 45, 'Fahrenhit', 'Kelvin', 280.372, '2024-03-06 16:24:36'),
(7, 1, 'Parth', 45, 'Fahrenhit', 'Fahrenhit', 45, '2024-03-06 16:28:24'),
(8, 1, 'Dev', 78, 'Celcious', 'Kelvin', 351.15, '2024-03-06 16:28:43'),
(9, 1, 'Deep', 45, 'Fahrenhit', 'Celcious', 7.22222, '2024-03-06 16:31:07'),
(10, 1, 'Yogi', 1000, 'Kelvin', 'Celcious', 726.85, '2024-03-06 16:31:34'),
(11, 1, 'Arun', 122, 'Celcious', 'Fahrenhit', 251.6, '2024-03-06 16:32:19'),
(12, 1, 'Akshay', 778, 'Fahrenhit', 'Kelvin', 687.594, '2024-03-06 16:33:52'),
(13, 1, 'Sumit', 36, 'Celcious', 'Fahrenhit', 96.8, '2024-03-06 16:43:34'),
(14, 1, 'Azeem', 78, 'Kelvin', 'Fahrenhit', -319.27, '2024-03-06 17:02:29'),
(19, 0, 'Mayank', 1, 'Celcious', 'Celcious', 1, '2024-03-11 13:43:10');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_email` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `billing_address` text DEFAULT NULL,
  `billing_city` varchar(255) DEFAULT NULL,
  `billing_region` int(11) DEFAULT NULL,
  `billing_country` int(11) DEFAULT NULL,
  `billing_phone` varchar(255) DEFAULT NULL,
  `shipping_address` text DEFAULT NULL,
  `shipping_city` varchar(255) DEFAULT NULL,
  `shipping_region` int(11) DEFAULT NULL,
  `shipping_country` int(11) DEFAULT NULL,
  `shipping_phone` varchar(255) DEFAULT NULL,
  `default` int(11) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_email`, `first_name`, `last_name`, `billing_address`, `billing_city`, `billing_region`, `billing_country`, `billing_phone`, `shipping_address`, `shipping_city`, `shipping_region`, `shipping_country`, `shipping_phone`, `default`, `password`) VALUES
(1, 'mk@gmail.com', 'mayank', 'saini', 'Ahmedabad', NULL, NULL, NULL, NULL, 'Ahmedabad', NULL, NULL, NULL, NULL, NULL, '1234'),
(2, 'dsfjkk@gmail.com', 'my', 'name', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1234'),
(3, 'dsfjkk@gmail.com', 'my', 'name', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1234'),
(4, 'new@gmail.com', 'first', 'last', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1234'),
(5, 'one@gmail.com', 'first', 'last', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1234'),
(7, 'new1@gmail.com', 'new', 'new', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1234'),
(8, 'new12@gmai.com', 'hjk', 'iu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1234'),
(9, 'ankit@gmail.com', 'ankit', 'singh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1234'),
(10, 'baldev@gmail.com', 'Baldev', 'Tiwari', 'Surat', NULL, NULL, NULL, NULL, 'Ahmedabad', NULL, NULL, NULL, NULL, NULL, '1234');

-- --------------------------------------------------------

--
-- Table structure for table `customer_address`
--

CREATE TABLE `customer_address` (
  `address_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `billing_address` text DEFAULT NULL,
  `billing_city` varchar(255) DEFAULT NULL,
  `billing_region` int(11) DEFAULT NULL,
  `billing_country` int(11) DEFAULT NULL,
  `billing_phone` varchar(255) DEFAULT NULL,
  `shipping_address` text DEFAULT NULL,
  `shipping_city` varchar(255) DEFAULT NULL,
  `shipping_region` int(11) DEFAULT NULL,
  `shipping_country` int(11) DEFAULT NULL,
  `shipping_phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_address`
--

INSERT INTO `customer_address` (`address_id`, `customer_id`, `billing_address`, `billing_city`, `billing_region`, `billing_country`, `billing_phone`, `shipping_address`, `shipping_city`, `shipping_region`, `shipping_country`, `shipping_phone`) VALUES
(1, 1, '7 ', 'Ahmedabad', 3, 10, '1234567890', '7 ', 'Ahmedabad', 3, 10, '1234567890'),
(6, 4, '24, Maninagar', 'Ahmedabad', 3, 10, '4589779864', '24, Maninagar', 'Ahmedabad', 3, 10, '4589779864');

-- --------------------------------------------------------

--
-- Table structure for table `import`
--

CREATE TABLE `import` (
  `import_id` int(11) NOT NULL,
  `data` varchar(320) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `import`
--

INSERT INTO `import` (`import_id`, `data`, `status`) VALUES
(1, '{\"sku\":\"SKU060\",\"name\":\"Scarf\",\"color\":\"Red\",\"size\":\"One Size\",\"inventory\":\"50\",\"description\":\"Warm red scarf\",\"image_link\":\"redscarf.png\",\"link\":\"link26.html\",\"category_id\":\"16\",\"price\":\"19.99\",\"mfr_cost\":\"15.00\",\"shipping_cost\":\"4.00\",\"total_cost\":\"23.99\",\"margin_percentage\":\"20.01\",\"status\":\"1\"}', 1),
(2, '{\"sku\":\"SKU061\",\"name\":\"Leggings\",\"color\":\"Black\",\"size\":\"Medium\",\"inventory\":\"70\",\"description\":\"Stretchy black leggings\",\"image_link\":\"blackleggings.png\",\"link\":\"link27.html\",\"category_id\":\"3\",\"price\":\"27.99\",\"mfr_cost\":\"22.00\",\"shipping_cost\":\"5.00\",\"total_cost\":\"32.99\",\"margin_percentage\":\"17.86\",\"status\":\"1\"}', 1),
(3, '{\"sku\":\"SKU062\",\"name\":\"Sweatshirt\",\"color\":\"Gray\",\"size\":\"Large\",\"inventory\":\"55\",\"description\":\"Comfy gray sweatshirt\",\"image_link\":\"graysweatshirt.png\",\"link\":\"link28.html\",\"category_id\":\"2\",\"price\":\"34.99\",\"mfr_cost\":\"28.00\",\"shipping_cost\":\"6.00\",\"total_cost\":\"40.99\",\"margin_percentage\":\"17.15\",\"status\":\"1\"}', 1),
(4, '{\"sku\":\"SKU063\",\"name\":\"Beanie\",\"color\":\"Blue\",\"size\":\"One Size\",\"inventory\":\"40\",\"description\":\"Cozy blue beanie\",\"image_link\":\"bluebeanie.png\",\"link\":\"link29.html\",\"category_id\":\"7\",\"price\":\"12.99\",\"mfr_cost\":\"10.00\",\"shipping_cost\":\"3.00\",\"total_cost\":\"15.99\",\"margin_percentage\":\"18.53\",\"status\":\"1\"}', 1),
(5, '{\"sku\":\"SKU064\",\"name\":\"Jacket\",\"color\":\"Black\",\"size\":\"Small\",\"inventory\":\"60\",\"description\":\"Stylish black jacket\",\"image_link\":\"blackjacket.png\",\"link\":\"link30.html\",\"category_id\":\"2\",\"price\":\"49.99\",\"mfr_cost\":\"40.00\",\"shipping_cost\":\"7.00\",\"total_cost\":\"56.99\",\"margin_percentage\":\"14.99\",\"status\":\"1\"}', 1),
(6, '{\"sku\":\"SKU065\",\"name\":\"Backpack\",\"color\":\"Black\",\"size\":\"One Size\",\"inventory\":\"35\",\"description\":\"Durable black backpack\",\"image_link\":\"blackbackpack.png\",\"link\":\"link31.html\",\"category_id\":\"11\",\"price\":\"49.99\",\"mfr_cost\":\"38.00\",\"shipping_cost\":\"8.00\",\"total_cost\":\"57.99\",\"margin_percentage\":\"16.01\",\"status\":\"1\"}', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sales_order`
--

CREATE TABLE `sales_order` (
  `order_id` int(11) NOT NULL,
  `order_number` varchar(255) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `tax_percent` decimal(5,2) DEFAULT NULL,
  `grand_total` decimal(12,2) DEFAULT NULL,
  `payment_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_order`
--

INSERT INTO `sales_order` (`order_id`, `order_number`, `date`, `tax_percent`, `grand_total`, `payment_id`, `shipping_id`, `status`) VALUES
(1, 'ORD1', '2024-03-28', 8.00, 290.25, 1, 1, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order_customer`
--

CREATE TABLE `sales_order_customer` (
  `order_customer_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `billing_address` text DEFAULT NULL,
  `billing_city` varchar(255) DEFAULT NULL,
  `billing_region` int(11) DEFAULT NULL,
  `billing_country` int(11) DEFAULT NULL,
  `billing_phone` varchar(255) DEFAULT NULL,
  `shipping_address` text DEFAULT NULL,
  `shipping_city` varchar(255) DEFAULT NULL,
  `shipping_region` int(11) DEFAULT NULL,
  `shipping_country` int(11) DEFAULT NULL,
  `shipping_phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_order_customer`
--

INSERT INTO `sales_order_customer` (`order_customer_id`, `order_id`, `customer_id`, `email`, `billing_address`, `billing_city`, `billing_region`, `billing_country`, `billing_phone`, `shipping_address`, `shipping_city`, `shipping_region`, `shipping_country`, `shipping_phone`) VALUES
(1, 1, 1, 'mk@gmail.com', '7 ', 'Ahmedabad', 3, 10, '1234567890', '7 ', 'Ahmedabad', 3, 10, '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order_item`
--

CREATE TABLE `sales_order_item` (
  `item_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `price` decimal(12,2) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `row_total` decimal(12,2) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_color` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_order_item`
--

INSERT INTO `sales_order_item` (`item_id`, `order_id`, `product_id`, `price`, `qty`, `row_total`, `product_name`, `product_color`) VALUES
(1, 1, 8, 129.99, 1, 129.99, 'Smartwatch', 'Black'),
(2, 1, 20, 129.99, 1, 129.99, 'Bluetooth Headphones', 'Black');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order_payment_method`
--

CREATE TABLE `sales_order_payment_method` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `card_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_order_payment_method`
--

INSERT INTO `sales_order_payment_method` (`payment_id`, `order_id`, `payment_method`, `card_number`) VALUES
(1, 1, 'credit_card', '4556-4489-8988-7897');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order_shipping_method`
--

CREATE TABLE `sales_order_shipping_method` (
  `shipping_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `shipping_method` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_order_shipping_method`
--

INSERT INTO `sales_order_shipping_method` (`shipping_id`, `order_id`, `shipping_method`) VALUES
(1, 1, 'sameday');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order_status_history`
--

CREATE TABLE `sales_order_status_history` (
  `history_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `from_status` varchar(255) NOT NULL,
  `to_status` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `action_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_order_status_history`
--

INSERT INTO `sales_order_status_history` (`history_id`, `order_id`, `from_status`, `to_status`, `date`, `action_by`) VALUES
(1, 1, '', 'pending', '2024-03-28', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sales_quote`
--

CREATE TABLE `sales_quote` (
  `quote_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `tax_percent` decimal(5,2) DEFAULT NULL,
  `grand_total` decimal(12,2) DEFAULT NULL,
  `order_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_quote`
--

INSERT INTO `sales_quote` (`quote_id`, `customer_id`, `tax_percent`, `grand_total`, `order_id`, `payment_id`, `shipping_id`) VALUES
(3, 1, 8.00, 290.25, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sales_quote_customer`
--

CREATE TABLE `sales_quote_customer` (
  `quote_customer_id` int(11) NOT NULL,
  `quote_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `billing_address` text DEFAULT NULL,
  `billing_city` varchar(255) DEFAULT NULL,
  `billing_region` int(11) DEFAULT NULL,
  `billing_country` int(11) DEFAULT NULL,
  `billing_phone` varchar(255) DEFAULT NULL,
  `shipping_address` text DEFAULT NULL,
  `shipping_city` varchar(255) DEFAULT NULL,
  `shipping_region` int(11) DEFAULT NULL,
  `shipping_country` int(11) DEFAULT NULL,
  `shipping_phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_quote_customer`
--

INSERT INTO `sales_quote_customer` (`quote_customer_id`, `quote_id`, `customer_id`, `email`, `billing_address`, `billing_city`, `billing_region`, `billing_country`, `billing_phone`, `shipping_address`, `shipping_city`, `shipping_region`, `shipping_country`, `shipping_phone`) VALUES
(1, 3, 1, 'mk@gmail.com', '7 ', 'Ahmedabad', 3, 10, '1234567890', '7 ', 'Ahmedabad', 3, 10, '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `sales_quote_item`
--

CREATE TABLE `sales_quote_item` (
  `item_id` int(11) NOT NULL,
  `quote_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `price` decimal(12,2) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `row_total` decimal(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_quote_item`
--

INSERT INTO `sales_quote_item` (`item_id`, `quote_id`, `product_id`, `price`, `qty`, `row_total`) VALUES
(1, 1, 7, 99.99, 1, 99.99),
(2, 1, 14, 1299.99, 2, 2599.98),
(3, 3, 8, 129.99, 1, 129.99),
(4, 3, 20, 129.99, 1, 129.99);

-- --------------------------------------------------------

--
-- Table structure for table `sales_quote_payment_method`
--

CREATE TABLE `sales_quote_payment_method` (
  `payment_id` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `payment_method` varchar(11) NOT NULL,
  `card_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_quote_payment_method`
--

INSERT INTO `sales_quote_payment_method` (`payment_id`, `quote_id`, `payment_method`, `card_number`) VALUES
(1, 3, 'credit_card', '4556-4489-8988-7897');

-- --------------------------------------------------------

--
-- Table structure for table `sales_quote_shipping_method`
--

CREATE TABLE `sales_quote_shipping_method` (
  `shipping_id` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `shipping_method` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_quote_shipping_method`
--

INSERT INTO `sales_quote_shipping_method` (`shipping_id`, `quote_id`, `shipping_method`) VALUES
(1, 3, 'sameday');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `catalog_category`
--
ALTER TABLE `catalog_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `catalog_product`
--
ALTER TABLE `catalog_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `ccc_brand`
--
ALTER TABLE `ccc_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ccc_category`
--
ALTER TABLE `ccc_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `ccc_mfr`
--
ALTER TABLE `ccc_mfr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ccc_product`
--
ALTER TABLE `ccc_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `ccc_temp_converter`
--
ALTER TABLE `ccc_temp_converter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `import`
--
ALTER TABLE `import`
  ADD PRIMARY KEY (`import_id`);

--
-- Indexes for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `sales_order_customer`
--
ALTER TABLE `sales_order_customer`
  ADD PRIMARY KEY (`order_customer_id`);

--
-- Indexes for table `sales_order_item`
--
ALTER TABLE `sales_order_item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `sales_order_payment_method`
--
ALTER TABLE `sales_order_payment_method`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `sales_order_shipping_method`
--
ALTER TABLE `sales_order_shipping_method`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `sales_order_status_history`
--
ALTER TABLE `sales_order_status_history`
  ADD PRIMARY KEY (`history_id`);

--
-- Indexes for table `sales_quote`
--
ALTER TABLE `sales_quote`
  ADD PRIMARY KEY (`quote_id`);

--
-- Indexes for table `sales_quote_customer`
--
ALTER TABLE `sales_quote_customer`
  ADD PRIMARY KEY (`quote_customer_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `sales_quote_item`
--
ALTER TABLE `sales_quote_item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `sales_quote_payment_method`
--
ALTER TABLE `sales_quote_payment_method`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `sales_quote_shipping_method`
--
ALTER TABLE `sales_quote_shipping_method`
  ADD PRIMARY KEY (`shipping_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `catalog_category`
--
ALTER TABLE `catalog_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `catalog_product`
--
ALTER TABLE `catalog_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `ccc_brand`
--
ALTER TABLE `ccc_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ccc_category`
--
ALTER TABLE `ccc_category`
  MODIFY `cat_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ccc_mfr`
--
ALTER TABLE `ccc_mfr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ccc_product`
--
ALTER TABLE `ccc_product`
  MODIFY `product_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `ccc_temp_converter`
--
ALTER TABLE `ccc_temp_converter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer_address`
--
ALTER TABLE `customer_address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `import`
--
ALTER TABLE `import`
  MODIFY `import_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sales_order`
--
ALTER TABLE `sales_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sales_order_customer`
--
ALTER TABLE `sales_order_customer`
  MODIFY `order_customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sales_order_item`
--
ALTER TABLE `sales_order_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sales_order_payment_method`
--
ALTER TABLE `sales_order_payment_method`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sales_order_shipping_method`
--
ALTER TABLE `sales_order_shipping_method`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sales_order_status_history`
--
ALTER TABLE `sales_order_status_history`
  MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sales_quote`
--
ALTER TABLE `sales_quote`
  MODIFY `quote_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sales_quote_customer`
--
ALTER TABLE `sales_quote_customer`
  MODIFY `quote_customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sales_quote_item`
--
ALTER TABLE `sales_quote_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sales_quote_payment_method`
--
ALTER TABLE `sales_quote_payment_method`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sales_quote_shipping_method`
--
ALTER TABLE `sales_quote_shipping_method`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sales_quote_customer`
--
ALTER TABLE `sales_quote_customer`
  ADD CONSTRAINT `sales_quote_customer_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
