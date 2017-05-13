<?php
/* english.php - english language file 
   contains translations for web ui & api, not for daemon
*/

//=======[NAVBAR]=======
$messages['navbar_dashboard'] = 'Dashboard';
$messages['navbar_orderservices'] = 'Order Service';
$messages['navbar_loadbalance'] = 'Load Balance';
$messages['navbar_console'] = 'Console';
$messages['navbar_filemanager'] = 'File Manager';
$messages['navbar_installjar'] = 'Install Jar';
$messages['navbar_subusers'] = 'Subusers';
$messages['navbar_viewcart'] = 'View Cart';

//=======[DASHBOARD]=======
$messages['dashboard_tabs_activeservices'] = 'ACTIVE SERVICES';
$messages['dashboard_tabs_unpaidinvoices'] = 'UNPAID INVOICES';
$messages['dashboard_tabs_accountbalance'] = 'ACCOUNT BALANCE';

//Dashboard - Card 1
$messages['dashboard_card1_serversstatus'] = 'SERVERS STATUS';
$messages['dashboard_card1_online'] = 'ONLINE';

//Dashboard - Card2
$messages['dashboard_card2_title'] = 'Invoices';
$messages['dashboard_card2_amount'] = 'Amount';
$messages['dashboard_card2_paymentstatus'] = 'Payment Status';
$messages['dashboard_card2_action'] = 'Action';
$messages['dashboard_card2_view'] = 'VIEW';

//=======[Order Service]=======
$messages['orderservices_choosepackage'] = 'Choose a package';
$messages['orderservices_buy'] = 'BUY';

//=======[View Cart]=======
$messages['dashboard_viewcart_navbar'] = 'Shopping Cart';

$messages['dashboard_viewcart_card1_title'] = 'EXTRA OPTIONS';
$messages['dashboard_viewcart_card1_chooseloc'] = 'Choose a location';

$messages['dashboard_viewcart_card2_product'] = 'Product';
$messages['dashboard_viewcart_card2_price'] = 'Price';
$messages['dashboard_viewcart_card2_quantity'] = 'Quantity';
$messages['dashboard_viewcart_card2_subtotal'] = 'Subtotal';
$messages['dashboard_viewcart_card2_remove'] = 'Remove';
$messages['dashboard_viewcart_card2_continue'] = 'CONTINUE SHOPPING';
$messages['dashboard_viewcart_card2_order'] = 'ORDER';
$messages['dashboard_viewcart_card2_total'] = 'Total';



//=======[Load Balance]=======
$messages['loadbalance_paypal'] = 'PAYPAL (USD)';
$messages['orderservices_paygol'] = 'SMS/PAYSAFE (USD)';

//=======[Console]=======
$messages['console_card1_title'] = 'Console';
$messages['console_card1_autoscroll'] = 'Auto scroll';
$messages['console_card1_typecmd'] = 'Type a command';
$messages['console_card1_execute'] = 'Execute';

$messages['console_card2_title'] = 'Actions';
$messages['console_card2_start'] = 'Start';
$messages['console_card2_stop'] = 'Stop';
$messages['console_card2_restart'] = 'Restart';

$messages['console_card3_title'] = 'Rename';
$messages['console_card3_typename'] = 'Type an awesome name for your server!';
$messages['console_card3_rename'] = 'RENAME';

$messages['console_card4_title'] = 'INFO';
$messages['console_card4_address'] = 'Address';
$messages['console_card4_ram'] = 'RAM';
$messages['console_card4_serverid'] = 'Server ID';
$messages['console_card4_node'] = 'Node';
$messages['console_card4_ftphost'] = 'FTP Host';
$messages['console_card4_ftpport'] = 'FTP Port';
$messages['console_card4_ftpusr'] = 'FTP Username';
$messages['console_card4_ftpasst'] = 'FTP Password';
$messages['console_card4_ftpass'] = 'SHOW';

$messages['console_modal_title'] = 'YOUR FTP PASSWORD';
$messages['console_modal_reset'] = 'RESET';
$messages['console_modal_close'] = 'CLOSE';

//=======[Install JAR]=======
$messages['install_choose'] = 'Choose a version';
$messages['install_button'] = 'INSTALL';

//=======[Subusers]=======
$messages['subusers_card_1_placeholder'] = 'NoLag Username';
$messages['subusers_card_1_add'] = 'ADD SUBUSER';

$messages['subusers_card_2_title'] = 'SUBUSERS';
$messages['subusers_card_2_username'] = 'Username';
$messages['subusers_card_2_action'] = 'Action';
$messages['subusers_card_2_remove'] = 'Remove';

//API
$messages['api_generic_missingfields'] = 'Some parameters are missing';
$messages['api_generic_nullserver'] = 'Could not find this server!';
$messages['api_generic_noaccess'] = 'You do not have access to this server!';
$messages['api_generic_captcha'] = 'Captcha is not valid.';

//updateName
$messages['api_updatename_success'] = 'Server name has been successfully updated!';

//updateCart
$messages['api_updatecart_success'] = 'Product has been updated.';
$messages['api_updatecart_failed'] = 'Product has not been updated.';
$messages['api_updatecart_maxquantity'] = 'Maximum quantity per item is 3';
$messages['api_updatecart_invalidbounds'] = '[BotStack FW]: Your request has been blocked because it has been flagged by INVALID_BOUNDS filter.';

//resetFTP
$messages['api_resetftp_success'] = 'New password has been successfully generated!';

//addSubuser
$messages['api_subuser_self'] = 'You can\'t add yourself as subuser!';
$messages['api_subuser_noreg'] = 'This user is not registered in NoLagCP!';
$messages['api_subuser_already'] = 'This user has already access in your server!';
$messages['api_subuser_success'] = 'Subuser has been successfully added!';

//pay
$messages['api_pay_already'] = 'This invoice is already paid!';
$messages['api_pay_noperm'] = 'You do not have permission to pay this invoice!';
$messages['api_pay_nobalance'] = 'Your balance is not enough to pay this invoice :(';
$messages['api_pay_success'] = 'Thank you for paying!';

//resetpassword
$messages['api_rpassword_null'] = 'Could not find that user! Please contact support.';
$messages['api_rpassword_success'] = 'Please check your emails to specify a new password!';

//register
$messages['api_register_success'] = 'Welcome to NoLag! You have successfully registered!';
$messages['api_register_invalidemail'] = 'Whoops! This is not a valid e-mail address!';
$messages['api_register_email'] = 'Whoops! This e-mail address is already registered!';
$messages['api_register_username'] = 'Oh no! Someone is already using this username :( Can you think of another?';

//login
$messages['api_login_success'] = 'Welcome to NoLag Control Panel Beta!';
$messages['api_login_failed'] = 'This is not a valid combination of email and password.';

//checkout
$messages['api_checkout_maxquantity'] = 'You can\'t have more than 3 items in your cart.';
$messages['api_checkout_success'] = 'Invoice has been generated!';

//changePassword
$messages['api_changepass_invalid'] = 'This Password Reset token is not valid, please make sure that you copied the URL right from the email!';
$messages['api_changepass_expired'] = 'This Password Reset token is expired.';
$messages['api_changepass_success'] = 'Your password has been successfully changed!';

//delSubuser
$messages['api_delsubuser_self'] = 'You can\'t remove yourself as subuser!';
$messages['api_delsubuser_already'] = 'This user does not have access to your server!';
$messages['api_delsubuser_success'] = 'Subuser has been successfully deleted!';

?>
