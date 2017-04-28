<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Языковые ресурсы названий Labels
    |--------------------------------------------------------------------------
    |
    | Следующие языковые ресурсы используются в названиях
    | Labels всего вашего приложения.
    | Вы можете свободно изменять эти языковые ресурсы в соответствии
    | с требованиями вашего приложения.
    |
    */

    'backend'   => [
        'access'    => [
            'roles' => [
                'create'        => 'Создать новую роль',
                'edit'          => 'Изменить роль',
                'management'    => 'Доступ',
                'table'         => [
                    'number_of_users'   => 'Пользователей',
                    'permissions'       => 'Разрешения',
                    'role'              => 'Роль',
                    'sort'              => 'Позиция',
                    'total'             => 'ролей всего|всего ролей',
                ],
            ],

            'users' => [
                'active'                => 'Активные пользователи',
                'all_permissions'       => 'Полный доступ',
                'change_password'       => 'Изменение пароля',
                'change_password_for'   => 'Изменить пароль :user',
                'create'                => 'Создать учётную запись',
                'deactivated'           => 'Заблокированные пользователи',
                'deleted'               => 'Удаленные пользователи',
                'edit'                  => 'Редактирование учётной записи',
                'management'            => 'Пользователи',
                'no_permissions'        => 'Нет разрешений',
                'no_roles'              => 'Невозможно присвоить роль.',
                'permissions'           => 'Разрешения',
                'table'                 => [
                    'confirmed'         => 'Подтверждён',
                    'created'           => 'Создан',
                    'email'             => 'E-mail',
                    'id'                => 'ID',
                    'last_updated'      => 'Обновлён',
                    'name'              => 'Логин',
                    'no_deactivated'    => 'Нет заблокированных пользователей',
                    'no_deleted'        => 'Нет удаленных пользователей',
                    'roles'             => 'Роль',
                    'total'             => 'пользователей всего|всего пользователей',
                ],
                'tabs'                  => [
                    'content'   => [
                        'overview'  => [
                            'avatar'        => 'Аватар',
                            'confirmed'     => 'Подтверждён',
                            'created_at'    => 'Создан',
                            'deleted_at'    => 'Удалён',
                            'email'         => 'E-mail',
                            'last_updated'  => 'Обновлён',
                            'name'          => 'Логин',
                            'status'        => 'Статус',
                        ],
                    ],
                    'titles'    => [
                        'history'   => 'История',
                        'overview'  => 'Обзор',
                    ],
                ],
                'view'                  => 'Просмотр учётной записи',
            ],
        ],
        'showcase'  =>  [
            'product' => [
                'tabmain'               =>  'Основные',
                'tabimg'                =>  'Фото',
                'tabseo'                =>  'SEO',
                'tabdescription'        =>  'Описания',
                'tabother'              =>  'Дополнительные',
                'management'            =>  'Товары',
                'visible'               =>  'Все товары',
                'create'                =>  'Новый товар',
                'createtitle'           =>  'Создать новый товар',
                'table'                 => [
                    'name'              =>  'Наименование',
                    'id'                =>  'ID',
                    'price'             =>  'Цена',
                    'available'         =>  'Доступен',
                    'visible'           =>  'Показан',
                ],
            ],
            'brand' => [
                'tabmain'               =>  'Основные',
                'tabimg'                =>  'Фото',
                'tabseo'                =>  'SEO',
                'tabdescription'        =>  'Описания',
                'tabother'              =>  'Дополнительные',
                'management'            => 'Брэнды',
                'header_index'          =>  'все брэнды',
                'title_index'           =>  'Все брэнды',
                'header_deleted'        =>  'удаленные брэнды',
                'title_deleted'        =>   'Удаленные брэнды',
                'create'                =>  'Новый брэнд',
                'createtitle'           =>  'Создать новый брэнд',
                'table'                 => [
                    'name'              =>   'Наименование',
                    'id'                =>    'ID',
                    'is_visible'        =>    'Показан',
                    'country_id'        =>    'Страна',
                    'img'               =>    'Лого',
                ],
                'fields'                => [
                    'name'              =>    'Брэнд',
                    'is_visible'        =>    'Видима',
                    'country_id'        =>      'Страна',
                ],

            ],
            'country' => [
                'tabmain'               =>  'Основные',
                'tabimg'                =>  'Фото',
                'tabseo'                =>  'SEO',
                'tabdescription'        =>  'Описания',
                'tabother'              =>  'Дополнительные',
                'management'            =>  'Страны',
                'header_index'          =>  'все страны',
                'title_index'           =>  'Все страны',
                'header_deleted'        =>  'удаленные страны',
                'title_deleted'        =>   'Удаленные страны',
                'header_all'            =>  'все страны',
                'create'                =>  'Новая страна',
                'createtitle'           =>  'Создать новую страну',
                'table'                 => [
                    'name'              =>    'Страна',
                    'id'                =>    'ID',
                    'is_visible'        =>    'Видима',
                    'img'               =>    'Флаг',
                ],
                'fields'                => [
                    'name'              =>    'Страна',
                    'is_visible'        =>    'Видима',
                ],
            ],

        ],
    ],
    'frontend'  => [
        'auth'      => [
            'login_box_title'       => 'Вход',
            'login_button'          => 'Вход',
            'login_with'            => 'Вход из :social_media',
            'register_box_title'    => 'Регистрация',
            'register_button'       => 'Зарегистрироваться',
            'remember_me'           => 'Запомнить меня',
        ],
        'macros'    => [
            'country'           => [
                'alpha'     => 'Альфа коды стран',
                'alpha2'    => 'Альфа-2 коды стран',
                'alpha3'    => 'Альфа-3 коды стран',
                'numeric'   => 'Country Numeric Codes',
            ],
            'macro_examples'    => 'Примеры макросов',
            'state'             => [
                'mexico'    => 'Список штатов Мексики',
                'us'        => [
                    'armed'     => 'US Armed Forces',
                    'outlying'  => 'Окружающие территории США',
                    'us'        => 'Штаты США',
                ],
            ],
            'territories'       => [
                'canada'    => 'Провинции Канады & Территории',
            ],
            'timezone'          => 'Часовые пояса',
        ],
        'passwords' => [
            'forgot_password'                   => 'Забыли Пароль?',
            'reset_password_box_title'          => 'Сброс Пароля',
            'reset_password_button'             => 'Смена пароля',
            'send_password_reset_link_button'   => 'Отправить ссылку для смены пароля',
        ],
        'user'      => [
            'passwords' => [
                'change'    => 'Изменить пароль',
            ],
            'profile'   => [
                'avatar'                => 'Аватар',
                'created_at'            => 'Создан',
                'edit_information'      => 'Редактирование информации',
                'email'                 => 'E-mail',
                'last_updated'          => 'Обновлён',
                'name'                  => 'Логин',
                'update_information'    => 'Обновление информации',
            ],
        ],
    ],
    'general'   => [
        'actions'           => 'Действие',
        'active'            => 'Активирован',
        'all'               => 'Все',
        'buttons'           => [
            'save'      => 'Сохранить',
            'update'    => 'Обновить',
        ],
        'custom'            => 'Выборочно',
        'hide'              => 'Скрыть',
        'inactive'          => 'Неактивен',
        'no'                => 'Нет',
        'none'              => 'Нет',
        'show'              => 'Показать',
        'toggle_navigation' => 'Навигация',
        'yes'               => 'Да',
    ],
];
