<?php
/* japanese.php - japanese language file 
   contains translations for web ui & api, not for daemon
*/
//=======[NAVBAR]=======
$messages['navbar_dashboard'] = 'ダッシュボード';
$messages['navbar_orderservices'] = '注文';
$messages['navbar_loadbalance'] = 'トップアップ';
$messages['navbar_console'] = 'コンソール';
$messages['navbar_filemanager'] = 'ファイル';
$messages['navbar_installjar'] = 'インストー JAR';
$messages['navbar_subusers'] = 'SUB ユーザー';
$messages['navbar_viewcart'] = 'カート';
//=======[DASHBOARD]=======
$messages['dashboard_tabs_activeservices'] = 'アクティブサーバー';
$messages['dashboard_tabs_unpaidinvoices'] = '請求書';
$messages['dashboard_tabs_accountbalance'] = 'バランス';
//Dashboard - Card 1
$messages['dashboard_card1_serversstatus'] = 'サーバーの状態';
$messages['dashboard_card1_online'] = 'アクティブ';
//Dashboard - Card2
$messages['dashboard_card2_title'] = '請求書';
$messages['dashboard_card2_amount'] = 'コスト';
$messages['dashboard_card2_paymentstatus'] = '支払い状況';
$messages['dashboard_card2_action'] = 'オプション';
$messages['dashboard_card2_view'] = '見る';
//=======[Order Service]=======
$messages['orderservices_choosepackage'] = 'サーバーを選択する';
$messages['orderservices_buy'] = '購入';
//=======[View Cart]=======
$messages['dashboard_viewcart_navbar'] = 'カート';
$messages['dashboard_viewcart_card1_title'] = 'オプション';
$messages['dashboard_viewcart_card1_chooseloc'] = 'サーバーの場所';
$messages['dashboard_viewcart_card2_product'] = '製品';
$messages['dashboard_viewcart_card2_price'] = '価格';
$messages['dashboard_viewcart_card2_quantity'] = '量';
$messages['dashboard_viewcart_card2_subtotal'] = 'コスト';
$messages['dashboard_viewcart_card2_remove'] = '除去する';
$messages['dashboard_viewcart_card2_continue'] = 'もう一度購入する';
$messages['dashboard_viewcart_card2_order'] = 'コスト';
$messages['dashboard_viewcart_card2_total'] = 'コスト';
//=======[Load Balance]=======
$messages['loadbalance_paypal'] = 'PAYPAL (USD)';
$messages['orderservices_paygol'] = 'SMS/PAYSAFE (USD)';
//=======[Console]=======
$messages['console_card1_title'] = 'コンソール';
$messages['console_card1_autoscroll'] = 'オートスクロール';
$messages['console_card1_typecmd'] = '入力コマンド';
$messages['console_card1_execute'] = '入る';
$messages['console_card2_title'] = 'アクション';
$messages['console_card2_start'] = '開始';
$messages['console_card2_stop'] = 'やめる';
$messages['console_card2_restart'] = '再起動';
$messages['console_card3_title'] = '名前を変更する';
$messages['console_card3_typename'] = 'サーバーの名前';
$messages['console_card3_rename'] = '名前を変更する';
$messages['console_card4_title'] = '情報';
$messages['console_card4_address'] = 'IP';
$messages['console_card4_ram'] = 'RAM';
$messages['console_card4_serverid'] = 'サーバ ID';
$messages['console_card4_node'] = '領域';
$messages['console_card4_ftphost'] = 'FTP Host';
$messages['console_card4_ftpport'] = 'FTP Port';
$messages['console_card4_ftpusr'] = 'FTP ユーザー名';
$messages['console_card4_ftpasst'] = 'FTP パスワード';
$messages['console_card4_ftpass'] = '情報';
$messages['console_modal_title'] = 'FTP パスワード';
$messages['console_modal_reset'] = 'リセット';
$messages['console_modal_close'] = '除去する';
//=======[Install JAR]=======
$messages['install_choose'] = 'バージョン';
$messages['install_button'] = 'ダウンロード';
//=======[Subusers]=======
$messages['subusers_card_1_placeholder'] = 'NoLag ユーザー名';
$messages['subusers_card_1_add'] = '+ サブユーザ';
$messages['subusers_card_2_title'] = 'サブユーザ';
$messages['subusers_card_2_username'] = 'ユーザー名';
$messages['subusers_card_2_action'] = 'オプション';
$messages['subusers_card_2_remove'] = '除去する';
//=======[Invoice]=======
$messages['invoice_title'] = '請求書';
$messages['invoice_date'] = '有効期限';
$messages['invoice_due'] = '期日';
$messages['invoice_id'] = 'サーバ ID';
$messages['invoice_item'] = '製品';
$messages['invoice_cost'] = 'コスト';
$messages['invoice_total'] = '合計';
$messages['invoice_thanks'] = 'ありがとう !';
$messages['invoice_any'] = '問題がある場合はお問い合わせください！';
$messages['invoice_back'] = 'リターン';
//API
$messages['api_generic_missingfields'] = '不足している情報';
$messages['api_generic_nullserver'] = 'サーバーがありません!';
$messages['api_generic_noaccess'] = '全く許可しません';
$messages['api_generic_captcha'] = 'Captcha 有効ではありません';
//updateName
$messages['api_updatename_success'] = '名前が更新されました';
//updateCart
$messages['api_updatecart_success'] = '製品が更新されました';
$messages['api_updatecart_failed'] = '製品が更新されていない';
$messages['api_updatecart_maxquantity'] = '3つは限界です';
$messages['api_updatecart_invalidbounds'] = '[BotStack FW]: Your request has been blocked because it has been flagged by INVALID_BOUNDS filter.';
//resetFTP
$messages['api_resetftp_success'] = '新しいパスワードが生成されました';
//addSubuser
$messages['api_subuser_self'] = '自分で追加することはできません';
$messages['api_subuser_noreg'] = 'ユーザーが登録されていない @ NoLagCP!';
$messages['api_subuser_already'] = 'ユーザーは既に権限を持っています';
$messages['api_subuser_success'] = 'ユーザーが追加されました';
//pay
$messages['api_pay_already'] = '支払った';
$messages['api_pay_noperm'] = 'この請求書を支払うことはできません';
$messages['api_pay_nobalance'] = '金の不足 :(';
$messages['api_pay_success'] = '購入してくれてありがとう!';
//resetpassword
$messages['api_rpassword_null'] = 'そのユーザーを見つけることができません、サポートに連絡してください';
$messages['api_rpassword_success'] = 'あなたのメールアドレスを確認してパスワードをリセットしてください';
//register
$messages['api_register_success'] = '登録成功!';
$messages['api_register_invalidemail'] = '電子メールが有効ではありません!';
$messages['api_register_email'] = 'このEメールはすでに登録されています!';
$messages['api_register_username'] = 'O別のユーザー名を選択してください';
//login
$messages['api_login_success'] = 'コントロールパネルへようこそ';
$messages['api_login_failed'] = '無効なパスワード/ユーザ名';
//checkout
$messages['api_checkout_maxquantity'] = '3つ以上のアイテムを追加することはできません';
$messages['api_checkout_success'] = '請求書が生成されました';
//changePassword
$messages['api_changepass_invalid'] = 'パスワードリセットトークンが無効です';
$messages['api_changepass_expired'] = 'パスワードリセットトークンが無効です';
$messages['api_changepass_success'] = 'パスワードが正常に変更された!';
//delSubuser
$messages['api_delsubuser_self'] = 'あなたは自分を取り除くことができません!';
$messages['api_delsubuser_already'] = 'このユーザーにはサーバーへのアクセス権がありません!';
$messages['api_delsubuser_success'] = 'ユーザーが削除されました!';
?>
