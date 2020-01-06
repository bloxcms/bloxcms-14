<?php
return [
'arg-is-not-arr' => 'Аргумент в методе Tdd::get() не является массивом!', # The argument of method Tdd::get() is not an array!
'no-tpl' => 'В аргументе-массиве метода Tdd::get($blockInfo) не задан элемент tpl, элемент src-block-id: %s', # The element tpl in parameter $blockInfo of method Tdd::get() is empty!
'tdd-edited' => 'Дескриптор %s изменился! Чтобы изменения, сделанные в этом файле вступили в силу, необходимо открыть данную страницу в режиме администратора сайта.',
'with-bom' => 'Файл %s имеет сигнатуру! Пересохраните его без сигнатуры (UTF-8 без BOM)',
'remove-bom' => 'Был создан файл %s с сигнатурой. Убрать сигнатуру программно не удалось, сделайте это вручную.',
'no-old-tdd' => 'Внимание! На сайте отсутствует старый файл дескриптора шаблона. Для работы системы необходимо скопировать основной файл дескриптора шаблона %s в папку для уже назначенных дескрипторов: <b>assigned</b>. Этого будет достаточно, если Вы уверены, что  после момента удаления старого файла, основной файл дескриптора не редактировался. Если Вы в этом не уверены, то проверьте соответствие типов данных старого, только что скопированного, дескриптора типам данных таблицы  в базе данных. Обратите особое внимание на идентификационные типы данных (page, block, file, select).',
'no-main-tpl' => 'Основной дескриптор %s отсутствует. Скорее всего он был удален вручную',
'no-main-tpl2' => 'Шаблон %s. Нет основного дескриптора, но есть старый дескрипор и в базе данных есть соответствующие таблицы. Сообщите об этой ошибке разработчику Blox CMS',
'no-both-tdds' => 'Шаблон %s. Нет ни основного, ни старого дескриптора, но в базе данных есть таблицы, использующие этот дескриптор. Если в таблице есть идентификаторные данные, то удалять таблицы вручную нежелательно. ',
'not-touched' => 'Время модификации файла %s изменить не удалось', # The file $dst was not touched
'not-copied' => 'Файл %s не удалось скопировать в %s', # File $src could not be copied to destination: $dst
'no-params' => 'В метода Tdd::bind() не заданы параметры',
'table-altering-error' => 'При изменении таблицы %s произошла ошибка. Смотрите журнал ошибок',
];
