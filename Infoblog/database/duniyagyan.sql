-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2024 at 03:08 PM
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
-- Database: `duniyagyan`
--

-- --------------------------------------------------------

--
-- Table structure for table `post_data`
--

CREATE TABLE `post_data` (
  `post_no` int(10) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `Post_info` text NOT NULL,
  `Post_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post_data`
--

INSERT INTO `post_data` (`post_no`, `Title`, `Category`, `Post_info`, `Post_img`) VALUES
(1, 'Ram Pran Pratishtha', 'Shri ram', 'It seems like you might be referring to \"Ram Pran Pratishtha\" in the context of a religious or spiritual practice related to Lord Rama in Hinduism. \"Ram Pran Pratishtha\" could be interpreted as the consecration or installation of the life force (prana) into an idol or image of Lord Rama. This ceremony is an integral part of Hindu rituals, especially in the construction and consecration of temples.\r\n\r\nThe term can be broken down into three components:\r\n\r\n1. **Ram**: Refers to Lord Rama, one of the incarnations of Lord Vishnu in Hinduism. He is a revered figure and a symbol of righteousness and virtue.\r\n\r\n2. **Pran**: Translates to life force or vital energy. In the context of religious practices, it signifies the infusion of divine energy into an idol or image.\r\n\r\n3. **Pratishtha**: Means establishment or consecration. It involves the formal installation or initiation of a deity into an object, often a consecrated idol.\r\n\r\nThe process of Ram Pran Pratishtha typically involves elaborate rituals conducted by qualified priests. These rituals are guided by ancient scriptures and traditions, ensuring the proper invocation and infusion of spiritual energy into the idol. Devotees believe that through this process, the deity becomes present in the idol, and the temple or sacred space becomes a dwelling place for the divine.\r\n\r\nThe consecration ceremony may include the chanting of Vedic mantras, performing various rituals like Abhishekam (ritual bathing of the deity), and offering various items like flowers, fruits, and incense. The ultimate goal is to invite the divine presence into the idol, making it a focal point for worship and spiritual connection.\r\n\r\nRam Pran Pratishtha is not only a religious ceremony but also a cultural and communal event that brings devotees together to celebrate their faith. Temples that undergo this consecration are considered spiritually charged and become important pilgrimage sites.\r\n\r\nIt\'s important to note that interpretations and practices may vary across different sects and regions within Hinduism, and the significance of Ram Pran Pratishtha may be understood in diverse ways by different communities.', '107046681.jpg'),
(2, ' Shri Krishna', ' Shri Krishna', 'Certainly! Shri Krishna, also known simply as Krishna, is one of the most revered and beloved figures in Hinduism. He is considered the eighth incarnation (avatar) of Lord Vishnu, a major deity in the Hindu pantheon. Krishna\'s life and teachings are primarily documented in the ancient Indian epic, the Bhagavad Gita, as well as in other scriptures like the Mahabharata and the Puranas.\r\n\r\nHere are some key aspects of Shri Krishna:\r\n\r\n1. **Birth and Childhood:**\r\n   - Krishna was born in the town of Mathura to King Vasudeva and Queen Devaki. His birth was miraculous, as he appeared to Devaki and Vasudeva in the prison cell where they were confined by Devaki\'s brother, the tyrant King Kansa.\r\n   - Due to the threat posed by Kansa, Krishna was secretly transported to the village of Gokul, where he was raised by the cowherd couple, Nanda and Yashoda.\r\n\r\n2. **Youth and Adventures:**\r\n   - Krishna\'s childhood is filled with various legendary stories and adventures, including his playful exploits with the gopis (cowherd girls) and his friends in the village.\r\n   - His famous act of stealing butter, known as \"Makhan Chor\" or \"Laddu Gopal,\" is a popular depiction of his mischievous nature.\r\n\r\n3. **Role in the Mahabharata:**\r\n   - Krishna played a pivotal role in the great Indian epic, the Mahabharata. He served as the charioteer and advisor to Prince Arjuna in the Kurukshetra War.\r\n   - The Bhagavad Gita, a discourse delivered by Krishna to Arjuna on the battlefield, is a key philosophical and spiritual text that addresses duty, righteousness, and the nature of existence.\r\n\r\n4. **Divine Philosophy:**\r\n   - Krishna\'s teachings in the Bhagavad Gita emphasize the concepts of dharma (duty), karma (action), and bhakti (devotion). He encourages Arjuna to fulfill his duties selflessly and to surrender to the divine will.\r\n   - Krishna is often referred to as the Supreme Being and the source of all creation.\r\n\r\n5. **Devotional Traditions:**\r\n   - Devotees of Krishna, known as Vaishnavas, engage in various devotional practices, including singing bhajans (devotional songs), reciting prayers, and celebrating festivals such as Janmashtami, which marks Krishna\'s birth.\r\n   - Temples dedicated to Krishna, such as the famous ISKCON temples, attract followers from around the world.\r\n\r\n6. **Radha-Krishna Tradition:**\r\n   - The love between Krishna and Radha, a cowherd girl, is a central theme in many devotional traditions. Their divine love is often seen as an allegory for the union of the individual soul (jivatma) with the Supreme (Paramatma).\r\n\r\nShri Krishna is not only a historical and mythical figure but also a symbol of divine love, wisdom, and compassion. His teachings continue to inspire millions of people worldwide, and his stories are an integral part of the rich tapestry of Hindu mythology and spirituality.', 'Shri Krishna Janambhumi Mathura.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_no` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_no`, `username`, `user_type`, `password`) VALUES
(1, 'subhu', '0', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post_data`
--
ALTER TABLE `post_data`
  ADD PRIMARY KEY (`post_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post_data`
--
ALTER TABLE `post_data`
  MODIFY `post_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
