<?php

namespace OK\Actions;

/**
 * @method [] delete($access_token, $params = []) Метод удаляет событие из ленты пользователя
 * @method [] isSubscribed($access_token, $params = []) Узнать подписаны ли мы на события пользователя или группы
 * @method [] markAsSpam($access_token, $params = []) Метод помечает событие в ленте как спам и одновременно удаляет его из ленты пользователя
 */
class Stream extends BaseAction
{
}
