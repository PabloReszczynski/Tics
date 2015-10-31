CREATE TABLE Users(
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) NOT NULL,
  `apellido` varchar(15),
  `avatar` varchar(20),
  `email` varchar(30),
  `username` varchar(10) NOT NULL UNIQUE,
  `password` varchar(20) NOT NULL,
  `status` int NOT NULL DEFAULT 0,
  `registro` date,
  `ultima_sesion` date,

  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Tutorias(
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(15) NOT NULL,
  `texto` text NOT NULL,
  `fecha` date,
  `cupos` real,
  `tag` varchar(15),
  `user` int NOT NULL,

  PRIMARY KEY (`id`),
  FOREIGN KEY (`user`)
  REFERENCES Users(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Reviews(
  `id` int NOT NULL AUTO_INCREMENT,
  `review` text(200) NOT NULL,
  `fecha` date,
  `poster` int NOT NULL,
  `tutoria` int NOT NULL,

  PRIMARY KEY (`id`),
  FOREIGN KEY (`poster`)
  REFERENCES Users(`id`),
  FOREIGN KEY (`tutoria`)
  REFERENCES Tutorias(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `Users` (`nombre`, `apellido`, `avatar`, `email`, `username`, `password`, `status`, `registro`, `ultima_sesion`) VALUES
('user01', 'user01', NULL, 'user01@xx.cl', 'user01', 'password', 0, NOW(), NOW()),
('user02', 'user02', NULL, 'user02@xx.cl', 'user02', 'password', 0, NOW(), NOW()),
('user03', 'user03', NULL, 'user03@xx.cl', 'user03', 'password', 0, NOW(), NOW()),
('user04', 'user04', NULL, 'user04@xx.cl', 'user04', 'password', 0, NOW(), NOW()),
('user05', 'user05', NULL, 'user05@xx.cl', 'user05', 'password', 0, NOW(), NOW()),
('user06', 'user06', NULL, 'user06@xx.cl', 'user06', 'password', 0, NOW(), NOW()),
('user07', 'user07', NULL, 'user07@xx.cl', 'user07', 'password', 0, NOW(), NOW()),
('user08', 'user08', NULL, 'user08@xx.cl', 'user08', 'password', 0, NOW(), NOW()),
('user09', 'user09', NULL, 'user09@xx.cl', 'user09', 'password', 0, NOW(), NOW()),
('user10', 'user10', NULL, 'user10@xx.cl', 'user10', 'password', 0, NOW(), NOW());
