-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2023 at 06:20 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artiku`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `synopsis` text NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `slug`, `image`, `title`, `synopsis`, `content`, `created_at`, `updated_at`, `user_id`) VALUES
(3, 'azura', '64128df68990e-Beby Azzura.jpg', 'Azura', 'Azura', 'bebbbyy', '2023-03-15 20:33:10', '2023-03-16 00:22:37', 2),
(5, 'lorem', '641aa7e90bff3-Lorem Ipsum.png', 'Lorem', 'Lorem', 'Lorem Ipsum', '2023-03-22 00:02:01', '2023-03-30 21:02:58', 1),
(6, 'whatever-2', '6424fd329fc2b-Whatever.png', 'Whatever', 'Whatever', 'Today, I am going to teach you some very American expressions that\'s coming up. What\'s up everyone? Welcome to interactive English, which is the place you want to be to practice and improve your English skills. And the way we\'re going to do that today is I am going to teach you some expressions that are very common in the US and these expressions may be used in other English speaking countries as well, but some of them are very specific to the US and as we go through them, I will let you know which ones those are. So let\'s begin with our first expression. And that is it, it\'s one of my favorite expressions. It\'s very easy. It\'s just one word. And that is whatever. Now, as a pronoun, we can use this word to mean well, a lack of restriction or limitations. And people might say something like, well, you can do whatever you want. You can say whatever you want in those comments down below, you can write whatever you want. No, I mean you\'re in good shape and you can eat whatever you want. Take whatever you want. Tell you what. You play whatever you want. But we can also use this word as an informal exclamation to show a reluctance to continue talking or to, to continue having a discussion. And it kind of just shows a bit of indifference. Like, you know, I don\'t care. It doesn\'t matter to me. So when I think about the word being used like this, I think about people having an emotional conversation, maybe even an argument and one person just doesn\'t want to talk about it anymore. They may just say, you know what, whatever I\'m done talking, whatever, Believe what would you want to believe? I don\'t even care. Whatever. You want to mount it on the left or the right or the middle? Whatever. \r\n\r\n\r\nMY BAD\r\nThe next expression is one that I use a lot. I like using this expression and it is informal and it\'s just my bad. And when somebody says my bad, they are acknowledging that that they made a mistake, they did something wrong and it\'s not really a really, really horrible mistake because then I think you want to be a little more apologetic. But if it\'s just something small and you\'re know, oh, okay, I did something wrong. My bad. Often I think it\'s used quite frequently in sports. When you\'re having a competition and you play on a team and somebody makes a mistake and they\'ll just say, oh, okay, my bad. You will see this in basketball, soccer, football, and any team sport, somebody makes a mistake. They may, they may point to themselves and say, you know, Oh yeah, my bad. Sorry. My bad. \r\n\r\nLOSE TOUCH WITH (SOMEONE)\r\nThen we have an expression which, which is more of an idiom and that is to lose touch with someone and when you lose touch with somebody, it means that you just, you stop communicating with them. And I think common, it happens especially over a long period of time that we, we have friends, but then we lose touch as the years go on and on and on and you just, you\'re just not communicating with people. I hope that we never lose touch and that you are constantly writing to me and communicating with me and, and we always stay in touch, which would be the opposite. That means you keep communicating. \r\n\r\nThere\'s an extra one there for you, “but if you don\'t want to stay in touch with me, whatever, I\'m just kidding. My bad. I, I really, I don\'t want to lose touch with all of you.” You know, after high school you just kind of lose touch. \r\n\r\nPLEAD THE FIFTH(5TH)\r\nThen we have an expression, which is, is definitely very American. It\'s part of the United States and that is to plead the fifth. Now when somebody says, you know, Oh, I plead the fifth, then they may say it informally and you might hear this on TV and movies, but what it really means is that it\'s talking about the Fifth Amendment and in the u s constitution, the Fifth Amendment means that you, you don\'t have to talk about something because you don\'t want to incriminate yourself. Let me explain that in case it doesn\'t make sense that say that you are witness to something wrong, but you yourself also did something a bit wrong and they call you to testify against this other person. They say, oh, can I, I want you to tell us what happened, but you don\'t want to talk about it because you also did something a little wrong. You might say, you know, I plead the fifth. I don\'t want to talk about this situation because basically I\'m going to be admitting to a crime as well that I committed, so I\'m going to plead the fifth. That\'s a little civics lesson for you, but this expression, it can also be used in situations outside of that context said, even if you\'re talking to your husband or wife about something and you, you don\'t want to be completely honest about a situation because maybe you did something wrong. You can say, ah, you know, I, I plead the fifth. Could I plead the fifth? The fifth is just used to protect yourself. I\'m pleading the fifth. Just try to keep your secrets. I dare you. Please tell me that you haven\'t planned anything big tonight. On your birthday. Sorry, but I plead the fifth.\r\n\r\nI COULDN’T CARE LESS\r\nThen we have an expression which is commonly confused. And that expression is, I couldn\'t care less. So if somebody says, you know, I, I couldn\'t care less. It just means that the, the amount of concern that they have about something could not be less. This is the least thing that they could possibly be concerned about. I couldn\'t care less. Now often, I think this is used in kind of the heat of the moment when you\'re, you\'re talking about uh, something and you want to tell this person, look, I don\'t care. I couldn\'t care less, but people will confuse it and they say, well, I could care less. And that means kind of, you know, the opposite that you\'re, there are many other things that you could care less about and that\'s not what you want to say. So keep that in mind. Don\'t confuse it with, I could care less. I couldn\'t care less. That\'s the one you want. Stick with that. You just want more money for yourself. Don\'t you? Couldn\'t care less. I couldn\'t care less about the commendation. Amy, thank you for sticking up for me. Oh, I honestly couldn\'t care less. \r\n\r\nLIKE\r\nThen we have another, I guess it\'s just one word and that is like, now I want to, I\'m putting this in there just for your, your comprehension. Not for you to go out and use it. This is something that you might hear young teenagers use and they use it as a meaningless interjection when they\'re having a conversation just during their, their informal speech. It just may be riddled with like, like, like, like life and people get into these bad habits and it just takes time to grow out of them. So if you\'re watching a a TV show or movie that is about high school, then you might hear it a bit more so it\'s more for your comprehension, not for you to try and just go out and use and start using this. It\'s just for you to be aware of it. So let me try to give you an example. So I like wanted to go to the movies this weekend with my friend, but she was like, I can\'t because I have to do my homework and we can like hang out that night, which meant I didn\'t do anything, which was like totally boring. Okay. All right. That, that sounded ridiculous, especially hearing me say that. But I\'m going to say it again and now I\'m just going to take out all of those likes and you tell me if you think it makes more sense. So I wanted to go to the movies this weekend with my friend, but she said she can\'t because she had to do homework and we couldn\'t hang out that night, which meant that I didn\'t do anything, which was very boring. So as you can see, I think it\'s much easier to understand when we, when we take those likes out. But again, if you are listening to a teenager talk in the United States, especially, I think if you\'re in places like California, then you may hear this word used quite often in China on this deck. Chandler let it slip that process in love with Rachel. He was like, oh my God.\r\n\r\nTO GIVE (SOMEONE) PROPS\r\n The next expression is to give someone props. And this is actually a bit of slang. It may be more regional and it depends on your age that that you might say this or maybe you might hear this expression, but to give someone props means that you are recognizing them. You are acknowledging them for for some reason something that they did. Again, it\'s very informal so think of it maybe in the [inaudible] just to give you an example at at work you\'re like, yeah my, my boss really gave me props for all the hard work I did. I want to give all of you guys props for watching our video lessons. You guys are like the best. It\'s just, it just sounds awkward and unnatural. When I say like, like, like, like, like, Some people give you props for challenging the ghoulies to a race and beating them. I had to pop a cop because he wasn\'t giving me my props in Oaktown. You and your friends have accomplished the impossible. For that. I give you mad props. \r\n\r\nJOHN HANCOCK\r\nsemacam tanda tangan\r\nThen we have John Hancock. This is another one. It\'s very American. It\'s really just used in the United States. And you would talk about it in the context of, well, I need to get your John Hancock, or I need you to give me your John Hancock. And when they\'re talking about your John Hancock, they\'re talking about your signature. So if somebody were to say, hey, you know, I just need to get your John Hancock right here. They\'re telling you, well, you need to sign right there. So where does this come from? Well, John Hancock supposedly was the first person to sign the declaration of independence, and when he signed his name, he signed it abnormally large. It\'s the largest signature on the Declaration of Independence. And people say that the reason that he did this is because the king didn\'t have very good eyesight and he wanted to make sure that, that he could see John Hancock\'s signature. So now that name has now become a reference to somebody\'s signature. I need to get your John Hancock. Mr. Callahan, I need your John Hancock on these reports. If I could just get your John Hancock. Oh sergeant. So we\'ll just need your John Hancock right here. And now the old John Hancock. \r\n\r\nTO GET AHEAD OF (ONESELF)\r\nterlalu terburu buru \r\nThe next expression is, it\'s also an idiom and that is to get ahead of oneself. And this just means that you are planning prematurely or maybe you\'re being a bit overconfident. So for example, if you are going to take a trip, but that trip is a long ways off. You don\'t really need to start planning now, but if you do plan now, somebody might say, look, okay, wait, you\'re getting ahead of yourself. We don\'t need to start planning for this now. Or as far as overconfidence goes, perhaps you have an idea and you start thinking of this idea and all of the amazing things that can come out of it and you\'re like, oh, I\'m going to do this and then we can do this. And then you start thinking about it and you\'re like, oh, maybe I\'m starting to get ahead of myself and I just need to take it one step at a time. So if you\'re planning prematurely, if you\'re a bit over confident, then you might be getting ahead of yourself. Well, I told you that would learn better if I had a study buddy. Don\'t get ahead of yourself. Maybe I\'ll call him pappy. Look at me. I\'m getting ahead of myself. Might be a cause for celebration. Wow. Let\'s not get ahead of ourselves. \r\n\r\nIT’S ALL GOOD\r\neverything it;s okay\r\nThe next expression is another one of my favorites. It\'s a very short, very simple three words. It\'s all good. And if somebody says, hey, it\'s all good, it just means that everything is fine. Often I think people might say it kind of in the context of, of telling somebody else to relax. All right, don\'t worry about this. Relax. It\'s all good. Perhaps somebody who\'s trying to plan prematurely and they\'re really getting ahead of themselves and they\'re like, oh, well, well you need to do this, you need to do that. And you would just tell him, hey, it\'s all good. Don\'t worry about it. I got it taken care of. It\'s all good. It\'s all good baby. So what I want you to do now because I don\'t want to lose touch, is I want you to join our community and subscribe to our email list because we will send you some useful and free resources. We will give you access to the secret fluency lesson. All you\'ve got to do is write your email and give us your John Hancock. So check out the link in the description. If you don\'t want to, it\'s all good, don\'t worry about it. You can just write to me in the comments, we can communicate there and I will give you some prompts. I will recognize you, I will acknowledge you and I will just keep using as many of these expressions as I can. So the, so that you have a better understanding of them and that you are more likely to remember. Thank you guys so much for watching. I hope you enjoyed this lesson. If you did hit that like button, like, like really hit it, hit, hit it like hit it really hard. All right and okay, enough of that. I will see you next time. So I like one [inaudible] so I like wanting to go to the front. So I like wanting to go to the movies with my friend, and he was like, well, I have to do my homework. So I had to like stay home and it was like so boring and I can\'t even, I can\'t even get through this.', '2023-03-29 20:08:34', '2023-03-29 20:22:01', 1);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_02_26_045659_create_articles_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@gmail.com', NULL, '$2y$10$ELTVRV6fWCu27uGu90zaxuse0HJndz7Z9xVlneCt0pWXFO5KcsLwO', NULL, NULL, NULL, 'sTPYDkGwjX0srRRIGZT6q3PLIfwwx5pw5zWTayGCPKQHtH18j2KmjD3lpgoj', '2023-03-15 00:16:54', '2023-03-26 18:47:36'),
(2, 'Admin', 'admin@gmail.com', NULL, '$2y$10$HmwzcrjHjWl9.z3HtFlc5uc182CAQyz9Zp58M.k31kfFpbrAA4o4e', NULL, NULL, NULL, NULL, '2023-03-16 00:21:54', '2023-03-16 00:21:54'),
(3, 'RPL', 'rpl@gmail.com', NULL, '$2y$10$qcVbT057uMbj0k1ZPngM/.dIUGS/he8yzuB2wT6OQXv2vKLpciZEO', NULL, NULL, NULL, NULL, '2023-03-30 21:25:00', '2023-03-30 21:25:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_user_id_foreign` (`user_id`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
