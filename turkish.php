<?php
/* turkish.php - turkish language file 
   contains translations for web ui & api, not for daemon
*/
//=======[NAVBAR]=======
$messages['navbar_dashboard'] = 'Anasayfa';
$messages['navbar_orderservices'] = 'Ödeme Servisi';
$messages['navbar_loadbalance'] = 'Hesabına para yükle';
$messages['navbar_console'] = 'Konsol';
$messages['navbar_filemanager'] = 'Dosya Yöneticisi';
$messages['navbar_installjar'] = 'Sürüm yükle';
$messages['navbar_subusers'] = 'Yönetici hesapları';
$messages['navbar_viewcart'] = 'Kartı Görüntüle';
//=======[DASHBOARD]=======
$messages['dashboard_tabs_activeservices'] = 'AKTİF SERVİSLER';
$messages['dashboard_tabs_unpaidinvoices'] = 'ÖDENMEMİŞ FATURALAR';
$messages['dashboard_tabs_accountbalance'] = 'HESAPTAKI PARA';
//Dashboard - Card 1
$messages['dashboard_card1_serversstatus'] = 'SUNUCU DURUMU';
$messages['dashboard_card1_online'] = 'AKTIF';
//Dashboard - Card2
$messages['dashboard_card2_title'] = 'Ödemeler';
$messages['dashboard_card2_amount'] = 'Miktar';
$messages['dashboard_card2_paymentstatus'] = 'Ödeme Durumu';
$messages['dashboard_card2_action'] = 'İşlem';
$messages['dashboard_card2_view'] = 'GÖRÜNTÜLE';
//=======[Order Service]=======
$messages['orderservices_choosepackage'] = 'Bir paket seçin';
$messages['orderservices_buy'] = 'SATIN AL';
//=======[View Cart]=======
$messages['dashboard_viewcart_navbar'] = 'Alışveriş Kartı';
$messages['dashboard_viewcart_card1_title'] = 'EKSTRA AYARLAR';
$messages['dashboard_viewcart_card1_chooseloc'] = 'Lokasyon Seçin';
$messages['dashboard_viewcart_card2_product'] = 'Ürün';
$messages['dashboard_viewcart_card2_price'] = 'Fiyat';
$messages['dashboard_viewcart_card2_quantity'] = 'Miktar';
$messages['dashboard_viewcart_card2_subtotal'] = 'AraToplam';
$messages['dashboard_viewcart_card2_remove'] = 'Sil';
$messages['dashboard_viewcart_card2_continue'] = 'ALIŞVERİŞE DEVAM ET';
$messages['dashboard_viewcart_card2_order'] = 'SİPARİŞ ET';
$messages['dashboard_viewcart_card2_total'] = 'Toplam';
//=======[Load Balance]=======
$messages['loadbalance_paypal'] = 'PAYPAL (USD)';
$messages['orderservices_paygol'] = 'SMS/PAYSAFE (USD)';
//=======[Console]=======
$messages['console_card1_title'] = 'Konsol';
$messages['console_card1_autoscroll'] = 'Otomatik Aşağıya Indir';
$messages['console_card1_typecmd'] = 'Bir komut girin';
$messages['console_card1_execute'] = 'Gönder';
$messages['console_card2_title'] = 'İşlemler';
$messages['console_card2_start'] = 'Başlat';
$messages['console_card2_stop'] = 'Durdur';
$messages['console_card2_restart'] = 'Yeniden Başlat';
$messages['console_card3_title'] = 'Yeniden Adlandır';
$messages['console_card3_typename'] = 'Sunucun için bir isim yaz.';
$messages['console_card3_rename'] = 'YENIDEN ADLANDIR';
$messages['console_card4_title'] = 'BİLGİ';
$messages['console_card4_address'] = 'Adres';
$messages['console_card4_ram'] = 'RAM';
$messages['console_card4_serverid'] = 'Sunucu ID';
$messages['console_card4_node'] = 'Sunucu sistemi';
$messages['console_card4_ftphost'] = 'FTP Adresi';
$messages['console_card4_ftpport'] = 'FTP Portu';
$messages['console_card4_ftpusr'] = 'FTP Kullanıcı Adı';
$messages['console_card4_ftpasst'] = 'FTP Şifre';
$messages['console_card4_ftpass'] = 'GÖRÜNTLE';
$messages['console_modal_title'] = 'FTP ŞİFREN';
$messages['console_modal_reset'] = 'SIFIRLA';
$messages['console_modal_close'] = 'KAPAT';
//=======[Install JAR]=======
$messages['install_choose'] = 'Bir versiyon seçin';
$messages['install_button'] = 'YÜKLE';
//=======[Subusers]=======
$messages['subusers_card_1_placeholder'] = 'NoLag Kullanıcı Adı';
$messages['subusers_card_1_add'] = 'Yönetici Ekle';
$messages['subusers_card_2_title'] = 'Yöneticiler';
$messages['subusers_card_2_username'] = 'Kullanıcı Adı';
$messages['subusers_card_2_action'] = 'İşlem';
$messages['subusers_card_2_remove'] = 'Sil';
//=======[Invoice]=======
$messages['invoice_title'] = 'Ödeme';
$messages['invoice_date'] = 'Süre';
$messages['invoice_due'] = 'Zamanı Geldi';
$messages['invoice_id'] = 'Servis ID';
$messages['invoice_item'] = 'Eşya';
$messages['invoice_cost'] = 'Ücret';
$messages['invoice_total'] = 'Toplam';
$messages['invoice_thanks'] = 'Teşekkür Ederiz !';
$messages['invoice_any'] = 'Eğer bir sıkıntınız veya ödeme ile ilgili sıkıntınız var ise bize sormaya çekinmeyin!';
$messages['invoice_back'] = 'GERİ GİT';
//API
$messages['api_generic_missingfields'] = 'Bazı parametreler eksik';
$messages['api_generic_nullserver'] = 'Bu sunucu bulunamadı.';
$messages['api_generic_noaccess'] = 'Bu sunucuya ulaşmaya yetkiniz yok.';
$messages['api_generic_captcha'] = 'Captcha yı doldurun.';
//updateName
$messages['api_updatename_success'] = 'Sunucu ismi başarılı bir şekilde yenilendi!';
//updateCart
$messages['api_updatecart_success'] = 'Ürün güncellendi.';
$messages['api_updatecart_failed'] = 'Ürün güncellenemedi.';
$messages['api_updatecart_maxquantity'] = 'Her ürün için maksimum miktar 3';
$messages['api_updatecart_invalidbounds'] = '[BotStack FW]: İşleminiz INVALID_BOUNDS yüzünden engellendi.';
//resetFTP
$messages['api_resetftp_success'] = 'Yeni şifre başarılı bir şekilde oluşturuldu!';
//addSubuser
$messages['api_subuser_self'] = 'Kendini yönetici yapamazsın!';
$messages['api_subuser_noreg'] = 'Bu kullanıcı NoLagCP e kayıtlı değil!';
$messages['api_subuser_already'] = 'Bu kullanıcının zaten sunucuna yönetim izni var!';
$messages['api_subuser_success'] = 'Kullanıcı başarılı bir şekilde eklendi!';
//pay
$messages['api_pay_already'] = 'Bu fatura zaten ödendi!';
$messages['api_pay_noperm'] = 'Bu faturayı ödemek için yetkin yok!';
$messages['api_pay_nobalance'] = 'Hesabınızdaki para bu faturayı ödemeye yeterli değil :(';
$messages['api_pay_success'] = 'Ödeme yaptığınız için teşekkürler!';
//resetpassword
$messages['api_rpassword_null'] = 'Bu kullanıcı bulunamadı. Destek ile iletişime geçin.';
$messages['api_rpassword_success'] = 'Yeni şifre için e-posta adresinizi kontrol edin.';
//register
$messages['api_register_success'] = 'NoLag a hoşgeldin!';
$messages['api_register_invalidemail'] = 'Bu e-posta adresi geçerli değil.';
$messages['api_register_email'] = 'Bu e-posta adresi kullanılıyor.';
$messages['api_register_username'] = 'Bu kullanıcı adını başkası kullanıyor başka bir ad bulmaya ne dersin?';
//login
$messages['api_login_success'] = 'NoLag Beta Kontrol Paneline Hoşgeldin!';
$messages['api_login_failed'] = 'E-Posta adresin veya şifren yanlış.';
//checkout
$messages['api_checkout_maxquantity'] = '3 Üründen fazla ürünü tek seferde ödeyemezsin.';
$messages['api_checkout_success'] = 'Ödeme oluşturuldu!';
//changePassword
$messages['api_changepass_invalid'] = 'Bu şifre sıfırlama adresi geçerli değil doğru adrese girdiğinize emin olun.';
$messages['api_changepass_expired'] = 'Bu şifre sıfırlama adresinin geçerlilik süresi dolmuş.';
$messages['api_changepass_success'] = 'Şifreniz başarılı bir şekilde değiştirildi!';
//delSubuser
$messages['api_delsubuser_self'] = 'Kendini yönetici listesinden silemezsin!';
$messages['api_delsubuser_already'] = 'Bu kullanıcının sunucuna erişimi yok!';
$messages['api_delsubuser_success'] = 'Bu kullanıcının sunucunuza erişimi silindi!';
?>
