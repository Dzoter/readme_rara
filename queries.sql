--список типов контента для поста;

INSERT INTO type_content(name_type, name_icon) VALUES ('Текст', 'text');
INSERT INTO type_content(name_type, name_icon) VALUES ('Цитата', 'quote');
INSERT INTO type_content(name_type, name_icon) VALUES ('Картинка', 'photo');
INSERT INTO type_content(name_type, name_icon) VALUES ('Видео', 'video');
INSERT INTO type_content(name_type, name_icon) VALUES ('Ссылка', 'link');

-- придумайте пару пользователей;
INSERT INTO users(login, email, password, avatar_path) VALUES ('Sergey', 'sergey@yandex.ru', '12345', 'userpic.jpg');
INSERT INTO users(login, email, password, avatar_path) VALUES ('Mixa', 'Mixa@yandex.ru', '54321', 'userpic-mark.jpg');
INSERT INTO users(login, email, password, avatar_path) VALUES ('Alex', 'Lex@yandex.ru', '11111', null);
INSERT INTO users(login, email, password, avatar_path) VALUES ('Viktor', 'Vik@yandex.ru', '22222', null);

-- существующий список постов.
INSERT INTO posts(title, content, author_quote, user_id, content_id, view_count) VALUES ('Цитата', 'Мы в жизни любим только раз, а после ищем лишь похожих', 'Стехэм', 1, 2, 5);
INSERT INTO posts(title, content, user_id, content_id, view_count) VALUES ('Игра престолов', 'Не могу дождаться начала финального сезона своего любимого сериала!', 2, 1, 3);
INSERT INTO posts(title, path_picture, user_id, content_id, view_count) VALUES ('Наконец, обработал фотки', 'rock-medium.jpg', 3, 3, 2);
INSERT INTO posts(title, path_picture, user_id, content_id, view_count) VALUES ('Моя мечта', 'coast-medium.jpg', 1, 3, 4);
INSERT INTO posts(title, path_link, user_id, content_id, view_count) VALUES ('Лучшие курсы', 'www.htmlacademy.ru', 4, 5, 12);
INSERT INTO posts(title, content, user_id, content_id, view_count) VALUES ('Паста про Пророка Санбоя', 'Пророк Санбой - легендарная фигура, окруженная пеленой загадочности и древних предсказаний', 2, 1, 55);

-- придумайте пару комментариев к разным постам;
INSERT INTO comments(content, author_id, post_id) VALUES ('Nice Bro!', 1, 3);
INSERT INTO comments(content, author_id, post_id) VALUES ('You are the best!', 2, 1);
INSERT INTO comments(content, author_id, post_id) VALUES ('You are crazy', 1, 3);
INSERT INTO comments(content, author_id, post_id) VALUES ('what?', 3, 1);

-- получить список постов с сортировкой по популярности и вместе с именами авторов и типом контента
SELECT title, login, name_type, view_count FROM posts
INNER JOIN users ON posts.user_id = users.id
INNER JOIN type_content ON posts.content_id = type_content.id
ORDER BY view_count DESC;

-- получить список постов для конкретного пользователя;
SELECT title, login FROM posts
INNER JOIN users ON posts.user_id = users.id
WHERE posts.user_id = 2;

-- получить список комментариев для одного поста, в комментариях должен быть логин пользователя;
SELECT comments.content, login AS name FROM comments
INNER JOIN posts ON comments.post_id = posts.id
INNER JOIN users ON comments.author_id = users.id
WHERE posts.id = 3;

-- добавить лайк к посту;
INSERT INTO likes(user_id, post_id) VALUES (2,3);
INSERT INTO likes(user_id, post_id) VALUES (2,4);
INSERT INTO likes(user_id, post_id) VALUES (1,4);
INSERT INTO likes(user_id, post_id) VALUES (3,1);

-- подписаться на пользователя.
INSERT INTO subscriptions(follower_user_id, following_user_id) VALUES (1, 3);
INSERT INTO subscriptions(follower_user_id, following_user_id) VALUES (2, 3);
INSERT INTO subscriptions(follower_user_id, following_user_id) VALUES (2, 1);
INSERT INTO subscriptions(follower_user_id, following_user_id) VALUES (1, 2);
