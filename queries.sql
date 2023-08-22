--список типов контента для поста;
insert into type_content(name_type, name_icon) VALUES ('Текст', 'text');
insert into type_content(name_type, name_icon) VALUES ('Цитата', 'quote');
insert into type_content(name_type, name_icon) VALUES ('Картинка', 'photo');
insert into type_content(name_type, name_icon) VALUES ('Видео', 'video');
insert into type_content(name_type, name_icon) VALUES ('Ссылка', 'link');

-- придумайте пару пользователей;
insert into Users(login, email, password, avatar_path) VALUES ('Sergey', 'sergey@yandex.ru', '12345', 'userpic.jpg');
insert into Users(login, email, password, avatar_path) VALUES ('Mixa', 'Mixa@yandex.ru', '54321', 'userpic-mark.jpg');
insert into Users(login, email, password, avatar_path) VALUES ('Alex', 'Lex@yandex.ru', '11111', null);
insert into Users(login, email, password, avatar_path) VALUES ('Viktor', 'Vik@yandex.ru', '22222', null);

-- существующий список постов.
insert into Posts(title, content, author_quote, user_id, content_id, view_count) VALUES ('Цитата', 'Мы в жизни любим только раз, а после ищем лишь похожих', 'Стехэм', 1, 2, 5);
insert into Posts(title, content, user_id, content_id, view_count) VALUES ('Игра престолов', 'Не могу дождаться начала финального сезона своего любимого сериала!', 2, 1, 3);
insert into Posts(title, path_picture, user_id, content_id, view_count) VALUES ('Наконец, обработал фотки', 'rock-medium.jpg', 3, 3, 2);
insert into Posts(title, path_picture, user_id, content_id, view_count) VALUES ('Моя мечта', 'coast-medium.jpg', 1, 3, 4);
insert into Posts(title, path_link, user_id, content_id, view_count) VALUES ('Лучшие курсы', 'www.htmlacademy.ru', 4, 5, 12);
insert into Posts(title, content, user_id, content_id, view_count) VALUES ('Паста про Пророка Санбоя', 'Пророк Санбой - легендарная фигура, окруженная пеленой загадочности и древних предсказаний', 2, 1, 55);

-- придумайте пару комментариев к разным постам;
insert into Comments(content, author_id, post_id) VALUES ('Nice Bro!', 1, 3);
insert into Comments(content, author_id, post_id) VALUES ('You are the best!', 2, 1);
insert into Comments(content, author_id, post_id) VALUES ('You are crazy', 1, 3);
insert into Comments(content, author_id, post_id) VALUES ('what?', 3, 1);

-- получить список постов с сортировкой по популярности и вместе с именами авторов и типом контента
select title, login, name_type, view_count from Posts
inner join Users on Posts.user_id = Users.id
inner join type_content on Posts.content_id = type_content.id
order by view_count DESC;

-- получить список постов для конкретного пользователя;
select title, login from Posts
inner join Users on Posts.user_id = Users.id
where Posts.user_id = 2;

-- получить список комментариев для одного поста, в комментариях должен быть логин пользователя;
select Comments.content, login as name from Comments
inner join Posts on Comments.post_id = Posts.id
inner join Users on Comments.author_id = Users.id
where Posts.id = 3;

-- добавить лайк к посту;
insert into Likes(user_id, post_id) VALUES (2,3);
insert into Likes(user_id, post_id) VALUES (2,4);
insert into Likes(user_id, post_id) VALUES (1,4);
insert into Likes(user_id, post_id) VALUES (3,1);

-- подписаться на пользователя.
insert into Subscriptions(follower_user_id, following_user_id) VALUES (1, 3);
insert into Subscriptions(follower_user_id, following_user_id) VALUES (2, 3);
insert into Subscriptions(follower_user_id, following_user_id) VALUES (2, 1);
insert into Subscriptions(follower_user_id, following_user_id) VALUES (1, 2);
