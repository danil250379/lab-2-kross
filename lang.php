<?php
session_start();

$langArr = [
        'ru' =>['greeting'=>'Привет','managerInformation'=>'Вы можете на сайте изменять, удалять и создавать клиентов.',
            'clientIformation'=>'Вы можете на сайте просматривать информацию доступную пользователям.',
                'adminInformation'=>'Вы можете на сайте делать всё.', 'exit'=>'Выход','confirm'=>'Подтвердить'],
        'en' =>['greeting'=>'Hello','managerInformation'=>'You can modify, delete and create clients on the site.',
            'clientIformation'=>'You can view information available to users on the site.',
                'adminInformation'=>'You can do everything on the site.', 'exit'=>'Exit','confirm'=>'Confirm'],
        'uk' =>['greeting'=>'Привіт','managerInformation'=>'Ви можете на сайті змінювати, видаляти і створювати клієнтів.',
            'clientIformation'=>'Ви можете на сайті переглядати інформацію доступну користувачам.',
                'adminInformation'=>'Ви можете на сайті робити все.', 'exit'=>'Вихід','confirm'=>'Підтвердити'],
        'it' =>['greeting'=>'Сiao','managerInformation'=>'È possibile modificare, eliminare e creare client sul sito.',
            'clientIformation'=>'È possibile visualizzare le informazioni disponibili per gli utenti sul sito.',
                'adminInformation'=>'Puoi fare tutto sul sito.', 'exit'=>'Produzione','confirm'=>'Confermare'],
]
?>