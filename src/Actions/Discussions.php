<?php

namespace OK\Actions;

/**
 * @method [] get($access_token, $params = []) Получение подробной информации о дискуссии с возможностью в одном запросе получить информацию об упоминаемых в дискуссии объектах.
 * @method [] getAttachedResources($access_token, $params = []) Возвращает информацию о ресурсах, прикрепленных к комментарию, по id
 * @method [] getComment($access_token, $params = []) Получение информации о комментарие к дискуссии.
 * @method [] getCommentLikes($access_token, $params = []) Получение списка пользователей, поставивших “Класс” для указанного комментария
 * @method [] getComments($access_token, $params = []) Получение списка комментариев к дискуссии
 * @method [] getDiscussionComments($access_token, $params = []) Получение комментариев из ветки дискуссии
 * @method [] getDiscussionCommentsCount($access_token, $params = []) Получение числа сообщений в одной дискуссии
 * @method [] getDiscussionLikes($access_token, $params = []) Получить список пользователей, поставивших “Класс” для дискуссии
 * @method [] getDiscussionsNews($access_token, $params = []) Получение информации о новостях дискуссий, на которые подписан пользователь.
 * @method [] getList($access_token, $params = []) Получение списка дискуссий
 */
class Discussions extends BaseAction
{
}
