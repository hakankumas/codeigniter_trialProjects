-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2023 at 04:08 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter_todo`
--

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `isCompleted` tinyint(4) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `todos`
--

INSERT INTO `todos` (`id`, `title`, `isCompleted`, `createdAt`) VALUES
(18, 'lorem ipsum dolar.', 1, '2023-09-22 10:31:26'),
(21, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus modi soluta voluptas. Officia, sint necessitatibus beatae, impedit natus tempore reiciendis hic est suscipit accusamus odio voluptate eos autem vitae aperiam minus exercitationem corrupti.', 1, '2023-09-22 10:35:35'),
(22, 'Tenetur ea maiores debitis minus, sit dolore, repellendus perferendis molestiae ab distinctio officiis nulla, voluptatibus nam? Explicabo ipsa porro voluptatem tempore quidem ratione dolore vero, id nemo, perspiciatis veniam aut, recusandae sapiente iusto.', 1, '2023-09-22 10:35:49'),
(23, 'Esse inventore assumenda ab vel odio delectus voluptatem, deleniti nobis repudiandae, cum ducimus tempore minus quas quibusdam voluptate modi officia soluta, consequuntur quia iusto asperiores quis nulla. Amet reprehenderit optio neque aspernatur quo quaerat, deserunt sed omnis inventore enim veniam nobis. Reiciendis iure pariatur praesentium sunt adipisci consequuntur nemo doloribus voluptatum ut repellendus fugiat exercitationem sequi soluta vero similique voluptates deleniti consectetur nihil quisquam natus, blanditiis dolore tempora. Perspiciatis incidunt, soluta illum fugiat nobis necessitatibus sequi doloribus minima ipsa delectus rem itaque sit aliquid ab dolorem porro. Modi dolor hic perferendis nemo id rem, quos sequi pariatur assumenda deserunt ab laborum! Dolore, laboriosam pariatur sed quis doloremque consectetur facilis sapiente architecto qui, id dolor ipsa, eligendi est fuga doloribus a repellat iure ab dicta culpa! Delectus distinctio facilis magni saepe quis architecto, modi dolore! Unde esse officia consequatur atque iusto excepturi consectetur dolor perspiciatis et fugiat, distinctio possimus, asperiores eaque vero autem? Iste distinctio officiis nobis inventore ab quam voluptatum, porro laudantium exercitationem modi. Nihil obcaecati ut aliquid voluptate eum dolor quasi quia nemo quaerat. Ipsam, qui blanditiis! Ipsa, asperiores!', 0, '2023-09-22 10:41:22'),
(24, 'Temporibus fuga modi excepturi, recusandae architecto labore aperiam velit itaque? Minus reprehenderit nihil, consequuntur quibusdam vitae nobis saepe reiciendis earum ipsum hic fuga, doloremque ab illum. Voluptatum aliquam pariatur voluptates facere iusto unde obcaecati consequuntur porro, mollitia, minus iste, nobis necessitatibus dignissimos aspernatur distinctio reiciendis nihil sequi saepe similique explicabo laboriosam? Laudantium, earum eos in distinctio saepe iure consequatur. Doloremque accusamus placeat, iusto corrupti ullam optio veritatis sint. Impedit, vitae. Facere ipsum dolorem soluta laboriosam omnis odio eaque beatae magnam esse numquam reprehenderit, vero ullam officia excepturi ab quisquam.', 0, '2023-09-22 10:41:42'),
(25, 'Quaerat quisquam consequuntur.', 1, '2023-09-22 10:41:51'),
(32, 'lorem ipsum dolar. lorem dolar.', 0, '2023-09-22 14:02:43'),
(35, 'x1', 1, '2023-09-22 14:10:09'),
(36, 'x2', 0, '2023-09-22 14:10:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
