<?php

namespace OK\Actions;

/**
 * @method arrray tagContents($access_token, $params = []) Получить медиатопики, фоточки и видео с хэштэгами
 * @method [] tagMentions($access_token, $params = []) Получить количество упоминаний #тэга(ов). Учитываются в т.ч. приватные записи.
 * @method [] tagSearch($access_token, $params = []) Найти #тэги в которых есть указанная последовательность символов (миниум 3 символа). Найденые тэги сортируются по популярности.
 */
class Search extends BaseAction
{
}
