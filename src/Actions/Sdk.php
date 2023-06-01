<?php

namespace OK\Actions;

/**
 * @method [] getEndpoints($access_token, $params = []) Возвращает линки на сервисы Одноклассников.
 * @method [] getInstallSource($access_token, $params = []) Возвращает положительный идентификатор места клика на приложение внутри OK
 * @method [] init($access_token, $params = []) Создает новую SDK сессию (анонимный логин)
 * @method [] reportPayment($access_token, $params = []) Отправка информации о платеже пользователя
 * @method [] reportStats($access_token, $params = []) Отправляет статистику об использование пользователем приложения
 * @method [] rewardStatus($access_token, $params = []) Определение победителя (приз - ОКи) среди участников игрового события
 * @method [] setStatus($access_token, $params = []) Установка статуса пользователя в игровом событии
 */
class Sdk extends BaseAction
{
}
