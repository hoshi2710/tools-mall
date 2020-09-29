-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 20-09-29 06:07
-- 서버 버전: 10.1.30-MariaDB
-- PHP 버전: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `main`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `product`
--

CREATE TABLE `product` (
  `product_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_path` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_img_path` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `product`
--

INSERT INTO `product` (`product_name`, `price`, `detail`, `img_path`, `brand`, `detail_img_path`, `category`) VALUES
('몽키스패너4in', '3,500', '스마토사의 몽키스패너', '../images/product/SMATO-monkey-spanner.jpg', 'smato', '../images/detail/SMATO-monkey-spanner.jpg', '작업공구'),
('장도리', '25,980', '못을 박고 뺄때 그외에도 다양한 용도(???)로 사용이 가능한 다용도 망치, 장도리!', '../images/product/brand1_crowbar_hammer.jpg', '브랜드1', '', '작업공구'),
('세라믹 스틱형 인두기', '44,410', '테란도 그렇게 사랑한다는 평점 5점의 그 인두기?! 특히 미네랄 채굴도 잘 된다는 소문이 있는데...?', '../images/product/brand2_indugi.jpg', '브랜드2', '', '작업공구');

-- --------------------------------------------------------

--
-- 테이블 구조 `recommend_product`
--

CREATE TABLE `recommend_product` (
  `product_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_path` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `recommend_product`
--

INSERT INTO `recommend_product` (`product_name`, `price`, `detail`, `img_path`) VALUES
('몽키 스페너', '50,000', '실제 원숭이가 가지고 놀았던 그 스페너...?!', '../images/product/monkey_spanner.jpg'),
('빠루', '70,000', '그래서 반쪽인생 3는 언제 나온다고요, 게이븐씨?', '../images/product/crowbar.jpg'),
('빠따', '60,000', '손에 쥐는 순간 누군가를 ㅂX으로 만들어 주고 싶은 욕구가 치밀어 오르는 최고의 BBADDA!', '../images/product/bbadda.jpg');

-- --------------------------------------------------------

--
-- 테이블 구조 `users`
--

CREATE TABLE `users` (
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kakao_token` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registered_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 테이블의 덤프 데이터 `users`
--

INSERT INTO `users` (`name`, `address1`, `address2`, `phone_number`, `email`, `password`, `kakao_token`, `registered_date`) VALUES
('테스트', '경기 수원시 영통구 동수원로551번길 16', '', '01012345678', 'test1234@test.com', '5f4dcc3b5aa765d61d8327deb882cf99', '', '2020-09-29');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
