<?php
return array(
    'project1'=>array(
        'name' => 'Test Project 1',
        'description' => 'This is test project 1',
        'create_time' => '',
        'create_user_id' => '',
        'update_time' => '',
        'update_user_id' => '',
    ),
    'project2'=>array(
        'name' => 'Test Project 2',
        'description' => 'This is test project 2',
        'create_time' => '',
        'create_user_id' => '',
        'update_time' => '',
        'update_user_id' => '',
    ),
    'project3'=>array(
        'name' => 'Test Project 3',
        'description' => 'This is test project 3',
        'create_time' => '',
        'create_user_id' => '',
        'update_time' => '',
        'update_user_id' => '',
    ),
);
/*
CREATE TABLE IF NOT EXISTS `tbl_issue`
(
    `id` INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(256) NOT NULL,
    `description` VARCHAR(2000),
    `project_id` INT,
    `type_id` integer,
    `status_id` integer,
    `owner_id` integer,
    `requester_id` integer,
    `create_time` datetime,
    `create_user_id` integer,
    `update_time` datetime,
    `update_user_id` INTEGER
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `tbl_user`
(
    `id` integer not null primary key auto_increment,
    `email` varchar(256) not null,
    `username` varchar(256),
    `password` varchar(256),
    `last_login_time` datetime,
    `create_time` datetime,
    `create_user_id` integer,
    `update_time` datetime,
    `update_user_id` integer
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `tbl_project_user_assignment`
(
    `project_id` INT not null,
    `user_id` INT not null,
    `create_time` datetime,
    `create_user_id` integer,
    `update_time` datetime,
    `update_user_id` integer,
    `primary` key (project_id, user_id)
) ENGINE = InnoDB;

-- The Relationships
ALTER TABLE `tbl_issue` ADD CONSTRAINT `FK_issue_project` FOREIGN KEY
(`project_id`) REFERENCES `tbl_project` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

ALTER TABLE `tbl_issue` ADD CONSTRAINT `FK_issue_owner` FOREIGN KEY
(`owner_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

ALTER TABLE `tbl_issue` ADD CONSTRAINT `FK_issue_requester` FOREIGN KEY
(`requester_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

ALTER TABLE `tbl_project_user_assignment` ADD CONSTRAINT `FK_project_user` FOREIGN KEY
(`project_id`) REFERENCES `tbl_project` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

-- Insert some seed data so we can just begin using the database
INSERT INTO `tbl_user`
   (`email`, `username`, `password`)
VALUES
   ('test1@address.com', 'Test_User_One', MD5('test1')),
   ('test2@address.com', 'Test_User_Two', MD5('test2'));

 */
?>
