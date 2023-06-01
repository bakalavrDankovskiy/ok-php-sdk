<?php

namespace OK\Actions;

/**
 * @method [] getCounters($access_token, $params = []) Возвращает основные счётчики объектов группы - количество членов группы, фотографий, фотоальбомов и т.п.
 * @method [] getInfo($access_token, $params = []) Получение информации о группах
 * @method [] getMembers($access_token, $params = []) Получение списка пользователей группы. Для получения всех участников группы в порядке вступления необходимо в качестве аргумента statuses перечислить все статусы (ADMIN, MODERATOR, ACTIVE). Если передать пустое значение, то пользователи вернутся в порядке возрастания id.
 * @method [] getStatOverview($access_token, $params = []) Получает основные счетчики статистики групп
 * @method [] getStatPeople($access_token, $params = []) Метод для получения статистики по аудитории группы: демография по полу и возрасту, география по странам и городам, и т.д.<br> Данные в статистике возвращаются за последние 7 дней. За исключением демографии по участникам, она - среди всех участников группы (НО демография по охвату и пользователям, дававшим обратную связь - за последние 7 дней).
 * @method [] getStatTopic($access_token, $params = []) Метод для получения статистики по топику, используя его идентификатор
 * @method [] getStatTopics($access_token, $params = []) Метод для получения статистики по топикам. Возвращает список топиков из группы по выбранному диапазону со статистикой.
 * @method [] getStatTrends($access_token, $params = []) Получает историю счетчиков статистики по дням
 * @method [] getUserGroupsByIds($access_token, $params = []) Получение информации о принадлежности пользователей конкретной группе
 * @method [] getUserGroupsV2($access_token, $params = []) Получение списка групп пользователя
 * @method [] isMessagesAllowed($access_token, $params = [])
 * @method [] pinGroupFeed($access_token, $params = []) Операция припинивания или отпинивания события в групповой ленте
 * @method [] setMainPhoto($access_token, $params = []) Установка главной фотографии группы.
 */
class Group extends BaseAction
{
}
