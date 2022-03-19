-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2022 at 02:48 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `show_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sold` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `release_date` date NOT NULL,
  `image` blob NOT NULL,
  `trailer_link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `title`, `description`, `release_date`, `image`, `trailer_link`) VALUES
(1, 'Avengers: End Game', 'Avengers end game is created by marvel studios.', '2022-02-23', 0x89504e470d0a1a0a0000000d49484452000000a000000030080600000096a9716e000000017352474200aece1ce90000000467414d410000b18f0bfc6105000000097048597300000ec300000ec301c76fa86400000dba49444154785eed9c097c4cd717c78f88b5a274a1adc61a82c65ab54753b113412c49254463098d20f635a87f686882c4523476b16b248ad88216512db1846c220dd55255841291f69df7cecb5be6cdcc9bc9fc3f6992f7fd7ce69373eeac497e73eebde79ef34afcc3001a1a058415fdd4d0281034016a14289a00350a144d801a058ab609f90f9093f30ab25fbe84dc57b950a64c692855ca9aee318d973939f0323b074a942801d6a54a42296bf35ec71c5ebe64de9b797ffc5df07dcb962dcd7e0e6368023491776b77214b19145085d7ca4178c85470ead0824695d9b6f310047eb10ab29efe4d231cd6d625a143fbe6b035e27f34629880e921b067ef3156c462ca962d03a37cdc60da446f1a9172e1e74470e93f9e3c80bb3763c99262d7c8159e8a3ee39dd4436065c54d9e6bd7ef83455fad8767cf9eb3be984a956c2064510074efd28e4674d1046822c60428a65edd1a70f2f05af204eedf7f088e9d7de0d1e32c1a5106234868f02418e4d69946a49c8dbf0cfd3c2691a71ffc529c3ef20dd8be5f9546388c0910a551af495fc8ca7ac6fa3615ca43f2e56f591b69f38937dccaf8953cfd64267fc77ca994a3b1b606cc07eddb3405971e1df26e4e8e1fd23d1cc9291910b9eb30791c4f987f66e3568374c48762fdb05903366af1a000c64f5e0c31074fd388c0859fafe9880f85d6a4513d68dac43e2f42212f5e6443cb0e5e9079fb771a314e6e6e2e3469ed9e27be72cce7128b2f687184447cefbdfb3678baf780e1de7da16dabc650ba5429761c45af4f7c88c52360dacddb70f8e85948bd99a91896ff4bb469d5083a7edc52273218421c01a3f72c83168c68e4881f83d370e48620f2001c5a0c80077f3e220f60ece8413063b20f791cbf64fe06ed3b7dc6aeab782e9ddb0e55abbc419e6e24debd3518da315f08313bf7c4c2b8c94bc8e3f835ed70dedacc5004ecd27b0c5cb99acada28e6f4c468285d9a131552ddbe47dee76bfd9103ecdb11c2da6292537f8194d40ce8d9cd914674b1a8006b357481e7cf5f9057b8d0b7fe9163aa00ddfb7765a6d189ac9d95f514ea36eecbdac8fc59be30e2b37ee449c14859af711ff200fab838c1aa6533583b70c16a5813b197b591a44b7ba162c50ae449c160e03d32903c8030666ddabf8f336beb13a053d71190c4446f1ea5d717ff8e93fcbd60e2782ff24cc36253702fb77185567c883db3d6b104e7ce5f218b63c8e05e640138f71c4d16b03b5d7de24370bde5464241be8d8e230b60d3b618b2006ad7aaa6577c48d74e6dc8e298337f1559ca0cf49a2a115ffcc94d8aaffff65b95c90258b27c330c193187fdd2988a4504989179177eba789dbcc2c9e3274f61d6bc15e4a9c385f9d2612410dffaba73d10e19c908ac19b31ee379f44858f7d9336b3e63f88d1a449694e7cfb3c90218e6d59b2cfd4c0b1076c10fff7a4c962ebe6383e0f40f17c90376e950ddf61df2a4ac583a8d2c8e23c7ceb1111bff065d7a7f0e119ba2e0d5ab5774af7e2c22408fa1d3c92adc7cb3318a2ccb50e9751bb2389e339b019ed765f7296163539e2c81ec6c69aac5a1611db2f4d3c8c18e2cc3441d10a22c32cc771e23a25cf2a438b66d069bd6ce67534672ae5c4d81997357c0fb75bb4370c8061a5526df02c46f4cfa2de35bf1c2026e12d4828bfe5edd1df36ecd9bd687b7deac44f70204876e849efdfcc9e376923cf7efff49967e1e3f7e4a96006e04c409deefcf5c224b3f474f9c27cb347049d5a1cb70f274e9ecdc1a32930fb21ba4562d1ce0b5f2e5e81e81d0f06d10b9f31079bae47b1352c7a1f77f7eb76b2aa78f7e0376b56dc99382530c8fbe4d48e28d9be0dcc3973cc6ff693754ae5c111c3bf9b0d9010445843b524338f7f485c4eb37c9133609989b7bc22c19902a6f578684f81dacad8ff7ea7465533a885d1d5b362788c8372148d05c3f663995087ba28ed308c0eca9c361cca881e41906533eb1cc743cd26f018d00942f5f16d2aeee274f4abe22600433651535f12162f19843c3fab5c9e2387bfe32fb33366625fb134141b8794c264f97f33f5d93886facafb01e5c347f2c5900f7ee3f84e8ef4e91a7cb57cbb7e4890f59384f78ae1c6f4f171836a43784874e839a35dea351802fbe5c073f329f470d988bc49ce88c299fd108c0df7febd748be04386fe11ab28a16b8ce0a0ddf4a9ee96c89fc8e2c8e529494c529582cce33f1093068c8349d8dc1da88bde03a6002791c13c709698e7eae1dd95d320f469b2f16ae95ac0fd11e3b3118962cdd4423ccba93d9cdb66f2bcd158a592812f68983d2ff6d6fe6f388f3927804d7a0991b1c8b539edef7c79c248b8980e574a7661eb3a7e0095396c0f6ddea726785959bd7f643b97265c9e3104fc16ab0b22a017752a553ad9d832b3c7d263dff35c4b9b88d50a3fabbe471e05457b38190e251c3adeb316c84e23176148769154c4ff112c165042e2710a5a5572d266aa62b1ccde1b9b838a524c6ac0888298ba22e3ec4edd3296499cf7159244152af46316b37e154431f254b5ab1a2908b0f412165dc38409e61305ae2eb88c5a7067cdefe5da1e4013c7cf8183af5e2729958f52247497cdd3ab5d12b3ec42c010e193e9baca24dc29564b24ca345f386b063d342c84c39a837df9710bf1dce9ed8a0737c86e054b967db62b89da27ff788e08e183732b1d12ba16a95376954a0ae5d753819bb5672866b2af8bbb80fe84a1ec0b5c434d8b7ff042bfe1f8e45c0c7b2f36f9e96ccaef854ec3a58bf661e8d2863f2148c67bd784e595c904f4b1a96c5e408e8e9338baca20f567868fc7f312902c69dba001ededc81b8182c4bdab535983c0d0df5982440dc11e106444cdca1b5605fcff8b9a6868612aaa7608c7e72f145ac0ed4c4a7912f544740792125a22dd035f28b6a01d6a8df539269efe8f491eaa699a2cca5cb49e0e5331bfe78f0178d70d4aa550dd6af9eabaaec0a4f188ec7fd08dea384c2511ed75e4e6ce16a15513534624a42dc50a04849cb840e9d858aeca89da1d0b2c507e4e9227edff9b347c38861ca7594d3e784c1862dd1ac8de9227d394bd553b0f8180669d6a43e59c5979acc97b27b9fb13ae243d2d3efb095c558256e087c1c96b72b890f898a89637b33c475869664f898f96471b80e941e011a620e76f465e956ec98826a018a9b5c10b587d345956a76dde085ac364f092c69b2add79d3c29583dddd679187986c1c7cac56209b0714a4ee28d74b28c63dfd48d3d163417d5022c236a48414e7dff3359c58bdcdc7fd86908bbc678b0f7164f2d70aac31b9eb9622f080f1e5b356cde9f3c8e074cd49447b5658b27b3271bfceb2427eccbeb2dc61389752be7b0b61c2c54e09fa374d34737573fb298a9f59db7c80298345db7c1481ff877c0f2307d85abc6502dc0f7ab55214b60f3367567914589a327e2c9e2089ae70773678e62cf6d79f0cc151b91c6fb0da611ae143e29f9167900e3a648bbd5f0586ea05b6749b1a98dcd6b6c59fcd4006f88debd94462d032ea9c4478d5803c973312149a7f2da10f8d8819ee69d9bab16605888b4070099326b9949e1ba283074841085f0b0de504fc6d480a1929275a76e23c9023826aa521ed0b793a4fe4ece78bf4fc9b21ce15f0b45ac58c98dd5cce2ca1fbf802fc952c799f8cbec15124c45b5001b3bd8493aa1789c7b8c82aeae9f9357bc9830568870faf0f6d415e8eff71e90c5e1335468bf3487b055dbd98620a5dbe93342939198e0908d640104ce18c5fec4f64b1ea566783975eb54278b63d98a48552d02624c3a0991979a177594d64fe234c49af0596cf5af21d66fde0f3302c3c9e35ef3c2c5eb6c471dcfcdc46849bf881ad4a661700a975fa326f6e859182aea1516ff9e5864fad7a327ac8d53bf3cfa8adf17afe670247a25d4fec0256f0dc8b71a583c0d836035afef70e962ba28e365a4ec4c9e985722e397bb6409d8cad6d377efde27cb3c2a304b01dc4428dd946a00c78c5f4416c0970b84a629c47f8c3b59d850b45552ceaf048aebe29948f2b856031469b62c6da70f9322200f9663630ea838208f82e20880c79078166e88e66d3f85bbbffdc1dab851e16bfcc4afe33fda1da64f36adc44dfc7cdc054f1295ec1be2cab554e8e232863ce360697e7dfb9ae4e94640fee24bd8863079a6f246c962119007b3dff88fc15d5a710377bd3c49c91992ab08c8c1dc1d2f3e044f1978c415d1cb99359c217ebf67bc85532da66e2e3ee92e6c9c0ce1e9d143927a528b5911500c9e021c397e0ed2d26ec39dbbf798104c771472dea85c91bdae9d63bb6634c221efc5c004fd8e4d8b749a7da20e9c84d1fe4179539875c992909174202fa18fed99d8a6c9836bc0ab1776b12d8c621604af8315ab77b21b95058142e43237028a9fa79613879828588f8b82fa2220cf87ed06c3afb22585a108986f01164730eae1319b18fc2337b0afc50aeef2d5141a15b8742e52a76c3e64f916582cea5a43f0e29675997fecab9c573aaf83973f5b1cc43511898580e92043b3d1807e9d60dac461d07ff014f8e12cb74badc83c3e29611f6b2b21de8c34fac08e2dfb478c09107382583720c6e2537071070b0c766d0996e4f8f00f8f895db968f052b571cc3f49a96723c0df53279583574bbd78e986ceebd856ab9a273e39d8bd865147df8dbf260d2f3ee4ebb0996429b3fc2ba16719d78d6abbf8506cb83c931fddea4313a099e0948b97a5f018d84d71a789495dff311e909e1863b02266ca84a1ecd11d5ec4487c0ac283d797c154caf9d39b69c43c9686097dce56ccfb18bb7c70e78eadc9e298363b8c2c75e0b2440dda146c21727272a838a10494296d6df0aaa086c0d7c0688a6b46bc849bd2c57f8a129a00350a146d0ad6285034016a14289a00350a144d801a0508c0bf0e9178751a7b71580000000049454e44ae426082, '<a href=\"https://www.youtube.com/watch?v=TcMBFSGVi1c\" title=\"\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.youtube.com/watch?v=TcMBFSGVi1c</a>');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `seat_id` varchar(5) NOT NULL,
  `row` int(11) DEFAULT NULL,
  `columns` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`seat_id`, `row`, `columns`) VALUES
('A1', NULL, NULL),
('A10', NULL, NULL),
('A11', NULL, NULL),
('A12', NULL, NULL),
('A13', NULL, NULL),
('A14', NULL, NULL),
('A15', NULL, NULL),
('A2', NULL, NULL),
('A3', NULL, NULL),
('A4', NULL, NULL),
('A5', NULL, NULL),
('A6', NULL, NULL),
('A7', NULL, NULL),
('A8', NULL, NULL),
('A9', NULL, NULL),
('B1', NULL, NULL),
('B10', NULL, NULL),
('B11', NULL, NULL),
('B12', NULL, NULL),
('B13', NULL, NULL),
('B14', NULL, NULL),
('B15', NULL, NULL),
('B2', NULL, NULL),
('B3', NULL, NULL),
('B4', NULL, NULL),
('B5', NULL, NULL),
('B6', NULL, NULL),
('B7', NULL, NULL),
('B8', NULL, NULL),
('B9', NULL, NULL),
('C1', NULL, NULL),
('C10', NULL, NULL),
('C11', NULL, NULL),
('C12', NULL, NULL),
('C13', NULL, NULL),
('C14', NULL, NULL),
('C15', NULL, NULL),
('C2', NULL, NULL),
('C3', NULL, NULL),
('C4', NULL, NULL),
('C5', NULL, NULL),
('C6', NULL, NULL),
('C7', NULL, NULL),
('C8', NULL, NULL),
('C9', NULL, NULL),
('D1', NULL, NULL),
('D10', NULL, NULL),
('D11', NULL, NULL),
('D12', NULL, NULL),
('D13', NULL, NULL),
('D14', NULL, NULL),
('D15', NULL, NULL),
('D2', NULL, NULL),
('D3', NULL, NULL),
('D4', NULL, NULL),
('D5', NULL, NULL),
('D6', NULL, NULL),
('D7', NULL, NULL),
('D8', NULL, NULL),
('D9', NULL, NULL),
('E1', NULL, NULL),
('E10', NULL, NULL),
('E11', NULL, NULL),
('E12', NULL, NULL),
('E13', NULL, NULL),
('E14', NULL, NULL),
('E15', NULL, NULL),
('E2', NULL, NULL),
('E3', NULL, NULL),
('E4', NULL, NULL),
('E5', NULL, NULL),
('E6', NULL, NULL),
('E7', NULL, NULL),
('E8', NULL, NULL),
('E9', NULL, NULL),
('F1', NULL, NULL),
('F10', NULL, NULL),
('F11', NULL, NULL),
('F12', NULL, NULL),
('F13', NULL, NULL),
('F14', NULL, NULL),
('F15', NULL, NULL),
('F2', NULL, NULL),
('F3', NULL, NULL),
('F4', NULL, NULL),
('F5', NULL, NULL),
('F6', NULL, NULL),
('F7', NULL, NULL),
('F8', NULL, NULL),
('F9', NULL, NULL),
('G1', NULL, NULL),
('G10', NULL, NULL),
('G11', NULL, NULL),
('G12', NULL, NULL),
('G13', NULL, NULL),
('G14', NULL, NULL),
('G15', NULL, NULL),
('G2', NULL, NULL),
('G3', NULL, NULL),
('G4', NULL, NULL),
('G5', NULL, NULL),
('G6', NULL, NULL),
('G7', NULL, NULL),
('G8', NULL, NULL),
('G9', NULL, NULL),
('H1', NULL, NULL),
('H10', NULL, NULL),
('H11', NULL, NULL),
('H12', NULL, NULL),
('H13', NULL, NULL),
('H14', NULL, NULL),
('H15', NULL, NULL),
('H2', NULL, NULL),
('H3', NULL, NULL),
('H4', NULL, NULL),
('H5', NULL, NULL),
('H6', NULL, NULL),
('H7', NULL, NULL),
('H8', NULL, NULL),
('H9', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seatbook`
--

CREATE TABLE `seatbook` (
  `id` int(11) NOT NULL,
  `seat_id` varchar(5) NOT NULL,
  `booking_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `show`
--

CREATE TABLE `show` (
  `show_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `movie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `show`
--

INSERT INTO `show` (`show_id`, `date`, `time`, `movie_id`) VALUES
(1, '2022-03-01', '05:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(80) NOT NULL,
  `last_name` varchar(80) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `usertype` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `username`, `password`, `email`, `phone_number`, `address`, `usertype`) VALUES
(9, 'ram', 'prasad', 'ram', '1234', 'ram@email.com', '9841000000', 'adddress', 'user'),
(10, 'admin', 'admin', 'admin', 'password', 'admin@email.com', '9888', 'adkdka', 'admin'),
(11, 'peter', 'pan', 'peter', '1234', 'peter@pan.com', '98999', 'somewhere', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `booking_user` (`user_id`),
  ADD KEY `booking_show` (`show_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`seat_id`);

--
-- Indexes for table `seatbook`
--
ALTER TABLE `seatbook`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seatbook_booking` (`booking_id`),
  ADD KEY `seatbook_seat` (`seat_id`);

--
-- Indexes for table `show`
--
ALTER TABLE `show`
  ADD PRIMARY KEY (`show_id`),
  ADD KEY `movie` (`movie_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seatbook`
--
ALTER TABLE `seatbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=461;

--
-- AUTO_INCREMENT for table `show`
--
ALTER TABLE `show`
  MODIFY `show_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_show` FOREIGN KEY (`show_id`) REFERENCES `show` (`show_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `booking_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `seatbook`
--
ALTER TABLE `seatbook`
  ADD CONSTRAINT `seatbook_booking` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`booking_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `seatbook_seat` FOREIGN KEY (`seat_id`) REFERENCES `seat` (`seat_id`) ON DELETE CASCADE;

--
-- Constraints for table `show`
--
ALTER TABLE `show`
  ADD CONSTRAINT `movie` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`movie_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
