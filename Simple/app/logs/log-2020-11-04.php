<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-04 11:45:14 --> Severity: Notice --> Undefined property: stdClass::$subscription /Users/saleem/Sites/forum/app/models/Auth_model.php 1193
ERROR - 2020-11-04 11:47:20 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'forum.tec_topics.title' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `title`, `tec_topics`.`slug`, `username`, `avatar`, COUNT(tec_posts.id) as replies, `tec_topics`.`category_slug`
FROM `tec_topics`
LEFT JOIN `tec_posts` ON `tec_posts`.`topic_id`=`tec_topics`.`id`
LEFT JOIN `tec_categories` ON `tec_categories`.`id`=`tec_topics`.`category_id`
LEFT JOIN `tec_users` ON `tec_users`.`id`=`tec_topics`.`created_by`
WHERE `tec_topics`.`status` = 1
AND `tec_categories`.`active` = 1
AND `protected` = 0
GROUP BY `tec_posts`.`topic_id`
ORDER BY `tec_topics`.`created_at` DESC
 LIMIT 5
