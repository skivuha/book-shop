-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Апр 09 2015 г., 11:16
-- Версия сервера: 5.6.21
-- Версия PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `user3`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE IF NOT EXISTS `authors` (
`idAuthors` int(11) NOT NULL,
  `Name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`idAuthors`, `Name`) VALUES
(1, 'Robin Nixon'),
(2, 'Josh Lockhart'),
(3, ' Luke Welling'),
(4, 'Laura Thomson'),
(5, 'Kevin Tatroe'),
(6, 'Peter MacIntyre'),
(7, ' Larry Ullman'),
(8, 'David Sklar'),
(9, 'Adam Trachtenberg'),
(10, ' Jon Duckett'),
(11, 'David Flanagan'),
(12, 'Adam Freeman'),
(13, 'Herbert Schildt'),
(14, 'Cay S. Horstmann'),
(15, 'Antonio Goncalves'),
(16, 'Dr. Danny Coward'),
(17, 'John Sharp'),
(18, 'Andrew Troelsen'),
(19, 'Rod Stephens'),
(20, 'Joseph Albahari'),
(21, 'David Flanagan'),
(22, 'Lucas Carlson'),
(23, 'Ophir Frieder'),
(24, 'Sam Ruby');

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE IF NOT EXISTS `books` (
`idBook` int(11) NOT NULL,
  `Name` varchar(250) DEFAULT NULL,
  `Description` mediumtext,
  `Price` float DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`idBook`, `Name`, `Description`, `Price`) VALUES
(1, 'Learning PHP, MySQL & JavaScript With jQuery, CSS & HTML5', 'Build interactive, data-driven websites with the potent combination of open-source technologies and web standards, even if you only have basic HTML knowledge. With this popular hands-on guide, you''ll tackle dynamic web programming with the help of today''s core technologies: PHP, MySQL, JavaScript, jQuery, CSS, and HTML5.\r\nExplore each technology separately, learn how to use them together, and pick up valuable web programming practices along the way. At the end of the book, you''ll put everything together to build a fully functional social networking site, using XAMPP or any development stack of your choice.', 33.25),
(2, 'Modern PHP New Features and Good Practices', 'PHP is experiencing a renaissance, though it may be difficult to tell with all of the outdated PHP tutorials online. With this practical guide, you’ll learn how PHP has become a full-featured, mature language with object-orientation, namespaces, and a growing collection of reusable component libraries.\r\n\r\nAuthor Josh Lockhart—creator of PHP The Right Way, a popular initiative to encourage PHP best practices—reveals these new language features in action. You’ll learn best practices for application architecture and planning, databases, security, testing, debugging, and deployment. If you have a basic understanding of PHP and want to bolster your skills, this is your book.', 26.44),
(3, 'PHP and MySQL Web Development (4th Edition)', 'PHP and MySQL are popular open-source technologies that are ideal for quickly developing database-driven Web applications. PHP is a powerful scripting language designed to enable developers to create highly featured Web applications quickly, and MySQL is a fast, reliable database that integrates well with PHP and is suited for dynamic Internet-based applications.\r\n\r\nPHP and MySQL Web Development shows how to use these tools together to produce effective, interactive Web applications. It clearly describes the basics of the PHP language, explains how to set up and work with a MySQL database, and then shows how to use PHP to interact with the database and the server.', 32.34),
(4, 'Programming PHP', 'This updated edition teaches everything you need to know to create effective web applications with the latest features in PHP 5.x. You’ll start with the big picture and then dive into language syntax, programming techniques, and other details, using examples that illustrate both correct usage and common idioms.\r\n\r\nIf you have a working knowledge of HTML, the authors’ many style tips and practical programming advice will help you become a top-notch PHP programmer.', 29.24),
(5, 'PHP and MySQL for Dynamic Web Sites Visual QuickPro Guide (4th Edition)', 'It hasn''t taken Web developers long to discover that when it comes to creating dynamic, database-driven Web sites, MySQL and PHP provide a winning open-source combination. Add this book to the mix, and there''s no limit to the powerful, interactive Web sites that developers can create. With step-by-step instructions, complete scripts, and expert tips to guide readers, veteran author and database designer Larry Ullman gets right down to business: After grounding readers with separate discussions of first the scripting language (PHP) and then the database program (MySQL), he goes on to cover security, sessions and cookies, and using additional Web tools, with several sections devoted to creating sample applications.', 31.28),
(6, 'PHP Cookbook Solutions & Examples for PHP Programmers', 'Want to understand a certain PHP programming technique? Or learn how to accomplish a particular task? This cookbook is the first place to look. With more than 350 code-rich recipes revised for PHP 5.4 and 5.5, this third edition provides updated solutions for generating dynamic web content—everything from using basic data types to querying databases, and from calling RESTful APIs to testing and securing your site.\r\n\r\nEach recipe includes code solutions that you can freely use, along with a discussion of how and why they work. Whether you’re an experienced PHP programmer or coming to PHP from another language, this book is an ideal on-the-job resource.', 40.88),
(7, 'JavaScript and JQuery - Interactive Front-End Web Development', 'This full-color book will show you how to make your websites more interactive and your interfaces more interesting and intuitive.\r\n\r\nTHIS BOOK COVERS:\r\nBasic programming concepts - assuming no prior knowledge of programming beyond an ability to create a web page using HTML & CSS\r\nCore elements of the JavaScript language - so you can learn how to write your own scripts from scratch\r\njQuery - which will allow you to simplify the process of writing scripts (this is introduced half-way through the book once you have a solid understanding of JavaScript)\r\nHow to recreate techniques you will have seen on other web sites such as sliders, content filters, form validation, updating content using Ajax, and much more (these examples demonstrate writing your own scripts from scratch and how the theory you have learned is put into practice).', 26.93),
(8, 'JavaScript The Definitive Guide - Activate Your Web Pages (Definitive Guides)', 'Since 1996, JavaScript: The Definitive Guide has been the bible for JavaScript programmers—a programmer''s guide and comprehensive reference to the core language and to the client-side JavaScript APIs defined by web browsers.\r\n\r\nThe 6th edition covers HTML5 and ECMAScript 5. Many chapters have been completely rewritten to bring them in line with today''s best web development practices. New chapters in this edition document jQuery and server side JavaScript. It''s recommended for experienced programmers who want to learn the programming language of the Web, and for current JavaScript programmers who want to master it.', 24.99),
(9, 'Web Design with HTML, CSS, JavaScript and jQuery Set', 'This two-book set combines the titles HTML & CSS: Designing and Building Web Sites and JavaScript & jQuery: Interactive Front-End Development. Together these two books form an ideal platform for anyone who wants to master HTML and CSS before stepping up to JavaScript and jQuery.\r\n\r\nHTML & CSS covers structure, text, links, images, tables, forms, useful options, adding style with CSS, fonts, colors, thinking in boxes, styling lists and tables, layouts, grids, and even SEO, Google analytics, ftp, and HTML5. JavaScript & jQuery offers an excellent combined introduction to these two technologies using a clear and simple visual approach using diagrams, infographics, and photographs.', 38.69),
(10, 'Pro AngularJS (Expert''s Voice in Web Development)', 'AngularJS is the leading framework for building dynamic JavaScript applications that take advantage of the capabilities of modern browsers and devices. AngularJS, which is maintained by Google, brings the power of the Model-View-Controller (MVC) pattern to the client, providing the foundation for complex and rich web apps. It allows you to build applications that are smaller, faster, and with a lighter resource footprint than ever before.\r\n\r\nBest-selling author Adam Freeman explains how to get the most from AngularJS. He begins by describing the MVC pattern and the many benefits that can be gained from separating your logic and presentation code. He then shows how you can use AngularJS''s features within in your projects to produce professional-quality results. Starting from the nuts-and-bolts and building up to the most advanced and sophisticated features AngularJS is carefully unwrapped, going in-depth to give you the knowledge you need.', 42.74),
(11, 'Java - A Beginner''s Guide', 'Fully updated for Java Platform, Standard Edition 8 (Java SE 8), Java: A Beginner''s Guide, Sixth Edition gets you started programming in Java right away. Bestselling programming author Herb Schildt begins with the basics, such as how to create, compile, and run a Java program. He then moves on to the keywords, syntax, and constructs that form the core of the Java language. This Oracle Press resource also covers some of Java''s more advanced features, including multithreaded programming, generics, and Swing. Of course, new Java SE 8 features such as lambda expressions and default interface methods are described. An introduction to JavaFX, Java''s newest GUI, concludes this step-by-step tutorial.', 24.37),
(12, 'Core Java for the Impatient', 'The release of Java SE 8 introduced significant enhancements that impact the Core Java technologies and APIs at the heart of the Java platform. Many old Java idioms are no longer required and new features like lambda expressions will increase programmer productivity, but navigating these changes can be challenging.\r\n \r\nCore Java® for the Impatient is a complete but concise guide to Java SE 8. Written by Cay Horstmann—the author of Java SE 8 for the Really Impatient and Core Java™, the classic, two-volume introduction to the Java language—this indispensable new tutorial offers a faster, easier pathway for learning the language and libraries. Given the size of the language and the scope of the new features introduced in Java SE 8, there’s plenty of material to cover, but it’s presented in small chunks organized for quick access and easy understanding.', 34.35),
(13, 'Beginning Java EE 7 (Expert Voice in Java)', 'Java Enterprise Edition (Java EE) continues to be one of the leading Java technologies and platforms. Beginning Java EE 7 is the first tutorial book on Java EE 7.\r\n\r\nStep by step and easy to follow, this book describes many of the Java EE 7 specifications and reference implementations, and shows them in action using practical examples. This definitive book also uses the newest version of GlassFish to deploy and administer the code examples.\r\n\r\nWritten by an expert member of the Java EE specification request and review board in the Java Community Process (JCP), this book contains the best information possible, from an expert’s perspective on enterprise Java technologies.', 47.49),
(14, 'Java EE 7 - The Big Picture', 'Java EE 7: The Big Picture uniquely explores the entire Java EE 7 platform in an all-encompassing style while examining each tier of the platform in enough detail so that you can select the right technologies for specific project needs. In this authoritative guide, Java expert Danny Coward walks you through the code, applications, and frameworks that power the platform. Take full advantage of the robust capabilities of Java EE 7, increase your productivity, and meet enterprise demands with help from this Oracle Press resource.', 34.38),
(15, 'Microsoft Visual C# 2013 Step by Step (Step by Step Developer)', 'Expand your expertise—and teach yourself the fundamentals of Microsoft Visual C# 2013. If you have previous programming experience but are new to Visual C# 2013, this tutorial delivers the step-by-step guidance and coding exercises you need to master core topics and techniques.', 30),
(16, 'Pro C# 5.0 and the .NET 4.5 Framework (Expert''s Voice in .NET)', 'This comes on top of award winning coverage of core C# features, both old and new, that have made the previous editions of this book so popular (you''ll find everything from generics to pLINQ covered here).\r\nThe mission of this text is to provide you with a rock-solid foundation in the C# programming language and the core aspects of the .NET platform (assemblies, remoting, Windows Forms, Web Forms, ADO.NET, XML web services, etc.). Once you digest the information presented in these 25 chapters, you’ll be in a perfect position to apply this knowledge to your specific programming assignments, and you’ll be well equipped to explore the .NET universe on your own terms.', 41.85),
(17, 'C# 5.0 Programmer''s Reference', 'Stay ahead of the game with this comprehensive guide to the C# programming language Well-known C# expert Rod Stephens gives novice and experienced developers a comprehensive tutorial and reference to standard C#. This new title fully covers the latest C# language standard, C# 5.0, as well as its implementation in the 2013 release of Visual Studio. The author provides exercises and solutions; and his C# Helper website will provide readers and students with ongoing support. This resource is packed with tips, tricks, tutorials, examples, and exercises and is the perfect professional companion for programmers who want to stay ahead of the game. Author Rod Stephens is a well-known programming authority and has written more than 25 programming books covering C#, Java, VB, and other languages. His books have sold more than 60,000 copies in multiple editions. This book''s useful exercises and solutions are designed to support training and higher education adoptions. Learn the full range of C# programming language features Quickly locate information for specific language features in the reference section Familiarize yourself with handling data types, variables, constants, and much more Experiment with editing and debugging code and using LINQ Beginning through intermediate-level programmers will benefit from the accessible style of C# 5.0 Programmer''s Reference and will have access to its comprehensive range of more advanced topics. Additional support and complementary material are provided at the C# Helper website, www.csharphelper.com . Stay up-to-date and improve your programming skills with this invaluable resource.', 35.7),
(18, 'C# 5.0 in a Nutshell - The Definitive Reference', 'When you have a question about C# 5.0 or the .NET CLR, this bestselling guide has precisely the answers you need. Uniquely organized around concepts and use cases, this updated fifth edition features a reorganized section on concurrency, threading, and parallel programming—including in-depth coverage of C# 5.0’s new asynchronous functions.\r\n\r\nShaped by more than 20 expert reviewers, including Microsoft’s Eric Lippert, Stephen Toub, Chris Burrows, and Jon Skeet, this book has all you need to stay on track with C# 5.0. It’s widely known as the definitive reference on the language.', 38.85),
(19, 'The Ruby Programming Language', 'This book begins with a quick-start tutorial to the language, and then explains the language in detail from the bottom up: from lexical and syntactic structure to datatypes to expressions and statements and on through methods, blocks, lambdas, closures, classes and modules.\r\n\r\nThe book also includes a long and thorough introduction to the rich API of the Ruby platform, demonstrating -- with heavily-commented example code -- Ruby''s facilities for text processing, numeric manipulation, collections, input/output, networking, and concurrency. An entire chapter is devoted to Ruby''s metaprogramming capabilities.', 26.81),
(20, 'Ruby Cookbook', 'Why spend time on coding problems that others have already solved when you could be making real progress on your Ruby project? This updated cookbook provides more than 350 recipes for solving common problems, on topics ranging from basic data structures, classes, and objects, to web development, distributed programming, and multithreading.\r\n\r\nRevised for Ruby 2.1, each recipe includes a discussion on why and how the solution works. You’ll find recipes suitable for all skill levels, from Ruby newbies to experts who need an occasional reference. With Ruby Cookbook, you’ll not only save time, but keep your brain percolating with new ideas as well.', 40.36),
(21, 'Computer Science Programming Basics in Ruby', 'If you know basic high-school math, you can quickly learn and apply the core concepts of computer science with this concise, hands-on book. Led by a team of experts, you’ll quickly understand the difference between computer science and computer programming, and you’ll learn how algorithms help you solve computing problems.\r\n\r\nEach chapter builds on material introduced earlier in the book, so you can master one core building block before moving on to the next. You’ll explore fundamental topics such as loops, arrays, objects, and classes, using the easy-to-learn Ruby programming language. Then you’ll put everything together in the last chapter by programming a simple game of tic-tac-toe.', 23.51),
(22, 'Agile Web Development with Rails 4 (Facets of Ruby)', 'Rails just keeps on changing. Both Rails 3 and 4, as well as Ruby 1.9 and 2.0, bring hundreds of improvements, including new APIs and substantial performance enhancements. The fourth edition of this award-winning classic has been reorganized and refocused so it''s more useful than ever before for developers new to Ruby and Rails.\r\n\r\nRails 4 introduces a number of user-facing changes, and the ebook has been updated to match all the latest changes and new best practices in Rails. This includes full support for Ruby 2.0, controller concerns, Russian Doll caching, strong parameters, Turbolinks, new test and bin directory layouts, and much more.\r\n\r\nRuby on Rails helps you produce high-quality, beautiful-looking web applications quickly. You concentrate on creating the application, and Rails takes care of the details.', 29.74);

-- --------------------------------------------------------

--
-- Структура таблицы `books_has_authors`
--

CREATE TABLE IF NOT EXISTS `books_has_authors` (
  `Books_idBook` int(11) NOT NULL,
  `Authors_idAuthors` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `books_has_authors`
--

INSERT INTO `books_has_authors` (`Books_idBook`, `Authors_idAuthors`) VALUES
(1, 1),
(1, 2),
(2, 2),
(3, 2),
(5, 3),
(5, 4),
(4, 5),
(4, 6),
(3, 7),
(6, 8),
(6, 9),
(7, 10),
(9, 10),
(8, 11),
(10, 12),
(11, 13),
(12, 14),
(13, 15),
(14, 16),
(15, 17),
(16, 18),
(17, 19),
(18, 20),
(19, 21),
(20, 22),
(21, 23),
(22, 24);

-- --------------------------------------------------------

--
-- Структура таблицы `books_has_language`
--

CREATE TABLE IF NOT EXISTS `books_has_language` (
  `Books_idBook` int(11) NOT NULL,
  `Language_idLanguage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `books_has_language`
--

INSERT INTO `books_has_language` (`Books_idBook`, `Language_idLanguage`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 3),
(12, 3),
(13, 3),
(14, 3),
(15, 4),
(16, 4),
(17, 4),
(18, 4),
(19, 5),
(20, 5),
(21, 5),
(22, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `discount`
--

CREATE TABLE IF NOT EXISTS `discount` (
`idDiscount` int(11) NOT NULL,
  `Value` float DEFAULT NULL,
  `Name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `discount`
--

INSERT INTO `discount` (`idDiscount`, `Value`, `Name`) VALUES
(2, 5, 'First level'),
(3, 7, 'Second level'),
(4, 9, 'Third level'),
(5, 11, 'Fourth level'),
(6, 13, 'Five level');

-- --------------------------------------------------------

--
-- Структура таблицы `itemsorder`
--

CREATE TABLE IF NOT EXISTS `itemsorder` (
`idItemsOrder` int(11) NOT NULL,
  `Count` int(11) DEFAULT NULL,
  `Price` float DEFAULT NULL,
  `Books_idBook` int(11) NOT NULL,
  `Orders_idOrders` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `language`
--

CREATE TABLE IF NOT EXISTS `language` (
`idLanguage` int(11) NOT NULL,
  `Name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `language`
--

INSERT INTO `language` (`idLanguage`, `Name`) VALUES
(1, 'PHP'),
(2, 'Java Script'),
(3, 'Java'),
(4, 'C#'),
(5, 'Ruby');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
`idOrders` int(11) NOT NULL,
  `Date` datetime DEFAULT CURRENT_TIMESTAMP,
  `Summary` float DEFAULT NULL,
  `Users_idUser` int(11) NOT NULL,
  `Status_idStatus` int(11) NOT NULL,
  `Payment_idPayment` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
`idPayment` int(11) NOT NULL,
  `Name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `payment`
--

INSERT INTO `payment` (`idPayment`, `Name`) VALUES
(1, 'Google Wallet'),
(2, 'Amazon Payments'),
(3, 'PayPal'),
(4, 'WebMoney'),
(5, 'LiqPay'),
(6, 'Cash on delivery');

-- --------------------------------------------------------

--
-- Структура таблицы `shoppingcart`
--

CREATE TABLE IF NOT EXISTS `shoppingcart` (
`idShoppingCart` int(11) NOT NULL,
  `Count` int(11) DEFAULT NULL,
  `Price` float DEFAULT NULL,
  `Users_idUser` int(11) NOT NULL,
  `Books_idBook` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

CREATE TABLE IF NOT EXISTS `status` (
`idStatus` int(11) NOT NULL,
  `Name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `status`
--

INSERT INTO `status` (`idStatus`, `Name`) VALUES
(1, 'Issued'),
(2, 'Delivering'),
(3, 'Delivered'),
(4, 'Paid'),
(5, 'Finished');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`idUser` int(11) NOT NULL,
  `Login` varchar(45) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Discount_idDiscount` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`idUser`, `Login`, `Email`, `Password`, `Discount_idDiscount`) VALUES
(16, 'my name is Dima', 'sad@asd.sd', '$2a$08$Td7wYYvwnnbnH.fiSXwxkOEyIuV/qUSL98OX8e.VvClSwuJUGV/Jq', 2),
(17, 'new Name', 'd.shuliakov@gmail.com', '$2a$08$738g2EPHPUwZmON4wShpMeXV4Qf4Tfuo9u8tVpgvMUP53NtrdMZwS', NULL),
(18, 'New names', 'sds@mail.ru', '$2a$08$BIjk2t8GtpM6uSHcKpIW0eJkz/dfSPfqQa49vbc3VJssGwnzG2IDi', NULL),
(19, 'dsadsadsadsadsadsdsad', 'sad@asd.ryu', '$2a$08$jKTkFYJa56jeEn5oULDUWe0Lg/n/YNNPEdcJuuTXN/GNADf9l3WYi', NULL),
(20, 'wednesday', 'dsadsadasd@mail.ru', '$2a$08$QWomgwwhFeR/b9TDDKPt7eQTTFMw47hienF6ou.c4RWVW.EWYP/02', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
 ADD PRIMARY KEY (`idAuthors`);

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
 ADD PRIMARY KEY (`idBook`);

--
-- Индексы таблицы `books_has_authors`
--
ALTER TABLE `books_has_authors`
 ADD PRIMARY KEY (`Books_idBook`,`Authors_idAuthors`), ADD KEY `fk_Books_has_Authors_Authors1_idx` (`Authors_idAuthors`), ADD KEY `fk_Books_has_Authors_Books1_idx` (`Books_idBook`);

--
-- Индексы таблицы `books_has_language`
--
ALTER TABLE `books_has_language`
 ADD PRIMARY KEY (`Books_idBook`,`Language_idLanguage`), ADD KEY `fk_Books_has_Language_Language1_idx` (`Language_idLanguage`), ADD KEY `fk_Books_has_Language_Books1_idx` (`Books_idBook`);

--
-- Индексы таблицы `discount`
--
ALTER TABLE `discount`
 ADD PRIMARY KEY (`idDiscount`);

--
-- Индексы таблицы `itemsorder`
--
ALTER TABLE `itemsorder`
 ADD PRIMARY KEY (`idItemsOrder`), ADD KEY `fk_ItemsOrder_Books1_idx` (`Books_idBook`), ADD KEY `fk_ItemsOrder_Orders1_idx` (`Orders_idOrders`);

--
-- Индексы таблицы `language`
--
ALTER TABLE `language`
 ADD PRIMARY KEY (`idLanguage`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`idOrders`), ADD KEY `fk_Orders_Users1_idx` (`Users_idUser`), ADD KEY `fk_Orders_Status1_idx` (`Status_idStatus`), ADD KEY `fk_Orders_Payment1_idx` (`Payment_idPayment`);

--
-- Индексы таблицы `payment`
--
ALTER TABLE `payment`
 ADD PRIMARY KEY (`idPayment`);

--
-- Индексы таблицы `shoppingcart`
--
ALTER TABLE `shoppingcart`
 ADD PRIMARY KEY (`idShoppingCart`), ADD KEY `fk_ShoppingCart_Users1_idx` (`Users_idUser`), ADD KEY `fk_ShoppingCart_Books1_idx` (`Books_idBook`);

--
-- Индексы таблицы `status`
--
ALTER TABLE `status`
 ADD PRIMARY KEY (`idStatus`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`idUser`), ADD KEY `fk_Users_Discount1_idx` (`Discount_idDiscount`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `authors`
--
ALTER TABLE `authors`
MODIFY `idAuthors` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
MODIFY `idBook` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT для таблицы `discount`
--
ALTER TABLE `discount`
MODIFY `idDiscount` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `itemsorder`
--
ALTER TABLE `itemsorder`
MODIFY `idItemsOrder` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT для таблицы `language`
--
ALTER TABLE `language`
MODIFY `idLanguage` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
MODIFY `idOrders` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT для таблицы `payment`
--
ALTER TABLE `payment`
MODIFY `idPayment` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `shoppingcart`
--
ALTER TABLE `shoppingcart`
MODIFY `idShoppingCart` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
MODIFY `idStatus` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `books_has_authors`
--
ALTER TABLE `books_has_authors`
ADD CONSTRAINT `fk_Books_has_Authors_Authors1` FOREIGN KEY (`Authors_idAuthors`) REFERENCES `authors` (`idAuthors`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Books_has_Authors_Books1` FOREIGN KEY (`Books_idBook`) REFERENCES `books` (`idBook`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `books_has_language`
--
ALTER TABLE `books_has_language`
ADD CONSTRAINT `fk_Books_has_Language_Books1` FOREIGN KEY (`Books_idBook`) REFERENCES `books` (`idBook`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Books_has_Language_Language1` FOREIGN KEY (`Language_idLanguage`) REFERENCES `language` (`idLanguage`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `itemsorder`
--
ALTER TABLE `itemsorder`
ADD CONSTRAINT `fk_ItemsOrder_Books1` FOREIGN KEY (`Books_idBook`) REFERENCES `books` (`idBook`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_ItemsOrder_Orders1` FOREIGN KEY (`Orders_idOrders`) REFERENCES `orders` (`idOrders`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
ADD CONSTRAINT `fk_Orders_Payment1` FOREIGN KEY (`Payment_idPayment`) REFERENCES `payment` (`idPayment`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Orders_Status1` FOREIGN KEY (`Status_idStatus`) REFERENCES `status` (`idStatus`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Orders_Users1` FOREIGN KEY (`Users_idUser`) REFERENCES `users` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `shoppingcart`
--
ALTER TABLE `shoppingcart`
ADD CONSTRAINT `fk_ShoppingCart_Books1` FOREIGN KEY (`Books_idBook`) REFERENCES `books` (`idBook`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_ShoppingCart_Users1` FOREIGN KEY (`Users_idUser`) REFERENCES `users` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
ADD CONSTRAINT `fk_Users_Discount1` FOREIGN KEY (`Discount_idDiscount`) REFERENCES `discount` (`idDiscount`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
