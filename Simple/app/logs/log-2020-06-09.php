<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-06-09 11:09:11 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-06-09 11:09:11 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:09:11 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'forum.tec_topics.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `tec_topics`.*, `tec_categories`.`name` as `category`, `subcategories`.`name` as `child_category`, `tec_users`.`id` as `user_id`, `tec_users`.`username`, `tec_users`.`avatar`, `tec_users`.`gender` as `user_gender`, `tec_posts`.`body`, COUNT(tec_posts.id) as total_posts
FROM `tec_topics`
LEFT JOIN `tec_posts` ON `tec_posts`.`topic_id`=`tec_topics`.`id`
LEFT JOIN `tec_categories` ON `tec_categories`.`id`=`tec_topics`.`category_id`
LEFT JOIN `tec_categories` `subcategories` ON `subcategories`.`id`=`tec_topics`.`child_category_id`
LEFT JOIN `tec_users` ON `tec_users`.`id`=`tec_topics`.`created_by`
WHERE `tec_categories`.`active` = 1
AND `protected` = 0
AND `tec_topics`.`status` = 1
GROUP BY `tec_posts`.`topic_id`
ORDER BY `sticky` DESC, `tec_posts`.`created_at` DESC
 LIMIT 10
ERROR - 2020-06-09 11:12:17 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:12:17 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:12:19 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:12:28 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:12:28 --> Severity: Notice --> Undefined property: stdClass::$subscription /Users/saleem/Sites/forum/app/models/Auth_model.php 1193
ERROR - 2020-06-09 11:12:53 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:12:59 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:13:05 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:13:09 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:13:23 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:13:23 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:13:28 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:13:33 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:13:42 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:13:42 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:13:44 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:13:47 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:13:54 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:14:06 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:14:06 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:14:09 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:14:10 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:14:11 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:14:12 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:14:13 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:14:24 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:14:25 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:14:28 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:14:31 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:14:32 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:14:33 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:14:34 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:14:35 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:14:36 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:14:37 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:14:38 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:18:32 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:18:54 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:19:38 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:19:58 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:20:00 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:24:07 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:24:09 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:24:10 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:24:11 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:24:12 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:24:18 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:24:26 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:24:31 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:24:31 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:24:35 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:24:44 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:24:47 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:24:51 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:24:51 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:24:53 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:24:59 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:25:00 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:25:01 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:27:03 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:27:03 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:29:16 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:29:18 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:29:21 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:29:38 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:29:44 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:29:46 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:29:47 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
ERROR - 2020-06-09 11:30:05 --> Could not find the specified $config['composer_autoload'] path: /Users/saleem/Sites/forum/vendor/autoload.php
