<?php
/* chinese.php - chinese language file 
   contains translations for web ui & api, not for daemon
*/

//=======[NAVBAR]=======
$messages['navbar_dashboard'] = '概觀';
$messages['navbar_orderservices'] = '訂購服務';
$messages['navbar_loadbalance'] = '充值';
$messages['navbar_console'] = '控制台';
$messages['navbar_filemanager'] = '檔案管理';
$messages['navbar_installjar'] = '安裝伺服器主程式';
$messages['navbar_subusers'] = '團隊';
$messages['navbar_viewcart'] = '查看訂單';

//=======[DASHBOARD]=======
$messages['dashboard_tabs_activeservices'] = '已購買的伺服器';
$messages['dashboard_tabs_unpaidinvoices'] = '未繳付的帳單';
$messages['dashboard_tabs_accountbalance'] = '帳戶餘額';

//Dashboard - Card 1
$messages['dashboard_card1_serversstatus'] = '伺服器狀況';
$messages['dashboard_card1_online'] = '在線';

//Dashboard - Card2
$messages['dashboard_card2_title'] = '繳付帳單，';
$messages['dashboard_card2_amount'] = '金額';
$messages['dashboard_card2_paymentstatus'] = '帳單狀態';
$messages['dashboard_card2_action'] = '行動';
$messages['dashboard_card2_view'] = '查看';

//=======[Order Service]=======
$messages['orderservices_choosepackage'] = '選擇服務';
$messages['orderservices_buy'] = '購買';

//=======[View Cart]=======
$messages['dashboard_viewcart_navbar'] = '查看帳單';

$messages['dashboard_viewcart_card1_title'] = '標題';
$messages['dashboard_viewcart_card1_chooseloc'] = '選擇地點';

$messages['dashboard_viewcart_card2_product'] = '服務';
$messages['dashboard_viewcart_card2_price'] = '價錢';
$messages['dashboard_viewcart_card2_quantity'] = '數量';
$messages['dashboard_viewcart_card2_subtotal'] = '合計';
$messages['dashboard_viewcart_card2_remove'] = '刪除';
$messages['dashboard_viewcart_card2_continue'] = '繼續購物';
$messages['dashboard_viewcart_card2_order'] = '確定購買';
$messages['dashboard_viewcart_card2_total'] = '合計';



//=======[Load Balance]=======
$messages['loadbalance_paypal'] = 'PAYPAL (美金)';
$messages['orderservices_paygol'] = 'SMS/PAYSAFE (美金)';

//=======[Console]=======
$messages['console_card1_title'] = '控制台';
$messages['console_card1_autoscroll'] = '自動往下';
$messages['console_card1_typecmd'] = '輸入指令';
$messages['console_card1_execute'] = '執行';

$messages['console_card2_title'] = '行動';
$messages['console_card2_start'] = '開始';
$messages['console_card2_stop'] = '暫停';
$messages['console_card2_restart'] = '重啟';

$messages['console_card3_title'] = '重新命名';
$messages['console_card3_typename'] = '新名稱';
$messages['console_card3_rename'] = '重新命名';

$messages['console_card4_title'] = '資料';
$messages['console_card4_address'] = '網址';
$messages['console_card4_ram'] = 'RAM';
$messages['console_card4_serverid'] = '伺服器編號';
$messages['console_card4_node'] = '服務端';
$messages['console_card4_ftphost'] = 'FTP Host';
$messages['console_card4_ftpport'] = 'FTP Port';
$messages['console_card4_ftpusr'] = 'FTP 用戶名';
$messages['console_card4_ftpasst'] = 'FTP 密碼';
$messages['console_card4_ftpass'] = '展開';

$messages['console_modal_title'] = '你的 FTP 密碼';
$messages['console_modal_reset'] = '重置';
$messages['console_modal_close'] = '關閉';

//=======[Install JAR]=======
$messages['install_choose'] = '選擇版本';
$messages['install_button'] = '安裝';

//=======[Subusers]=======
$messages['subusers_card_1_placeholder'] = 'NoLag 用戶名';
$messages['subusers_card_1_add'] = '新增用戶';

$messages['subusers_card_2_title'] = '附屬帳號';
$messages['subusers_card_2_username'] = '用戶名';
$messages['subusers_card_2_action'] = '行動';
$messages['subusers_card_2_remove'] = '刪除';

//=======[Invoice]=======
$messages['invoice_title'] = '帳單';
$messages['invoice_date'] = '日子';
$messages['invoice_due'] = '到期日';
$messages['invoice_id'] = '伺服器編號';
$messages['invoice_item'] = '服務';
$messages['invoice_cost'] = '價錢';
$messages['invoice_total'] = '合計';
$messages['invoice_thanks'] = '感謝';
$messages['invoice_any'] = '如果你有任何問題，歡迎向我們的客戶服務團隊查詢！';
$messages['invoice_back'] = '回到上一頁';


//API
$messages['api_generic_missingfields'] = '資料不足';
$messages['api_generic_nullserver'] = '找不到伺服器';
$messages['api_generic_noaccess'] = '你沒有你沒有查看的權限!';
$messages['api_generic_captcha'] = 'Captcha 錯誤.';

//updateName
$messages['api_updatename_success'] = '伺服器名稱而更新!';

//updateCart
$messages['api_updatecart_success'] ='更新成功.';
$messages['api_updatecart_failed'] = '更新失敗.';
$messages['api_updatecart_maxquantity'] = '貨品上限為三件！';
$messages['api_updatecart_invalidbounds'] = '[BotStack FW]: 你的請求被拒絕INVALID_BOUNDS filter.';

//resetFTP
$messages['api_resetftp_success'] = '已更新密碼!';

//addSubuser
$messages['api_subuser_self'] = '你不能把自己加為附屬帳號';
$messages['api_subuser_noreg'] = 'NoLagCP沒有此帳號的資料!';
$messages['api_subuser_already'] = '此帳號已擁有修改資料的權限!';
$messages['api_subuser_success'] = '成功新增附屬帳號!';

//pay
$messages['api_pay_already'] = '你已繳付此帳單';
$messages['api_pay_noperm'] = '你沒有繳付此帳單的權限';
$messages['api_pay_nobalance'] = '餘額不足';
$messages['api_pay_success'] = '感謝閣下光顧!';

//resetpassword
$messages['api_rpassword_null'] = '找不到該用戶，請聯繫客戶服務團隊.';
$messages['api_rpassword_success'] = '請查閱你的郵箱';

//register
$messages['api_register_success'] = '歡迎來到 NoLag! 你已經成功註冊';
$messages['api_register_invalidemail'] = '這不是一個有效的電郵地址';
$messages['api_register_email'] = '這個電郵地址已經註冊';
$messages['api_register_username'] = '請使用另外一個名稱';

//login
$messages['api_login_success'] = '歡迎使用控制台';
$messages['api_login_failed'] = '帳號或密碼不正確.';

//checkout
$messages['api_checkout_maxquantity'] = '貨品上限為三件';
$messages['api_checkout_success'] = '帳單已經送出';

//changePassword
$messages['api_changepass_invalid'] = '密碼重置編號不正確';
$messages['api_changepass_expired'] = '這個編號已經過期.';
$messages['api_changepass_success'] = '你已成功重置密碼!';

//delSubuser
$messages['api_delsubuser_self'] = '你不能移除自己!';
$messages['api_delsubuser_already'] = '此用戶沒有修改的權限!';
$messages['api_delsubuser_success'] = '附屬帳號已刪除!';

?>
