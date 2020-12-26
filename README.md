# j2store_yoothemePro_elements
Элементы интеграции магазина J2Store (Joomla) в конструктор Yootheme Pro
## Установка
1. У вас, в Joomla, предварительно, должен быть установлен конструктор [**YOOtheme Pro**](https://yootheme.com/page-builder)
2. Создайте в папке Templates свой темплейт **yootheme_CHILD** (имя дочернего темплейта может быть любое, но необходимо придерживаться правила для yootheme-конструктора):
>     templates/yootheme_CHILD/
3. Внутри **yootheme_CHILD** добавьте папку **builder** (по-умолчанию YOOtheme заберёт из неё ваши элементы для констурктора):
>     templates/yootheme_CHILD/builder/
4. Скопируйте в **builder** папку с элементами.
5. В административной панели Joomla откройте настройки темплейта **yootheme** (Extentions/Templates/yootheme).
6. В настройках конструктора YOOtheme (Settings/Advanced/Child Theme/) подключите свой темплейт.
7. Откройте YOOtheme Builder и в конструкторе (в разделе элементов **General** должны появиться новые элементы).
