-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 18-03-19 06:40
-- 서버 버전: 10.1.30-MariaDB
-- PHP 버전: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `bar`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `members`
--

CREATE TABLE `members` (
  `no` int(11) NOT NULL,
  `userid` varchar(70) NOT NULL,
  `userpass` varchar(70) NOT NULL,
  `firstname` varchar(70) NOT NULL,
  `surname` varchar(70) NOT NULL,
  `useremail` varchar(70) NOT NULL,
  `userphone` varchar(70) NOT NULL,
  `address` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `members`
--

INSERT INTO `members` (`no`, `userid`, `userpass`, `firstname`, `surname`, `useremail`, `userphone`, `address`) VALUES
(1, 'admin', '1234', '조현욱', '관리자', 'admin@barcelona.com', '010-1234-5678', '06253 서울 강남구 강남대로 298 298-1번지'),
(2, '조현욱', '1234', '조현욱', '조현욱', 'jo@gmail.com', '010-123-1234', '13480 경기 성남시 분당구 대왕판교로 477 210번길');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`no`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `members`
--
ALTER TABLE `members`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
