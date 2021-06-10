<?php
/**
 * Translation file
 *
 * Note: don't change the return array to short notation because Transifex can't handle those during `tx push -s`
 */

return array(
	'item:object:discussion' => "Тема обсуждения",
	
	'add:object:discussion' => 'Добавить тему',
	'edit:object:discussion' => 'Изменить тему',
	'collection:object:discussion' => 'Темы обсуждения',
	'collection:object:discussion:group' => 'Групповые обсуждения',
	'collection:object:discussion:my_groups' => 'Обсуждения в моих группах',
	'notification:object:discussion:create' => "Отправить уведомление при создании обсуждения",
	'notifications:mute:object:discussion' => "об обсуждении '%s'",
	
	'discussion:settings:enable_global_discussions' => 'Включить глобальные обсуждения',
	'discussion:settings:enable_global_discussions:help' => 'Разрешить создавать обсуждения вне групп',

	'discussion:latest' => 'Последние обсуждения',
	'discussion:none' => 'Нет обсуждений',
	'discussion:updated' => "Последний комментарий%s %s",

	'discussion:topic:created' => 'Тема обсуждения создана.',
	'discussion:topic:updated' => 'Тема обсуждения обновлена.',
	'entity:delete:object:discussion:success' => 'Тема обсуждения удалена.',

	'discussion:topic:notfound' => 'Тема обсуждения не найдена',
	'discussion:error:notsaved' => 'Не могу сохранить эту тему',
	'discussion:error:missing' => 'Оба поля заголовок и сообщение являются обязательными',
	'discussion:error:permissions' => 'У Вас нет разрешений выполнять это действие',
	'discussion:error:no_groups' => "Вы не являетесь участником ни одной группы",

	/**
	 * River
	 */
	'river:object:discussion:create' => '%s добавил новую тему для обсуждения %s',
	'river:object:discussion:comment' => '%s прокомментировал обсуждаемую тему  %s',
	
	/**
	 * Notifications
	 */
	'discussion:topic:notify:summary' => 'Новая тема для обсуждения называется %s',
	'discussion:topic:notify:subject' => 'Новая тема для обсуждения: %s',
	'discussion:topic:notify:body' =>
'%s добавил новую тему для обсуждения "%s":

%s

Просмотреть и ответить на обсуждаемую тему:
%s
',

	'discussion:comment:notify:summary' => 'Новый комментарий в теме: %s',
	'discussion:comment:notify:subject' => 'Новый комментарий в теме: %s',
	'discussion:comment:notify:body' =>
'%s прокомментировал тему "%s":

%s

Просмотреть обсуждение и прокомментировать:
%s
',

	'groups:tool:forum' => 'Включить групповые обсуждения',

	/**
	 * Discussion status
	 */
	'discussion:topic:status' => 'Статус темы',
	'discussion:topic:closed:title' => 'Обсуждение закрыто.',
	'discussion:topic:closed:desc' => 'Обсуждение закрыто и не принимает новые комментарии.',

	'discussion:topic:description' => 'Сообщение темы',
);
