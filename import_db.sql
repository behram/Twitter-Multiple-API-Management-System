-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 13, 2014 at 05:11 AM
-- Server version: 5.5.34-MariaDB-cll-lve
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `deepkodc_twitter`
--

-- --------------------------------------------------------

--
-- Table structure for table `packet_request`
--

CREATE TABLE IF NOT EXISTS `packet_request` (
  `eid` int(10) NOT NULL AUTO_INCREMENT,
  `user_mail` varchar(50) DEFAULT NULL,
  `packet_id` int(10) NOT NULL,
  `paypal_mail` varchar(50) NOT NULL,
  `insert_time` int(20) NOT NULL,
  `is_finish` int(2) NOT NULL,
  `process_value` varchar(200) NOT NULL,
  `sent_time` int(20) NOT NULL,
  `payment_mail` varchar(50) NOT NULL,
  `packet_type` varchar(30) NOT NULL,
  `user_twitter_name` varchar(60) DEFAULT NULL,
  `sended_tweet_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `packet_request`
--

INSERT INTO `packet_request` (`eid`, `user_mail`, `packet_id`, `paypal_mail`, `insert_time`, `is_finish`, `process_value`, `sent_time`, `payment_mail`, `packet_type`, `user_twitter_name`, `sended_tweet_id`) VALUES
(7, NULL, 14, 'tnjukucuk@hotmail.com', 1401027932, 1, '23232', 1401119635, 'ali@hotmail.com', 'Retweet Gönder', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sys_apis`
--

CREATE TABLE IF NOT EXISTS `sys_apis` (
  `api_id` int(20) NOT NULL AUTO_INCREMENT,
  `api_key` varchar(100) NOT NULL,
  `api_secret` varchar(200) NOT NULL,
  `api_access_level` varchar(55) NOT NULL,
  `api_owner_name` varchar(50) DEFAULT NULL,
  `api_owner_id` int(11) DEFAULT NULL,
  `api_owner_access_token` varchar(200) DEFAULT NULL,
  `api_owner_token_secret` varchar(200) DEFAULT NULL,
  `api_add_time` int(20) NOT NULL,
  `api_total_user` int(20) DEFAULT NULL,
  `api_last_use` int(11) DEFAULT NULL,
  `api_created_by` varchar(30) NOT NULL,
  `api_name` varchar(60) NOT NULL,
  `api_description` varchar(200) DEFAULT NULL,
  `api_website` varchar(100) DEFAULT NULL,
  `api_callback_url` varchar(150) DEFAULT NULL,
  `api_logo` varchar(100) DEFAULT NULL,
  `api_logout_url` varchar(150) DEFAULT NULL,
  `api_extra_info` varchar(300) NOT NULL,
  PRIMARY KEY (`api_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `sys_apis`
--

INSERT INTO `sys_apis` (`api_id`, `api_key`, `api_secret`, `api_access_level`, `api_owner_name`, `api_owner_id`, `api_owner_access_token`, `api_owner_token_secret`, `api_add_time`, `api_total_user`, `api_last_use`, `api_created_by`, `api_name`, `api_description`, `api_website`, `api_callback_url`, `api_logo`, `api_logout_url`, `api_extra_info`) VALUES
(5, 'lOQmr4Wz4UjxoqEQw0kfw', 'RGTSyS6KNRSB8iLjUMQ4Cgck9vzamEw9dSITKI4a0E', 'Read Write DM', NULL, NULL, NULL, NULL, 1398081244, 0, NULL, 'behramcelen', '1volextra api', NULL, NULL, 'http://demo.deepkod.com/callback', NULL, NULL, 'denemelik api'),
(7, '2JTQ7v2TrWisWDyqqBOg', 'oXSOnR0otxlnpqxApuclmqrrLmKdOmvNykWTxXYCY', 'Read Write DM', NULL, NULL, NULL, NULL, 1398096713, 0, NULL, 'behramcelen', 'qupoo qbox', NULL, NULL, 'http://demo.deepkod.com/callback', NULL, NULL, 'qupoo box');

-- --------------------------------------------------------

--
-- Table structure for table `sys_packets`
--

CREATE TABLE IF NOT EXISTS `sys_packets` (
  `eid` int(20) NOT NULL AUTO_INCREMENT,
  `miktar` int(10) NOT NULL,
  `paket_tipi` varchar(20) NOT NULL,
  `tl_karsiligi` int(10) NOT NULL,
  `is_online` int(3) NOT NULL,
  `time` int(20) NOT NULL,
  `creator` varchar(50) NOT NULL,
  `total_coming` varchar(200) NOT NULL,
  `extra_info` varchar(200) NOT NULL,
  `packet_type_int` int(20) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `sys_packets`
--

INSERT INTO `sys_packets` (`eid`, `miktar`, `paket_tipi`, `tl_karsiligi`, `is_online`, `time`, `creator`, `total_coming`, `extra_info`, `packet_type_int`) VALUES
(9, 1000, 'Follower Gönder', 20, 0, 1398372562, 'behramcelen', '0', 'extra bilgi', 2),
(11, 1500, 'Kredi Al', 10, 0, 1398372593, 'behramcelen', '0', 'tweet gönder', 3),
(12, 1500, 'Kredi Al', 10, 0, 1398372641, 'behramcelen', '0', 'tweet gönder', 3),
(13, 1500, 'Favori Gönder', 10, 0, 1398372648, 'behramcelen', '0', 'tweet gönder', 4),
(14, 1500, 'Retweet Gönder', 10, 0, 1398372652, 'behramcelen', '0', 'tweet gönder', 5),
(15, 2500, 'Follower Gönder', 25, 0, 1398521977, 'behramcelen', '0', 'extra bilgi', 2),
(16, 3000, 'Kredi Al', 30, 0, 1398704757, 'behramcelen', '0', 'kredi al', 3),
(17, 2000, 'Takipçi Al', 20, 0, 1398704923, 'behramcelen', '0', 'takipçi gönder', 2),
(18, 5000, 'Kredi Al', 20, 0, 1398704955, 'behramcelen', '0', 'kredi', 3),
(19, 7000, 'Favori Al', 50, 0, 1398704974, 'behramcelen', '0', 'extra', 4),
(20, 2000, 'Toplu Tweet Al', 20, 0, 1399987312, 'behramcelen', '0', 'tweet gönder', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sys_settings`
--

CREATE TABLE IF NOT EXISTS `sys_settings` (
  `e_id` int(20) NOT NULL AUTO_INCREMENT,
  `admin_user` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `site_title` varchar(200) NOT NULL,
  `site_header` varchar(200) NOT NULL,
  `site_footer` varchar(200) NOT NULL,
  `normal_kredi` int(10) NOT NULL,
  `paypal_mail` varchar(200) NOT NULL,
  `oto_tweet` varchar(300) NOT NULL,
  `oto_follow_hesap` varchar(300) NOT NULL,
  `sys_online` int(5) NOT NULL,
  `paket_online` int(5) NOT NULL,
  `facebook_page` varchar(300) DEFAULT NULL,
  `twitter_page` varchar(300) DEFAULT NULL,
  `tumblr_page` varchar(300) DEFAULT NULL,
  `google_page` varchar(300) DEFAULT NULL,
  `main_api` int(10) NOT NULL,
  `sys_lan` varchar(10) DEFAULT NULL,
  `site_keys` varchar(300) NOT NULL,
  `favicon` varchar(200) NOT NULL,
  `google_anal` text NOT NULL,
  `site_logo` varchar(200) NOT NULL,
  `site_title_bro` varchar(70) NOT NULL,
  `site_desc` text NOT NULL,
  `copy_place` varchar(300) NOT NULL,
  `home_entry_pla` varchar(300) NOT NULL,
  `log_with_twitter_but` varchar(250) NOT NULL,
  `site_fea_1` varchar(80) NOT NULL,
  `site_fea_2` varchar(80) NOT NULL,
  `site_fea_3` varchar(80) NOT NULL,
  `site_fea_4` varchar(80) NOT NULL,
  `site_fea_5` varchar(80) NOT NULL,
  `site_fea_6` varchar(80) NOT NULL,
  `site_fea_7` varchar(80) NOT NULL,
  `site_fea_8` varchar(80) NOT NULL,
  `take_cre_infos` text NOT NULL,
  `take_fol_infos` text NOT NULL,
  `take_ret_infos` text NOT NULL,
  `take_twe_infos` text NOT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sys_settings`
--

INSERT INTO `sys_settings` (`e_id`, `admin_user`, `admin_pass`, `site_title`, `site_header`, `site_footer`, `normal_kredi`, `paypal_mail`, `oto_tweet`, `oto_follow_hesap`, `sys_online`, `paket_online`, `facebook_page`, `twitter_page`, `tumblr_page`, `google_page`, `main_api`, `sys_lan`, `site_keys`, `favicon`, `google_anal`, `site_logo`, `site_title_bro`, `site_desc`, `copy_place`, `home_entry_pla`, `log_with_twitter_but`, `site_fea_1`, `site_fea_2`, `site_fea_3`, `site_fea_4`, `site_fea_5`, `site_fea_6`, `site_fea_7`, `site_fea_8`, `take_cre_infos`, `take_fol_infos`, `take_ret_infos`, `take_twe_infos`) VALUES
(1, 'demo', 'demo', 'TSystem Demo | En çok kazandıran takipçi sistemi', 'TSystem Demo | En çok kazandıran takipçi sistemi', 'TSystem Demo | En çok kazandıran takipçi sistemi', 50, 'behramcelen@gmail.com', '["5"]', '["demo"," takipcisistemi_"]', 1, 1, 'http://facebook.com/facebook_page', 'http://twitter.com/twitter_page', 'tumblr page', 'google page', 7, 'en', 'twitter, follower, favorite, retweet, gain, paypal, money', 'http://www.twitter.com/favicon.ico', '<script>\r\n        (function(i, s, o, g, r, a, m) {\r\n            i[''GoogleAnalyticsObject''] = r;\r\n            i[r] = i[r] || function() {\r\n                (i[r].q = i[r].q || []).push(arguments)\r\n            }, i[r].l = 1 * new Date();\r\n            a = s.createElement(o),\r\n                    m = s.getElementsByTagName(o)[0];\r\n            a.async = 1;\r\n            a.src = g;\r\n            m.parentNode.insertBefore(a, m)\r\n        })(window, document, ''script'', ''//www.google-analytics.com/analytics.js'', ''ga'');\r\n\r\n        ga(''create'', ''UA-51085184-1'', ''sosyaltakipcin.com'');\r\n        ga(''send'', ''pageview'');\r\n\r\n    </script>', 'TSystem Demo', 'site title browser 1', 'Twitter da fenomen ol takipçi sayını artır rt ni artır. Twitter çevreni geliştir.', '© 2014 Deepkod Freelance Group All rights reserved. TSystem uses the Twitter™ API and is not endorsed or certified by Twitter.', '<h2>Günde 200 ''den fazla takipçi ve RT kazanabileceğin mükemmel sisteme hoşgeldin</h2>', 'http://localhost/SosyalTakipcin/web/bundles/home/img/signinbutton.png', 'Spamsız organik kullanıcılar hepsi ama hepsi', 'Twitter profilinle saniyeler içinde giriş yap', 'Takipçi kazanmak için kolay panel', 'Sadece gerçek takipçiler', 'Sadece siz odaklı takipçi', 'İlgi alanına göre kişi ve takipçiler.', 'site is very bea 7 -1', 'site is very bea 8 -1', '<li>sizi takip edecek kişiler 100% gerçek hesap ve kişi lerdir</li>\r\n                <li>Bütün alanları doldurmayı unutmayınız</li>\r\n                <li>Mail kesinlikle gerçek olmalıdır</li>\r\n                <li>Paypal maili ile kullandığınız mail aynı olmak zorunda değildir</li>', '<li>sizi takip edecek kişiler 100% gerçek hesap ve kişi lerdir</li>\r\n                <li>Bütün alanları doldurmayı unutmayınız</li>\r\n                <li>Mail kesinlikle gerçek olmalıdır</li>\r\n                <li>Paypal maili ile kullandığınız mail aynı olmak zorunda değildir</li>', '<li>sizi takip edecek kişiler 100% gerçek hesap ve kişi lerdir</li>\r\n                <li>Bütün alanları doldurmayı unutmayınız</li>\r\n                <li>Mail kesinlikle gerçek olmalıdır</li>\r\n                <li>Paypal maili ile kullandığınız mail aynı olmak zorunda değildir</li>', '<li>sizi takip edecek kişiler 100% gerçek hesap ve kişi lerdir</li>\r\n                <li>Bütün alanları doldurmayı unutmayınız</li>\r\n                <li>Mail kesinlikle gerçek olmalıdır</li>\r\n                <li>Paypal maili ile kullandığınız mail aynı olmak zorunda değildir</li>');

-- --------------------------------------------------------

--
-- Table structure for table `sys_tweets`
--

CREATE TABLE IF NOT EXISTS `sys_tweets` (
  `e_id` int(20) NOT NULL AUTO_INCREMENT,
  `head` varchar(100) NOT NULL,
  `content` varchar(200) NOT NULL,
  `is_online` int(3) NOT NULL,
  `add_time` int(20) NOT NULL,
  `total_publish` int(20) NOT NULL,
  `creator` varchar(50) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `extra_info` varchar(200) NOT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `sys_tweets`
--

INSERT INTO `sys_tweets` (`e_id`, `head`, `content`, `is_online`, `add_time`, `total_publish`, `creator`, `image`, `extra_info`) VALUES
(3, 'behram tweeti', 'içerik merhaba behram nasılsın', 0, 1396814147, 0, 'behramcelen', '', 'buda extra yotumunm'),
(5, 'kadir başlık', 'kadir içerik', 0, 1396864506, 0, 'behramcelen', '', 'extra yorum'),
(6, 'asA', 'RGHDFH', 1, 1396864547, 0, 'behramcelen', '', 'SRHDFHG'),
(7, 'kazim', 'içerik kazım', 0, 1397134345, 0, 'behramcelen', '', 'extra bilgi'),
(8, 'kazim', 'içerik kazım', 0, 1397134399, 0, 'behramcelen', '', 'extra bilgi'),
(9, 'başlık', 'içerik', 0, 1397137348, 0, 'behramcelen', '', 'bilgi'),
(10, 'deneme tweeti', 'deneme tweeti 123', 0, 1398129588, 0, 'behramcelen', NULL, 'deneme tweeti'),
(11, 'deneme hashtag tweeti', '#kalbimhepseninledeneme fener hep seninle ne zaman', 0, 1399385504, 0, 'behramcelen', NULL, 'deneme tweeti'),
(12, 'deneme', 'deneme twet', 0, 1401028071, 0, 'behramcelen', NULL, 'deneme');

-- --------------------------------------------------------

--
-- Table structure for table `sys_users`
--

CREATE TABLE IF NOT EXISTS `sys_users` (
  `user_entry_id` int(20) NOT NULL AUTO_INCREMENT,
  `user_oauth_token` varchar(200) NOT NULL,
  `user_oauth_token_secret` varchar(200) NOT NULL,
  `user_twitter_id` int(30) NOT NULL,
  `user_screen_name` varchar(30) NOT NULL,
  `user_entry_time` int(11) NOT NULL,
  `user_screen_image` varchar(200) DEFAULT NULL,
  `user_location` varchar(30) DEFAULT NULL,
  `user_description` varchar(200) DEFAULT NULL,
  `user_own_url` varchar(100) DEFAULT NULL,
  `user_followers_count` int(20) NOT NULL,
  `user_friends_count` int(20) NOT NULL,
  `user_created_at` int(11) NOT NULL,
  `user_favourites_count` int(20) NOT NULL,
  `user_statuses_count` int(20) NOT NULL,
  `user_language` varchar(30) DEFAULT NULL,
  `user_last_modf_time` int(20) NOT NULL,
  `user_api_tweeted` int(20) NOT NULL,
  `user_api_favorated` int(20) NOT NULL,
  `user_creator_name` varchar(50) DEFAULT NULL,
  `user_membered_apis` varchar(100) DEFAULT NULL,
  `user_credit` int(20) NOT NULL,
  PRIMARY KEY (`user_entry_id`),
  UNIQUE KEY `user_twitter_id` (`user_twitter_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=80 ;

--
-- Dumping data for table `sys_users`
--

INSERT INTO `sys_users` (`user_entry_id`, `user_oauth_token`, `user_oauth_token_secret`, `user_twitter_id`, `user_screen_name`, `user_entry_time`, `user_screen_image`, `user_location`, `user_description`, `user_own_url`, `user_followers_count`, `user_friends_count`, `user_created_at`, `user_favourites_count`, `user_statuses_count`, `user_language`, `user_last_modf_time`, `user_api_tweeted`, `user_api_favorated`, `user_creator_name`, `user_membered_apis`, `user_credit`) VALUES
(67, '{"7":"1875463375-Guat89MYvIbJ1i3I3qnxtVyUO6ijOg3MuCYMAwd","5":"1875463375-NN4hIC21LA3Dn8s0bjlhETTBDZC3mkr8C46Q9wv"}', '{"7":"cDfSaas0hJBE9D6yzKNh5YrGeCNxBopNrLQvrNdmV7KqX","5":"zlrknJyxBI8OuCkf5uQSGlQQHlZSBjbPWiSBTFBKVTuZp"}', 1875463375, 'selamkanka21', 1400315469, 'http://abs.twimg.com/sticky/default_profile_images/default_profile_2_normal.png', '', '', NULL, 37, 11, 0, 3, 0, 'en', 0, 0, 0, NULL, '["7","5"]', 20),
(68, '{"5":"1875443312-DF1jDiXlPBsu1oan0btVlHCCS3Fccshefwm0C0p"}', '{"5":"eZt3Xh76Mk2le63rTvpkaB1L7VxFBtUUkqRpU2jZr2rUc"}', 1875443312, 'kezban_kiz16', 1400317587, 'http://abs.twimg.com/sticky/default_profile_images/default_profile_1_normal.png', '', '', NULL, 7, 6, 0, 1, 0, 'en', 0, 0, 0, NULL, '["5"]', 50),
(69, '{"5":"1873099129-ctGbYQ8NE3wfF16EmHK7sIzm2gzKGYUx7t2qOFj"}', '{"5":"fgS9PVwQd4ZV9kU3Uydj8y0NthchhgszGAKSVTxzdPxZf"}', 1873099129, 'HamzaKirmizi', 1400317611, 'http://abs.twimg.com/sticky/default_profile_images/default_profile_6_normal.png', '', '', NULL, 7, 12, 0, 4, 0, 'en', 0, 0, 0, NULL, '["5"]', 50),
(70, '{"5":"1873020090-zjZb9lQegn9yf4o5uan3S1hnM5esRiHWOGluOB6"}', '{"5":"bP9LQcDqgHwf2tBZKQs4KOl4bUwTVMQEkkndnxyoGtjQM"}', 1873020090, 'gizemguzel16', 1400317638, 'http://abs.twimg.com/sticky/default_profile_images/default_profile_4_normal.png', '', '', NULL, 51, 16, 0, 3, 0, 'en', 0, 0, 0, NULL, '["5"]', 0),
(71, '{"5":"1875410208-eCXRtfH8UQ6r3PtyRDqrGlPMRcm5TnRKxBTIl4v"}', '{"5":"WYEhhJ3Ce56w323rzPcuJK1kDyCNprzNsULfTpMr3H4Nk"}', 1875410208, 'Pleaseclick2', 1400317664, 'http://abs.twimg.com/sticky/default_profile_images/default_profile_0_normal.png', '', '', NULL, 9, 15, 0, 7, 0, 'en', 0, 0, 0, NULL, '["5"]', 50),
(72, '{"5":"354926541-uOz7Dk9cHzPIbwvC7YaYC09NiW7C9NunBzRoZXAo"}', '{"5":"1GGYtL1Rhm30A1eyAKWwDGHtOnGQnPGLXgSrFNI37y0rG"}', 354926541, 'benguguzel', 1400317699, 'http://pbs.twimg.com/profile_images/3480492009/a9af98565c0fd8fb1e7979d5d11d9b7c_normal.png', 'istanbul', '', NULL, 0, 0, 0, 0, 0, 'tr', 0, 0, 0, NULL, '["5"]', 50),
(73, '{"5":"2469210702-FhfjY2FOUF7WstX2SjwhnfdW7svoVoWcUu1Ey6z","7":"2469210702-tf6SqEoiG51XRZY0vQzZonYTkhND4N1S0FAGxqv"}', '{"5":"YUudSAowtL9BIqdUVNuSh4tQSUqbYOteZFWN8DcqXwhmN","7":"16epUbs8yKXYoKcu1LmZfLfddDGlaGCAWeOsUpjLYa5GS"}', 2147483647, 'takipcisistemi_', 1400317728, 'http://pbs.twimg.com/profile_images/3123869543/6146b504c1a6faeaf1c62cabe5c050c3_normal.png', '', '', NULL, 10011, 28, 0, 0, 0, 'ja', 0, 0, 0, NULL, '["5","7"]', 50),
(76, '{"7":"526482551-YEl0cdxRE6EDopjHfgOfqvqAu7cZsQykXnTKryeW"}', '{"7":"jOL9SWdCgYSSTVIUcQlPN7BVBgxpg3IAZoWdZUHWWl0mw"}', 526482551, 'Nicol_vok', 1400497423, 'http://pbs.twimg.com/profile_images/1905407601/kuyg5bbbcefcacccbefa44_normal.jpg', 'USA, Alaska', 'considers the situation together with you is that you are several beers behind!', NULL, 30, 0, 0, 0, 0, 'en', 0, 0, 0, NULL, '["7"]', 20),
(77, '{"7":"405433385-uVSPW8VKM9nUW7HUge76f1La5xyN2OHcrt9hOqAe"}', '{"7":"AWGwvxO8joWuqMQ07IziIniuJNJpqxHXn1ZnC0H6vVBIy"}', 405433385, 'AlperEmil', 1400936876, 'http://pbs.twimg.com/profile_images/378800000717939546/ff2667a0a6fd0ebd0ced49a103656868_normal.jpeg', 'Çanakkale', 'Mustafa Kemal ATATÜRK', NULL, 528, 23, 0, 1, 0, 'tr', 0, 0, 0, NULL, '["7"]', 0),
(79, '{"7":"1322503110-BFf0VlGYuoTjSP8bEzC2Cc3jdLNLyFybkntKijl"}', '{"7":"ZFXv2WPkPF8fUqdgXVUiMChy4bvDoxaogbxOqqkhNaqDC"}', 1322503110, 'behramcelen', 1402847692, 'http://pbs.twimg.com/profile_images/456898029744705536/QQGWR-Nx_normal.jpeg', '', '', NULL, 114, 341, 0, 12, 0, 'en', 0, 0, 0, NULL, '["7"]', 50);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE IF NOT EXISTS `tickets` (
  `entry_id` int(20) NOT NULL AUTO_INCREMENT,
  `sender_mail` varchar(300) NOT NULL,
  `ticket_head` varchar(300) NOT NULL,
  `ticket_content` varchar(700) NOT NULL,
  `sender_ip` varchar(30) NOT NULL,
  `send_time` int(20) NOT NULL,
  `sender_sessions` text NOT NULL,
  `is_responsed` tinyint(1) NOT NULL,
  PRIMARY KEY (`entry_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`entry_id`, `sender_mail`, `ticket_head`, `ticket_content`, `sender_ip`, `send_time`, `sender_sessions`, `is_responsed`) VALUES
(4, 'sela@gmail.com', 'başlık ticket', 'ticket içerik merhaba', '109.200.1.58', 1400222393, '{"admin_logged_in":"1","_sf2_attributes":[],"_sf2_flashes":[],"_sf2_meta":{"u":1400089564,"c":1400089549,"l":"0"}}', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
