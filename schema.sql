create DATABASE Readme_rara
  default character set utf8
  default collate utf8_general_ci;

use Readme_rara;

create table Users
(
  id          int AUTO_INCREMENT PRIMARY KEY,
  created_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  login       varchar(90) not null UNIQUE,
  email       varchar(90) not null UNIQUE,
  password    varchar(60) not null,
  avatar_path varchar(255)
);

create table Posts
(
  id   int   AUTO_INCREMENT PRIMARY KEY,
  title       varchar(90) not null,
  created_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  content     text        not null,
  author_quote varchar(50),
  path_picture varchar(255),
  path_video   varchar(255),
  path_link    varchar(255),
  view_count   int,
  user_id      int,
  content_id   int,
  foreign key (userId) references Users (id),
  foreign key (contentId) references type_content(id)
);

create table Comments
(
  id int AUTO_INCREMENT PRIMARY KEY,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  content text not null,
  author_id int,
  post_id int,
  foreign key (author_id) references Users(id),
  foreign key (post_id) references Posts(id)
);

create table Posts_hashtag
(
  hashtag_id int,
  post_id int,
  foreign key (hashtag_id) references Hashtags(id),
  foreign key (post_id) references Posts(id)
);

create table Likes
(
  id int  AUTO_INCREMENT PRIMARY KEY,
  user_id int,
  post_id int,
  foreign key (user_id) references Users(id),
  foreign key (post_id) references Posts(id)
);

create table Subscriptions
(
  id   int   AUTO_INCREMENT PRIMARY KEY,
  follower_user_id int,
  following_user_id int,
  foreign key (follower_user_id) references Users(id),
  foreign key (following_user_id) references Users(id)
);

create table Messages
(
  id int AUTO_INCREMENT PRIMARY KEY,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  content text,
  send_message int,
  post_message int,
  foreign key (send_message) references Users(id),
  foreign key (post_message) references Users(id)
);

create table Hashtags
(
  id int AUTO_INCREMENT PRIMARY KEY,
  hashtag_name varchar(50)
);

create table type_content
(
  id int AUTO_INCREMENT PRIMARY KEY,
  name_type varchar(60),
  name_icon varchar(60)
);

// индексы для поиска
CREATE INDEX u_login ON Users(login);
CREATE INDEX p_title ON Posts(title);
CREATE INDEX p_content on Posts(content);
