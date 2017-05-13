
<?php
/* dutch.php - dutch language file 
   contains translations for web ui & api, not for daemon
*/

//=======[NAVBAR]=======
$messages['navbar_dashboard'] = 'Dashboard';
$messages['navbar_orderservices'] = 'Koop services';
$messages['navbar_loadbalance'] = 'Laad saldo';
$messages['navbar_console'] = 'Console';
$messages['navbar_filemanager'] = 'Bestandsbeheer';
$messages['navbar_installjar'] = 'Installeer Jar';
$messages['navbar_subusers'] = 'Sub-gebruikers';
$messages['navbar_viewcart'] = 'Bekijk kaart';

//=======[DASHBOARD]=======
$messages['dashboard_tabs_activeservices'] = 'ACTIEVE SERVICES';
$messages['dashboard_tabs_unpaidinvoices'] = 'ONBETAALDE FACTUREN';
$messages['dashboard_tabs_accountbalance'] = 'ACCOUNT SALDO';

//Dashboard - Card 1
$messages['dashboard_card1_serversstatus'] = 'SERVER STATUS';
$messages['dashboard_card1_online'] = 'ONLINE';

//Dashboard - Card2
$messages['dashboard_card2_title'] = 'Facturen';
$messages['dashboard_card2_amount'] = 'Hoeveelheid';
$messages['dashboard_card2_paymentstatus'] = 'Betalingstatus';
$messages['dashboard_card2_action'] = 'Actie';
$messages['dashboard_card2_view'] = 'BEKIJK';

//=======[Order Service]=======
$messages['orderservices_choosepackage'] = 'Kies een Pakket';
$messages['orderservices_buy'] = 'KOOP';

//=======[View Cart]=======
$messages['dashboard_viewcart_navbar'] = 'Winkelwagen';

$messages['dashboard_viewcart_card1_title'] = 'EXTRA OPTIES';
$messages['dashboard_viewcart_card1_chooseloc'] = 'Kies een locatie';

$messages['dashboard_viewcart_card2_product'] = 'Product';
$messages['dashboard_viewcart_card2_price'] = 'Prijs';
$messages['dashboard_viewcart_card2_quantity'] = 'Hoeveelheid';
$messages['dashboard_viewcart_card2_subtotal'] = 'Subtotaal';
$messages['dashboard_viewcart_card2_remove'] = 'Verwijder';
$messages['dashboard_viewcart_card2_continue'] = 'VERDER WINKELEN';
$messages['dashboard_viewcart_card2_order'] = 'KOOP';
$messages['dashboard_viewcart_card2_total'] = 'Totaal';



//=======[Load Balance]=======
$messages['loadbalance_paypal'] = 'PAYPAL (USD)';
$messages['orderservices_paygol'] = 'SMS/PAYSAFE (USD)';

//=======[Console]=======
$messages['console_card1_title'] = 'Console';
$messages['console_card1_autoscroll'] = 'Auto scroll';
$messages['console_card1_typecmd'] = 'Typ een commando';
$messages['console_card1_execute'] = 'Uitvoeren';

$messages['console_card2_title'] = 'Acties';
$messages['console_card2_start'] = 'Start';
$messages['console_card2_stop'] = 'Stop';
$messages['console_card2_restart'] = 'Herstarten';

$messages['console_card3_title'] = 'Naam Veranderen';
$messages['console_card3_typename'] = 'Typ een geweldige naam voor je server!';
$messages['console_card3_rename'] = 'VERANDER NAAM';

$messages['console_card4_title'] = 'INFO';
$messages['console_card4_address'] = 'Adres';
$messages['console_card4_ram'] = 'RAM';
$messages['console_card4_serverid'] = 'Server ID';
$messages['console_card4_node'] = 'Server';
$messages['console_card4_ftphost'] = 'FTP Ip';
$messages['console_card4_ftpport'] = 'FTP Poort';
$messages['console_card4_ftpusr'] = 'FTP Gebruikersnaam';
$messages['console_card4_ftpasst'] = 'FTP Wachtwoord';
$messages['console_card4_ftpass'] = 'BEKIJK';

$messages['console_modal_title'] = 'JOUW FTP WACHTWOORD';
$messages['console_modal_reset'] = 'HERSTEL';
$messages['console_modal_close'] = 'SLUIT';

//=======[Install JAR]=======
$messages['install_choose'] = 'Kies een versie';
$messages['install_button'] = 'INSTALLEER';

//=======[Subusers]=======
$messages['subusers_card_1_placeholder'] = 'NoLag Gebruikersnaam';
$messages['subusers_card_1_add'] = 'VOEG SUB-GEBRUIKER TOE';

$messages['subusers_card_2_title'] = 'SUB-GEBRUIKERS';
$messages['subusers_card_2_username'] = 'Gebruikersnaam';
$messages['subusers_card_2_action'] = 'Actie';
$messages['subusers_card_2_remove'] = 'Verwijder';

//=======[Invoice]=======
$messages['invoice_title'] = 'Factuur';
$messages['invoice_date'] = 'Datum';
$messages['invoice_due'] = 'Opleveringsdatum
';
$messages['invoice_id'] = 'Service ID';
$messages['invoice_item'] = 'Product';
$messages['invoice_cost'] = 'Prijs';
$messages['invoice_total'] = 'Totaal';
$messages['invoice_thanks'] = 'Danku!';
$messages['invoice_any'] = 'Als u problemen ondervind met betalingen, vraag rustig aan ons support team!';
$messages['invoice_back'] = 'GA TERUG';


//API
$messages['api_generic_missingfields'] = 'Een paar parameters missen!';
$messages['api_generic_nullserver'] = 'Kan deze server niet vinden!';
$messages['api_generic_noaccess'] = 'Je hebt geen toegang tot deze server!';
$messages['api_generic_captcha'] = 'Captcha is niet geldig!';

//updateName
$messages['api_updatename_success'] = 'Server naam is ge-update!';

//updateCart
$messages['api_updatecart_success'] = 'Product is ge-update.';
$messages['api_updatecart_failed'] = 'Product is niet ge-update.';
$messages['api_updatecart_maxquantity'] = 'Maximuum aantal per item is 3.';
$messages['api_updatecart_invalidbounds'] = '[BotStack FW]: Je request is geblokkeerd omdat het is ge-flagged bij  INVALID_BOUNDS filter.';

//resetFTP
$messages['api_resetftp_success'] = 'Nieuw wachtwoord is succesvol gegenereerd.';

//addSubuser
$messages['api_subuser_self'] = 'Je kan jezelf niet toevoegen als sub-gebruiker!';
$messages['api_subuser_noreg'] = 'Deze gebruiker is niet geregistreerd bij NoLagCP!';
$messages['api_subuser_already'] = 'Deze gebruiker heeft al toegang tot deze server!';
$messages['api_subuser_success'] = 'Sub-gebruiker is succesvol toegevoegd aan deze server.';

//pay
$messages['api_pay_already'] = 'Dit factuur is al betaald!';
$messages['api_pay_noperm'] = 'Jij mag dit factuur niet betalen!';
$messages['api_pay_nobalance'] = 'Uw saldo is te laag om dit factuur te kunnen betalen!';
$messages['api_pay_success'] = 'Dank u voor betalen!';

//resetpassword
$messages['api_rpassword_null'] = 'Kan gebruiker niet vinden, neem contact op met support.';
$messages['api_rpassword_success'] = 'Bekijk uw email voor een confirmatie van uw wachtwoord reset.';

//register
$messages['api_register_success'] = 'Welkom tot NoLag! Je bent succesvol geregistreerd!';
$messages['api_register_invalidemail'] = 'Oops! Dit is geen geldig email-adres!';
$messages['api_register_email'] = 'Oops! Dit email-adres is al geregistreerd!';
$messages['api_register_username'] = 'Oh nee! Deze gebruikersnaam is al in gebruik, probeer een andere!';

//login
$messages['api_login_success'] = 'Welkom tot NoLag Control Panel Beta!';
$messages['api_login_failed'] = 'Dit is geen geldige combinatie van email-adres en wachtwoord';

//checkout
$messages['api_checkout_maxquantity'] = 'Je kan niet meer dan 3 items in je winkelwagen hebben!';
$messages['api_checkout_success'] = 'Factuur is gegenereerd!';

//changePassword
$messages['api_changepass_invalid'] = 'Deze wachtwoord reset tokken is niet geldig, weet zeker dat je de URL van uw email correct hebt gekopieerd!';
$messages['api_changepass_expired'] = 'Deze wachtwoord reset token is niet meer geldig!';
$messages['api_changepass_success'] = 'Uw wachtwoord is succesvol veranderd';

//delSubuser
$messages['api_delsubuser_self'] = 'Je kan jezelf niet verwijderen als sub-gebruiker!';
$messages['api_delsubuser_already'] = 'Deze gebruiker heeft geen toegang tot deze server.';
$messages['api_delsubuser_success'] = 'Sub-gebruiker is succesvol verwijderd.';

?>
