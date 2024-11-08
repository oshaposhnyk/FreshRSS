<?php

/******************************************************************************/
/* Each entry of that file can be associated with a comment to indicate its   */
/* state. When there is no comment, it means the entry is fully translated.   */
/* The recognized comments are (comment matching is case-insensitive):        */
/*   + TODO: the entry has never been translated.                             */
/*   + DIRTY: the entry has been translated but needs to be updated.          */
/*   + IGNORE: the entry does not need to be translated.                      */
/* When a comment is not recognized, it is discarded.                         */
/******************************************************************************/

return array(
	'action' => array(
		'actualize' => 'Update feeds',	// TODO
		'add' => 'Додати',
		'back' => '← Повернутись',
		'back_to_rss_feeds' => '← Повернутись до ваших RSS-стрічок',
		'cancel' => 'Відмінити',
		'create' => 'Створити',
		'delete_muted_feeds' => 'Видалити заглушені стрічки',
		'demote' => 'Понизити',
		'disable' => 'Відключити',
		'download' => 'Завантажити',
		'empty' => 'Спустошити',
		'enable' => 'Увімкнути',
		'export' => 'Експорт',
		'filter' => 'Відфільтрувати',
		'import' => 'Імпорт',
		'load_default_shortcuts' => 'Завантажити гарячі клавіші за замовчуванням ',
		'manage' => 'Налаштувати',
		'mark_read' => 'Позначити прочитаним',
		'menu' => array(
			'open' => 'Відкрити меню',
		),
		'nav_buttons' => array(
			'next' => 'Наступна стаття',
			'prev' => 'Попередня стаття',
			'up' => 'Вгору',
		),
		'open_url' => 'Відкрити URL',
		'promote' => 'Просунути',
		'purge' => 'Очистити',
		'refresh_opml' => 'Оновити OPML',
		'remove' => 'Видалити',
		'rename' => 'Перейменувати',
		'see_website' => 'Переглянути на сайті',
		'submit' => 'Відправити',
		'truncate' => 'Видалити всі статті',
		'update' => 'Змінити',
	),
	'auth' => array(
		'accept_tos' => 'Я приймаю <a href="%s">Умови надання послуг</a>.',
		'email' => 'Email адреса',
		'keep_logged_in' => 'Keep me logged in <small>(%s days)</small>',	// TODO
		'login' => 'Увійти',
		'logout' => 'Вийти',
		'password' => array(
			'_' => 'Пароль',
			'format' => '<small>Не менше 7 знаків</small>',
		),
		'registration' => array(
			'_' => 'Новий акаунт',
			'ask' => 'Створити акаужнт?',
			'title' => 'Створення акаунту',
		),
		'username' => array(
			'_' => 'Ім\'я користувача',
			'format' => '<small>Максимум 16 алфавітно-цифрових символів</small>',
		),
	),
	'date' => array(
		'Apr' => '\\к\\в\\і\\т\\н\\я',
		'Aug' => '\\с\\ер\\п\\е\\н\\я',
		'Dec' => '\\г\\р\\у\\д\\н\\я',
		'Feb' => '\\л\\ю\\т\\ого',
		'Jan' => '\\с\\іч\\н\\я',
		'Jul' => '\\лип\\н\\я',
		'Jun' => '\\ч\\ерв\\н\\я',
		'Mar' => '\\б\\ер\\е\\з\\н\\я',
		'May' => '\\т\\рав\\н\\я',
		'Nov' => '\\л\\ист\\оп\\а\\д\\а',
		'Oct' => '\\ж\\ов\\т\\н\\я',
		'Sep' => '\\вер\\е\\с\\ня',
		'apr' => 'квіт.',
		'april' => 'квітня',
		'aug' => 'серп.',
		'august' => 'серпня',
		'before_yesterday' => 'Напередодні вчора',
		'dec' => 'груд.',
		'december' => 'грудня',
		'feb' => 'лют.',
		'february' => 'лютого',
		'format_date' => 'j %s Y',	// IGNORE
		'format_date_hour' => 'j %s Y \\в H\\:i',	// IGNORE
		'fri' => 'Пт',
		'jan' => 'січ.',
		'january' => 'січня',
		'jul' => 'лип.',
		'july' => 'липня',
		'jun' => 'черв.',
		'june' => 'червня',
		'last_2_year' => 'Останні два роки',
		'last_3_month' => 'Останні три місяці',
		'last_3_year' => 'Останні три роки',
		'last_5_year' => 'Останні п’ять років',
		'last_6_month' => 'Останні шість місяців',
		'last_month' => 'Останній місяць',
		'last_week' => 'Останній тиждень',
		'last_year' => 'Останній рік',
		'mar' => 'бер.',
		'march' => 'березня',
		'may' => 'трав.',
		'may_' => 'травень',
		'mon' => 'Пн',
		'month' => 'місяці',
		'nov' => 'лист.',
		'november' => 'листопада',
		'oct' => 'жовт.',
		'october' => 'жовтня',
		'sat' => 'Сб',
		'sep' => 'вер.',
		'september' => 'вересня',
		'sun' => 'Нд',
		'thu' => 'Чт',
		'today' => 'Сьогодні',
		'tue' => 'Вт',
		'wed' => 'Ср',
		'yesterday' => 'Вчора',
	),
	'dir' => 'ltr',	// IGNORE
	'freshrss' => array(
		'_' => 'FreshRSS',	// IGNORE
		'about' => 'Про FreshRSS',
	),
	'js' => array(
		'category_empty' => 'Порожня категорія',
		'confirm_action' => 'Ви впевнені, що хочете виконати цю дію? Вона не може бути скасована!',
		'confirm_action_feed_cat' => 'Ви впевнені, що хочете виконати цю дію? Ви втратите пов’язані статті в закладках та запити користувачів. Це не можна скасувати!',
		'feedback' => array(
			'body_new_articles' => 'Є %%d нових статей для читання на FreshRSS.',
			'body_unread_articles' => '(Непрочитані: %%d)',
			'request_failed' => 'Запит не вдалося виконати. Їмовірно, це викликано проблемами з підключенням до Інтернету.',
			'title_new_articles' => 'FreshRSS: нові статті!',
		),
		'labels_empty' => 'Немає міток',
		'new_article' => 'Є нові статті, натисніть, щоб оновити сторінку.',
		'should_be_activated' => 'JavaScript має бути увімкнений',
	),
	'lang' => array(
		'cs' => 'Čeština',	// IGNORE
		'de' => 'Deutsch',	// IGNORE
		'el' => 'Ελληνικά',	// IGNORE
		'en' => 'English',	// IGNORE
		'en-us' => 'English (United States)',	// IGNORE
		'es' => 'Español',	// IGNORE
		'fa' => 'فارسی',	// IGNORE
		'fi' => 'Suomi',	// IGNORE
		'fr' => 'Français',	// IGNORE
		'he' => 'עברית',	// IGNORE
		'hu' => 'Magyar',	// IGNORE
		'id' => 'Bahasa Indonesia',	// IGNORE
		'it' => 'Italiano',	// IGNORE
		'ja' => '日本語',	// IGNORE
		'ko' => '한국어',	// IGNORE
		'lv' => 'Latviešu',	// IGNORE
		'nl' => 'Nederlands',	// IGNORE
		'oc' => 'Occitan',	// IGNORE
		'pl' => 'Polski',	// IGNORE
		'pt-br' => 'Português (Brasil)',	// IGNORE
		'ru' => 'Русский',	// IGNORE
		'sk' => 'Slovenčina',	// IGNORE
		'tr' => 'Türkçe',	// IGNORE
		'ukr' => 'Українська',	// TODO
		'zh-cn' => '简体中文',	// IGNORE
		'zh-tw' => '正體中文',	// IGNORE
	),
	'menu' => array(
		'about' => 'Про проєкт',
		'account' => 'Обліковий запис',
		'admin' => 'Адміністрування',
		'archiving' => 'Архівування',
		'authentication' => 'Авторизація',
		'check_install' => 'Перевірка інсталяції',
		'configuration' => 'Конфігурація',
		'display' => 'Відображення',
		'extensions' => 'Розширення',
		'logs' => 'Логи',
		'privacy' => 'Конфіденційність',
		'queries' => 'Запити користувача',
		'reading' => 'Читання',
		'search' => 'Шукати слова або #теги',
		'search_help' => 'Додаткова інформація про <a href="https://freshrss.github.io/FreshRSS/en/users/10_filter.html#with-the-search-field" target="_blank">параметри пошуку</a> міститься в документації',
		'sharing' => 'Поділитися',
		'shortcuts' => 'Гарячі клавіші',
		'stats' => 'Статистика',
		'system' => 'Системні налаштування',
		'update' => 'Оновлення системи',
		'user_management' => 'Керування користувачами',
		'user_profile' => 'Профіль',
	),
	'period' => array(
		'days' => 'days',	// IGNORE
		'hours' => 'hours',	// IGNORE
		'months' => 'months',	// IGNORE
		'weeks' => 'weeks',	// IGNORE
		'years' => 'years',	// IGNORE
	),
	'share' => array(
		'Known' => 'Known based sites',	// IGNORE
		'archiveIS' => 'archive.is',	// IGNORE
		'archiveORG' => 'archive.org',	// IGNORE
		'archivePH' => 'archive.ph',	// IGNORE
		'buffer' => 'Buffer',	// IGNORE
		'clipboard' => 'Clipboard',	// IGNORE
		'diaspora' => 'Diaspora*',	// IGNORE
		'email' => 'Email',	// IGNORE
		'email-webmail-firefox-fix' => 'Email (webmail - fix for Firefox)',	// IGNORE
		'facebook' => 'Facebook',	// IGNORE
		'gnusocial' => 'GNU social',	// IGNORE
		'jdh' => 'Journal du hacker',	// IGNORE
		'lemmy' => 'Lemmy',	// IGNORE
		'linkding' => 'Linkding',	// IGNORE
		'linkedin' => 'LinkedIn',	// IGNORE
		'mastodon' => 'Mastodon',	// IGNORE
		'movim' => 'Movim',	// IGNORE
		'omnivore' => 'Omnivore',	// IGNORE
		'pinboard' => 'Pinboard',	// IGNORE
		'pinterest' => 'Pinterest',	// IGNORE
		'pocket' => 'Pocket',	// IGNORE
		'print' => 'Print',	// IGNORE
		'raindrop' => 'Raindrop.io',	// IGNORE
		'reddit' => 'Reddit',	// IGNORE
		'shaarli' => 'Shaarli',	// IGNORE
		'telegram' => 'Telegram',	// IGNORE
		'twitter' => 'Twitter',	// IGNORE
		'wallabag' => 'wallabag v1',	// IGNORE
		'wallabagv2' => 'wallabag v2',	// IGNORE
		'web-sharing-api' => 'System sharing',	// IGNORE
		'whatsapp' => 'Whatsapp',	// IGNORE
		'xing' => 'Xing',	// IGNORE
	),
	'short' => array(
		'attention' => 'Warning!',	// IGNORE
		'blank_to_disable' => 'Leave blank to disable',	// IGNORE
		'by_author' => 'By:',	// IGNORE
		'by_default' => 'By default',	// IGNORE
		'damn' => 'Blast!',	// IGNORE
		'default_category' => 'Uncategorized',	// IGNORE
		'no' => 'Ні',
		'not_applicable' => 'Not available',	// IGNORE
		'ok' => 'Okay!',	// IGNORE
		'or' => 'or',	// IGNORE
		'yes' => 'Так',
	),
	'stream' => array(
		'load_more' => 'Load more articles',	// IGNORE
		'mark_all_read' => 'Відмітити всі як прочитані',	// IGNORE
		'nothing_to_load' => 'There are no more articles',	// IGNORE
	),
);
