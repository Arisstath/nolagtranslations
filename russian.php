<?php
/* russian.php - russian language file 
   contains translations for web ui & api, not for daemon
*/

//=======[NAVBAR]=======
$messages['navbar_dashboard'] = 'Панель';
$messages['navbar_orderservices'] = 'Заказ услуги';
$messages['navbar_loadbalance'] = 'Загрузка баланса';
$messages['navbar_console'] = 'Консоль';
$messages['navbar_filemanager'] = 'Диспетчер файлов';
$messages['navbar_installjar'] = 'Установка Jar';
$messages['navbar_subusers'] = 'Пользователь';
$messages['navbar_viewcart'] = 'Просмотр корзины';

//=======[DASHBOARD]=======
$messages['dashboard_tabs_activeservices'] = 'АКТИВНЫЕ УСЛУГИ';
$messages['dashboard_tabs_unpaidinvoices'] = 'НЕОПЛАЧЕННЫЕ СЧЕТА';
$messages['dashboard_tabs_accountbalance'] = 'БАЛАНС АККАУНТА';

//Dashboard - Card 1
$messages['dashboard_card1_serversstatus'] = 'СТАТУС СЕРВЕРОВ';
$messages['dashboard_card1_online'] = 'ONLINE';

//Dashboard - Card2
$messages['dashboard_card2_title'] = 'Счета-фактуры';
$messages['dashboard_card2_amount'] = 'Количество';
$messages['dashboard_card2_paymentstatus'] = 'Статус платежа';
$messages['dashboard_card2_action'] = 'Действие';
$messages['dashboard_card2_view'] = 'ПОСМОТРЕТЬ';

//=======[Order Service]=======
$messages['orderservices_choosepackage'] = 'Выберите пакет';
$messages['orderservices_buy'] = 'КУПИТЬ';

//=======[View Cart]=======
$messages['dashboard_viewcart_navbar'] = 'Корзина';

$messages['dashboard_viewcart_card1_title'] = 'ДОПОЛНИТЕЛЬНЫЕ ОПЦИИ';
$messages['dashboard_viewcart_card1_chooseloc'] = 'Выберите место';

$messages['dashboard_viewcart_card2_product'] = 'Продукт';
$messages['dashboard_viewcart_card2_price'] = 'Цена';
$messages['dashboard_viewcart_card2_quantity'] = 'Количество';
$messages['dashboard_viewcart_card2_subtotal'] = 'Промежуточный итог';
$messages['dashboard_viewcart_card2_remove'] = 'Удалить';
$messages['dashboard_viewcart_card2_continue'] = 'ПРОДОЛЖИТЬ ПОКУПКИ';
$messages['dashboard_viewcart_card2_order'] = 'ЗАКАЗ';
$messages['dashboard_viewcart_card2_total'] = 'Всего';



//=======[Load Balance]=======
$messages['loadbalance_paypal'] = 'PAYPAL (USD)';
$messages['orderservices_paygol'] = 'SMS/PAYSAFE (USD)';

//=======[Console]=======
$messages['console_card1_title'] = 'Консоль';
$messages['console_card1_autoscroll'] = 'Автопрокрутка';
$messages['console_card1_typecmd'] = 'Введите команду';
$messages['console_card1_execute'] = 'Выполнить';

$messages['console_card2_title'] = 'Действия';
$messages['console_card2_start'] = 'Пуск';
$messages['console_card2_stop'] = 'Стоп';
$messages['console_card2_restart'] = 'Перезапуск';

$messages['console_card3_title'] = 'Переименовать';
$messages['console_card3_typename'] = 'Введите замечательное имя для вашего сервера!';
$messages['console_card3_rename'] = 'ПЕРЕИМЕНОВАТЬ';

$messages['console_card4_title'] = 'ИНФОРМАЦИЯ';
$messages['console_card4_address'] = 'Адрес';
$messages['console_card4_ram'] = 'ОЗУ';
$messages['console_card4_serverid'] = 'ID сервера';
$messages['console_card4_node'] = 'Узел';
$messages['console_card4_ftphost'] = 'FTP-хост';
$messages['console_card4_ftpport'] = 'Порт FTP';
$messages['console_card4_ftpusr'] = 'Имя пользователя FTP';
$messages['console_card4_ftpasst'] = 'Пароль FTP';
$messages['console_card4_ftpass'] = 'ПОКАЗАТЬ';

$messages['console_modal_title'] = 'ВАШ FTP ПАРОЛЬ';
$messages['console_modal_reset'] = 'СБРОС';
$messages['console_modal_close'] = 'ЗАКРЫТЬ';

//=======[Install JAR]=======
$messages['install_choose'] = 'Выберите версию';
$messages['install_button'] = 'УСТАНОВИТЬ';

//=======[Subusers]=======
$messages['subusers_card_1_placeholder'] = 'Пользователь NoLag';
$messages['subusers_card_1_add'] = 'ДОБАВИТЬ ПОСЕТИТЕЛЯ';

$messages['subusers_card_2_title'] = 'ПОСЕТИТЕЛЬ';
$messages['subusers_card_2_username'] = 'Имя пользователя';
$messages['subusers_card_2_action'] = 'Действие';
$messages['subusers_card_2_remove'] = 'Удалить';

//=======[Invoice]=======
$messages['invoice_title'] = 'Счет-фактура';
$messages['invoice_date'] = 'Дата';
$messages['invoice_due'] = 'Срок оплаты';
$messages['invoice_id'] = 'ID услуги';
$messages['invoice_item'] = 'Предмет';
$messages['invoice_cost'] = 'Стоимость';
$messages['invoice_total'] = 'Всего';
$messages['invoice_thanks'] = 'Спасибо!';
$messages['invoice_any'] = 'Если у вас возникли проблемы или возникли проблемы с нашей платежной системой, не стесняйтесь обратиться к нам за поддержкой!';
$messages['invoice_back'] = 'ВОЗВРАЩАТЬСЯ';


//API
$messages['api_generic_missingfields'] = 'Некоторые параметры отсутствуют';
$messages['api_generic_nullserver'] = 'Не удалось найти этот сервер!';
$messages['api_generic_noaccess'] = 'Вы не можете получить доступ к этому серверу!';
$messages['api_generic_captcha'] = 'CAPTCHA, не действует.';

//updateName
$messages['api_updatename_success'] = 'Имя сервера было успешно обновлено!';

//updateCart
$messages['api_updatecart_success'] = 'Продукт был обновлен.';
$messages['api_updatecart_failed'] = 'Продукт не был обновлен.';
$messages['api_updatecart_maxquantity'] = 'Максимальное количество в статье 3';
$messages['api_updatecart_invalidbounds'] = '[BotStack FW]: Ваш запрос был заблокирован, так как он был отмечен INVALID_BOUNDS фильтром.';

//resetFTP
$messages['api_resetftp_success'] = 'Новый пароль был успешно создан!';

//addSubuser
$messages['api_subuser_self'] = 'Не удалось добавить вас в качестве пользователя!';
$messages['api_subuser_noreg'] = 'Пользователь не зарегистрирован NoLagCP!';
$messages['api_subuser_already'] = 'Этот пользователь уже имеет доступ к серверу!';
$messages['api_subuser_success'] = 'Пользователь был успешно добавлен!';

//pay
$messages['api_pay_already'] = 'Этот счет уже оплачен!';
$messages['api_pay_noperm'] = 'У вас нет разрешения на оплату этого счета!';
$messages['api_pay_nobalance'] = 'Ваш баланс не достаточно, чтобы оплатить счета :(';
$messages['api_pay_success'] = 'Спасибо за ваш платеж!';

//resetpassword
$messages['api_rpassword_null'] = 'Не удалось найти этого пользователя! Обратитесь в службу поддержки.';
$messages['api_rpassword_success'] = 'Пожалуйста, проверьте свои электронные письма, чтобы указать новый пароль!';

//register
$messages['api_register_success'] = 'Добро пожаловать в NoLag! Вы успешно зарегистрированы!';
$messages['api_register_invalidemail'] = 'Упс! Это не правильный адрес электронной почты !';
$messages['api_register_email'] = 'Упс! Этот адрес электронной почты уже занят!';
$messages['api_register_username'] = 'О нет! Кто-то уже использует это имя пользователя :( Вы можете подумать о другом?';

//login
$messages['api_login_success'] = 'Добро пожаловать в Панель управления NoLag Beta!';
$messages['api_login_failed'] = 'Это недопустимая комбинация электронной почты и пароля.';

//checkout
$messages['api_checkout_maxquantity'] = 'Вы не можете иметь более трех элементов в вашей корзине.';
$messages['api_checkout_success'] = 'Счет создан!';

//changePassword
$messages['api_changepass_invalid'] = 'Этот токен сброса пароля недействителен, пожалуйста, убедитесь, что вы скопировали URL-адрес прямо из письма!';
$messages['api_changepass_expired'] = 'Срок действия этого токена сброса пароля истек.';
$messages['api_changepass_success'] = 'Ваш пароль был успешно изменен!';

//delSubuser
$messages['api_delsubuser_self'] = 'Вы не можете удалить себя как пользователя!';
$messages['api_delsubuser_already'] = 'У этого пользователя нет доступа к вашему серверу!';
$messages['api_delsubuser_success'] = 'Пользователь успешно удален!';

?>
