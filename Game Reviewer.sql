

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web programming`
--
CREATE DATABASE IF NOT EXISTS `web programming` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `web programming`;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `aid` int(11) NOT NULL,
  `Category` varchar(500) NOT NULL,
  `Subtitle` longtext NOT NULL,
  `Rating` smallint(6) NOT NULL,
  `Content` longtext NOT NULL,
  `Date` date NOT NULL,
  `AuthorID` int(11) NOT NULL,
  `ImagePath` mediumtext NOT NULL,
  `Title` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`aid`, `Category`, `Subtitle`, `Rating`, `Content`, `Date`, `AuthorID`, `ImagePath`, `Title`) VALUES
(1, 'PC', 'After a long year of gaming we analyze the best games of 2020', 5, '<p> Quarantine has affected us all and made us bored to an extreme level. Thankfully, games saved us for one more time in order to survive the quarantine. We made a research, and we found the 5 top games of 2020 that you should play with no doubt. Trust us, you will not regret it. </p> \r\n\r\n \r\n\r\n<h2> The Last of Us Part Two </h2> \r\n\r\n<img src= https://image.api.playstation.com/vulcan/img/rnd/202010/2618/w48z6bzefZPrRcJHc7L8SO66.png /> \r\n\r\n <p> The second part of the classic adventure role playing game that many loved is back with the second part and its very promising. The must-play game will give you an amazing experience of the adventure of Ellie and Joel that are trying to survive from a zombie apocalypse. Five years after their dangerous journey across the post-pandemic United States, Ellie and Joel have settled down in Jackson, Wyoming. Living amongst a thriving community of survivors has allowed them peace and stability, despite the constant threat of the infected and other, more desperate survivors. When a violent event disrupts that peace, Ellie embarks on a relentless journey to carry out justice and find closure. As she hunts those responsible one by one, she is confronted with the devastating physical and emotional repercussions of her actions. Maybe, this game suits perfectly in these strange times that we are living to ease our minds and give us the rush that we are missing right now. </p> \r\n\r\n<h2> Animal Crossing </h2> \r\n\r\n<img src= https://cdn-bb-eu1.insomnia.gr/file/insomnia-s3/monthly_2021_05/5723316_sd.jpg.f116c56b57df8ac6085ccd0be213acf3.jpg  /> \r\n\r\n<p> In another happier mood, Animal Crossing is the perfect no brainer game that you should play if you are a child or not, it does not really matter because is the perfect game for the whole family and for all ages. Just lay back and relax with Animal Crossing. In the Animal Crossing games, the player assumes the role of a human character who moves into a rural village populated with anthropomorphic animals and lives there indefinitely. Gameplay is open-ended: players have no defined objectives but are instead encouraged to spend their time in the village performing any number of activities, which include collecting items, planting plants or other items, and socializing with the village\'s residents. Animal Crossing games are played in real time, utilizing the video game console\'s internal clock and calendar. The game won the award of the best family game to play in 2020. </p> \r\n\r\n \r\n\r\n \r\n\r\n<h2> Ghost of Tsushima </h2> \r\n\r\n<img src=https://image.api.playstation.com/vulcan/ap/rnd/202010/0222/niMUubpU9y1PxNvYmDfb8QFD.png /> \r\n\r\n<p> Back to the adventure world a brand-new open world game came to give us the perfect adventure story that we did not know we wanted. host of Tsushima is a 2020 action-adventure game developed by Sucker Punch Productions and published by Sony Interactive Entertainment. Featuring an open world, the player controls Jin Sakai, a samurai on a quest to protect Tsushima Island during the first Mongol invasion of Japan. A must play game either you are a hardcore player or you just want to experience the perfect story. </p> \r\n\r\n \r\n\r\n \r\n\r\n \r\n\r\n \r\n\r\n<h2> Tony Hawks Pro Skater 1 + 2 </h2> \r\n\r\n<img src=https://threepixelslab.gr/wp-content/uploads/2021/02/pro_skater_1_2_next_gen_3pl.jpg /> \r\n\r\n<p> Yes, you read right. No, you did not actually travel back in time. Tony Hawks Pro Skater is back and remastered. It is a remaster of the first two games in the Tony Hawk\'s series: Tony Hawk\'s Pro Skater (1999) and Tony Hawk\'s Pro Skater 2 (2000) which were originally developed by Neversoft. It is the first major game in the series since Tony Hawk\'s Pro Skater 5 (2015) and is noted for being Vicarious Visions\' final work as a subsidiary of Activision before it was merged into Blizzard Entertainment in January 2021. A recommended action game for skaters and not only. </p> \r\n\r\n<h2> Cyberpunk 2077 </h2>  \r\n\r\n<img src=https://cdn.akamai.steamstatic.com/steam/apps/1091500/capsule_616x353.jpg?t=1615811936 /> \r\n\r\n<p> From the creators of the Witcher 3 another open world adventure game has come to give us the perfect dose of adrenaline that we all missed. Cyberpunk 2077 is an open-world, action-adventure story set in Night City, a megalopolis obsessed with power, glamour and body modification. You play as V, a mercenary outlaw going after a one-of-a-kind implant that is the key to immortality. You can customize your character’s cyberware, skillset and playstyle, and explore a vast city where the choices you make shape the story and the world around you. And it gets even better you can play with Keanu Reeves! </p>  ', '2020-05-13', 1, 'https://www.gamesindustrynetwork.com/public/files/6uu9msiojnh1kjsmgt8i/FortNite-Mobile-video-screenshot-Apps-Weekly-920x470.jpg', 'BEST GAMES OF 2020'),
(2, 'PC', 'After a long year of gaming we analyze the best games of 2021', 5, '<p> Quarantine has affected us all and made us bored to an extreme level. Thankfully, games saved us for one more time in order to survive the quarantine. We made a research, and we found the 5 top games of 2020 that you should play with no doubt. Trust us, you will not regret it. </p> \r\n\r\n \r\n\r\n<h2> The Last of Us Part Two </h2> \r\n\r\n<img src= https://image.api.playstation.com/vulcan/img/rnd/202010/2618/w48z6bzefZPrRcJHc7L8SO66.png /> \r\n\r\n <p> The second part of the classic adventure role playing game that many loved is back with the second part and its very promising. The must-play game will give you an amazing experience of the adventure of Ellie and Joel that are trying to survive from a zombie apocalypse. Five years after their dangerous journey across the post-pandemic United States, Ellie and Joel have settled down in Jackson, Wyoming. Living amongst a thriving community of survivors has allowed them peace and stability, despite the constant threat of the infected and other, more desperate survivors. When a violent event disrupts that peace, Ellie embarks on a relentless journey to carry out justice and find closure. As she hunts those responsible one by one, she is confronted with the devastating physical and emotional repercussions of her actions. Maybe, this game suits perfectly in these strange times that we are living to ease our minds and give us the rush that we are missing right now. </p> \r\n\r\n<h2> Animal Crossing </h2> \r\n\r\n<img src= https://cdn-bb-eu1.insomnia.gr/file/insomnia-s3/monthly_2021_05/5723316_sd.jpg.f116c56b57df8ac6085ccd0be213acf3.jpg /> \r\n\r\n<p> In another happier mood, Animal Crossing is the perfect no brainer game that you should play if you are a child or not, it does not really matter because is the perfect game for the whole family and for all ages. Just lay back and relax with Animal Crossing. In the Animal Crossing games, the player assumes the role of a human character who moves into a rural village populated with anthropomorphic animals and lives there indefinitely. Gameplay is open-ended: players have no defined objectives but are instead encouraged to spend their time in the village performing any number of activities, which include collecting items, planting plants or other items, and socializing with the village\'s residents. Animal Crossing games are played in real time, utilizing the video game console\'s internal clock and calendar. The game won the award of the best family game to play in 2020. </p> \r\n\r\n \r\n\r\n \r\n\r\n<h2> Ghost of Tsushima </h2> \r\n\r\n<img src=https://image.api.playstation.com/vulcan/ap/rnd/202010/0222/niMUubpU9y1PxNvYmDfb8QFD.png /> \r\n\r\n<p> Back to the adventure world a brand-new open world game came to give us the perfect adventure story that we did not know we wanted. host of Tsushima is a 2020 action-adventure game developed by Sucker Punch Productions and published by Sony Interactive Entertainment. Featuring an open world, the player controls Jin Sakai, a samurai on a quest to protect Tsushima Island during the first Mongol invasion of Japan. A must play game either you are a hardcore player or you just want to experience the perfect story. </p> \r\n\r\n \r\n\r\n \r\n\r\n \r\n\r\n \r\n\r\n<h2> Tony Hawks Pro Skater 1 + 2 </h2> \r\n\r\n<img src=https://threepixelslab.gr/wp-content/uploads/2021/02/pro_skater_1_2_next_gen_3pl.jpg /> \r\n\r\n<p> Yes, you read right. No, you did not actually travel back in time. Tony Hawks Pro Skater is back and remastered. It is a remaster of the first two games in the Tony Hawk\'s series: Tony Hawk\'s Pro Skater (1999) and Tony Hawk\'s Pro Skater 2 (2000) which were originally developed by Neversoft. It is the first major game in the series since Tony Hawk\'s Pro Skater 5 (2015) and is noted for being Vicarious Visions\' final work as a subsidiary of Activision before it was merged into Blizzard Entertainment in January 2021. A recommended action game for skaters and not only. </p> \r\n\r\n<h2> Cyberpunk 2077 </h2> \r\n\r\n<img src=https://cdn.akamai.steamstatic.com/steam/apps/1091500/capsule_616x353.jpg?t=1615811936 /> \r\n\r\n<p> From the creators of the Witcher 3 another open world adventure game has come to give us the perfect dose of adrenaline that we all missed. Cyberpunk 2077 is an open-world, action-adventure story set in Night City, a megalopolis obsessed with power, glamour and body modification. You play as V, a mercenary outlaw going after a one-of-a-kind implant that is the key to immortality. You can customize your character’s cyberware, skillset and playstyle, and explore a vast city where the choices you make shape the story and the world around you. And it gets even better you can play with Keanu Reeves! </p> ', '2020-05-14', 1, 'https://cdn.arstechnica.net/wp-content/uploads/2020/12/ars-games-of-the-year-2020.jpg', 'BEST GAMES OF 2021'),
(4, 'Nintendo', 'In this weeks log we explore the legend \"Mario Kart: Double Dash\"', 0, '<p>Mario Kart: Double Dash[a] (stylized as Mario Kart: Double Dash!!) is a 2003 kart racing video game developed by Nintendo Entertainment Analysis & Development and published by Nintendo for the GameCube (GCN). The game is the fourth instalment in the Mario Kart series and the third for home consoles after Mario Kart 64. It was preceded by Mario Kart: Super Circuit for the Game Boy Advance in 2001 and was followed by the handheld game Mario Kart DS, which was released for the Nintendo DS in 2005.</p>', '2021-05-19', 1, 'https://upload.wikimedia.org/wikipedia/en/7/78/Mario_Kart_Double_Dash.jpg', 'Mario Kart: Double Dash'),
(5, 'Playstation', 'Call of Duty: Black Ops is a 2010 first-person shooter video game developed by Treyarch.', 0, '<p> Call of Duty: Black Ops is a 2010 first-person shooter video game developed by Treyarch and published by Activision. It serves as the sequel to Call of Duty: World at War.\r\n\r\nSet in the 1960s during the Cold War, the game\'s campaign follows CIA operative Alex Mason as he attempts to recall certain memories in combat in order to locate a numbers station. This station is due to transmit broadcasts to sleeper agents who are bound to use chemical weapons across the United States. Mason and CIA operative Jason Hudson are the game\'s main playable characters, as well as Red Army soldier Viktor Reznov in only one mission. Locations featured in the game include Cuba, Laos, Vietnam, the Soviet Union, the United States, Hong Kong, and the Arctic Circle. The multiplayer of Black Ops features multiple objective-based game modes that are playable on 14 different maps included with the game. Improvements to loadout options and killstreak rewards are made. A form of virtual currency, COD Points, allows players to purchase weapons and customization options for their in-game character, as well as attachments and customization options for their weapon. </p>', '2021-05-20', 1, 'https://www.dexerto.com/wp-content/uploads/2020/01/black-ops-header-1024x576.jpg', 'Call of Duty Black Ops.'),
(6, 'Playstation', 'The infamous, Halo 5 reviewed by Kostas', 5, '<p> Halo 5: Guardians is a 2015 first-person shooter video game developed by 343 Industries and published by Microsoft Studios for the Xbox One. The fifth mainline entry and tenth overall in the Halo series, it was released worldwide on October 27, 2015. The game\'s plot follows two fireteams of human super soldiers: Blue Team, led by Master Chief, and Fireteam Osiris, led by Spartan Locke. When the former goes absent without leave to track down the artificial intelligence construct Cortana, Master Chief\'s loyalty is called into question and Fireteam Osiris is sent to retrieve him. </p>', '2021-05-26', 1, 'https://thumbor.forbes.com/thumbor/fit-in/1200x0/filters%3Aformat%28jpg%29/https%3A%2F%2Fblogs-images.forbes.com%2Fjasonevangelho%2Ffiles%2F2015%2F10%2Fhalo5_keyart_1120_logo--1940x1091.jpg', 'Halo 5: Guardian'),
(7, 'PC', 'Doom Eternal is a first-person shooter game developed by id Software and published by Bethesda Softworks', 0, '<p> Doom Eternal is a first-person shooter game developed by id Software and published by Bethesda Softworks. The sequel to Doom (2016), and the fifth main game in the Doom series, it was released on March 20, 2020, for Windows, PlayStation 4, Stadia and Xbox One, with a version for Nintendo Switch being released on December 8, 2020 and versions for PlayStation 5 and Xbox Series X and Series S being planned. Set some time after the events of the 2016 game, the story follows the Doomguy once again, on a mission to end Hell\'s consumption of Earth and foil the alien Maykr\'s plans to exterminate humanity.\r\n\r\nAlong with the single-player campaign, a multiplayer mode titled \"Battle mode\" was introduced. In this mode, players can either play as the Doom Slayer or as a demon, and fight until either the Doom Slayer defeats the demons, or vice versa. Another mode, titled \"Invasion\", is currently in development. Players will be able to join other player\'s single-player campaigns and fight each other. The Ancient Gods, a two-part standalone campaign DLC set after the events of the main game, was released between October 2020 and March 2021. </p>', '2021-05-21', 1, 'https://images.ctfassets.net/rporu91m20dc/2OJbYNR1jGuKc0akweMGQK/5ec7e4aaddb887a9478d5c412296f659/DOOM-Eternal_KeyArt_3_1920x1080.jpg', 'Doom Eternal'),
(63, 'Playstation', 'The second part of the classic adventure role playing game that many loved is back with the second part and its very promising.', 2, '<p><span style=\"color: rgb(0, 0, 0);\">The second part of the classic adventure role playing game that many loved is back with the second part and its very promising. The must-play game will give you an amazing experience of the adventure of Ellie and Joel that are trying to survive from a zombie apocalypse. Five years after their dangerous journey across the post-pandemic United States, Ellie and Joel have settled down in Jackson, Wyoming. Living amongst a thriving community of survivors has allowed them peace and stability, despite the constant threat of the infected and other, more desperate survivors. When a violent event disrupts that peace, Ellie embarks on a relentless journey to carry out justice and find closure. As she hunts those responsible one by one, she is confronted with the devastating physical and emotional repercussions of her actions. Maybe, this game suits perfectly in these strange times that we are living to ease our minds and give us the rush that we are missing right now.</span></p><p><br></p>', '2021-05-25', 1, 'https://i.ytimg.com/vi/eOiUtRF8k28/maxresdefault.jpg', 'The Last of Us Part Two'),
(64, 'Nintendo', 'In another happier mood, Animal Crossing is the perfect no brainer game', 5, '<p><span style=\"color: rgb(0, 0, 0);\">In another happier mood, Animal Crossing is the perfect no brainer game that you should play if you are a child or not, it does not really matter because is the perfect game for the whole family and for all ages. Just lay back and relax with Animal Crossing. In the Animal Crossing games, the player assumes the role of a human character who moves into a rural village populated with anthropomorphic animals and lives there indefinitely. Gameplay is open-ended: players have no defined objectives but are instead encouraged to spend their time in the village performing any number of activities, which include collecting items, planting plants or other items, and socializing with the villages residents. Animal Crossing games are played in real time, utilizing the video game consoles internal clock and calendar. The game won the award of the best family game to play in 2020.</span></p>', '2021-05-25', 1, 'https://www.nintendo.com/content/dam/noa/en_US/games/switch/a/animal-crossing-new-horizons-switch/animal-crossing-new-horizons-switch-hero.jpg', 'Animal Crossing'),
(65, 'Playstation', 'Back to the adventure world a brand-new open world', 4, '<p><span style=\"color: rgb(0, 0, 0);\">Back to the adventure world a brand-new open world game came to give us the perfect adventure story that we did not know we wanted. host of Tsushima is a 2020 action-adventure game developed by Sucker Punch Productions and published by Sony Interactive Entertainment. Featuring an open world, the player controls Jin Sakai, a samurai on a quest to protect Tsushima Island during the first Mongol invasion of Japan. A must play game either you are a hardcore player or you just want to experience the perfect story.</span></p>', '2021-05-25', 1, 'https://preview.redd.it/8loiah8414a51.png?width=1727&format=png&auto=webp&s=ff7ba08c4f611434a0625b6bd165ec747ef5abeb', 'Ghost of Tsushima'),
(66, 'PC', 'Yes, you read right.', 5, '<p><span style=\"color: rgb(0, 0, 0);\">Yes, you read right. No, you did not actually travel back in time. Tony Hawks Pro Skater is back and remastered. It is a remaster of the first two games in the Tony Hawks series: Tony Hawks Pro Skater (1999) and Tony Hawks Pro Skater 2 (2000) which were originally developed by Neversoft. It is the first major game in the series since Tony Hawks Pro Skater 5 (2015) and is noted for being Vicarious Visions final work as a subsidiary of Activision before it was merged into Blizzard Entertainment in January 2021. A recommended action game for skaters and not only.</span></p>', '2021-05-25', 1, 'https://threepixelslab.gr/wp-content/uploads/2021/02/pro_skater_1_2_next_gen_3pl.jpg', 'Tony Hawks Pro Skater 1 + 2'),
(67, 'XBOX', 'From the creators of the Witcher 3', 3, '<p><span style=\"color: rgb(0, 0, 0);\">From the creators of the Witcher 3 another open world adventure game has come to give us the perfect dose of adrenaline that we all missed. Cyberpunk 2077 is an open-world, action-adventure story set in Night City, a megalopolis obsessed with power, glamour and body modification. You play as V, a mercenary outlaw going after a one-of-a-kind implant that is the key to immortality. You can customize your characters cyberware, skillset and playstyle, and explore a vast city where the choices you make shape the story and the world around you. And it gets even better you can play with Keanu Reeves!</span></p>', '2021-05-25', 1, 'https://live.staticflickr.com/65535/48104421887_f3d24a6ea9_b.jpg', 'Cyberpunk 2077'),
(68, 'Others', 'Half-Life: Alyx is a 2020 virtual reality (VR) first-person shooter', 5, '<p><span style=\"color: rgb(0, 0, 0);\">Half-Life: Alyx is a 2020 virtual reality (VR) first-person shooter developed and published by Valve. Set between the events of Half-Life (1998) and Half-Life 2 (2004), players control Alyx Vance on a mission to seize a superweapon belonging to the alien Combine. Players use VR to interact with the environment and fight enemies, using \"gravity gloves\" to manipulate objects, similarly to the gravity gun from Half-Life 2. Traditional Half-Life elements return, such as physics puzzles, combat, exploration and survival horror elements.</span></p><p><br></p>', '2021-05-25', 1, 'https://i.ytimg.com/vi/O2W0N3uKXmo/maxresdefault.jpg', 'Half-Life: Alyx'),
(69, 'Others', 'Welcome to Poker Club.', 4, '<p><span style=\"color: rgb(0, 0, 0);\">Welcome to Poker Club. Live the life of a poker pro in the most immersive poker simulation ever seen, with Ultra HD 4K visuals and breath-taking ray tracing. Join a community of online players on their way to the top and track your progress in more than 10 Texas Hold them tournament modes. Whether you’re a seasoned poker pro or brand new to the table, perfect your play style for the chance to win big.</span></p><p><br></p>', '2021-05-25', 1, 'https://www.enternity.gr/files/Image/NewsVideo/eGBCYlJ1Sd4.jpg', 'Poker Club');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

DROP TABLE IF EXISTS `authors`;
CREATE TABLE `authors` (
  `auid` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`auid`, `username`, `password`, `name`) VALUES
(1, 'minos29', 'minos12345678', 'Minos Spetsiotakis');

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

DROP TABLE IF EXISTS `homepage`;
CREATE TABLE `homepage` (
  `hid` int(11) NOT NULL,
  `ARTICLE_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`hid`, `ARTICLE_ID`) VALUES
(1, 0),
(2, 2),
(3, 4),
(4, 5),
(6, 6),
(7, 7),
(8, 62);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `List` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `password`, `List`) VALUES
(1, 'Bitounis23', 'kokoko', ',1,2,3,'),
(2, 'Minos', '123', ''),
(3, 'koo', 'koo', ',7,');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`auid`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `auid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
