<?php
return [
'heading' => 'Настройки страницы',
'settings-are-unavailable' => 'Настройки данной страницы пока недоступны!<br>Такое обычно случается, если данные псевдостраниц были удалены, или в соответстсвующем навигационном блоке неправильно вызывается метод Router::convert().',
'phref' => 'Адрес',
'name' => 'Название',
'name-comment' => 'Отображается в навигационной цепочке (хлебных крошках). Можно использовать также в качестве заголовка.',
'pseudo-pages-title-prefix' => 'Префикс<br />к титулам',
'pseudo-pages-title-prefix-comment' => 'Добавляется спереди к титулам всех псевдостраниц базовой страницы',
'title' => 'Титул (title)',
'title-comment' => 'Отображается во вкладке браузера',
'alias' => 'Алиас (псевдоним)',
'alias-comment' => 'Применяется для преобразования адреса страницы в человекопонятный вид',
'alias-comment2' => '. Вставленный текст автоматически преобразуется в латиницу',
'page-is-hidden' => 'Скрыть страницу',
'only-for-guests' => 'Посетители эту страницу видеть не будут. Будут видеть: гости страницы, редакторы и администратор',
'key-words' => 'Ключевые слова<br>(keywords)',
'description' => 'Описание<br>(description)',
'changefreq' => 'Вероятная частота<br>изменения страницы',
'changefreq_always' => 'меньше часа',
'changefreq_auto' => 'автоматически',
'changefreq_never' => 'больше года',
'priority' => 'Приоритетность',
'priority-comment' => 'Допустимый диапазон значений: от 0,0 до 1,0 (по умолчанию: 0,5).',
'error' => 'Ошибка!',
'parent-phref' => 'URL родительской<br />страницы',
//'incorrect-page-id' => 'Вы ввели некорректный идентификатор страницы',
'incorrect-href' => 'Вы ввели некорректный URL страницы',
'note' => "Автоматически родительскую страницу поменяют все остальные аналогичные ссылки того же навигационного блока (где находится ссылка на текущую страницу). Идентификатор родительской страницы может понадобиться в шаблонах с вспомогательными средствами навигации.",
'assign-manualy' => 'Назначить вручную',
'change-parent-page-for-all-siblings' => 'Для всех страниц той же группы',//блока//того же навигационного уровня
'set-default-parent-url' => 'Установить значение по умолчанию',
'page-not-exist' => 'Такой страницы (%d) не существует.',
'parent-page-id' => '-----Идентификатор<br />родительской страницы',
//'submit' => 'Сохранить',
'home-page-has-not-parent' => 'У главной страницы не бывает родительской страницы',
'home-page-has-not-alias' => 'У главной страницы не бывает алиасов',
'page-settings' => 'Настройки страницы',
'page-address' => 'Адрес страницы:',
'human-address' => 'Человекопонятный адрес:',
'edited' => 'Страница редактировалась:',
//'reset-and-assign-address' => '',
'address-of-any-kind' => 'Можно вставлять в любом виде: параметрическом или человекопонятном, абсолютном или относительно главной страницы. Пустое значение соответствует главной странице',
];


