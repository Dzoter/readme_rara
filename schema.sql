create DATABASE Readme
  default character set utf8
  default collate utf8_general_ci;

create table Users (
  UserId int AUTO_INCREMENT PRIMARY KEY,
  registrationDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  login varchar(90) not null UNIQUE,
  email varchar(90) not null UNIQUE,
  password varchar(60) not null,
  avatarPath varchar(255)
);

create table Post
(
  PostId   int   AUTO_INCREMENT PRIMARY KEY,
  title       varchar(90) not null,
  createPostDate  TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  content     text        not null,
  authorQuote varchar(50),
  pathPicture varchar(255),
  pathVideo   varchar(255),
  pathLink    varchar(255),
  viewCount   int,
  userId      int,
  contentId   int,
  foreign key (userId) references Users (userId),
  foreign key (contentId) references typeContent (typeContentId)
);

create table Comments
(
  commentId int AUTO_INCREMENT PRIMARY KEY,
  createCommentstDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  content text,
  authorId int,
  postId int,
  foreign key (authorId) references Users(UserId),
  foreign key (postId) references Post(PostId)
);

create table PostsHashtag
(
  hashtagId int,
  postId int,
  foreign key (hashtagId) references Hashtag(hashtagId),
  foreign key (postId) references Post(PostId)
);

create table Likes
(
  userId int,
  postId int,
  foreign key (userId) references Users(UserId),
  foreign key (postId) references Post(PostId)
);

create table Subscriptions
(
  followerUserId int,
  followingUserId int,
  foreign key (followerUserId) references Users(UserId),
  foreign key (followingUserId) references Users(UserId)
);

create table Messages
(
  messageId int AUTO_INCREMENT PRIMARY KEY,
  createMessage TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  content text,
  sendMessage int,
  postMessage int,
  foreign key (sendMessage) references Users(UserId),
  foreign key (postMessage) references Users(UserId)
);

create table Hashtag
(
  hashtagId int AUTO_INCREMENT PRIMARY KEY,
  hashtagName varchar(50)
);

create table typeContent
(
  typeContentId int AUTO_INCREMENT PRIMARY KEY,
  nameType varchar(60),
  nameIcon varchar(60)
);

// индексы для поиска
CREATE INDEX u_login ON Users(login);
CREATE INDEX p_title ON Post(title);
CREATE INDEX p_content on Post(content)

