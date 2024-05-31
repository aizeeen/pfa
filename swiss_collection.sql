-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2024 at 03:43 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swiss_collection`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `variation_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Extra Monster'),
(2, 'Classic Monster'),
(3, 'Ultra Monster'),
(6, 'Java Monster'),
(7, 'Juice Monster'),
(8, 'Rehab Monster'),
(9, 'HYDRO Monster'),
(10, 'Pack Monster');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `pack` varchar(255) DEFAULT NULL,
  `listeflavour` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL,
  `address` text DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `phone`, `pack`, `listeflavour`, `quantity`, `date_time`, `address`, `message`) VALUES
(0, 'nourane', 'nouraneaaab@gmail.com', '', 'select a pack', 'select product', 0, '0000-00-00 00:00:00', '', ''),
(0, 'nana', 'nouraneaaab@gmail.com', '', 'PACK ORANGE MONSTER', 'select product', 3, '2024-06-07 16:17:00', 'manouba', 'hhh'),
(0, '', '', '', 'select a pack', 'select product', 0, '0000-00-00 00:00:00', '', ''),
(0, '', '', '', 'select a pack', 'select product', 0, '0000-00-00 00:00:00', '', ''),
(0, 'Leila', 'leilahaj1@gmail.com', '', 'PACK ULTRA VIOLET MONSTER', 'The Original Monster', 2, '2024-05-07 19:24:00', 'Beja', ''),
(0, 'Aziz', 'aziz4@gmail.com', '', 'PACK PARADISE MONSTER', 'The Peach Monster', 1, '2024-03-14 16:13:00', 'Djerba', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `delivered_to` varchar(150) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `deliver_address` varchar(255) NOT NULL,
  `pay_method` varchar(50) NOT NULL,
  `pay_status` int(11) NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT 0,
  `order_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `delivered_to`, `phone_no`, `deliver_address`, `pay_method`, `pay_status`, `order_status`, `order_date`) VALUES
(1, 2, 'Mohamed', '54022346', 'Manouba', 'Cash', 1, 1, '2024-04-18'),
(3, 2, 'Salwa', '28009832', 'Beja', 'Cash', 0, 1, '2024-04-21'),
(4, 2, 'Nourane', '27004833', 'Maroc', 'Cash', 0, 0, '2024-04-22'),
(7, 2, 'Iheeb', '27004833', 'Nabeul', 'Cash', 0, 0, '2024-04-23');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `variation_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`detail_id`, `order_id`, `variation_id`, `quantity`, `price`) VALUES
(1, 1, 1, 1, 35),
(3, 3, 3, 1, 14),
(4, 4, 10, 1, 14),
(5, 7, 9, 1, 14);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `uploaded_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_desc`, `product_image`, `price`, `category_id`, `uploaded_date`) VALUES
(1, 'The Original Monster', 'Tear Into A Can Of One Of The Meanest Energy Drinks On The Planet, Monster OG. Monster Energy OG Is A Smooth, Refreshing Blend Of Sweet And Salty Exotic Citrus Flavors With A Hint Of Pure Adrenaline Packing 160mg Of Caffeine. Unleash The Beast With Monster OG!', './uploads/f6dadd8b-12d1-4318-9167-1b83e9caa9c9.png', 14, 2, '2024-04-13'),
(2, 'The Original LO-CARB Monster', 'Monster Energy Lo-Carb Packs A Powerful Punch And Has A Smooth, Easy Drinking Flavor, But Without Glucose. Get The Big Bad Monster Buzz You Know And Love, But With A Sweet & Salty Citrus Twist With A Fraction Of The Carbohydrates And Only 30 Calories Per Can And With 140mg Of Caffeine.', './uploads/monsteroriginalzar9a.png', 14, 2, '2024-04-13'),
(3, 'The Reserve Kiwi Strawberry Monster', 'Monster Reserve Kiwi-Strawberry Is Our Take On A Classic Fruity Mixture That Everyone Has Come To Know And Love. When Sweet Meets Citrus This Delicious Fruity Blend Comes To Life. Energy Drinkers Who Are Looking For Flavor But Still Want That Monster Energy Punch; Look No Further.', './uploads/monsteroriginalhamra.png', 14, 2, '2024-04-13'),
(4, 'The White Pineapple Monster', 'Monster Reserve White Pineapple Is The Ideal Combo Of The Right Ingredients To Deliver The Big Bad Buzz That Only Monster Can. Monster Reserve White Pineapple Gives You An Authentic Pineapple Taste Combined With The Same Powerful Monster Energy Blend.', './uploads/monsteroriginalsafra.png', 14, 2, '2024-04-13'),
(5, 'The Watermelon Monster', 'Monster Reserve Watermelon Is The Ideal Combo Of The Right Ingredients In The Right Proportion To Deliver The Big Bad Buzz That Only Monster Can. Monster Reserve Watermelon Gives You An Authentic Watermelon Taste Combined With The Same Powerful Monster Energy Blend.', './uploads/monsteroriginalhamra2.png', 14, 1, '2024-04-13'),
(6, 'The Nitro Cosmic Peach Monster', 'Monster Nitro Cosmic Peach Is Infused With Nitrous Oxide Creating A Smooth, Creamy Texture With A Bold Delicious Taste Of Peach Balanced With Undertones Of Sweet And Crisp Pear. The Universe Is Saying It’s Unlike Any Energy Drink You Have Ever Had Before And Guaranteed To Blow Your Mind On Cosmic Level.', './uploads/monsteroriginalorange.png', 14, 1, '2024-04-13'),
(7, 'The Super-Premium Monster', 'Monster Energy Import Is Our Super-Premium Resealable Monster Originally Imported From Amsterdam. Now Made In The USA , Import Has The Same Can, Same Great Taste, Same Winning Formula And Packs A Punch With 180mg Of Caffeine To Deliver The Big, Bad Buzz.', './uploads/monsteroriginaldragon.png', 14, 1, '2024-04-14'),
(8, 'The Monster Assault', 'Monster Assault Is A Revolution In A Can. Refreshing; Like A Soft Drink But Loaded With The Same Energy Blend That Makes Monster The Meanest Energy Drink On The Planet. Assault Packs A Punch With 160mg Of Caffeine And Has A Smooth, Easy Bourbon-Cola Flavor.', './uploads/monstermillitaire.png', 14, 1, '2024-04-14'),
(9, 'The White Ultra Monster', 'The Light, Refreshing Citrus Flavor Of Zero Ultra Has Broken The Rules Of Flavor. 10 Calories, Zero Sugar, And A Full Load Of Our Monster Energy Blend To Keep The Good Times Rolling.', './uploads/white.png', 14, 1, '2024-04-14'),
(10, 'The Peach Monster', 'Zro Sugar Ultra Peachy Keen Has Just 10 Calories And A Full Load Of Our Monster Energy Blend. The Juicy Peach Flavor Will Send You Back To The Summer Of Love.', './uploads/peachmonster.png', 14, 1, '2024-04-14'),
(11, 'The Strawberry Dreams', 'Take Just One Sip And You\'ll Be Crazy For Ultra Strawberry Dreams. Wonderfully Sweet, While Slightly Tart, This Easy-Drinking Ultra Tastes Like A Dream. Packed With The Monster Energy Blend You Love, With Just 10 Calories And Zero Sugar.', './uploads/38df0f7d-c4bf-4d19-ae38-73dbd1f07b6f.png', 14, 1, '2024-04-14'),
(12, 'The Ultra Mango Monster', 'Ultra Fiesta Has A Juicy Mango Flavor, Zero Sugar, And Is Finished-Off With A Full Load Of Our Monster Energy Blend.', './uploads/ultamango.png', 14, 3, '2024-04-14'),
(13, 'The Ultra Paradise Monster', 'Ultra Paradise Is Wherever You Can Find It. Delivering Island Flavors With Kiwi, Lime, And A Hint Of Cucumber, With Just 10 Calories And Zero Suga.', './uploads/ultraparadise.png', 14, 3, '2024-04-14'),
(14, 'The Ultra Sunrise Monster\r\n', 'Ultra Sunrise\'s Zero Sugar Orange Blend Is Great Morning Or Night. Zero Sugar, 10 Calories, And With A Light, Crisp, And Refreshing Flavor All Its Own.', './uploads/ultrabunribe.png', 14, 3, '2024-04-14'),
(15, 'The Ultra Gold Monster\r\n', 'Ultra Gold Has The Heavenly Fresh Flavor Of A Perfectly Ripened Golden Pineapple. Zero Sugar, 10 Calories, Lighter Tasting, And With Our Monster Energy Blend.', './uploads/ultragold.png', 14, 3, '2024-04-14'),
(16, 'The Ultra Watermelon Monster\r\n', 'Ultra Watermelon Brings You Summer All Year Long. Zero Sugar, Bold Watermelon Flavor, 10 Calories And The Monster Energy Blend.', './uploads/ultrawatermelon.png', 14, 3, '2024-04-14'),
(17, 'The Mean Bean Java Monster\r\n', 'It\'s Time To Break Your Coffee Routine With Java Monster. Mean Bean Is Coffee + Cream In An Indulgent Vanilla Flavor. Java Monster… Premium Coffee And Cream Brewed Up With Killer Flavor, Supercharged With Monster Energy Blend.', './uploads/javamonsterlowla.png', 14, 6, '2024-04-14'),
(18, 'The Coffe Latte Monster\r\n\r\n', 'Java Monster Café Latte Is Coffee Forward With The Right Amount Of Cream And Sugar, Supercharged With The Monster Energy Blend.', './uploads/cafelattemonster.png', 14, 6, '2024-04-14'),
(19, 'The Irish Blend Monster\r\n\r\n', 'There\'s Nothing Better Than Starting Your Day With An Irish Coffee. Java Monster Irish Blend Is Premium Coffee + Cream Supercharged With The Monster Energy Blend.', './uploads/irishmonster.png', 14, 6, '2024-04-14'),
(20, 'The Java LOCA MOCA Monster\r\n\r\n', 'It\'s Time To Break Your Coffee Routine With Java Monster. Loca Moca Is Coffee + Cream In An Indulgent Mocha Chocolate Flavor. Java Monster… Premium Coffee And Cream Brewed Up With Killer Flavor, Supercharged With Monster Energy Blend.', './uploads/locamoca.png', 14, 6, '2024-04-14'),
(21, 'The Mango Loco Juice Monster\r\n\r\n', 'A Heavenly Blend Of Carbonated Exotic Juices, Mango Loco Has That Crazy Good Taste With That Monster Magic To Keep The Party Going For Days.', './uploads/d9229f7a-7d32-4ad9-8ee8-df40b58cde7b.png', 14, 7, '2024-04-14'),
(22, 'The Tropical Juice Monster\r\n\r\n', 'Born In \'05, This Carbonated Orange-Citrus Juice Changed The Game. Reborn In 2021 To Lighten The Flavor And Adjust The Blend, Khaos Became Khaotic With An Upgraded Paint Job By Legendary Street Artist And Longtime Monster Energy.', './uploads/tropicalmonster.png', 14, 7, '2024-04-14'),
(23, 'The Lemonade Juice Monster\r\n\r\n', 'Inspired By The Land Down Under And Powered By Our World-Famous Monster Energy Blend, Aussie Style Lemonade Is A Carbonated Exotic Twist On Lemonade. Tart Yet Sweet, With A Burst Of Fresh Citrus Flavor.', './uploads/lemonadejuice.png', 14, 7, '2024-04-14'),
(24, 'The Pipeline Juice Monster\r\n', 'Like The Banzai Pipeline Of Oahu, Pipeline Punch Was Destined To Become A Legend. The Perfect Carbonated Blend Of Passion Fruit, Orange, Guava, And Our Monster Energy Blend.', './uploads/pipelinejuice.png', 14, 7, '2024-04-14'),
(25, 'The Papillon Juice Monster\r\n', 'Inspired By The Theory Of The Butterfly Effect, Juice Monster Papillon Was Named For The Humble Butterfly. Refreshingly Carbonated With A Light, Subtle Flavor Of Peach And Nectarine, And A Full Load Of Our Monster Energy Blend.', './uploads/papilonjuice.png', 14, 7, '2024-04-14'),
(26, 'The Rehab Wild Berry Monster\r\n', 'Wild Berry Tea Packed With Electrolytes, Vitamins, And Botanicals That Deliver On Advanced Hydration Helping You Reduce Fatigue And Increase Concentration. Rehab Monster Wild Berry Tea Is Non-Carbonated, With Only 25 Calories Per Can.', './uploads/rehab1rose.png', 14, 8, '2024-04-14'),
(27, 'The Rehab Monster Tea & Lemonade\r\n', 'Brewed Tea And Lemonade Packed With Electrolytes, Vitamins, And Botanicals That Deliver On Advanced Hydration Helping You Reduce Fatigue And Increase Concentration. Rehab Monster Tea + Lemonade Is Non-Carbonated, With Only 25 Calories Per Can.', './uploads/rehabsafra.png', 14, 8, '2024-04-14'),
(28, 'The Rehab Watermelon Monster\r\n', 'Brewed Tea And Lemonade Packed With Electrolytes, Vitamins, And Botanicals That Deliver On Advanced Hydration Helping You Reduce Fatigue And Increase Concentration. Rehab Monster Tea + Lemonade Is Non-Carbonated.', './uploads/rehabwatermelon.png', 14, 8, '2024-04-14'),
(29, 'The Rehab Strawberry Monster', 'Strawberry Lemonade Packed With Electrolytes, Vitamins, And Botanicals That Deliver On Advanced Hydration Helping You Reduce Fatigue And Increase Concentration. Rehab Monster Strawberry Lemonade Is Non-Carbonated, With Only 25 Calories Per Can.', './uploads/rehabhamra.png', 14, 8, '2024-04-14'),
(30, 'The Rehab Orange Monster', 'Orange Rehab Packed With Electrolytes, Vitamins, And Botanicals That Deliver On Advanced Hydration Helping You Reduce Fatigue And Increase Concentration. Rehab Monster Orange Is Non-Carbonated, With Only 25 Calories Per Can.', './uploads/rehaborange.png', 14, 8, '2024-04-14'),
(31, 'The HYDRO Blue Ice Monster', 'Energy Water Blue Ice Is A Foundational, Refreshing And Revitalizing Non-Carbonated, Easy Drinking Beverage. It Provides 110 Calories And The Crisp, Blue Raspberry Flavor Makes The 150mg Caffeine And Electrolytes Go Down Smooth. Also Features B-Vitamins And Comes In A Handy, 20oz, Sport-Grip, Resealable Bottle. Advanced Hydration // Electrolytes // 150mg Caffeine // Natural Flavors // B Vitamins', './uploads/bluegym.png', 14, 9, '2024-04-14'),
(32, 'The HYDRO Pink Ice Monster', 'Energy Water Pink Ice Is A Foundational, Refreshing And Revitalizing Non-Carbonated, Easy Drinking Beverage. It Provides 110 Calories And The Crisp, Blue Raspberry Flavor Makes The 150mg Caffeine And Electrolytes Go Down Smooth. Also Features B-Vitamins And Comes In A Handy, 20oz, Sport-Grip, Resealable Bottle. Advanced Hydration // Electrolytes // 150mg Caffeine // Natural Flavors // B Vitamins', './uploads/rosegym.png', 14, 9, '2024-04-14'),
(33, 'The HYDRO Red Ice', 'Energy Water Red Ice Is A Foundational, Refreshing And Revitalizing Non-Carbonated, Easy Drinking Beverage. It Provides 110 Calories And The Crisp, Blue Raspberry Flavor Makes The 150mg Caffeine And Electrolytes Go Down Smooth. Also Features B-Vitamins And Comes In A Handy, 20oz, Sport-Grip, Resealable Bottle. Advanced Hydration // Electrolytes // 150mg Caffeine // Natural Flavors // B Vitamins', './uploads/redgym .png', 14, 9, '2024-04-14'),
(34, 'PACK ORIGINAL MONSTER', 'BIG BAD BUZZ | With 160mg Of Caffeine In A “Monster” 16 Ounce Can, Monster Energy Offers More For Less When Compared With Other 8.3 Ounce Energy Drink\r\nSTOCK UP WITH A 15 PACK | For Those Looking For A Powerful And Edgy Energy Drink To Stay In Action, Monster Energy Is Available In A Convenient Pack Of 15.', './uploads/cans1.png', 35, 10, '2024-04-14'),
(35, 'PACK JUICE MONSTER', 'BIG BAD BUZZ | With 160mg Of Caffeine In A “Monster” 16 Ounce Can, Monster Energy Offers More For Less When Compared With Other 8.3 Ounce Energy Drink\r\nSTOCK UP WITH A 15 PACK | For Those Looking For A Powerful And Edgy Energy Drink To Stay In Action, Monster Energy Is Available In A Convenient Pack Of 15.', './uploads/cans2.png', 35, 10, '2024-04-14'),
(36, 'PACK WHITE MONSTER', 'BIG BAD BUZZ | With 160mg Of Caffeine In A “Monster” 16 Ounce Can, Monster Energy Offers More For Less When Compared With Other 8.3 Ounce Energy Drink\r\nSTOCK UP WITH A 15 PACK | For Those Looking For A Powerful And Edgy Energy Drink To Stay In Action, Monster Energy Is Available In A Convenient Pack Of 15.', './uploads/cans3.png', 35, 10, '2024-04-14'),
(37, 'PACK PARADISE MONSTER', 'BIG BAD BUZZ | With 160mg Of Caffeine In A “Monster” 16 Ounce Can, Monster Energy Offers More For Less When Compared With Other 8.3 Ounce Energy Drink\r\nSTOCK UP WITH A 15 PACK | For Those Looking For A Powerful And Edgy Energy Drink To Stay In Action, Monster Energy Is Available In A Convenient Pack Of 15.', './uploads/cans4.png', 35, 10, '2024-04-14'),
(38, 'PACK ORANGE MONSTER', 'BIG BAD BUZZ | With 160mg Of Caffeine In A “Monster” 16 Ounce Can, Monster Energy Offers More For Less When Compared With Other 8.3 Ounce Energy Drink\r\nSTOCK UP WITH A 15 PACK | For Those Looking For A Powerful And Edgy Energy Drink To Stay In Action, Monster Energy Is Available In A Convenient Pack Of 15.', './uploads/cans6.png', 35, 10, '2024-04-14'),
(39, 'PACK ULTRA BLACK MONSTER', 'BIG BAD BUZZ | With 160mg Of Caffeine In A “Monster” 16 Ounce Can, Monster Energy Offers More For Less When Compared With Other 8.3 Ounce Energy Drink\r\nSTOCK UP WITH A 15 PACK | For Those Looking For A Powerful And Edgy Energy Drink To Stay In Action, Monster Energy Is Available In A Convenient Pack Of 15.', './uploads/cans7.png', 35, 10, '2024-04-14'),
(40, 'PACK ULTRA VIOLET MONSTER', 'BIG BAD BUZZ | With 160mg Of Caffeine In A “Monster” 16 Ounce Can, Monster Energy Offers More For Less When Compared With Other 8.3 Ounce Energy DrinkSTOCK UP WITH A 15 PACK | For Those Looking For A Powerful And Edgy Energy Drink To Stay In Action, Monster Energy Is Available In A Convenient Pack Of 15.', './uploads/cans8.png', 35, 10, '2024-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `product_size_variation`
--

CREATE TABLE `product_size_variation` (
  `variation_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `quantity_in_stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_size_variation`
--

INSERT INTO `product_size_variation` (`variation_id`, `product_id`, `size_id`, `quantity_in_stock`) VALUES
(1, 1, 2, 6),
(2, 2, 3, 9),
(3, 2, 1, 4),
(6, 3, 3, 6),
(7, 4, 1, 8),
(8, 5, 1, 8),
(9, 6, 1, 10),
(10, 7, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `size_id` int(11) NOT NULL,
  `size_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`size_id`, `size_name`) VALUES
(1, 'CAN'),
(2, 'PACK'),
(4, 'Free');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(3, 'ela', '202cb962ac59075b964b07152d234b70', 'Ela'),
(4, 'elias', '202cb962ac59075b964b07152d234b70', 'elias'),
(5, 'aab', '1233', 'nana'),
(6, 'testi1', '122', 'aaa'),
(7, 'lala', '9d25305725a1d48236e03a6ff69f7c38', 'wi'),
(8, 'Leila', '3171af18a2e75ca615973cbd1559e5a0', 'Reyna'),
(13, 'Mohamed', '8b23187c36f529bf661e3fd5b29060c1', 'Mohamed AAb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD UNIQUE KEY `uc_cart` (`user_id`,`variation_id`),
  ADD KEY `variation_id` (`variation_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `variation_id` (`variation_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `product_size_variation`
--
ALTER TABLE `product_size_variation`
  ADD PRIMARY KEY (`variation_id`),
  ADD UNIQUE KEY `uc_ps` (`product_id`,`size_id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `product_size_variation`
--
ALTER TABLE `product_size_variation`
  MODIFY `variation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users2` (`user_id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`variation_id`) REFERENCES `product_size_variation` (`variation_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users2` (`user_id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`variation_id`) REFERENCES `product_size_variation` (`variation_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
