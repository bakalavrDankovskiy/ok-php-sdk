<?php

namespace OK\Actions;

/**
 * @method [] sendFavPromo($access_token, $params = []) Отправляет сообщение с оповещением постоянным платящим пользователям приложения.
 * @method [] sendMass($access_token, $params = []) Отправляет сообщение с оповещением всем пользователям приложения, чьи профили соответствуют указанным критериям
 * @method [] sendSimple($access_token, $params = []) Отправляет простое оповещение от приложения пользователю
 * @method [] stopFavPromo($access_token, $params = []) Отменяет рассылку созданную при помощи метода notifications.sendFavPromo
 * @method [] stopSendMass($access_token, $params = []) Отменяет рассылку созданную при помощи метода notifications.sendMass
 * @method [] updateFavPromo($access_token, $params = []) Обновляет рассылку созданную при помощи метода notifications.sendFavPromo
 */
class Notifications extends BaseAction
{
}
