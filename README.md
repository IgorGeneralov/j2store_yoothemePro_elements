# j2store_yoothemePro_elements
Элементы интеграции магазина J2Store (Joomla) в конструктор Yootheme Pro.
На данный момент - находятся в разработке.
## Содержание
### j2store_price
Элемент для Карточки товара, содержащий в себе характеристики товара.
Все элементы отключаемые и имеют возможность настройки внешнего вида:
> - SKU товара
> - Brand (Производитель товара, с возможностью включить/отключить ссылку на страницу Производителя товара)
> - Цена товара (автоматически выводит Базовую стоимость товара, а в случае существующей скидки - цену со скидкой)
> - Кнопка "Добавить в корзину" 
## Установка
1. У вас, в Joomla, предварительно, должен быть установлен конструктор [**YOOtheme Pro**](https://yootheme.com/page-builder)
2. Создайте в папке Templates свой темплейт **yootheme_CHILD** (имя дочернего темплейта может быть любое, но необходимо придерживаться правила для yootheme-конструктора):
>     templates/yootheme_CHILD/
3. Внутри **yootheme_CHILD** добавьте папку **builder** (по-умолчанию YOOtheme заберёт из неё ваши элементы для констурктора):
>     templates/yootheme_CHILD/builder/
4. Скопируйте в **builder** папку с элементами.
5. В административной панели Joomla откройте настройки темплейта **yootheme** (Extentions/Templates/yootheme).
6. В настройках конструктора YOOtheme (Settings/Advanced/Child Theme/) подключите свой темплейт.
## Использование
Откройте YOOtheme Builder и в конструкторе (в разделе элементов **General** должны появиться новые элементы).
