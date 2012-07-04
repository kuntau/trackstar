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
 create table if not exists 'tbl_issue'
 (
     'id' integer not null primary key auto_increment,
     'name' varchar(256) not null,
     'description' varchar(2000),
     'project_id' integer,
     'type_id' integer,
     'status_id' integer,
     'owner_id' integer,
     'requester_id' integer,
     'create_time' datetime,
     'create_user_id' integer,
     'update_time' datetime,
     'update_user_id' integer
 ) ENGINE = InnoDB

 create table if not exists 'tbl_user'
 (
     'id' integer not null primary key auto_increment,
     'email' varchar(256) not null,
     'username' varchar(256),
     'password' varchar(256),
     'last_login_time' datetime,
     'create_time' datetime,
     'create_user_id' integer,
     'update_time' datetime,
     'update_user_id' integer
 ) ENGINE = InnoDB

 create table if not exists 'tbl_project_user_assignment'
 (
     'project_id int(11) not null,
     'user_id' int(11) not null,
     'create_time' datetime,
     'create_user_id' integer,
     'update_time' datetime,
     'update_user_id' integer,
     primary key ('project_id', 'user_id)
 ) ENGINE = InnoDB

 -- The Relationships
 alter table 'tbl_issue' add constraint 'FK_issue_project' foreign key
 ('project_id') references 'tbl_project' ('id') on delete cascade on update restrict;

 alter table 'tbl_issue' add constraint 'FK_issue_owner' foreign key
 ('owner_id') references 'tbl_user' ('id') on delete cascade on update restrict;

 alter table 'tbl_issue' add constraint 'FK_issue_requester' foreign key
 ('requester_id') references 'tbl_user' ('id') on delete cascade on update restrict;

 alter table 'tbl_project_user_assignment' add constraint 'FK_project_user' foreign key
 ('project_id') references 'tbl_project' ('id') on delete cascade on update restrict;

 */
?>
