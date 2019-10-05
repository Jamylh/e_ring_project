

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



--
-- Database: `e-ring`
--

-- --------------------------------------------------------

--
-- بنية الجدول `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `frist_n` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_n` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_stu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_student` int(11) NOT NULL,
  `n_unver` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skills` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

