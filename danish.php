<?php
/* danish.php - danish language file 
   contains translations for web ui & api, not for daemon
*/

//=======[NAVBAR]=======
$messages['navbar_dashboard'] = 'instrumentbrζt';
$messages['navbar_orderservices'] = 'Bestil service';
$messages['navbar_loadbalance'] = 'Penge balance';
$messages['navbar_console'] = 'konsol';
$messages['navbar_filemanager'] = 'Filhεndtering';
$messages['navbar_installjar'] = 'Installer Jar';
$messages['navbar_subusers'] = 'Sub-brugere';
$messages['navbar_viewcart'] = 'Se indkψbsvogn';

//=======[DASHBOARD]=======
$messages['dashboard_tabs_activeservices'] = 'AKTIVE TJENESTER';
$messages['dashboard_tabs_unpaidinvoices'] = 'UBETALTE FAKTURAER';
$messages['dashboard_tabs_accountbalance'] = 'KONTOSALDO';

//Dashboard - Card 1
$messages['dashboard_card1_serversstatus'] = 'SERVERE STATUS';
$messages['dashboard_card1_online'] = 'ONLINE';

//Dashboard - Card2
$messages['dashboard_card2_title'] = 'Fakturaer';
$messages['dashboard_card2_amount'] = 'Belψb';
$messages['dashboard_card2_paymentstatus'] = 'Betalingsstatus';
$messages['dashboard_card2_action'] = 'Handling';
$messages['dashboard_card2_view'] = 'UDSIGT';

//=======[Order Service]=======
$messages['orderservices_choosepackage'] = 'Vζlg en pakke';
$messages['orderservices_buy'] = 'KΨBE';

//=======[View Cart]=======
$messages['dashboard_viewcart_navbar'] = 'Indkψbskurv';

$messages['dashboard_viewcart_card1_title'] = 'EKSTRA OPTIONER';
$messages['dashboard_viewcart_card1_chooseloc'] = 'Vζlg et sted';

$messages['dashboard_viewcart_card2_product'] = 'Produkt';
$messages['dashboard_viewcart_card2_price'] = 'Pris';
$messages['dashboard_viewcart_card2_quantity'] = 'Antal';
$messages['dashboard_viewcart_card2_subtotal'] = 'Subtotal';
$messages['dashboard_viewcart_card2_remove'] = 'Fjerne';
$messages['dashboard_viewcart_card2_continue'] = 'FORTSΖTTE MED AT HANDLE';
$messages['dashboard_viewcart_card2_order'] = 'BESTILLE';
$messages['dashboard_viewcart_card2_total'] = 'Total';



//=======[Load Balance]=======
$messages['loadbalance_paypal'] = 'PAYPAL (USD)';
$messages['orderservices_paygol'] = 'SMS/PAYSAFE (USD)';

//=======[Console]=======
$messages['console_card1_title'] = 'konsol';
$messages['console_card1_autoscroll'] = 'Automatisk rulning';
$messages['console_card1_typecmd'] = 'Skriv en kommando';
$messages['console_card1_execute'] = 'Udfψr';

$messages['console_card2_title'] = 'Handlinger';
$messages['console_card2_start'] = 'Start';
$messages['console_card2_stop'] = 'Stop';
$messages['console_card2_restart'] = 'Genstart';

$messages['console_card3_title'] = 'Omdψb';
$messages['console_card3_typename'] = 'Skriv et fantastisk navn til din server!';
$messages['console_card3_rename'] = 'OMDΨB';

$messages['console_card4_title'] = 'INFO';
$messages['console_card4_address'] = 'Adresse';
$messages['console_card4_ram'] = 'RAM';
$messages['console_card4_serverid'] = 'Server ID';
$messages['console_card4_node'] = 'Node';
$messages['console_card4_ftphost'] = 'FTP Vζrt';
$messages['console_card4_ftpport'] = 'FTP Port';
$messages['console_card4_ftpusr'] = 'FTP Brugernavn';
$messages['console_card4_ftpasst'] = 'FTP Adgangskode';
$messages['console_card4_ftpass'] = 'VISE';

$messages['console_modal_title'] = 'DIN FTP PASSWORD';
$messages['console_modal_reset'] = 'NULSTILLE';
$messages['console_modal_close'] = 'LUKKE';

//=======[Install JAR]=======
$messages['install_choose'] = 'Vζlg en version';
$messages['install_button'] = 'INSTALLERE';

//=======[Subusers]=======
$messages['subusers_card_1_placeholder'] = 'NoLag brugernavn';
$messages['subusers_card_1_add'] = 'TILFΨJ UNDER BRUGEREN';

$messages['subusers_card_2_title'] = 'UNDER BRUGEREN';
$messages['subusers_card_2_username'] = 'Brugernavn';
$messages['subusers_card_2_action'] = 'Handling';
$messages['subusers_card_2_remove'] = 'Fjerne';

//=======[Invoice]=======
$messages['invoice_title'] = 'Faktura';
$messages['invoice_date'] = 'Dato';
$messages['invoice_due'] = 'forfaldsdato';
$messages['invoice_id'] = 'Service ID';
$messages['invoice_item'] = 'Vare';
$messages['invoice_cost'] = 'Koste';
$messages['invoice_total'] = 'Total';
$messages['invoice_thanks'] = 'Mange tak !';
$messages['invoice_any'] = 'Hvis du har problemer eller oplever problemer med vores betalingssystem, tψv ikke med at spψrge os om support!';
$messages['invoice_back'] = 'GΕ TILBAGE';


//API
$messages['api_generic_missingfields'] = 'Nogle parametre mangler';
$messages['api_generic_nullserver'] = 'Kunne ikke finde denne server!';
$messages['api_generic_noaccess'] = 'Du har ikke adgang til denne server!';
$messages['api_generic_captcha'] = 'Captcha er ikke gyldig.';

//updateName
$messages['api_updatename_success'] = 'Servernavn er blevet opdateret!';

//updateCart
$messages['api_updatecart_success'] = 'Produktet er blevet opdateret.';
$messages['api_updatecart_failed'] = 'Produktet er ikke opdateret.';
$messages['api_updatecart_maxquantity'] = 'Maksimal mζngde pr. Vare er 3';
$messages['api_updatecart_invalidbounds'] = '[BotStack FW]: Din anmodning er blevet blokeret, fordi den er blevet markeret af INVALID_BOUNDS filter.';

//resetFTP
$messages['api_resetftp_success'] = 'Ny adgangskode er blevet genereret!';

//addSubuser
$messages['api_subuser_self'] = 'YDu kan ikke tilfψje dig selv som underbruger!';
$messages['api_subuser_noreg'] = 'Denne bruger er ikke registreret i NoLagCP!';
$messages['api_subuser_already'] = 'Denne bruger har allerede adgang til din server!';
$messages['api_subuser_success'] = 'Underbruger er blevet tilfψjet!';

//pay
$messages['api_pay_already'] = 'Denne faktura er allerede betalt!';
$messages['api_pay_noperm'] = 'Du har ikke tilladelse til at betale denne faktura!';
$messages['api_pay_nobalance'] = 'Din saldo er ikke tilstrζkkelig til at betale denne faktura :(';
$messages['api_pay_success'] = 'Tak for at betale!';

//resetpassword
$messages['api_rpassword_null'] = 'Kunne ikke finde den bruger! Kontakt venligst support.';
$messages['api_rpassword_success'] = 'Tjek venligst dine e-mails for at angive en ny adgangskode!';

//register
$messages['api_register_success'] = 'Velkommen til Nolag! Du har registreret dig!';
$messages['api_register_invalidemail'] = 'Ups! Dette er ikke en gyldig e-mail-adresse!';
$messages['api_register_email'] = 'Ups! Denne email adresse er allerede registreret!';
$messages['api_register_username'] = 'Εh nej! Nogen bruger allerede dette brugernavn: (Kan du tζnke pε en anden?';

//login
$messages['api_login_success'] = 'Velkommen til NoLag Control Panel Beta!';
$messages['api_login_failed'] = 'Dette er ikke en gyldig kombination af e-mail og adgangskode.';

//checkout
$messages['api_checkout_maxquantity'] = 'Du kan ikke have mere end 3 varer i din indkψbsvogn.';
$messages['api_checkout_success'] = 'Faktura er blevet genereret!';

//changePassword
$messages['api_changepass_invalid'] = 'Dette kodeord for nulstilling af adgangskode er ikke gyldigt. Sψrg for, at du har kopieret webadressen lige fra emailen!';
$messages['api_changepass_expired'] = 'Denne adgangskode til nulstilling af adgangskode er udlψbet.';
$messages['api_changepass_success'] = 'Dit kodeord er blevet ζndret!';

//delSubuser
$messages['api_delsubuser_self'] = 'Du kan ikke fjerne dig selv som underforbruger!';
$messages['api_delsubuser_already'] = 'Denne bruger har ikke adgang til din server!';
$messages['api_delsubuser_success'] = 'Underbrugeren er blevet slettet!';

?>
