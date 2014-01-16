<?php

/**
* @Project NUKEVIET 4.x
* @Author VINADES.,JSC (contact@vinades.vn)
* @Copyright (C) 2014 VINADES.,JSC. All rights reserved
* @Language česky
* @License CC BY-SA (http://creativecommons.org/licenses/by-sa/4.0/)
 * @Createdate Aug 01, 2010, 02:40:00 PM
*/

if( ! defined( 'NV_ADMIN' ) or ! defined( 'NV_MAINFILE' ) ) die( 'Stop!!!' );

$lang_translator['author'] = 'http://datviet.cz';
$lang_translator['createdate'] = '01/08/2010, 21:40';
$lang_translator['copyright'] = '@Copyright (C) 2010 VINADES.,JSC.. All rights reserved';
$lang_translator['info'] = 'YM: datvietinfo2010 ';
$lang_translator['langtype'] = 'lang_module';

$lang_module['global_config'] = 'Systém Configurace';
$lang_module['site_config'] = 'Konfigurace website';
$lang_module['lang_site_config'] = 'Konfigurace website podle jazyk:%s';
$lang_module['bots_config'] = 'Server vyhledávání';
$lang_module['optActive'] = 'Povolit stránek Optimalizace funkce';
$lang_module['optActive_no'] = 'Neaktivní';
$lang_module['optActive_all'] = 'Aktivovat plné stránka';
$lang_module['optActive_site'] = 'Aktivujte oblast rozhraní';
$lang_module['optActive_admin'] = 'Aktivujte oblast admin';
$lang_module['sitename'] = 'Název webu';
$lang_module['theme'] = 'Výchozí téma';
$lang_module['themeadmin'] = 'Administrator téma';
$lang_module['default_module'] = 'Výchozí modul';
$lang_module['description'] = 'Popis stránek';
$lang_module['rewrite'] = 'Přepište konfigurace';
$lang_module['rewrite_optional'] = 'Odstranit jazykové znaky na URL';
$lang_module['disable_content'] = 'Obsah';
$lang_module['submit'] = 'Předložit';
$lang_module['err_writable'] = 'Chyba systému nelze zapisovat do souboru%s. Prosím, chmod nebo šekem server configur!';
$lang_module['err_supports_rewrite'] = 'Chyba, server nepodporuje přepsat.';
$lang_module['captcha'] = 'Config ověrovací kod';
$lang_module['captcha_0'] = 'Skrýt';
$lang_module['captcha_1'] = 'Při přihlášení adminu';
$lang_module['captcha_2'] = 'Při přihlášení uživatele';
$lang_module['captcha_3'] = 'Při host registrovat';
$lang_module['captcha_4'] = 'Při přihlášení uživatele nebo při registrování host';
$lang_module['captcha_5'] = 'Při adminu nebo přihlášení uživatele';
$lang_module['captcha_6'] = 'Při přihlášení adminu nebo zaregistrovat host';
$lang_module['captcha_7'] = 'Zobrazení na všech';
$lang_module['ftp_config'] = 'FTP Configur';
$lang_module['smtp_config'] = 'SMTP Configur';
$lang_module['server'] = 'Server nebo URL';
$lang_module['port'] = 'Přístav';
$lang_module['username'] = 'Uživatelské jméno';
$lang_module['password'] = 'Heslo';
$lang_module['ftp_path'] = 'Vzdálenou cestu';
$lang_module['mail_config'] = 'Vyberte mail server typu';
$lang_module['type_smtp'] = 'SMTP';
$lang_module['type_linux'] = 'Linux Mail';
$lang_module['type_phpmail'] = 'PHPmail';
$lang_module['smtp_server'] = 'Informace o serveru';
$lang_module['incoming_ssl'] = 'Tento server požaduje šifrované připojení';
$lang_module['outgoing'] = 'Server odchozí pošty (SMTP)';
$lang_module['outgoing_port'] = 'Odchozí port serveru (SMTP)';
$lang_module['smtp_username'] = 'Přihlašovací informace';
$lang_module['smtp_login'] = 'Uživatelské jméno';
$lang_module['smtp_pass'] = 'Heslo';
$lang_module['bot_name'] = 'Název serveru';
$lang_module['bot_agent'] = 'UserAgent serveru';
$lang_module['bot_ips'] = 'Server IP';
$lang_module['bot_allowed'] = 'Povolení';
$lang_module['site_keywords'] = 'Klíčová slova';
$lang_module['site_logo'] = 'Webové logo';
$lang_module['site_email'] = 'Webový e-mail';
$lang_module['error_send_email'] = 'Email na přijetí chybu';
$lang_module['lang_multi'] = 'Aktivovat více jazyků';
$lang_module['site_lang'] = 'Výchozí jazyk';
$lang_module['site_timezone'] = 'Webové časové pásmo';
$lang_module['date_pattern'] = 'Formát k zobrazení datum';
$lang_module['time_pattern'] = 'Formát k zobrazení času';
$lang_module['gzip_method'] = 'Aktivovat gzip';
$lang_module['proxy_blocker'] = 'Blokovat proxy';
$lang_module['proxy_blocker_0'] = 'Nekontrolovat';
$lang_module['proxy_blocker_1'] = 'Lehce';
$lang_module['proxy_blocker_2'] = 'Střední';
$lang_module['proxy_blocker_3'] = 'Absolutní';
$lang_module['str_referer_blocker'] = 'Aktivovat blok příchodů';
$lang_module['my_domains'] = 'Domény stránek jsou oddělené čárkami';
$lang_module['cookie_prefix'] = 'Cookie prefix';
$lang_module['session_prefix'] = 'Prefix session';
$lang_module['is_user_forum'] = 'Přepnout uživatele management na forum';
$lang_module['banip'] = 'řizení pro zakazané IP';
$lang_module['banip_ip'] = 'IP';
$lang_module['banip_timeban'] = 'Čas zahájení';
$lang_module['banip_timeendban'] = 'Čas ukončení';
$lang_module['banip_funcs'] = 'Funkce';
$lang_module['banip_checkall'] = 'Vybrat všechny';
$lang_module['banip_uncheckall'] = 'Zrušit vše';
$lang_module['banip_address'] = 'Adresa';
$lang_module['banip_begintime'] = 'Čas zahájení zákaz';
$lang_module['banip_endtime'] = 'Čas zákaz končí';
$lang_module['banip_notice'] = 'Poznámky';
$lang_module['banip_confirm'] = 'Přijmout';
$lang_module['banip_mask_select'] = 'Prosím, vyberte';
$lang_module['banip_area'] = 'Oblast';
$lang_module['banip_nolimit'] = 'neurčitou';
$lang_module['banip_area_select'] = 'Vyberte oblast';
$lang_module['banip_noarea'] = 'Neohodnuto';
$lang_module['banip_del_success'] = 'Úspěšně smazán';
$lang_module['banip_area_front'] = 'Mimo stranky';
$lang_module['banip_area_admin'] = 'Admin';
$lang_module['banip_area_both'] = 'Admin a mimo stranky';
$lang_module['banip_delete_confirm'] = 'Chcete-li smazat ip z zakazaného seznamu ?';
$lang_module['banip_mask'] = 'Mask IP';
$lang_module['banip_edit'] = 'Oprava';
$lang_module['banip_delete'] = 'Smazat';
$lang_module['banip_error_ip'] = 'Zadejte zakazany ip';
$lang_module['banip_error_area'] = 'Musíte vybrat oblast';
$lang_module['banip_error_validip'] = 'Chyba:Musíte zadat spravný ip';
$lang_module['nv_admin_add'] = 'Přidat zaměstnání';
$lang_module['nv_admin_edit'] = 'Upravit zaměstnání';
$lang_module['nv_admin_del'] = 'Odstranit zaměstnání';
$lang_module['cron_name_empty'] = 'Nemáte prohlásit název práci';
$lang_module['file_not_exist'] = 'Soubor neexistuje';
$lang_module['func_name_invalid'] = 'Nemáte deklarovat název funkce, jméno nebo jméno funkce je neplatný';
$lang_module['nv_admin_add_title'] = 'Chcete-li přidat práci, musíte doplnit všechny pole';
$lang_module['nv_admin_edit_title'] = 'Chcete-li upravit úlohu, je třeba, abyste prohlásili v těch polích';
$lang_module['cron_name'] = 'Zaměstnání název';
$lang_module['file_none'] = 'Nelze připojit';
$lang_module['run_file'] = 'Lze připojit soubor';
$lang_module['run_file_info'] = 'Spustitelný soubor je obsazen v adresáři "<strong> includes / cronjobs / </ strong>"';
$lang_module['run_func'] = 'Připojit funkce';
$lang_module['run_func_info'] = 'Funkce musí být začínající "<strong> cron_ </ strong>"';
$lang_module['params'] = 'Parametr';
$lang_module['params_info'] = 'Oddělené čárkami';
$lang_module['interval'] = 'Opakujte práci';
$lang_module['interval_info'] = 'Pokud si vybere "<strong> 0 </ strong>", bude práce provádět pouze jednou';
$lang_module['start_time'] = 'Start čas';
$lang_module['min'] = 'minuta';
$lang_module['hour'] = 'hodina';
$lang_module['day'] = 'den';
$lang_module['month'] = 'měsíc';
$lang_module['year'] = 'rok';
$lang_module['is_del'] = 'Smazat po dokončení';
$lang_module['isdel'] = 'Vymazat';
$lang_module['notdel'] = 'Nelze odstranit';
$lang_module['is_sys'] = 'Práce je vytvořeno';
$lang_module['system'] = 'Systém';
$lang_module['client'] = 'Admin';
$lang_module['act'] = 'Stav';
$lang_module['act0'] = 'Pozastavit';
$lang_module['act1'] = 'Aktivovat';
$lang_module['last_time'] = 'Poslední vytvoření';
$lang_module['next_time'] = 'Další vytvoření';
$lang_module['last_time0'] = 'Nespustitelný';
$lang_module['last_result'] = 'Poslední výsledek';
$lang_module['last_result_empty'] = 'n / a';
$lang_module['last_result0'] = 'Špatný';
$lang_module['last_result1'] = 'Hotový';
$lang_module['closed_site'] = 'Režimu zavřeno webu';
$lang_module['closed_site_0'] = 'Stránky byl aktivovat';
$lang_module['closed_site_1'] = 'Uzavření stránky .Přístup pouze k Nejvyššímu správnímu';
$lang_module['closed_site_2'] = 'Uzavření stránky .Přístupných pouze moderátoři';
$lang_module['closed_site_3'] = 'Uzavření stránky .Přístup všechny admin';

?>