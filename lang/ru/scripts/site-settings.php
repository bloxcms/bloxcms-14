<?php
return [
'heading' => 'Настройки сайта',
'there-are-errors' => 'Внимание! Имеются ошибки',
'favicon' => [
    'name' => 'Иконка сайта <small>(favicon)</small>',
    'note' => 'Небольшая картинка 16х16 (лучше 32x32) пикселей в формате .ico. Она отображается в адресной строке, вкладках и закладках браузера.',
    'delete-file' => 'Удалить файл',
    'errors' => [
        'file-not-uploaded' => 'Файл не закачан',
        'icon-not-deleted' => 'Иконку сайта удалить не удалось',
        'icon-not-correct' => 'Вы пытались закачать файл неправильного формата — нужен формат .ico',
        'file-not-exists' => 'Файл не существует',
    ]
],
'human-urls' => [
    'name' => 'Включить человекопонятные URL',
    'note' => '<p>Параметрические ссылки вида "blox.ru/?page=2&block=47&p[1]=1" превращаются в ссылки вида "blox.ru/katalog/instrument/dreli/".</p>', //<p>Внимание! Если вы изменили режим ЧПУ, во избежание лишних перенаправлений придется вручную пересохранить все записи, в которых есть строковые поля (varchar) c параметром "reconvert-url", а также текстовые поля (text, tinytext, mediumtext, longtext) без параметра "dont-convert-url".</p>
],
'blox-errors' => [
    'name' => 'Включить журнал ошибок и журнал отладки',
    'note' => 'Записи об ошибках производятся в файл "---blox-errors.log". Журнал отладки ведется в файле "---qq.log", а захват переменных производится так: &lt;?php qq($var); ?&gt;',
],
'emails' => [
    'caption' => 'Почта',
    'note-2' => 'Желательно, чтобы оба адреса (to и from) имели вид:',
    'to' => [
        'name' => 'Ящики для получения писем с сайта (to)',
        'note' => 'Примеры:<br><div style="border:solid 1px rgba(0,0,0,0.2); padding:3px; display:table-cell">john@doe.com, bill@smith.com<br>John Doe &lt;john@doe.com&gt;, Bill Smith &lt;bill@smith.com&gt;<br></div>ПРИ ТЕСТИРОВАНИИ ДОСТАВКИ ПИСЕМ ВСЕГДА ПРОВЕРЯЙТЕ РАЗДЕЛ СПАМ, И ОТМЕЧАЙТЕ ПИСЬМА КАК НЕ СПАМ.',
    ],
    'from' => [
        'name' => 'Ящик для отправки писем с сайта (from)',
        'note' => 'Формат записи такой же, как для адресов получателей (см. выше). <a target="_blank" href="http://bloxcms.net/documentation/class-email.htm#email-setup">Как правильно настроить отправку почты с сайта?</a>',
    ],
    'transport' => [
        'name' => 'Транспорт',
        'note' => 'JSON-код с настройками отправки почты (подробности см. описании параметра transport <a target="_blank" href="http://bloxcms.net/documentation/class-email.htm#transport">метода Email::send()</a>).<br>Пример: {"type":"smtp", "host":"smtp.yandex.ru","port":"65","user":"...","password":"..."}',
    ],
    'webmail' => [
        'name' => 'Веб-интерфейс почты сайта',
        'note' => 'Имееется в виду URL для перехода в почту ящика, указанного в поле "to", например: https://mail.yandex.ru/. В панели управления появится кнопка для перехода на почту.',
    ],
    /*
    'domain-configured' => [
        'name' => 'Домен сконфигурирован',
        'note' => '
        <p>
        Это означает, что записи DKIM и SPF в настройках домена сделаны. Желательно также сделать запись DMARC. 
        Все эти меры необходимы <a target="_blank" href="http://bloxcms.net/documentation/class-email.htm#email-setup">для надежной отправки писем</a> с сайта. 
        <p>После конфигурирования домена, поля "Обратный адрес", "Транспорт", в принципе, можно оставить пустыми.
        </p>',
    ],*/
    'errors' => [
        'incorrect-email' => 'Некорректный почтовый ящик!',
        'incorrect-json' => 'Некорректный JSON-код!',
        'no-function' => 'PHP-функция json_decode() не существует!',
    ]
],

'errorpages' => [
    'caption' => 'Страницы ошибок',
    'tooltip' => 'О страницах ошибок',
    'note' => 'URL страничек можно вставлять в любом виде: параметрическом или человекопонятном, абсолютном или относительно главной страницы',
    'hhref' => 'Человекопонятный относительный адрес:',
    '403' => [
        'name' => 'Страница ошибки 403',
        'note' => 'URL странички, на которую будет перенаправлен пользователь, если он пытается открыть страницу, требующую доступа.',
    ],
    '404' => [
        'name' => 'Страница ошибки 404',
        'note' => 'URL странички, на которую будет перенаправлен пользователь, если он ввел URL несуществующей странички.',
    ],
    'errors' => [
        'no-url' => 'URL несуществующей странички!',
    ]
],

'extra-codes' => [
    'caption' => 'Дополнительный код на всех страницах сайта',
    'note' => 'Используется, например, для быстрого размещения кода Яндекс-метрики. <span style="color:red">В режиме администратора и редактора, этот код не подключается</span>',
    'head' => [
        'name' => 'Код наверху',
        'note' => 'Код будет размещен после открывающего тега &lt;head&gt;',
    ],
    'foot' => [
        'name' => 'Код внизу',
        'note' => 'Код будет размещен перед закрывающим тегом &lt;/body&gt;',
    ],  
],   
'other' => [
    'caption' => 'Прочее',
],
'ignored-url-params' => [
    'name' => 'Игнорируемые URL-параметры',
    'note' => '<p>Нештатные  URL-параметры, например, параметры, добавляемые сервисами Яндекса, могут приводить к неправильной работе системы.</p><p>В частности, перестанут правильно работать блоки привязанные к URL страниц с помощью метода Tdd::bind().</p><p>Имена параметров записывайте через запятую.</p>',
],

    
'submit-and-return' => '',
];  