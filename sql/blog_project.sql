-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 12:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

CREATE TABLE `activity_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `activity` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `user_name`, `user_id`, `post_id`) VALUES
(1, 'Wow!..admin very nice post', 'dushyant', 1, 1),
(2, 'nice post', 'dushyant', 1, 4),
(3, 'hello hi', 'dushyant', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`) VALUES
(1, 'himanshu', 'himanshulpu1@gmail.com', 'cdsdafdsds');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_10_160719_create_posts_table', 2),
(6, '2023_12_13_172908_create_comments_table', 3),
(7, '2023_12_14_084514_create_contacts_table', 4),
(8, '2023_12_14_094640_create_contacts_table', 5),
(9, '2023_12_14_112307_create_activity_logs_table', 6),
(10, '2023_12_15_063737_create_comments_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `post_status` varchar(255) DEFAULT NULL,
  `usertype` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `image`, `name`, `user_id`, `post_status`, `usertype`) VALUES
(1, 'The best Use of Tech Gadgets', 'In the fast-evolving landscape of technology, gadgets have become indispensable companions in our daily lives. From the sleek smartphones that keep us connected to the world, to the cutting-edge smartwatches that monitor our health in real-time, tech gadgets have revolutionized the way we live, work, and play. These devices, powered by innovative engineering and sophisticated software, seamlessly integrate into our routines, enhancing efficiency and entertainment. Whether it\'s the latest virtual reality headset that transports us to new realms or the compact fitness trackers that motivate healthier lifestyles, tech gadgets cater to a diverse range of needs. The market buzzes with excitement over futuristic foldable phones, intelligent home assistants, and eco-friendly innovations. As we embrace the era of smart living, tech gadgets continue to captivate our imagination, promising a future where connectivity and convenience go hand in hand, shaping the way we navigate the world.', '1702318058.png', 'admin', '2', 'active', 'admin'),
(2, 'The delicious South Indian Food', 'Image of Dosa filled with vegetablesOpens in a new window\r\n\r\nSouth Indian cuisine is a vibrant and diverse culinary experience, offering a delightful explosion of flavors and textures. From the creamy comfort of idli and sambar to the crispy goodness of dosa and vada, South Indian food is a symphony of taste and aroma. This regional culinary treasure trove boasts a unique blend of spices and ingredients, often incorporating coconut, lentils, and rice to create dishes that are both delicious and healthy. South Indian food is not just about the main course, it\'s also a celebration of fermented rice batter used to make fluffy appam, savory puttu, and sweet payasam. Each region within South India adds its own unique twist to the cuisine, making it a journey of discovery for the adventurous palate. So, if you\'re looking for an exotic and flavorful culinary adventure, look no further than South Indian food!', '1702318134.png', 'admin', '2', 'active', 'admin'),
(3, 'Benifits of engaging in Sports', 'Sports are a vital part of human culture, offering physical and emotional benefits for people of all ages and abilities. From the thrill of competition to the camaraderie of teamwork, sports provide an outlet for exercise, skill development, and social interaction. They push us to our limits, test our endurance, and teach us valuable lessons about perseverance, sportsmanship, and discipline. Whether it\'s the grace and power of a gymnast, the precision and focus of an archer, or the raw athleticism of a football player, sports inspire us with their displays of human potential. Beyond the competition, sports play a significant role in bringing communities together, fostering a sense of belonging, and generating excitement and passion. From the roar of the crowd at a packed stadium to the quiet determination of a lone runner on a trail, sports have the power to move us and leave us feeling exhilarated, motivated, and connected to something larger than ourselves.', '1702325483.png', 'bhomik', '3', 'active', 'user'),
(4, 'How to maintain Heart Health', 'Several key factors contribute to heart health, including a balanced diet low in saturated and trans fats, regular physical activity, managing stress, and maintaining a healthy weight. Additionally, avoiding smoking and excessive alcohol consumption can significantly reduce your risk of heart disease.\r\n\r\nRegular checkups with your doctor and monitoring key health metrics, such as blood pressure and cholesterol levels, are essential for identifying potential problems early and implementing preventative measures.\r\n\r\nBy prioritizing heart health through healthy lifestyle choices and preventative care, you can significantly improve your quality of life and reduce your risk of heart disease, the leading cause of death globally.', '1702325817.png', 'bhomik', '3', 'active', 'user'),
(6, 'Trading for beginners', 'Starting trading can seem daunting, but it doesn\'t have to be. Here\'s a simplified guide to get you going:\r\n\r\n1. Educate yourself:\r\n\r\nFinancial literacy: Understand basic finance terms and concepts.\r\nMarket dynamics: Learn how supply, demand, and news affect prices.\r\nTrading strategies: Explore different techniques like fundamental analysis and technical analysis.\r\nRisk management: Learn to limit potential losses using stop-loss orders and other strategies.\r\n2. Choose your platform:\r\n\r\nResearch online brokers: Compare fees, features, and user interface.\r\nStart with a demo account: Practice with virtual money before risking real funds.\r\nFocus on one asset class: Begin with stocks, options, or forex to avoid spreading yourself thin.\r\n3. Start small:\r\n\r\nInvest only what you can afford to lose.\r\nDiversify your portfolio across different companies or sectors to spread risk.\r\nDon\'t chase quick profits, focus on long-term investment strategies.\r\n4. Be patient and disciplined:\r\n\r\nTrading success takes time and consistent effort.\r\nLearn from your mistakes and adapt your approach.\r\nDon\'t panic sell during market downturns.\r\nAdditional resources:\r\n\r\nBooks: \"The Intelligent Investor\" by Benjamin Graham, \"Trading in the Zone\" by Mark Douglas.\r\nWebsites: Investopedia, The Motley Fool, Zacks Investment Research.\r\nOnline courses: Udemy, Coursera, Khan Academy.\r\nRemember, trading involves inherent risks. Always prioritize education, research, and responsible risk management before investing your hard-earned money.', '1702398402.png', 'harman', '4', 'active', 'user'),
(8, 'How to start learning AI', '1\r\nDemystifying AI: A Beginner\'s Guide to Learning\r\nThe world of Artificial Intelligence (AI) might seem intimidating, but with the right approach, anyone can embark on this exciting journey. Here\'s a simplified guide to get you started:\r\n\r\n1. Build Your Foundation:\r\n\r\nLearn Programming: Python is the most popular language for AI, with free online resources and courses to help you get started.\r\nUnderstand Math Basics: Brush up on your algebra, linear algebra, and calculus, as these form the mathematical backbone of AI.\r\nExplore AI Concepts: Start with fundamental concepts like machine learning, deep learning, and neural networks through books, articles, and online tutorials.\r\n2. Choose Your Learning Path:\r\n\r\nStructured Learning: Enroll in online courses offered by platforms like Coursera, edX, or Udacity. These courses provide a structured curriculum and offer guidance from experienced instructors.\r\nSelf-Directed Learning: Utilize online resources like books, articles, tutorials, and open-source projects to learn at your own pace.\r\nInteractive Learning: Engage with online communities like Kaggle and forums to connect with other learners and participate in AI projects.\r\n3. Practice and Experiment:\r\n\r\nStart with Simple Projects: Use online platforms like TensorFlow Playground or Deeplearning.ai to experiment with basic AI concepts.\r\nParticipate in Kaggle Competitions: Compete in online challenges hosted by Kaggle to apply your skills to real-world datasets and problems.\r\nBuild Your Own Projects: Choose a project that interests you and use your acquired knowledge to build your own AI application.\r\nAdditional Resources:\r\n\r\nBooks: \"Artificial Intelligence: A Modern Approach\" by Stuart Russell and Peter Norvig, \"Hands-On Machine Learning with Scikit-Learn, Keras & TensorFlow\" by Aurélien Géron.\r\nWebsites: Google AI, OpenAI, TensorFlow, scikit-learn.\r\nYouTube Channels: Two Minute Papers, 3Blue1Brown, Lex Fridman.\r\nRemember, learning AI is a continuous journey. Be patient, persistent, and embrace the process of experimentation and learning from mistakes. With dedication and the right resources, you can unlock the fascinating world of AI and contribute to its exciting future.\r\n\r\nSources', '1702400097.png', 'dushyant', '1', 'active', 'user'),
(9, 'How to start earning online', 'To embark on earning online, individuals can explore various opportunities across different platforms. One avenue is freelancing, where skills like writing, graphic design, programming, and digital marketing are in high demand. Websites such as Upwork, Fiverr, and Freelancer provide platforms to connect freelancers with clients globally. Another avenue is online content creation through platforms like YouTube, blogging, or podcasting. Content creators can monetize their work through advertising, sponsorships, or affiliate marketing. E-commerce offers opportunities for those interested in selling products, either through established platforms like Etsy or eBay or by creating their online store using platforms like Shopify. Additionally, participating in online surveys, testing websites, or engaging in affiliate marketing programs can provide additional streams of income. Learning and leveraging digital skills, staying informed about online trends, and consistently delivering high-quality work are essential steps to build a sustainable online income. As the online landscape is dynamic, adaptability, resilience, and continuous learning contribute to long-term success in the ever-evolving world of online earning.', '1702456646.png', 'harshit', '6', 'active', 'user'),
(11, 'How to start a Youtube Channel', 'Embarking on a YouTube channel is an exciting venture that requires thoughtful planning and creativity. Begin by defining your channel\'s niche and target audience, ensuring it aligns with your passion or expertise. Conduct thorough research to understand your audience\'s preferences and trends within your chosen niche. Craft a compelling and memorable channel name that reflects your content. Invest in quality recording equipment, such as a decent camera, microphone, and video editing software, to enhance the production value of your videos. Develop a consistent posting schedule to engage your audience and build anticipation. Create eye-catching thumbnails and write intriguing video titles and descriptions to attract viewers. Leverage social media platforms to promote your channel and connect with your audience. Be authentic and passionate in front of the camera, allowing your personality to shine through. As you grow, pay attention to audience feedback, continually refine your content, and stay updated on YouTube\'s algorithm changes. Most importantly, enjoy the process, stay persistent, and let your unique voice resonate with your viewers.', '1702459070.jpg', 'harshit', '6', 'active', 'user'),
(13, 'Things you need to know before buying an Iphone 15', 'Before purchasing the iPhone 15, there are several key considerations to keep in mind. Firstly, familiarize yourself with the device\'s specifications and features to ensure they align with your needs and preferences. Apple tends to introduce innovative technologies with each new iPhone iteration, so it\'s essential to understand the advancements and improvements present in the iPhone 15. Consider factors such as the camera capabilities, processing speed, display quality, and battery life, as these aspects significantly contribute to the overall user experience. Additionally, research the compatibility of the iPhone 15 with your existing accessories and software, ensuring a seamless integration into your tech ecosystem.\r\n\r\nFurthermore, be mindful of the pricing and available storage options, as these vary based on the model and configuration. Assess whether the features offered justify the cost and opt for a storage capacity that accommodates your usage patterns. Explore user reviews and expert opinions to gain insights into the device\'s real-world performance, potential issues, and overall satisfaction among users.\r\n\r\nMoreover, consider the longevity of software support provided by Apple. iPhones typically receive updates for several years, ensuring access to the latest features and security enhancements. Lastly, evaluate the availability of service centers and warranty options in your region, as these factors contribute to a hassle-free ownership experience.\r\n\r\nIn summary, a well-informed decision requires an understanding of the iPhone 15\'s specifications, compatibility with your existing devices, user reviews, pricing, storage options, software support, and available after-sales services. Taking the time to research and consider these aspects will help you make a confident and satisfactory purchase decision.', '1702462931.jpg', 'harman', '4', 'active', 'user'),
(15, 'Best cooking oil for Heart Health', 'For optimal heart health, choosing the right cooking oil is like picking a trusty teammate. Forget the saturated fat-laden contenders, the best oils for your ticker are monounsaturated and polyunsaturated stars. These champions offer a double-whammy: they lower your \"bad\" LDL cholesterol while keeping your \"good\" HDL cholesterol happy, reducing your risk of heart disease.\r\n\r\nSo, who are these heart-healthy heroes? Extra virgin olive oil (EVOO) is a Mediterranean champion, boasting antioxidants and anti-inflammatory properties. Grapeseed oil shines with its high smoke point, ideal for high-heat cooking. Avocado oil, with its buttery richness, is a versatile winner for dressings and sauces. And don\'t forget about canola oil, a budget-friendly option rich in Omega-3s.', '1702495720.png', 'kanan', '7', 'pending', 'user'),
(16, 'Importance of Yoga in our life', 'In our fast-paced world, where stress and anxiety loom large, the ancient practice of yoga offers a welcome sanctuary. Its importance extends far beyond physical postures, weaving a tapestry of benefits that enrich our lives on multiple levels:\r\n\r\nPhysical: Yoga improves flexibility, strength, and balance, reducing aches and pains. It boosts cardiovascular health and improves sleep quality, leaving you feeling energized and revitalized.\r\n\r\nMental: The practice of mindfulness cultivates focus and clarity, reducing stress and anxiety. Yoga teaches us to breathe deeply and observe our thoughts without judgment, fostering inner peace and resilience.\r\n\r\nEmotional: Yoga helps us connect with ourselves on a deeper level, releasing pent-up emotions and cultivating self-compassion. It fosters emotional well-being by promoting positive self-image and reducing reactivity.\r\n\r\nSpiritual: Yoga isn\'t just about poses, it\'s a journey of self-discovery. It connects us to something larger than ourselves, fostering a sense of purpose and connection to the world around us.\r\n\r\nIn a world increasingly dominated by technology and its demands, yoga offers a holistic approach to well-being. By integrating it into our lives, even for just a few minutes each day, we can cultivate a sense of calmness, strength, and inner peace that resonates far beyond the mat.\r\n\r\nSo, unroll your yoga mat, take a deep breath, and discover the transformative power of yoga. Your body, mind, and spirit will thank you for it.', '1702495886.jpg', 'kanan', '7', 'active', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'user',
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `usertype`, `email`, `email_verified_at`, `password`) VALUES
(1, 'dushyant', 'user', 'dushyant@gmail.com', NULL, '$2y$12$6hSC453ZfT6svyFxAL5VHOCZHsAzm8aeuf/DPo.evjz9mpJYCBOgu'),
(2, 'admin', 'admin', 'admin@gmail.com', NULL, '$2y$12$bMMADPWfysaLTZquMbyw.uZDv0SgFCVzO.sd79FjrkIid416QlqM6'),
(3, 'bhomik', 'user', 'bhomik@gmail.com', NULL, '$2y$12$tW1C/1J5AHf0B2Wwc9/7QOInScFyoGI28PMc/bzQm8X1TkriWxOxy'),
(4, 'harman', 'user', 'harman@gmail.com', NULL, '$2y$12$8EdC0QZ6oRRKccfuCBGvIuNsYG9A80bivsLVPCTGiZ.j5gJ8XZCtK'),
(5, 'himanshu', 'user', 'himanshu@gmail.com', NULL, '$2y$12$p78ux.ae4jfwWNco0Oy.3.Y4hKVL21C7yhr/t2wKlO6h0EV7tCAL2'),
(6, 'harshit', 'user', 'harshit@gmail.com', NULL, '$2y$12$u9SW9oKDIJfnRQfD/bL00OxW3fYf2gRHMvb8JaVPQ3AcS/OlEm.Ky'),
(7, 'kanan', 'user', 'kanan@gmail.com', NULL, '$2y$12$6ff/2vmj2zBOQCwEJnkwi.6QzzuoG/xkEXikybDcVEJ5JWB4iqVfm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
