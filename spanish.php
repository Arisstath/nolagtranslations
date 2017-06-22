<?php
/* spanish.php - spanish language file 
   contains translations for web ui & api, not for daemon
*/

//=======[NAVBAR]=======
$messages['navbar_dashboard'] = 'Dashboard';
$messages['navbar_orderservices'] = 'Solicitar servicio';
$messages['navbar_loadbalance'] = 'Cargar balance';
$messages['navbar_console'] = 'Consola';
$messages['navbar_filemanager'] = 'Gestor de archivos';
$messages['navbar_installjar'] = 'Instalar Jar';
$messages['navbar_subusers'] = 'SubUsuarios';
$messages['navbar_viewcart'] = 'Ver Carrito';

//=======[DASHBOARD]=======
$messages['dashboard_tabs_activeservices'] = 'SERVICIOS ACTIVOS';
$messages['dashboard_tabs_unpaidinvoices'] = 'RECIBOS PENDIENTES';
$messages['dashboard_tabs_accountbalance'] = 'BALANCE DE LA CUENTA';

//Dashboard - Card 1
$messages['dashboard_card1_serversstatus'] = 'ESTADO DE LOS SERVIDORES';
$messages['dashboard_card1_online'] = 'ONLINE';

//Dashboard - Card2
$messages['dashboard_card2_title'] = 'RECIBOS';
$messages['dashboard_card2_amount'] = 'Cantidad';
$messages['dashboard_card2_paymentstatus'] = 'Estado del pago';
$messages['dashboard_card2_action'] = 'Acción';
$messages['dashboard_card2_view'] = 'VER';

//=======[Order Service]=======
$messages['orderservices_choosepackage'] = 'Elige un paquete';
$messages['orderservices_buy'] = 'COMPRAR';

//=======[View Cart]=======
$messages['dashboard_viewcart_navbar'] = 'Carrito de la compra';

$messages['dashboard_viewcart_card1_title'] = 'OPCIONES EXTRA';
$messages['dashboard_viewcart_card1_chooseloc'] = 'Elige una localizacion';

$messages['dashboard_viewcart_card2_product'] = 'Producto';
$messages['dashboard_viewcart_card2_price'] = 'Precio';
$messages['dashboard_viewcart_card2_quantity'] = 'Cantidad';
$messages['dashboard_viewcart_card2_subtotal'] = 'Subtotal';
$messages['dashboard_viewcart_card2_remove'] = 'Eliminar';
$messages['dashboard_viewcart_card2_continue'] = 'Seguir comprando';
$messages['dashboard_viewcart_card2_order'] = 'FINALIZAR';
$messages['dashboard_viewcart_card2_total'] = 'Total';



//=======[Load Balance]=======
$messages['loadbalance_paypal'] = 'PAYPAL (USD)';
$messages['orderservices_paygol'] = 'SMS/PAYSAFE (USD)';

//=======[Console]=======
$messages['console_card1_title'] = 'Consola';
$messages['console_card1_autoscroll'] = 'Auto scroll';
$messages['console_card1_typecmd'] = 'Escribe un comando';
$messages['console_card1_execute'] = 'Ejecutar';

$messages['console_card2_title'] = 'Acciones';
$messages['console_card2_start'] = 'Start';
$messages['console_card2_stop'] = 'Stop';
$messages['console_card2_restart'] = 'Restart';

$messages['console_card3_title'] = 'Renombrar';
$messages['console_card3_typename'] = '¡Elige un nombre increible para tu servidor!';
$messages['console_card3_rename'] = 'RENOMBRAR';

$messages['console_card4_title'] = 'INFO';
$messages['console_card4_address'] = 'Direccion';
$messages['console_card4_ram'] = 'RAM';
$messages['console_card4_serverid'] = 'Servidor ID';
$messages['console_card4_node'] = 'Nodo';
$messages['console_card4_ftphost'] = 'FTP Host';
$messages['console_card4_ftpport'] = 'FTP Port';
$messages['console_card4_ftpusr'] = 'FTP Usuario';
$messages['console_card4_ftpasst'] = 'FTP Password';
$messages['console_card4_ftpass'] = 'MOSTRAR';

$messages['console_modal_title'] = 'TU FTP PASSWORD';
$messages['console_modal_reset'] = 'RESET';
$messages['console_modal_close'] = 'CERRAR';

//=======[Install JAR]=======
$messages['install_choose'] = 'Elige una version';
$messages['install_button'] = 'INSTALAR';

//=======[Subusers]=======
$messages['subusers_card_1_placeholder'] = 'NoLag Usuario';
$messages['subusers_card_1_add'] = 'AÑADIR SUBUSUARIO';

$messages['subusers_card_2_title'] = 'SUBUSUARIOS';
$messages['subusers_card_2_username'] = 'Usuario';
$messages['subusers_card_2_action'] = 'Accion';
$messages['subusers_card_2_remove'] = 'Borrar';

//=======[Invoice]=======
$messages['invoice_title'] = 'Recibo';
$messages['invoice_date'] = 'Fecha';
$messages['invoice_due'] = 'Fecha de vencimiento';
$messages['invoice_id'] = 'ID del Servicio';
$messages['invoice_item'] = 'Objeto';
$messages['invoice_cost'] = 'Coste';
$messages['invoice_total'] = 'Total';
$messages['invoice_thanks'] = '¡Gracias!';
$messages['invoice_any'] = 'Si tiene algun problema con nuestro sistema de pagos, no dude en solicitar ayuda!';
$messages['invoice_back'] = 'ATRAS';


//API
$messages['api_generic_missingfields'] = 'Faltan algunos parametros';
$messages['api_generic_nullserver'] = '¡No se pudo encontrar el servidor!';
$messages['api_generic_noaccess'] = '¡No dispone de acceso al servidor!';
$messages['api_generic_captcha'] = 'Captcha no válido.';

//updateName
$messages['api_updatename_success'] = '¡Se ha actualizado correctamente el nombre del servidor!';

//updateCart
$messages['api_updatecart_success'] = 'El producto ha sido actualizado';
$messages['api_updatecart_failed'] = 'El producto no ha sido actualizado';
$messages['api_updatecart_maxquantity'] = 'La cantidad máxima por articulo es 3';
$messages['api_updatecart_invalidbounds'] = '[BotStack FW]: Su solicitud ha sido bloqueada porque ha sido marcada por el filtro INVALID_BOUNDS';

//resetFTP
$messages['api_resetftp_success'] = '¡Se ha generado una nueva contraseña!';

//addSubuser
$messages['api_subuser_self'] = '¡No puede añadirse como subusuario!';
$messages['api_subuser_noreg'] = 'Este usuario no está registrado en NoLagCP!';
$messages['api_subuser_already'] = '¡Este usuario ya tiene acceso en el servidor!';
$messages['api_subuser_success'] = '¡El subusuario ha sido añadido correctamente!';

//pay
$messages['api_pay_already'] = '¡Este recibo ya está pagado!';
$messages['api_pay_noperm'] = '¡No tiene acceso para pagar este recibo!';
$messages['api_pay_nobalance'] = 'Su balance no es suficiente para pagar este recibo:(';
$messages['api_pay_success'] = '¡Gracias por su pago!';

//resetpassword
$messages['api_rpassword_null'] = '¡No es posible encontrar ese usuario! Por favor contacte con soporte.';
$messages['api_rpassword_success'] = '¡Por favor revise su correo para seleccionar una nueva contraseña!';

//register
$messages['api_register_success'] = 'Bienvenido a NoLag! ¡Se ha registrado correctamente!';
$messages['api_register_invalidemail'] = '¡Ooops! ¡Esta no es una dirección de email correcta!';
$messages['api_register_email'] = '¡Ooops! ¡Esta dirección de email ya ha sido registrada!';
$messages['api_register_username'] = '¡Oh Oh! Alguien ya está usando este nombre de usuario :( ¿Puede pensar otro?';

//login
$messages['api_login_success'] = '¡Bienvenido al Panel de Control de NoLag Beta!';
$messages['api_login_failed'] = '¡Esta combinación de email y contraseña no es válida.';

//checkout
$messages['api_checkout_maxquantity'] = 'No puede tener más de 3 items en su carrito.';
$messages['api_checkout_success'] = '¡El recibo ha sido generado!';

//changePassword
$messages['api_changepass_invalid'] = '¡Este token para resetear la contraseña no es válido, asegúrese que ha copiado correctamente la URL del email!';
$messages['api_changepass_expired'] = 'El token para resetear la contraseña ha caducado.';
$messages['api_changepass_success'] = '¡Su contraseña ha sido cambiada correctamente!';

//delSubuser
$messages['api_delsubuser_self'] = '¡No puede eliminarse a si mismo como subusario!';
$messages['api_delsubuser_already'] = '¡Este usuario no tiene acceso a su servidor!';
$messages['api_delsubuser_success'] = '¡Subusuario eliminado correctamente!';

?>
