<?php require_once 'helpers.php';

date_default_timezone_set('Europe/Moscow');

function getTime($randomDate)
{
    $currentTime =  new DateTime();
    $postCreateTime = new DateTime($randomDate);
    $interval = $currentTime->diff($postCreateTime);

    if ($interval->i !== 0 && $interval->i < 60) {
        $formPlural = get_noun_plural_form($interval->i,  'минута',  'минуты',  'минут');
        return [
            'interval' => "{$interval->i}  {$formPlural}",
            'dateTime' => $postCreateTime->format('Y-m-d H:i:s'),
            'title' => $postCreateTime->format('Y-m-d H:i')
        ];

    };
    if ($interval->h !== 0 && $interval->h < 24) {
        $formPlural = get_noun_plural_form($interval->h, 'час',  'часа',  'часов');
        return
            [
                'interval' => "{$interval->h} {$formPlural}",
                'dateTime' => $postCreateTime->format('Y-m-d H:i:s'),
                'title' => $postCreateTime->format('Y-m-d H:i')
            ];
    };
    if ($interval->d !== 0 && $interval->d < 7) {
        $formPlural = get_noun_plural_form($interval->d,  'день',  'дня',  'дней');
        return [
            'interval' => "{$interval->d} {$formPlural}",
            'dateTime' => $postCreateTime->format('Y-m-d H:i:s'),
            'title' => $postCreateTime->format('Y-m-d H:i')
        ];
    };
    if ($interval->d >= 7 && ($interval->days / 7) < 5) {
        $weeks = $interval->days / 7;
        $formPlural = get_noun_plural_form($weeks,  'неделя',  'недели',  'недель');
        return [
            'interval' => "{$weeks} {$formPlural}",
            'dateTime' => $postCreateTime->format('Y-m-d H:i:s'),
            'title' => $postCreateTime->format('Y-m-d H:i')
        ];
    };
    if ( ($interval->days / 7) > 5) {
        $formPlural = get_noun_plural_form($interval->m,  'месяц',  'месяца',  'месяцев');
        return [
            'interval' => "{$interval->m} {$formPlural}",
            'dateTime' => $postCreateTime->format('Y-m-d H:i:s'),
            'title' => $postCreateTime->format('Y-m-d H:i')
        ];
    };
}


$isAuth = rand(1,0);
$userName = 'Lemon';
$posts = [
    [
        'title' => 'Цитата',
        'type' => 'post-quote',
        'content' => 'Мы в жизни любим только раз, а после ищем лишь похожих',
        'userName' => 'Лариса',
        'avatar' => 'userpic-larisa-small.jpg'
    ],
    [
        'title' => 'Игра престолов',
        'type' => 'post-text',
        'content' => 'Не могу дождаться начала финального сезона своего любимого сериала!',
        'userName' => 'Владик',
        'avatar' => 'userpic.jpg'
    ],
    [
        'title' => 'Наконец, обработал фотки!',
        'type' => 'post-photo',
        'content' => 'rock-medium.jpg',
        'userName' => 'Виктор',
        'avatar' => 'userpic-mark.jpg'
    ],
    [
        'title' => 'Моя мечта',
        'type' => 'post-photo',
        'content' => 'coast-medium.jpg',
        'userName' => 'Лариса',
        'avatar' => 'userpic-larisa-small.jpg'
    ],
    [
        'title' => 'Лучшие курсы',
        'type' => 'post-link',
        'content' => 'www.htmlacademy.ru',
        'userName' => 'Владик',
        'avatar' => 'userpic.jpg'
    ],
    [
        'title' => 'Паста про Пророка Санбоя',
        'type' => 'post-text',
        'content' => 'Пророк Санбой - легендарная фигура, окруженная пеленой загадочности и древних предсказаний. Его имя стало синонимом мудрости и духовной прозрительности. Санбой предстал перед миром как жрец и прорицатель, способный уловить тайные потоки времени и раскрывать сокровенные истины.
        Веками его учение передавалось из поколения в поколение, но немногие осмеливались вступить на путь его ученичества. Считалось, что лишь избранные способны расшифровать его символичные послания и проникнуть в глубины его знаний.
        Пророк Санбой жил в уединении, в горной пещере, где, как гласят легенды, он находился в гармонии с природой и вселенной. Его медитации продолжались месяцами, а его видение простирались на века вперед. Считалось, что в его глазах можно было увидеть прошлое, настоящее и будущее объединенные в непрерывный поток времени.
        Пророчества Санбоя часто оказывались точными и имели глубокий смысл. Они касались судеб народов, природных катаклизмов, и даже индивидуальных судеб людей. Его послания вызывали трепет и уважение, а его советы прославлялись своей ценностью.
        Скончавшись, Санбой оставил миру свое наследие - свиток с пророчествами и учением. С тех пор его имя стало символом глубокой мудрости и стремления к пониманию тайн вселенной. Великое наследие Пророка Санбоя продолжает вдохновлять и просвещать тех, кто ищет истину и духовное развитие.',
        'userName' => 'Владик',
        'avatar' => 'userpic.jpg'
    ]
];

function h(string $text)
{
    return htmlspecialchars($text);
}

function limitTextLength(string  $text, int $limit = 300)
{
    $result = ' ';
    foreach (explode(' ', $text) as $value) {
        if (mb_strlen($result) >= $limit) {
            $result .= '...';
            return $result;
        }
        $result .= " {$value}";
    }
}


$pageContent = include_template('main.php', ['posts' => $posts]);
$layuotContent = include_template('layout.php', ['content' => $pageContent, 'userName' => $userName, 'title' => 'Популярное', 'isAuth' => $isAuth]);
print_r($layuotContent);
