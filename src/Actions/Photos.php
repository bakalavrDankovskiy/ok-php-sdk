<?php

namespace OK\Actions;

/**
 * @method [] addAlbumLike($access_token, $params = []) Поставить “Класс” указанному фотоальбому
 * @method [] addPhotoLike($access_token, $params = []) Поставить “Класс” указанной фотографии
 * @method [] createAlbum($access_token, $params = []) Создает фотоальбом для указанного пользователя
 * @method [] deleteAlbum($access_token, $params = []) Удаление альбома
 * @method [] deletePhoto($access_token, $params = []) Удалить фотографию
 * @method [] deleteTags($access_token, $params = []) Удаление фотометок друзей (они же фототеги, фотопины) с фотографии текущего пользователя
 * @method [] editAlbum($access_token, $params = []) Изменить параметры альбома: название, описание и настройки видимости
 * @method [] editPhoto($access_token, $params = []) Изменить описание к фотографии
 * @method [] getAlbumInfo($access_token, $params = []) Получение информации об альбоме
 * @method [] getAlbumLikes($access_token, $params = []) Получить список пользователей, поставивших “Класс” альбому
 * @method [] getAlbums($access_token, $params = []) Возвращает список фотоальбомов указанного пользователя
 * @method [] getInfo($access_token, $params = []) Получение информации о фотографиях пользователя, друга или группы
 * @method [] getPhotoInfo($access_token, $params = []) Получение информации о фотографии
 * @method [] getPhotoLikes($access_token, $params = []) Получить список пользователей, поставивших “Класс” фотографии
 * @method [] getPhotoMarks($access_token, $params = []) Возвращает список всех оценок фотографий пользователя
 * @method [] getPhotos($access_token, $params = []) Получение списка фотографий пользователя, его друга или группы
 * @method [] getTags($access_token, $params = []) Получение списка отмеченных пользователей на фотографии
 * @method [] getUserAlbumPhotos($access_token, $params = []) Возвращает список фотографий указанного альбома
 * @method [] getUserPhotos($access_token, $params = []) Возвращает список личных фотографий указанного пользователя
 * @method [] setAlbumMainPhoto($access_token, $params = []) Установить фотографию в качестве обложки альбома
 */
class Photos extends BaseAction
{
}
