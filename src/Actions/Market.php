<?php

namespace OK\Actions;

/**
 * @method [] add($access_token, $params = []) Добавление товара
 * @method [] addCatalog($access_token, $params = []) Добавление нового каталога в группу
 * @method [] delete($access_token, $params = []) Удаление товара
 * @method [] deleteCatalog($access_token, $params = []) Удаление каталога
 * @method [] edit($access_token, $params = []) Редактирование товара
 * @method [] editCatalog($access_token, $params = []) Редактирование каталога
 * @method [] getByCatalog($access_token, $params = []) Получение товаров по ид каталога
 * @method [] getByIds($access_token, $params = []) Получение товаров
 * @method [] getCatalogsByGroup($access_token, $params = []) Получение каталогов группы
 * @method [] getCatalogsByIds($access_token, $params = []) Получение каталогов по идентификаторам
 * @method [] getProducts($access_token, $params = []) Получение товаров
 * @method [] pin($access_token, $params = []) Прикрепление к верху/открепление товара.
 * @method [] reorder($access_token, $params = []) Переместить товар внутри каталога
 * @method [] reorderCatalogs($access_token, $params = []) Переместить каталоги внутри группы
 * @method [] setStatus($access_token, $params = []) Установить статус товара
 * @method [] updateCatalogsList($access_token, $params = []) Установить список каталогов, в которых будет состоять товар
 */
class Market extends BaseAction
{
}
