<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'support' => [
        'convinced' => [
            'title' => 'Убедил! :D',
            'support' => 'поддержать osu!',
            'gift' => 'или подарить osu!supporter другому игроку',
            'instructions' => 'нажмите на сердечко для перехода в osu!store',
        ],
        'why-support' => [
            'title' => 'Зачем мне поддерживать osu!? Куда идут деньги?',

            'team' => [
                'title' => 'Поддержите разработчиков',
                'description' => 'osu! разрабатывается небольшой командой людей. Ваша поддержка поможет им, ну, вы знаете... жить.',
            ],
            'infra' => [
                'title' => 'Инфраструктура сервера',
                'description' => 'Пожертвования уходят на серверы для сайта, мультиплеера, таблиц рекордов и т.д.',
            ],
            'featured-artists' => [
                'title' => 'Избранные исполнители',
                'description' => 'С Вашей поддержкой мы сможем сотрудничать с ещё большим числом крутых исполнителей и лицензировать ещё больше замечательной музыки для osu!',
                'link_text' => 'Посмотреть текущий список &raquo;',
            ],
            'ads' => [
                'title' => 'Обеспечьте независимость osu!',
                'description' => 'Ваш вклад поможет игре остаться независимой и полностью свободной от рекламы и внешних спонсоров.',
            ],
            'tournaments' => [
                'title' => 'Официальные турниры',
                'description' => 'Помогите профинансировать официальные турниры osu! World Cup (а также призы для них).',
                'link_text' => 'Узнать о турнирах &raquo;',
            ],
            'bounty-program' => [
                'title' => 'Поощрение вклада в открытое ПО',
                'description' => 'Поддержите участников сообщества, которые потратили время и силы для того, чтобы сделать osu! лучше.',
                'link_text' => 'Узнать больше &raquo;',
            ],
        ],
        'perks' => [
            'title' => 'Круто! А что я получу?',
            'osu_direct' => [
                'title' => 'osu!direct',
                'description' => 'Получите быстрый и лёгкий доступ к поиску и загрузке карт без необходимости сворачивать игру.',
            ],

            'friend_ranking' => [
                'title' => 'Рейтинг среди друзей',
                'description' => "Узнайте, насколько вы лучше ваших друзей по отдельным таблицам рекордов для карт. Доступно как в игре, так и на сайте.",
            ],

            'country_ranking' => [
                'title' => 'Рейтинг по стране',
                'description' => 'Завоюйте свою страну, прежде чем завоёвывать мир.',
            ],

            'mod_filtering' => [
                'title' => 'Сортировка по модам',
                'description' => 'Интересуетесь только теми, кто играет с HDHR? Нет проблем!',
            ],

            'auto_downloads' => [
                'title' => 'Автоматические загрузки',
                'description' => 'Мгновенная загрузка карт при игре в мультиплеере, наблюдении за другими игроками или при клике по ссылкам в чате!',
            ],

            'upload_more' => [
                'title' => 'Загружай больше',
                'description' => 'Дополнительные слоты для рассмотрения карт (до 10).',
            ],

            'early_access' => [
                'title' => 'Ранний доступ',
                'description' => 'Доступ к ранним версиям игры, где вы можете опробовать новые функции, прежде чем они получат огласку!<br/><br/>Это также включает в себя ранний доступ к новым функциями на веб-сайте!',
            ],

            'customisation' => [
                'title' => 'Персонализация',
                'description' => "Выделитесь, загрузив свою обложку профиля и добавив информацию в раздел \"обо мне!\".",
            ],

            'beatmap_filters' => [
                'title' => 'Сортировка карт',
                'description' => 'Сортировка карт в поиске по статусу прохождения или достигнутому рангу.',
            ],

            'yellow_fellow' => [
                'title' => 'Золотой ник',
                'description' => 'Будьте узнаваемым в игре с ярко-жёлтым цветом ника.',
            ],

            'speedy_downloads' => [
                'title' => 'Быстрые загрузки',
                'description' => 'Меньше ограничений по загрузке карт, особенно через osu!direct.',
            ],

            'change_username' => [
                'title' => 'Смена никнейма',
                'description' => 'Одно бесплатное изменение ника с первым приобретением osu!supporter.',
            ],

            'skinnables' => [
                'title' => 'Кастомизация',
                'description' => 'Дополнительные параметры в скине позволят тебе, к примеру, установить свой фон в меню.',
            ],

            'feature_votes' => [
                'title' => 'Голосование за новые фичи',
                'description' => 'Вы можете голосовать за добавление новых функций в osu! (2 голоса в месяц).',
            ],

            'sort_options' => [
                'title' => 'Параметры сортировки',
                'description' => 'Возможность просмотра рейтинга карты между странами / друзьями / модами в игре.',
            ],

            'more_favourites' => [
                'title' => 'Больше избранных карт',
                'description' => 'Максимальное число карт, которое вы сможете добавить в избранное, увеличится с :normally &rarr; :supporter',
            ],
            'more_friends' => [
                'title' => 'Больше друзей',
                'description' => 'Число друзей, которое вы сможете добавить, увеличится с :normally &rarr; :supporter',
            ],
            'more_beatmaps' => [
                'title' => 'Публикация большего числа карт',
                'description' => 'Максимальное количество нерейтинговых карт, которое Вы можете опубликовать, начинается со стандартного значения и увеличивается по мере того, как Ваши карты становятся рейтинговыми (до определённого значения).<br/><br/>Обычно это :base карты изначально, плюс :bonus за каждую рейтинговую (до :bonus_max). С osu!supporter у Вас будет :supporter_base карт изначально, плюс :supporter_bonus за каждую рейтинговую (до :supporter_bonus_max).',
            ],
            'friend_filtering' => [
                'title' => 'Рейтинг среди друзей',
                'description' => 'Посоревнуйтесь с вашими друзьями и узнайте, кто круче!',
            ],

        ],
        'supporter_status' => [
            'contribution' => 'Большое спасибо за Вашу поддержку! Всего Вы пожертвовали :dollars за :tags покупок!',
            'gifted' => "Из них Вы подарили :giftedTags тегов (на сумму :giftedDollars) – как щедро!",
            'not_yet' => "У вас нет и ещё не было osu!supporter :(",
            'valid_until' => 'Ваш osu!supporter активен до :date!',
            'was_valid_until' => 'Ваш тег osu!supporter истёк :date.',
        ],
    ],
];
