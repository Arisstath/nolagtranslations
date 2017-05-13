<?php
/* greek.php - greek language
   contains translations for web ui & api, not for daemon
*/

//=======[NAVBAR]=======
$messages['navbar_dashboard'] = 'Αρχική';
$messages['navbar_orderservices'] = 'Αγορά Υπηρεσιών';
$messages['navbar_loadbalance'] = 'Φόρτωση Υπολοίπου';
$messages['navbar_console'] = 'Κονσόλα';
$messages['navbar_filemanager'] = 'Διαχειριστής Αρχείων';
$messages['navbar_installjar'] = 'Εγκατάσταση .jar';
$messages['navbar_subusers'] = 'Υποδιαχειριστές';
$messages['navbar_viewcart'] = 'Καλάθι Προϊόντων';

//=======[DASHBOARD]=======
$messages['dashboard_tabs_activeservices'] = 'ΕΝΕΡΓΕΣ ΥΠΗΡΕΣΙΕΣ';
$messages['dashboard_tabs_unpaidinvoices'] = 'ΜΗ ΠΛΗΡΩΜΕΝΑ ΤΙΜΟΛΟΓΙΑ';
$messages['dashboard_tabs_accountbalance'] = 'ΥΠΟΛΟΙΠΟ ΛΟΓΑΡΙΑΣΜΟΥ';

//Dashboard - Card 1
$messages['dashboard_card1_serversstatus'] = 'ΚΑΤΑΣΤΑΣΗ ΔΙΑΚΟΜΙΣΤΩΝ';
$messages['dashboard_card1_online'] = 'ONLINE';

//Dashboard - Card2
$messages['dashboard_card2_title'] = 'Τιμολόγια';
$messages['dashboard_card2_amount'] = 'Ποσό';
$messages['dashboard_card2_paymentstatus'] = 'Κατάσταση Πληρωμής';
$messages['dashboard_card2_action'] = 'Ενέργεια';
$messages['dashboard_card2_view'] = 'ΕΜΦΑΝΙΣΗ';

//=======[Order Service]=======
$messages['orderservices_choosepackage'] = 'Επιλέξτε ένα πακέτο';
$messages['orderservices_buy'] = 'ΑΓΟΡΑ';

//=======[View Cart]=======

$messages['dashboard_viewcart_card1_title'] = 'ΡΥΘΜΙΣΙΜΕΣ ΕΠΙΛΟΓΕΣ';
$messages['dashboard_viewcart_card1_chooseloc'] = 'Επιλέξτε μια τοποθεσία';

$messages['dashboard_viewcart_card2_product'] = 'Προϊόν';
$messages['dashboard_viewcart_card2_price'] = 'Ποσό';
$messages['dashboard_viewcart_card2_quantity'] = 'Ποσότητα';
$messages['dashboard_viewcart_card2_subtotal'] = 'Υποσύνολο';
$messages['dashboard_viewcart_card2_remove'] = 'Αφαίρεση';
$messages['dashboard_viewcart_card2_continue'] = 'ΣΥΝΕΧΕΙΑ ΑΓΟΡΩΝ';
$messages['dashboard_viewcart_card2_order'] = 'ΑΓΟΡΑ';
$messages['dashboard_viewcart_card2_total'] = 'Σύνολο';



//=======[Load Balance]=======
$messages['loadbalance_paypal'] = 'PAYPAL (USD)';
$messages['orderservices_paygol'] = 'SMS/PAYSAFE (USD)';

//=======[Console]=======
$messages['console_card1_title'] = 'Κονσόλα';
$messages['console_card1_autoscroll'] = 'Αυτόματο scroll';
$messages['console_card1_typecmd'] = 'Πληκρολογήστε μια εντολή';
$messages['console_card1_execute'] = 'ΕΚΤΕΛΕΣΗ';

$messages['console_card2_title'] = 'Ενέργειες';
$messages['console_card2_start'] = 'ΕΝΑΡΞΗ';
$messages['console_card2_stop'] = 'ΤΕΡΜΑΤΙΣΜΟΣ';
$messages['console_card2_restart'] = 'ΕΠΑΝΕΚΚΙΝΗΣΗ';

$messages['console_card3_title'] = 'Μετονομασία';
$messages['console_card3_typename'] = 'Πληκτρολόγησε ενα cool όνομα για τον server σου!';
$messages['console_card3_rename'] = 'ΜΕΤΟΝΟΜΑΣΙΑ';

$messages['console_card4_title'] = 'ΠΛΗΡΟΦΟΡΙΕΣ';
$messages['console_card4_address'] = 'Διεύθυνση';
$messages['console_card4_ram'] = 'RAM';
$messages['console_card4_serverid'] = 'Αναγνωριστικό';
$messages['console_card4_node'] = 'Διακομιστής';
$messages['console_card4_ftphost'] = 'FTP Τοποθεσία';
$messages['console_card4_ftpport'] = 'FTP Θύρα';
$messages['console_card4_ftpusr'] = 'FTP Username';
$messages['console_card4_ftpasst'] = 'FTP Κωδικός';
$messages['console_card4_ftpass'] = 'ΕΜΦΑΝΙΣΗ';

$messages['console_modal_title'] = 'Ο κωδικόυς σου FTP';
$messages['console_modal_reset'] = 'ΔΗΜΙΟΥΡΓΙΑ ΝΕΟΥ';
$messages['console_modal_close'] = 'ΚΛΕΙΣΙΜΟ';

//=======[Install JAR]=======
$messages['install_choose'] = 'Επιλέξτε μια έκδοση';
$messages['install_button'] = 'ΕΓΚΑΤΑΣΤΑΣΗ';

//=======[Subusers]=======
$messages['subusers_card_1_placeholder'] = 'NoLag Username';
$messages['subusers_card_1_add'] = 'ΠΡΟΣΘΗΚΗ ΥΠΟΔΙΑΧΕΙΡΙΣΤΗ';

$messages['subusers_card_2_title'] = 'ΥΠΟΔΙΑΧΕΙΡΙΣΤΕΣ';
$messages['subusers_card_2_username'] = 'Όνομα Χρήστη';
$messages['subusers_card_2_action'] = 'Ενέργεια';
$messages['subusers_card_2_remove'] = 'Αφαίρεση';

//=======[Invoice]=======
$messages['invoice_title'] = 'Τιμολόγιο';
$messages['invoice_date'] = 'Ημερομηνία';
$messages['invoice_due'] = 'Εξόφληση εως';
$messages['invoice_id'] = 'Αναγνωριστικό υπηρεσίας';
$messages['invoice_item'] = 'Προϊόν';
$messages['invoice_cost'] = 'Κόστος';
$messages['invoice_total'] = 'Σύνολο';
$messages['invoice_thanks'] = 'Σας ευχαριστούμε !';
$messages['invoice_any'] = 'Εάν αντιμετωπίζετε οποιοδήποτε πρόβλημα μην διστάζετε να μας ειδοποιήσετε!';
$messages['invoice_back'] = 'ΕΠΙΣΤΡΟΦΗ';


//API
$messages['api_generic_missingfields'] = 'Μερικοί παράμετροι απουσιάζουν';
$messages['api_generic_nullserver'] = 'Ο server αυτός δεν μπόρεσε να βρεθεί!';
$messages['api_generic_noaccess'] = 'Δεν έχεις πρόσβαση σε αυτόν τον server!';
$messages['api_generic_captcha'] = 'Το captcha δεν είναι συμπληρωμένο!';

//updateName
$messages['api_updatename_success'] = 'Ο server μετονομάστηκε με επιτυχία!';

//updateCart
$messages['api_updatecart_success'] = 'Το προϊόν έχει ενημερωθεί.';
$messages['api_updatecart_failed'] = 'Το προϊόν δεν έχει ενημερωθεί.';
$messages['api_updatecart_maxquantity'] = 'Η μέγιστη ποσότητα ανα τεμάχιο είναι 3.';
$messages['api_updatecart_invalidbounds'] = 'Η ποσότητα του προϊόντος είναι λάθος.';

//resetFTP
$messages['api_resetftp_success'] = 'Ο κωδικός FTP έχει ξαναδημιουργηθεί!';

//addSubuser
$messages['api_subuser_self'] = 'Δεν μπορείτε να βάλετε τον εαυτό σας σαν υποδιαχειριστή!';
$messages['api_subuser_noreg'] = 'Αυτός ο χρήστης δεν έχει εγγραφεί στο NoLagCP!';
$messages['api_subuser_already'] = 'Αυτός ο χρήστης είναι ήδη υποδιαχειριστής!';
$messages['api_subuser_success'] = 'Ο χρήστης προστέθηκε σαν διαχειριστής επιτυχώς!';

//pay
$messages['api_pay_already'] = 'Το τιμολόγιο είναι ήδη πληρωμένο!';
$messages['api_pay_noperm'] = 'Δεν έχετε δικαίωμα να πληρώσετε αυτό το τιμολόγιο!';
$messages['api_pay_nobalance'] = 'Δεν έχετε αρκετό υπόλοιπο για να πληρώσετε το τιμολόγιο!';
$messages['api_pay_success'] = 'Σας ευχαριστούμε για την πληρωμή!';

//resetpassword
$messages['api_rpassword_null'] = 'Δεν βρέθηκε ο χρήστης, παρακαλούμε επικοινωνήστε μαζί μας.';
$messages['api_rpassword_success'] = 'Παρακαλώ ελέγξτε τα emails σας για τον σύνδεσμο αλλαγής κωδικού.';

//register
$messages['api_register_success'] = 'Καλώς ορίσατε στο NoLagCP!';
$messages['api_register_invalidemail'] = 'Παρακαλώ εισάγετε ενα έγκυρο e-mail.';
$messages['api_register_email'] = 'Αυτό το e-mail είναι ήδη εγγεγραμμένο! Μήπως ξεχάσατε τον κωδικό σας;';
$messages['api_register_username'] = 'Αυτό το username είναι ήδη εγγεγραμμένο! Μήπως ξεχάσατε τον κωδικό σας;';

//login
$messages['api_login_success'] = 'Καλως ορίσατε!';
$messages['api_login_failed'] = 'Παρακαλώ ελέγξτε τα στοιχεία σύνδεσης';

//checkout
$messages['api_checkout_maxquantity'] = 'Δεν μπορείτε να έχετε περισσότερα από 3 αντικείμενα στο καλάθι σας!';
$messages['api_checkout_success'] = 'Το τιμολόγιο έχει δημιουργηθεί!';

//changePassword
$messages['api_changepass_invalid'] = 'Αυτό το αναγνωριστικό επαναφοράς κωδικού δεν υπάρχει, παρακαλώ ελέγξτε εάν πληκτρολογήσατε σωστά τον σύνδεσμο!';
$messages['api_changepass_expired'] = 'Αυτό το αναγνωριστικό επαναφοράς κωδικού έχει λήξει!';
$messages['api_changepass_success'] = 'Ο κωδικός σου έχει αλλάξει επιτυχώς!';

//delSubuser
$messages['api_delsubuser_self'] = 'Δεν μπορείς να αφαιρέσεις τον ευαυτό σου από διαχειριστή!';
$messages['api_delsubuser_already'] = 'Αυτός ο χρήστης δεν είναι υποδιαχεριστής!';
$messages['api_delsubuser_success'] = 'Ο υποδιαχεριστής έχει αφαιρεθεί!';

?>
