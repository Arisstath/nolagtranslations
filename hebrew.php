<?php
/* hebrew.php - hebrew language file 
   contains translations for web ui & api, not for daemon
*/

//=======[NAVBAR]=======
$messages['navbar_dashboard'] = 'תפריט';
$messages['navbar_orderservices'] = 'שירות הזמנות';
$messages['navbar_loadbalance'] = 'הצגת יתרה';
$messages['navbar_console'] = 'לוח הבקרה';
$messages['navbar_filemanager'] = 'מנהל קבצים';
$messages['navbar_installjar'] = 'התקנת חבילה';
$messages['navbar_subusers'] = 'משתמשים משניים';
$messages['navbar_viewcart'] = 'עגלת קניות';

//=======[DASHBOARD]=======
$messages['dashboard_tabs_activeservices'] = 'שירותים פעילים';
$messages['dashboard_tabs_unpaidinvoices'] = 'חשבוניות לא מאושרות';
$messages['dashboard_tabs_accountbalance'] = 'יתרת חשבון';

//Dashboard - Card 1
$messages['dashboard_card1_serversstatus'] = 'מצב השרתים';
$messages['dashboard_card1_online'] = 'פעיל';

//Dashboard - Card2
$messages['dashboard_card2_title'] = 'חשבוניות';
$messages['dashboard_card2_amount'] = 'כמות';
$messages['dashboard_card2_paymentstatus'] = 'מצב התשלום';
$messages['dashboard_card2_action'] = 'פעולה';
$messages['dashboard_card2_view'] = 'הצגה';

//=======[Order Service]=======
$messages['orderservices_choosepackage'] = 'בחר חבילה';
$messages['orderservices_buy'] = 'קנה';

//=======[View Cart]=======
$messages['dashboard_viewcart_navbar'] = 'עגלת קניות';

$messages['dashboard_viewcart_card1_title'] = 'אפשרויות נוספות';
$messages['dashboard_viewcart_card1_chooseloc'] = 'בחר מיקום';

$messages['dashboard_viewcart_card2_product'] = 'מוצרים';
$messages['dashboard_viewcart_card2_price'] = 'מחיר';
$messages['dashboard_viewcart_card2_quantity'] = 'כמות';
$messages['dashboard_viewcart_card2_subtotal'] = 'סיכום ביניים';
$messages['dashboard_viewcart_card2_remove'] = 'הסר';
$messages['dashboard_viewcart_card2_continue'] = 'המשך בקנייה';
$messages['dashboard_viewcart_card2_order'] = 'הזמן';
$messages['dashboard_viewcart_card2_total'] = 'סך הכל';



//=======[Load Balance]=======
$messages['loadbalance_paypal'] = 'PAYPAL (USD)';
$messages['orderservices_paygol'] = 'SMS/PAYSAFE (USD)';

//=======[Console]=======
$messages['console_card1_title'] = 'לוח הבקרה';
$messages['console_card1_autoscroll'] = 'גלילה אוטומטית';
$messages['console_card1_typecmd'] = 'הקלד פקודה';
$messages['console_card1_execute'] = 'בצע';

$messages['console_card2_title'] = 'פעולות';
$messages['console_card2_start'] = 'התחל';
$messages['console_card2_stop'] = 'עצור';
$messages['console_card2_restart'] = 'התחל מחדש';

$messages['console_card3_title'] = 'שנה שם';
$messages['console_card3_typename'] = 'הקלד שם מגניב לשרת שלך!';
$messages['console_card3_rename'] = 'שנה שם';

$messages['console_card4_title'] = 'מידע';
$messages['console_card4_address'] = 'כתובת';
$messages['console_card4_ram'] = 'ראם';
$messages['console_card4_serverid'] = 'מזהה שרת';
$messages['console_card4_node'] = 'צומת';
$messages['console_card4_ftphost'] = 'מארח FTP';
$messages['console_card4_ftpport'] = 'FTP פורט';
$messages['console_card4_ftpusr'] = 'שם משתמש FTP';
$messages['console_card4_ftpasst'] = 'סיסמת FTP';
$messages['console_card4_ftpass'] = 'הצג';

$messages['console_modal_title'] = 'סיסמת ה-FTP שלך';
$messages['console_modal_reset'] = 'אתחל';
$messages['console_modal_close'] = 'סגור';

//=======[Install JAR]=======
$messages['install_choose'] = 'בחר גירסה';
$messages['install_button'] = 'התקן';

//=======[Subusers]=======
$messages['subusers_card_1_placeholder'] = 'שם משתמש NoLag';
$messages['subusers_card_1_add'] = 'הוסף משתמש משנה';

$messages['subusers_card_2_title'] = 'משתמשי משנה';
$messages['subusers_card_2_username'] = 'שם משתמש';
$messages['subusers_card_2_action'] = 'בצע';
$messages['subusers_card_2_remove'] = 'הסר';

//=======[Invoice]=======
$messages['invoice_title'] = 'חשבונית';
$messages['invoice_date'] = 'תאריך';
$messages['invoice_due'] = 'תאריך הגשה';
$messages['invoice_id'] = 'מזהה שירות';
$messages['invoice_item'] = 'מוצר';
$messages['invoice_cost'] = 'מחיר';
$messages['invoice_total'] = 'כמות';
$messages['invoice_thanks'] = 'תודה רבה !';
$messages['invoice_any'] = 'אם נתקלת בבעיה או שאינך מסתדר עם מערכת התשלומים שלנו אל תהסס לבקש עזרה מאיתנו!!!';
$messages['invoice_back'] = 'חזור אחורה';


//API
$messages['api_generic_missingfields'] = 'חסרים נתונים!';
$messages['api_generic_nullserver'] = 'לא ניתן למצוא את השרת הזה!';
$messages['api_generic_noaccess'] = 'אין לך הרשאת גישה לשרת הזה!';
$messages['api_generic_captcha'] = 'הטקסט אינו מתאים.';

//updateName
$messages['api_updatename_success'] = 'שם השרת עודכן בהצלחה!';

//updateCart
$messages['api_updatecart_success'] = 'המוצר עודכן בהצלחה.';
$messages['api_updatecart_failed'] = 'המוצר לא עודכן.';
$messages['api_updatecart_maxquantity'] = 'הכמות המקסימלית לפריט היא 3.';
$messages['api_updatecart_invalidbounds'] = '[BotStack FW]: הבקשה שלך נחסמה משום שהיא סומנה על ידי מסנן הבקשות.';

//resetFTP
$messages['api_resetftp_success'] = 'סיסמה חדשה נוצרה בהצלחה!';

//addSubuser
$messages['api_subuser_self'] = 'אינך יכול/ה להוסיף את עצמך כמשתמש משנה!';
$messages['api_subuser_noreg'] = 'המשתמש הזה אינו רשום ב NoLagCP!';
$messages['api_subuser_already'] = 'למשתמש הזה יש כבר גישה לשרת!';
$messages['api_subuser_success'] = 'רשימת משתמשי משנה עודכנה בהצלחה!';

//pay
$messages['api_pay_already'] = 'חשבונית זו כבר שולמה!';
$messages['api_pay_noperm'] = 'אין לך הרשאה לשלם חשבונית זו!';
$messages['api_pay_nobalance'] = 'היתרה שלך לא מספיקה כדי לשלם חשבונית זו!';
$messages['api_pay_success'] = 'תודה רבה על התשלום!';

//resetpassword
$messages['api_rpassword_null'] = 'לא ניתן למצוא את המשתמש! בבקשה צור קשר עם התמיכה.';
$messages['api_rpassword_success'] = 'בבקשה בדוק את המייל שלך כדי לבחור סיסמה חדשה!';

//register
$messages['api_register_success'] = 'ברוכים הבאים ל NoLag! ההרשמה הסתיימה בהצלחה!';
$messages['api_register_invalidemail'] = 'אופס! כתובת המייל אינה נכונה!';
$messages['api_register_email'] = 'אופס! המייל הזה כבר רשום במערכת!';
$messages['api_register_username'] = 'הו לא! מישהו כבר לקח את שם המשתמש הזה :( תוכל לחשוב על אחר?';

//login
$messages['api_login_success'] = 'ברוכים הבאים ללוח הבקרה של NoLag גירסת ביטא';
$messages['api_login_failed'] = 'אין זה שילוב חוקי של דוא"ל וסיסמה.';

//checkout
$messages['api_checkout_maxquantity'] = 'לא ניתן להוסיף יותר משלוש מוצרים לעגלה.';
$messages['api_checkout_success'] = 'החשבונית נוצרה בהצלחה!';

//changePassword
$messages['api_changepass_invalid'] = 'מזהה איתחול הסיסמה הזה אינו נכון, בבקשה בדוק האם העתקה נכון את הקישור מהמייל!';
$messages['api_changepass_expired'] = 'פג התוקף של מזהה איתחול הסיסמה הזה!';
$messages['api_changepass_success'] = 'סיסמתך שונתה בהצלחה!';

//delSubuser
$messages['api_delsubuser_self'] = 'אינו יכול להסיר את עצמך כמו משתמשי משנה!';
$messages['api_delsubuser_already'] = 'למשתמש זה אין גישה לשרת!';
$messages['api_delsubuser_success'] = 'משתמש משנה נוסף בהצלחה!';

?>
