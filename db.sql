CREATE TABLE `ads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `subtitle` varchar(255) NOT NULL DEFAULT '',
  `content` mediumtext NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `position` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

INSERT INTO `ads` (id, title, subtitle, content, status, position) VALUES ('1', 'Header', '(Appears on all pages right under the nav bar)', '&lt;div &gt;\r\n&lt;a href=&quot;#&quot;&gt;\r\n&lt;img src=&quot;https://dummyimage.com/200x400/bababa/ebecf5.jpg&quot;/&gt;\r\n&lt;/a&gt;\r\n&lt;/div&gt;', '1', 'header');
INSERT INTO `ads` (id, title, subtitle, content, status, position) VALUES ('2', 'Footer', '(Appears on all pages right before the footer)', '&lt;div &gt;\r\n&lt;a href=&quot;#&quot;&gt;\r\n&lt;img src=&quot;https://wicombit.com/demo/banner.jpg&quot;/&gt;\r\n&lt;/a&gt;\r\n&lt;/div&gt;', '1', 'footer');
INSERT INTO `ads` (id, title, subtitle, content, status, position) VALUES ('3', 'Sidebar', '(Appears on all pages right on left bar)', '&lt;div &gt;\r\n&lt;a href=&quot;#&quot;&gt;\r\n&lt;img src=&quot;https://wicombit.com/demo/sidebar.jpg&quot;/&gt;\r\n&lt;/a&gt;\r\n&lt;/div&gt;', '1', 'sidebar');

CREATE TABLE `brand` (
  `st_favicon` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT 'favicon.png' CHECK (json_valid(`st_favicon`)),
  `st_whitelogo` varchar(150) NOT NULL DEFAULT 'whitelogo.png',
  `st_darklogo` varchar(150) NOT NULL DEFAULT 'darklogo.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci ROW_FORMAT=COMPACT;

INSERT INTO `brand` (st_favicon, st_whitelogo, st_darklogo) VALUES ('{\"android-chrome-192x192\":\"android-chrome-192x192.png\",\"android-chrome-512x512\":\"android-chrome-512x512.png\",\"apple-touch-icon\":\"apple-touch-icon.png\",\"favicon-16x16\":\"favicon-16x16.png\",\"favicon-32x32\":\"favicon-32x32.png\",\"favicon\":\"favicon.ico\",\"webmanifest\":\"site.webmanifest\"}', 'st_logo_light_676a1776a22819.22110494.webp', 'st_logo_dark_676a1776a6e180.31937129.webp');

CREATE TABLE `settings` (
  `st_sitename` varchar(150) DEFAULT NULL,
  `st_description` mediumtext DEFAULT NULL,
  `st_keywords` mediumtext DEFAULT NULL,
  `st_og_image` varchar(255) DEFAULT NULL,
  `st_facebook` varchar(150) DEFAULT NULL,
  `st_twitter` varchar(150) DEFAULT NULL,
  `st_instagram` varchar(150) DEFAULT NULL,
  `st_youtube` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

INSERT INTO `settings` (st_sitename, st_description, st_keywords, st_og_image, st_facebook, st_twitter, st_instagram, st_youtube) VALUES ('PhpStart - Minifrmawork ', 'PhpStart es un Minifrmawork hecha por Pirulug', 'phpstart, php, css, js, html, bootstrap', 'og_image_67762987da114900532615.webp', 'https://facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.youtube.com/');

CREATE TABLE `smtp` (
  `st_smtphost` varchar(150) NOT NULL,
  `st_smtpemail` varchar(150) NOT NULL,
  `st_smtppassword` varchar(150) NOT NULL,
  `st_smtpport` varchar(150) NOT NULL,
  `st_smtpencrypt` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci ROW_FORMAT=COMPACT;

INSERT INTO `smtp` (st_smtphost, st_smtpemail, st_smtppassword, st_smtpport, st_smtpencrypt) VALUES ('-', '-', '-', '-', '-');

CREATE TABLE `user_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) NOT NULL,
  `action` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

INSERT INTO `user_logs` (id, user_id, action, description, timestamp) VALUES ('1', '1', 'Ingreso', 'admin Ingreso.', '2024-12-17 23:39:18');
INSERT INTO `user_logs` (id, user_id, action, description, timestamp) VALUES ('2', '1', 'Ingreso', 'admin ingresó automáticamente con cookie.', '2024-12-18 23:36:39');
INSERT INTO `user_logs` (id, user_id, action, description, timestamp) VALUES ('3', '1', 'Ingreso', 'admin ingresó automáticamente con cookie.', '2024-12-21 07:45:23');
INSERT INTO `user_logs` (id, user_id, action, description, timestamp) VALUES ('4', '1', 'Salir', 'admin salió.', '2024-12-21 09:22:28');
INSERT INTO `user_logs` (id, user_id, action, description, timestamp) VALUES ('5', '1', 'Ingreso', 'admin Ingreso.', '2024-12-21 09:33:41');
INSERT INTO `user_logs` (id, user_id, action, description, timestamp) VALUES ('6', '1', 'Ingreso', 'admin Ingreso.', '2024-12-22 22:41:03');
INSERT INTO `user_logs` (id, user_id, action, description, timestamp) VALUES ('7', '1', 'Ingreso', 'admin ingresó automáticamente con cookie.', '2024-12-23 20:24:57');
INSERT INTO `user_logs` (id, user_id, action, description, timestamp) VALUES ('8', '1', 'Ingreso', 'admin ingresó automáticamente con cookie.', '2024-12-23 22:03:34');
INSERT INTO `user_logs` (id, user_id, action, description, timestamp) VALUES ('9', '1', 'Ingreso', 'admin ingresó automáticamente con cookie.', '2024-12-23 22:26:01');
INSERT INTO `user_logs` (id, user_id, action, description, timestamp) VALUES ('10', '1', 'Salir', 'admin salió.', '2024-12-23 22:26:34');
INSERT INTO `user_logs` (id, user_id, action, description, timestamp) VALUES ('11', '1', 'Ingreso', 'admin Ingreso.', '2024-12-23 22:27:43');
INSERT INTO `user_logs` (id, user_id, action, description, timestamp) VALUES ('12', '1', 'Salir', 'admin salió.', '2024-12-24 00:33:07');
INSERT INTO `user_logs` (id, user_id, action, description, timestamp) VALUES ('13', '1', 'Ingreso', 'admin Ingreso.', '2024-12-24 00:33:17');
INSERT INTO `user_logs` (id, user_id, action, description, timestamp) VALUES ('14', '1', 'Salir', 'admin salió.', '2024-12-24 00:45:43');
INSERT INTO `user_logs` (id, user_id, action, description, timestamp) VALUES ('15', '1', 'Ingreso', 'admin Ingreso.', '2024-12-24 00:45:52');
INSERT INTO `user_logs` (id, user_id, action, description, timestamp) VALUES ('16', '1', 'Ingreso', 'admin ingresó automáticamente con cookie.', '2024-12-30 19:39:40');
INSERT INTO `user_logs` (id, user_id, action, description, timestamp) VALUES ('17', '1', 'Ingreso', 'admin ingresó automáticamente con cookie.', '2024-12-31 21:22:34');
INSERT INTO `user_logs` (id, user_id, action, description, timestamp) VALUES ('18', '1', 'Ingreso', 'admin ingresó automáticamente con cookie.', '2025-01-01 08:34:01');
INSERT INTO `user_logs` (id, user_id, action, description, timestamp) VALUES ('19', '1', 'Ingreso', 'admin Ingreso.', '2025-01-02 01:13:52');
INSERT INTO `user_logs` (id, user_id, action, description, timestamp) VALUES ('20', '1', 'Ingreso', 'admin ingresó automáticamente con cookie.', '2025-01-11 19:05:26');

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 3,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

INSERT INTO `users` (id, name, email, password, role, status, updated, created) VALUES ('1', 'admin', 'admin@admin.com', 'VWpZK25XUGxDS0k1MVd2bGdxbFhXZz09', '1', '1', '2024-12-17 23:39:11', '2024-12-17 23:39:11');

CREATE TABLE `visits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(255) NOT NULL,
  `visit_date` date NOT NULL,
  `visit_count` int(11) DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

INSERT INTO `visits` (id, page, visit_date, visit_count) VALUES ('1', '/', '2023-11-15', '60');
INSERT INTO `visits` (id, page, visit_date, visit_count) VALUES ('2', '/profile', '2022-11-15', '1');
INSERT INTO `visits` (id, page, visit_date, visit_count) VALUES ('3', '/signout', '2022-11-15', '100');
INSERT INTO `visits` (id, page, visit_date, visit_count) VALUES ('4', '/signin', '2021-11-15', '300');
INSERT INTO `visits` (id, page, visit_date, visit_count) VALUES ('5', '/signup', '2020-11-15', '500');
INSERT INTO `visits` (id, page, visit_date, visit_count) VALUES ('8', '/', '2024-12-22', '44');
INSERT INTO `visits` (id, page, visit_date, visit_count) VALUES ('9', '/profile', '2024-12-21', '33');
INSERT INTO `visits` (id, page, visit_date, visit_count) VALUES ('11', '/profile', '2024-11-13', '100');
INSERT INTO `visits` (id, page, visit_date, visit_count) VALUES ('12', '/profile', '2024-10-15', '150');
INSERT INTO `visits` (id, page, visit_date, visit_count) VALUES ('13', '/', '2024-12-20', '110');
INSERT INTO `visits` (id, page, visit_date, visit_count) VALUES ('14', '/profile', '2024-12-19', '200');
INSERT INTO `visits` (id, page, visit_date, visit_count) VALUES ('15', '/', '2024-12-23', '67');
INSERT INTO `visits` (id, page, visit_date, visit_count) VALUES ('25', 'Home', '2024-12-24', '9');
INSERT INTO `visits` (id, page, visit_date, visit_count) VALUES ('26', 'Profile', '2024-12-24', '8');
INSERT INTO `visits` (id, page, visit_date, visit_count) VALUES ('27', '404', '2024-12-24', '2');
INSERT INTO `visits` (id, page, visit_date, visit_count) VALUES ('28', 'Sign out', '2024-12-24', '1');
INSERT INTO `visits` (id, page, visit_date, visit_count) VALUES ('29', 'Sign in', '2024-12-24', '5');
INSERT INTO `visits` (id, page, visit_date, visit_count) VALUES ('30', 'Sign up', '2024-12-24', '5');
INSERT INTO `visits` (id, page, visit_date, visit_count) VALUES ('31', 'Home', '2024-12-30', '3');
INSERT INTO `visits` (id, page, visit_date, visit_count) VALUES ('32', '404', '2024-12-30', '9');
INSERT INTO `visits` (id, page, visit_date, visit_count) VALUES ('33', 'Home', '2024-12-31', '2');
INSERT INTO `visits` (id, page, visit_date, visit_count) VALUES ('34', '404', '2024-12-31', '5');
INSERT INTO `visits` (id, page, visit_date, visit_count) VALUES ('35', 'Home', '2025-01-01', '18');
INSERT INTO `visits` (id, page, visit_date, visit_count) VALUES ('36', 'Profile', '2025-01-01', '6');
INSERT INTO `visits` (id, page, visit_date, visit_count) VALUES ('37', '404', '2025-01-01', '25');
INSERT INTO `visits` (id, page, visit_date, visit_count) VALUES ('38', 'Home', '2025-01-02', '52');
INSERT INTO `visits` (id, page, visit_date, visit_count) VALUES ('39', '404', '2025-01-02', '31');
INSERT INTO `visits` (id, page, visit_date, visit_count) VALUES ('40', 'Home', '2025-01-11', '1');
INSERT INTO `visits` (id, page, visit_date, visit_count) VALUES ('41', 'Home', '2025-01-12', '3');

