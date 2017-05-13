<?php
/* romanian.php - romanian language file
contains translations for web ui & api, not for daemon
*/

//=======[NAVBAR]=======
$messages['navbar_dashboard'] = 'Tablou de bord';
$messages['navbar_orderservices'] = 'Comanda';
$messages['navbar_loadbalance'] = 'Incarca balanta';
$messages['navbar_console'] = 'Consola';
$messages['navbar_filemanager'] = 'Manager de fisiere';
$messages['navbar_installjar'] = 'Instaleaza Jarul';
$messages['navbar_subusers'] = 'Angajati';
$messages['navbar_viewcart'] = 'Cos de cumparaturi';

//=======[DASHBOARD]=======
$messages['dashboard_tabs_activeservices'] = 'SERVICII ACTIVE';
$messages['dashboard_tabs_unpaidinvoices'] = 'FACTURA NEPLATITA';
$messages['dashboard_tabs_accountbalance'] = 'BALANTA CONTULUI';

//Dashboard - Card 1
$messages['dashboard_card1_serversstatus'] = 'STATUTUL SERVERULUI';
$messages['dashboard_card1_online'] = 'ONLINE';

//Dashboard - Card2
$messages['dashboard_card2_title'] = 'Facturi';
$messages['dashboard_card2_amount'] = 'Suma';
$messages['dashboard_card2_paymentstatus'] = 'Statutul Platii';
$messages['dashboard_card2_action'] = 'Actiune';
$messages['dashboard_card2_view'] = 'VEZI';

//=======[Order Service]=======
$messages['orderservices_choosepackage'] = 'Alege un pachet';
$messages['orderservices_buy'] = 'CUMPARA';

//=======[View Cart]=======
$messages['dashboard_viewcart_navbar'] = 'Cos de cumparaturi';

$messages['dashboard_viewcart_card1_title'] = 'OPTIUNI EXTRA';
$messages['dashboard_viewcart_card1_chooseloc'] = 'Alege o locatie';

$messages['dashboard_viewcart_card2_product'] = 'Produs';
$messages['dashboard_viewcart_card2_price'] = 'Pret';
$messages['dashboard_viewcart_card2_quantity'] = 'Cantitate';
$messages['dashboard_viewcart_card2_subtotal'] = 'Subtotal';
$messages['dashboard_viewcart_card2_remove'] = 'Elimina';
$messages['dashboard_viewcart_card2_continue'] = 'CONTINUA CUMPARATURILE';
$messages['dashboard_viewcart_card2_order'] = 'COMANDA';
$messages['dashboard_viewcart_card2_total'] = 'Total';



//=======[Load Balance]=======
$messages['loadbalance_paypal'] = 'PAYPAL (USD)';
$messages['orderservices_paygol'] = 'SMS/PAYSAFE (USD)';

//=======[Console]=======
$messages['console_card1_title'] = 'Consola';
$messages['console_card1_autoscroll'] = 'Auto scroll';
$messages['console_card1_typecmd'] = 'Tasteaza o comanda';
$messages['console_card1_execute'] = 'Executa';

$messages['console_card2_title'] = 'Actiuni';
$messages['console_card2_start'] = 'Start';
$messages['console_card2_stop'] = 'Stop';
$messages['console_card2_restart'] = 'Restart';

$messages['console_card3_title'] = 'Redenumeste';
$messages['console_card3_typename'] = 'Scrie un nume fain pentru serverul tau!';
$messages['console_card3_rename'] = 'REDENUMESTE';

$messages['console_card4_title'] = 'INFO';
$messages['console_card4_address'] = 'Addresa';
$messages['console_card4_ram'] = 'RAM';
$messages['console_card4_serverid'] = 'Server ID';
$messages['console_card4_node'] = 'Node';
$messages['console_card4_ftphost'] = 'FTP Host';
$messages['console_card4_ftpport'] = 'FTP Port';
$messages['console_card4_ftpusr'] = 'Nume FTP';
$messages['console_card4_ftpasst'] = 'Parola FTP';
$messages['console_card4_ftpass'] = 'ARATA';

$messages['console_modal_title'] = 'Parola ta FTP';
$messages['console_modal_reset'] = 'RESETEAZA';
$messages['console_modal_close'] = 'INCHIDE';

//=======[Install JAR]=======
$messages['install_choose'] = 'Alege o versiune';
$messages['install_button'] = 'INSTALEAZA';

//=======[Subusers]=======
$messages['subusers_card_1_placeholder'] = 'Nume NoLag';
$messages['subusers_card_1_add'] = 'ADAUGA UN ANGAJAT';

$messages['subusers_card_2_title'] = 'ANGAJATI';
$messages['subusers_card_2_username'] = 'Nume';
$messages['subusers_card_2_action'] = 'Actiuni';
$messages['subusers_card_2_remove'] = 'Elimina';

//=======[Invoice]=======
$messages['invoice_title'] = 'Factura';
$messages['invoice_date'] = 'Data';
$messages['invoice_due'] = 'Data scadenta';
$messages['invoice_id'] = 'IDul Serivicului';
$messages['invoice_item'] = 'Obiect';
$messages['invoice_cost'] = 'Pret';
$messages['invoice_total'] = 'Total';
$messages['invoice_thanks'] = 'Multumim!';
$messages['invoice_any'] = 'Daca intampini probleme la plata, nu ezita sa ne contactezi pentru ajutor!';
$messages['invoice_back'] = 'INAPOI';


//API
$messages['api_generic_missingfields'] = 'Unii parametrii lipsesc!';
$messages['api_generic_nullserver'] = 'Nu am putut gasi serverul!';
$messages['api_generic_noaccess'] = 'Nu ai acces la acel server!';
$messages['api_generic_captcha'] = 'Captcha este invalida.';

//updateName
$messages['api_updatename_success'] = 'Numele serverului a fost actualizat cu succes!';

//updateCart
$messages['api_updatecart_success'] = 'Produsul a fost actualizat.';
$messages['api_updatecart_failed'] = 'Produsul nu a fost actualizat.';
$messages['api_updatecart_maxquantity'] = 'Cantitatea maxima este de 3';
$messages['api_updatecart_invalidbounds'] = '[BotStack FW]: Cererea ta a fost blocata deoarece a fost slabita de filtrul INVALID_BONUS.';

//resetFTP
$messages['api_resetftp_success'] = 'Noua parola a fost generata cu succes!';

//addSubuser
$messages['api_subuser_self'] = 'Nu te poti adauga pe tine ca angajat!';
$messages['api_subuser_noreg'] = 'Acest utilizator nu este inregistrat pe NoLagCP!';
$messages['api_subuser_already'] = 'Acest utilizator are deja acces complet pe serverul tau!!';
$messages['api_subuser_success'] = 'Anjagatul a fost adaugat cu succes!';

//pay
$messages['api_pay_already'] = 'Aceasta factura a fost deja platita!';
$messages['api_pay_noperm'] = 'Nu ai permisiunea sa platesti factura aceasta!';
$messages['api_pay_nobalance'] = 'Balanta ta nu este suficienta pentru a plati factura :(';
$messages['api_pay_success'] = 'Multumim pentru plata!';

//resetpassword
$messages['api_rpassword_null'] = 'Nu am putut gasi utilizatorul! Va rugam contactati supportul.';
$messages['api_rpassword_success'] = 'Va rugam verificati-va emailul pentru a confirma cererea de a genera o noua parola!';

//register
$messages['api_register_success'] = 'Bun venit la NoLag! Ai fost inregistrat cu succes!';
$messages['api_register_invalidemail'] = 'Ups! Aceasta nu este o adresa de email valida';
$messages['api_register_email'] = 'Ups! Acest email a fost deja inregistrat!';
$messages['api_register_username'] = 'Oh, nu!! Cineva deja foloseste acest nume :( Poti alege altul in locul acestuia?';

//login
$messages['api_login_success'] = 'Bun venit la Panoul De Control aflat in Beta NoLag!';
$messages['api_login_failed'] = 'Aceste date nu se potrivesc! Verifica din nou emailul si parola!';

//checkout
$messages['api_checkout_maxquantity'] = 'YNu poti avea mai mult de 3 produse in cosul tau de cumparaturi!';
$messages['api_checkout_success'] = 'Factura a fost generata cu succes!';

//changePassword
$messages['api_changepass_invalid'] = 'Tokenul de resetare al parolei este invalid, fi sigur ca ai compiat adresa URL din emailul pe care ti l-am trimis!';
$messages['api_changepass_expired'] = 'Tokenul de resetare al parolei a expirat.';
$messages['api_changepass_success'] = 'Parola ta a fost schimbata cu succes!';

//delSubuser
$messages['api_delsubuser_self'] = 'Nu te poti elimina din lista de angajati!';
$messages['api_delsubuser_already'] = 'Acest utilizator nu are acces la serverul dumneavostra!';
$messages['api_delsubuser_success'] = 'Angajatul a fost sters!';

?>
