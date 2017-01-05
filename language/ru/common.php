<?php
/**
*
* @package Support Toolkit Russian language Sheer
* @version $Id$
* @copyright (c) 2009 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'BACK_TOOL'							=> 'Вернуться на предыдущую страницу STK',
	'BOARD_FOUNDER_ONLY'				=> 'Только Основатель имеет доступ к STK',

	'CAT_ADMIN'							=> 'Средства администрирования',
	'CAT_ADMIN_EXPLAIN'					=> 'Средства администрирования могут быть использованы администратором для управления конкретными аспектами конференции и решать общие проблемы.',
	'CAT_DEV'							=> 'Средства разработки',
	'CAT_DEV_EXPLAIN'					=> 'Средства разработки могут быть использованы разработчиками и авторами расширений для выполнения общих задач.',
	'CAT_ERK'							=> 'Аварийный ремонтный комплект',
	'CAT_ERK_EXPLAIN'					=> 'Аварийный ремонтный комплект включает отдельные инструменты STK, которые выполняют проверку и помогают обнаружить проблемы, мешающие нормальной работе вашей конференции. Нажмите <a href="%s"><b>здесь</b></a> для выполнения АРК.',
	'CAT_MAIN'							=> 'Главная',
	'CAT_MAIN_EXPLAIN'					=> 'Support Toolkit, или STK представляет собой программный пакет, который может быть использован для устранения проблем, связанных с работой phpBB 3.1.x. Инструментарий является второй <b>Администраторской панелью управления</b>, предоставляющей администратору доступ к функциям, используемым для разрешения различных проблем неправильной работы конференции.',
	'CAT_SUPPORT'						=> 'Инструменты поддержки',
	'CAT_SUPPORT_EXPLAIN'				=> 'Средства поддержки используются для фиксации проблем или восстановления отдельных частей установки phpBB 3.1.x.',
	'CAT_USERGROUP'						=> 'Средства пользователи и группы',
	'CAT_USERGROUP_EXPLAIN'				=> 'Средства пользователи и группы могут быть использованы для управления пользователями и группами, такими способами, которые не доступны в стандартной установке phpBB 3.1.x.',
	'CONFIG_NOT_FOUND'					=> 'Не загружен файл конфигурации STK. Проверьте установку STK.',

	'DOWNLOAD_PASS'						=> 'Загрузить файл пароля',
	'STK_PASSWORD'						=> 'Пароль',

	'EMERGENCY_LOGIN_NAME'				=> 'STK Аварийный вход',
	'ERK'								=> 'Аварийный ремонтный комплект',

	'FAIL'								=> 'Отказ',
	'FAIL_REMOVE_PASSWD'				=> 'Не удалён файл пароля с истёкшим сроком. Удалите файл вручную!',

	'GEN_PASS_FAILED'					=> 'Признаки некорректной генерации файла пароля. Перегенерируйте заново!',
	'GEN_PASS_FILE'						=> 'Сгенерировать файл пароля',
	'GEN_PASS_FILE_EXPLAIN'				=> 'Если вы не можете авторизироваться на конференции phpBB, вы можете использовать метод авторизации через STK. Для этого вы должны <a href="%s"><strong>сгенерировать</strong></a> новый файл пароля.',

	'INCORRECT_CLASS'					=> 'Некорректный класс: stk/tools/%1$s.%2$s',
	'INCORRECT_PASSWORD'				=> 'Пароль некорректен',
	'INCORRECT_PHPBB_VERSION'			=> 'Ваша версия phpBB несовместима с данным STK. Убедитесь, что вы используете версию phpBB: %1$s.<br />Актуальная версия phpBB доступна для скачивания <a href="http://www.phpbbguru.net/files/base/phpbb31-ru/">здесь</a>',

	'LOGIN_STK_SUCCESS'					=> 'Авторизация прошла успешно, сейчас вы будете перенаправлены в Инструментарий поддержки.',

	'NOTICE'							=> 'Примечание',
	'NO_VERSION_FILE'					=> 'STK не определил актуальную версию пакета. Перейдите на <a href="http://www.phpbbguru.net/community/topic42862.html" target="_blank">страницу</a> и убедитесь, что используемая вами версия актуальная перед тем, как продолжать её использовать.',

	'REQUEST_PHPBB_VERSION'				=> 'Определение версии phpBB',
	'REQUEST_PHPBB_VERSION_EXPLAIN'		=> 'Инструментарий поддержки не смог правильно определить версию вашей конференции из-за различия номера версии в базе данных и файле /includes/constants.php<br />Выберите номер фактической версии из представленного ниже списка.<br />Посетите <a href="http://www.phpbbguru.net/community/forum47.html">форум поддержки</a> чтобы получить конкретную помощь в решении данной проблемы.',

	'PASS_GENERATED'					=> 'Ваш пароль для STK сгенерирован успешно!<br/>Пароль: %1$s <br />Это пароль действителен до: <span style="text-decoration: underline;">%2$s</span>. после этого времени вы <strong>должны</strong> сгенерировать новый файл пароля для того, чтобы продолжать пользоваться аварийным входом в дальнейшем!<br /><br />Используйте кнопку для скачивания файла. Сохраненный файл должен быть помещён в папку "stk"',
	'PASS_GENERATED_IPBAN'				=> 'Ваш пароль для STK сгенерирован успешно!<br/>Пароль: %1$s <br />Это пароль действителен до: <span style="text-decoration: underline;">%2$s</span>. после этого времени вы <strong>должны</strong> сгенерировать новый файл пароля для того, чтобы продолжать пользоваться аварийным входом в дальнейшем!<br /><br />',
	'PASS_GENERATED_DOWNLOAD' 			=> 'Нажмите <a href="%s"><strong>здесь</strong></a> для скачивания файла. Сохраненный файл должен быть помещён в папку "stk"',
	'PASS_GENERATED_REDIRECT'			=> 'После помещения файла пароля в правильное место, нажмите <a href="%s"><strong>здесь</strong></a> для возврата на страницу входа.',
	'PLUGIN_INCOMPATIBLE_PHPBB_VERSION'	=> 'Эта версия STK несовместима с используемой вами версией phpBB',
	'PROCEED_TO_STK'					=> '%sПерейти в STK%s',

	'STK_FOUNDER_ONLY'					=> 'Для использования STK вы должны авторизироваться повторно',
	'STK_LOGIN'							=> 'Вход в STK',
	'STK_LOGIN_WAIT'					=> 'Вы можете сделать только одну попытку в течение 3 секунд, попытайтесь снова.',
	'STK_LOGOUT'						=> 'Выйти из STK',
	'STK_LOGOUT_SUCCESS'				=> 'Вы успешно вышли из STK.',
	'STK_NON_LOGIN'						=> 'Вход в STK',
	'STK_OUTDATED'						=> 'Ваша версия STK устарела. Актуальная версия <strong style="color: #008000;"> %1$s </strong>, в то время как ваша версия <strong style="color: #FF0000;">%2$s</strong>.<br /><br />Вследствие большого влияния инструментария STK на конференцию phpBB, он был отключён до обновления. Рекомендуется поддерживать всё программное обеспечение на сервере в актуальном состоянии. Более подробную информацию о последнем обновлении STK смотрите <a href="%3$s">в этой теме</a>.<br /><br /><em>Если вы видите это уведомление после обновления STK, нажмите <a href="%4$s">ЗДЕСЬ</a>, чтобы еще раз проверить версию STK.</em>',
	'SUPPORT_TOOL_KIT'					=> 'STK',
	'SUPPORT_TOOL_KIT_INDEX'			=> 'Главная страница STK',
	'SUPPORT_TOOL_KIT_PASSWORD'			=> 'Пароль',
	'SUPPORT_TOOL_KIT_PASSWORD_EXPLAIN'	=> 'До тех пор, пока вы не авторизированы на конференции phpBB3, вы должны  подтвердить ваши права администратора, введя ваш действующий или вновь сгенерированный пароль для STK.<br /><br /><strong>Куки ДОЛЖНЫ быть разрешены вашим браузером, иначе вы не сможете войти.</strong>',

	'TOOL_INCLUTION_NOT_FOUND'			=> 'Попытка загрузить отсутствующий файл: %1$s',
	'TOOL_NAME'							=> 'Название средства',
	'TOOL_NOT_AVAILABLE'				=> 'Запрошенное средство недоступно!',

	'USING_STK_LOGIN'					=> 'Вы авторизированы через генератор пароля для STK. Этим методом рекомендуется пользоваться <strong>только в том случае</strong>, если вы не можете авторизироваться обычным способом.<br />Для отказа от использования этого метода авторизации нажмите <a href="%1$s">здесь</a>.',
	'VISITED'							=> 'Последнее посещение',
	'TOTAL'								=> 'Всего',

	'ERK_OK'							=> 'Аварийный Ремкомплект не нашел каких-либо критических проблем в вашей установке phpBB.',
	'RELOAD_STK'						=> 'Нажмите <a href="%s"><b>здесь</b></a> для возврата в STK.',
	'RELOAD_ARK'						=> 'Нажмите <a href="%s"><b>здесь</b></a> для возврата в АРК.',
	'ANONYMOUS_MISSING'					=> 'Support Toolkit определил, что учетная запись Гостя была удалена из базы данных, поэтому ваша конференция не может нормально функционировать.<br />
											Нажмите <a href="%s"><b>здесь</b></a> для для перехода в Аварийный восстановительный комплект - учетная запись Гостя будет автоматически восстановлена.',

	'ERK_NO_WHITELIST'					=> 'Перехватчик метки BOM не может прочитать список проверяемых файлов (whitelist.txt), и поэтому невозможно произвести проверку. Обратитесь за поддержкой на <a href="%s">форум поддержки</a>.',
	'ERK_ISSUE_FOUND'					=> '“Аварийный ремонтный комплект” (АРК) как часть STK проверил файлы phpBB и определил, что некоторые из них содержат недопустимый контент, который потенциально может нарушить работу конференции. STK попытался решить эту проблему и создал пакет с исправленными файлами <em>(резервные копии можно найти в папке <c>store/bom_sniffer_backup/</c>)</em>. Этот пакет сохранен в папке <c>store/bom_sniffer/</c> . Чтобы применить изменения <strong>переместите</strong> эти файлы из папки “store” в соответсвующие папки phpBB и перезапустите АРК. Инструмент снова проверит файлы и перенаправит вас в STK, если не будет обнаружено никаких недостатков.<br /><br /><strong style="color: #ff0000;">Прежде чем переместить сгенерированные файлы, убедитесь, что они не содержат ошибок!</strong> В случае сомнений обратитесь за помощью на <a href="http://www.phpbb.com/community/viewforum.php?f=46">форум поддержки</a>.',
	'ERK_STORE_WRITE'					=> 'Для работы перехватчика метки BOM требуется, чтобы папка <c>store</c> существовала и допускала запись!',
	'ERK_REMOVE_DIR'					=> 'STK пытался удалить папку с восстановлеными файлами, но не смог этого сделать. Для корректной работы этого инструмента папка\'<c>%s</c>\' должна быть удалена с сервера. Удалите эту папку вручную и перезапустите АРК.',
	'BOM_SNIFFER_WRITABLE'				=> 'Для работы перехватчика метки BOM требуется, чтобы папка ' . STK_ROOT_PATH . 'cache существовала и допускала запись!',
	'STK_FATAL_ERROR'					=> '<strong style="color: #ff0000;">Произошла неустранимая ошибка.</strong><br /><br />
											Support Toolkit включает в себя Аварийный восстановительный комплект (АРК) - инструмент, созданный для решения некоторых ошибок, которые мешают функционировать phpBB.<br />
											Если вы видите это сообщение, это означает что АРК запустился автоматически для того, чтобы попытаться исправить обнаруженную ошибку.
											Для продолжения нажмите <a href="' . STK_ROOT_PATH . 'erk.' . PHP_EXT . '"><b>здесь</b></a>.',
	'CONFIG_REPAIR'						=> 'Восстановление config.php',
	'CONFIG_REPAIR_EXPLAIN'				=> 'С помощью этого инструмента вы можете восстановить ваш конфигурационный файл config.php',
	'CONFIG_REPAIR_NO_TABLES'			=> 'В указанной базе данных не найдено таблиц phpBB3 с указанным префиксом.',
	'CONFIG_REPAIR_NO_DBMS'				=> 'Не удалось определить ни одного подходящего типа базы данных ',
	'CONFIG_REPAIR_CONNECT_FAIL'		=> 'Не удалось подключиться к базе данных.',
	'CONFIG_REPAIR_WRITE_ERROR'			=> '<strong style="color: #ff0000;">ОШИБКА: Не удалось записать конфигурационный файл.</strong><br />Пожалуйста, скопируйте приведенный ниже текст, поместите его в файл с именем config.php, и поместите его в корневой каталог вашей конференции.<br /><br />',

	'CONFIG_LIST'						=> 'Параметры конфигурации',
	'CONFIG_LIST_EXPLAIN'				=> 'Здесь вы можете просмотреть и изменить параметры конфигурации.',
	'CLOSE'								=> 'Закрыть',
	'UPDATES_AVAILABLE'					=> 'Ваша версия phpBB не самая последняя. Доступная для обновления версия %1$s<br />Перейдите по этой ссылке <a href="%2$s" target="_blank" />%2$s</a> на объявление о выпуске последней версии,<br />которое содержит дополнительную информацию, а также инструкции по обновлению phpBB',
	'VERSIONCHECK_FAIL'					=> 'Не удалось получить сведения о последней версии phpBB.',

	'SELECT_ALL'						=> 'Чтобы выбрать все, переместите курсор в поле ниже и нажмите Ctrl-A (PC), Cmd-A (Mac)<br />Двойной щелчок выделяет слово, тройной всю строку',
));
