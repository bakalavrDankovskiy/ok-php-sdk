<?php

namespace OK\Actions;

/**
 * @method [] commit($access_token, $params = []) Метод завершает процесс создания Моментов, публикуя от имени пользователя или группы загруженные медиа объекты
 * @method [] getChallengeMedia($access_token, $params = []) Метод для просмотра моментов из конкурса
 * @method [] getChallengePage($access_token, $params = []) Метод возвращает информацию о конкурсе, а также список моментов в нем
 * @method [] getUploadUrl($access_token, $params = []) Метод возвращает URL, который должен использоваться для фактической загрузки Момента или его части
 */
class Moments extends BaseAction
{
}
