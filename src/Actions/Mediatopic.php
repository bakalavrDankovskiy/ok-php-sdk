<?php

namespace OK\Actions;

/**
 * @method [] deleteTopic($access_token, $params = []) Удаление медиатопика
 * @method [] edit($access_token, $params = []) Удаление медиатопика
 * @method [] getByIds($access_token, $params = []) Получение медиатопика по его уникальному идентификатору
 * @method [] getPollAnswerVoters($access_token, $params = []) Возвращает пользовательей, проголосовавших за указанный вариант ответа
 * @method [] getRepublishedTopic($access_token, $params = []) Получение id топика после перепубликации (например, после прохождения модерации или публикации отложенного поста)
 * @method [] post($access_token, $params = []) Публикация медиатопика, который может содержать множество вложенных объектов
 */
class Mediatopic extends BaseAction
{
}
