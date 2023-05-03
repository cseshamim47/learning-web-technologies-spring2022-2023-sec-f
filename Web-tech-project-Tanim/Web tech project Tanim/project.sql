-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2023 at 03:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(17, 1, 1, '2023-04-19 06:11:14', '2023-04-19 06:11:14');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(7, 'What is Bitcoin?', 'Bitcoin is a digital currency that allows for peer-to-peer transactions without the need for a centralized authority.', '2023-04-17 04:24:13', '2023-04-17 04:24:13'),
(8, 'How does Bitcoin work?', 'Bitcoin transactions are verified and processed by a decentralized network of computers using complex algorithms. Transactions are recorded on a public ledger called the blockchain.', '2023-04-17 04:24:13', '2023-04-17 04:24:13'),
(9, 'Who invented Bitcoin?', 'Bitcoin was invented by an anonymous person or group using the pseudonym Satoshi Nakamoto.', '2023-04-17 04:24:13', '2023-04-17 04:24:13'),
(10, 'How do I get Bitcoin?', 'You can get Bitcoin by buying it on a cryptocurrency exchange, accepting it as payment for goods or services, or mining it using specialized software and hardware.', '2023-04-17 04:24:13', '2023-04-17 04:24:13'),
(11, 'Is Bitcoin legal?', 'The legal status of Bitcoin varies by country. In some countries, it is legal to use Bitcoin as a form of payment or investment, while in others it is restricted or banned outright.', '2023-04-17 04:24:13', '2023-04-17 04:24:13'),
(12, 'How secure is Bitcoin?', 'Bitcoin is secured by advanced cryptographic algorithms and the decentralized network of computers that verify and process transactions. However, like any digital asset, it is vulnerable to hacking and theft if proper security measures are not taken.', '2023-04-17 04:24:13', '2023-04-17 04:24:13'),
(13, 'Can I lose my Bitcoin?', 'Yes, if you lose your private key or your Bitcoin is stolen, you can lose your Bitcoin permanently. It is important to take steps to secure your Bitcoin and store it in a secure wallet.', '2023-04-17 04:24:13', '2023-04-17 04:24:13'),
(14, 'What is blockchain?', 'Blockchain is a decentralized ledger that records all Bitcoin transactions in chronological order. Each block on the blockchain contains a list of transactions and a unique cryptographic signature, creating a secure and immutable record of all Bitcoin activity.', '2023-04-17 04:24:13', '2023-04-17 04:24:13'),
(15, 'What is a cryptocurrency wallet?', 'A cryptocurrency wallet is a digital wallet that allows you to store, send, and receive cryptocurrencies like Bitcoin. There are many different types of wallets, including hardware wallets, software wallets, and web wallets.', '2023-04-17 04:24:13', '2023-04-17 04:24:13'),
(16, 'How do I store my Bitcoin safely?', 'You can store your Bitcoin safely by using a secure wallet, keeping your private key secret, and taking other security measures like using two-factor authentication and avoiding public Wi-Fi networks.', '2023-04-17 04:24:13', '2023-04-17 04:24:13'),
(17, 'How do I sell Bitcoin?', 'You can sell Bitcoin on a cryptocurrency exchange or through a peer-to-peer marketplace. The process will vary depending on the platform you use.', '2023-04-17 04:24:13', '2023-04-17 04:24:13'),
(18, 'What are the fees for using Bitcoin?', 'The fees for using Bitcoin vary depending on the transaction size and the congestion of the network. Fees are paid to miners to incentivize them to verify and process transactions.', '2023-04-17 04:24:13', '2023-04-17 04:24:13'),
(19, 'Is Bitcoin a good investment?', 'Bitcoin has been highly volatile and its value has fluctuated widely over time. It is important to carefully consider the risks and potential rewards before investing in Bitcoin or any other cryptocurrency.', '2023-04-17 04:24:13', '2023-04-17 04:24:13'),
(20, 'How can I learn more about Bitcoin?', 'There are many resources available to learn more about Bitcoin, including online tutorials, forums, and books. It is also helpful to stay up-to-date on the latest news and developments in the industry.', '2023-04-17 04:24:13', '2023-04-17 04:24:13'),
(21, 'Test question 04', 'Test anasete4', '2023-04-17 06:46:50', '2023-04-17 06:46:50'),
(22, 'Test question 01', 'Test answer 01', '2023-04-17 07:05:45', '2023-04-17 07:05:45');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `notification` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `notification`, `created_at`) VALUES
(6, 'js test update', '2023-04-17 01:25:27'),
(7, 'js test update', '2023-04-17 01:25:49'),
(10, 'final check', '2023-04-17 04:45:30'),
(15, 'Test 01', '2023-04-19 05:14:49'),
(16, 'Test 01', '2023-04-19 05:16:03'),
(17, 'Test 01', '2023-04-19 05:20:27'),
(18, 'Test 01', '2023-04-19 05:22:08');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_price`) VALUES
(1, 'chair', '400.00'),
(2, 'Table ', '400.00'),
(3, 'Key', '400.00'),
(4, 'Books', '500.00'),
(5, 'Watch', '300.00'),
(6, 'Mobile ', '500.00'),
(7, 'Bookself', '800.00'),
(8, 'test p', '1000.00'),
(9, 'chair', '600.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(0, 'Tanim', '$2y$10$64OF76wI9Y2CA3BYD1mYce8TzuD153k/Lr6fh9rBw1VW61LaVILgu', '2023-04-06 10:36:29'),
(0, 'fahad', '$2y$10$k1xv2qnQ8g5gXwUn2J.TgekQiWU3TTMsvwQsKwcXN3gaER/9zFpWe', '2023-04-06 10:45:37'),
(0, 'Tanim1122', '$2y$10$rqtAxjGJ0jsnxEX9slJJu.9jWpXeZgDVXO8AKhsenNYbz9meEpoXK', '2023-04-10 04:51:58'),
(0, 'Tabib', '$2y$10$Q6s1ly1NtaVbVXB3hZ5aHuQvx/QXWixPnTrlpgY.9yAagY2maO7Ue', '2023-04-10 05:10:07'),
(0, 'Tanim11223', '$2y$10$vI7TxLMJrioeIIg5CzWa6e8wh32ZEN3PwLw.gyVjZTEShW1hTvBuS', '2023-04-10 15:00:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
