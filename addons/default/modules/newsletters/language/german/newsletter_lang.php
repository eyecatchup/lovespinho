<?php

// labels
$lang['newsletters.subject'] 						= 'Betreff';
$lang['newsletters.created'] 						= 'Erstellt am';
$lang['newsletters.sent'] 							= 'Gesendet am';
$lang['newsletters.actions'] 						= 'Actions';
$lang['newsletters.not_sent_label'] 				= 'Nicht gesendet';
$lang['newsletters.view'] 							= 'Anzeigen';
$lang['newsletters.edit'] 							= 'Bearbeiten';
$lang['newsletters.delete'] 						= 'Löschen';
$lang['newsletters.send'] 							= 'Alle senden';
$lang['newsletters.send_cron'] 						= 'Send Cron';
$lang['newsletters.send_batch']						= 'Send Batch';
$lang['newsletters.pending']						= 'Pending Cron';
$lang['newsletters.export_xml'] 					= 'Export XML';
$lang['newsletters.export_csv'] 					= 'Export CSV';
$lang['newsletters.export_json'] 					= 'Export JSON';
$lang['newsletters.title_label'] 					= 'Newsletter Betreff';
$lang['newsletters.email_label'] 					= 'E-Mail Adresse';
$lang['newsletters.subscribe'] 						= 'Abonnieren';
$lang['newsletters.unsubscribe'] 					= 'Abbestellen';
$lang['newsletters.admin_subscribe'] 						= 'Abonnent hinzufügen';
$lang['newsletters.admin_unsubscribe'] 					= 'Abonnent entfernen';
$lang['newsletters.subject_suffix'] 				= 'Newsletter';
$lang['newsletters.target']							= 'Ziel URL';
$lang['newsletters.url']							= 'URL';
$lang['newsletters.add']							= 'Weitere URL';
$lang['newsletters.stats']							= 'Statistik';
$lang['newsletters.unique_opens']					= 'Eindeutig';
$lang['newsletters.total_opens']					= 'Total';
$lang['newsletters.unique_clicks']					= 'Eindeutige Klicks';
$lang['newsletters.total_clicks']					= 'Total Klicks';
$lang['newsletters.template_select']				= 'Template wählen';
$lang['newsletters.template_title']					= 'Template Titel';
$lang['newsletters.template_select_edit']			= 'Template zum Bearbeiten wählen';
$lang['newsletters.template_edit']					= 'Template bearbeiten';
$lang['newsletters.template_new']					= 'Neues Template erstellen';
$lang['newsletters.tracked_urls']					= 'Tracked URLs';
$lang['newsletters.body']							= 'Newsletter Inhalt';
$lang['newsletters.template_body']					= 'Template Inhalt';

// titles
$lang['newsletters.letter_title']					= 'Newsletter';
$lang['newsletters.newsletters']					= 'Newsletters';
$lang['newsletters.add_title']						= 'Newsletter erstellen';
$lang['newsletters.edit_title']						= 'Newsletter bearbeiten';
$lang['newsletters.list_title'] 					= 'Newsletter';
$lang['newsletters.title_newsletter_opens']			= 'Newsletter Öffnung verfolgen';
$lang['newsletters.title_newsletter_urls']			= 'URL verfolgen';
$lang['newsletters.click_report']					= 'Klicks';
$lang['newsletters.open_statistics']				= 'Öffnungsrate';
$lang['newsletters.templates']						= 'Templates';
$lang['newsletters.template_manager']				= 'Template Manager';
$lang['newsletters.subscribers']					= 'Abonnenten';
$lang['newsletters.statistics']						= 'Statistik';

// messages
$lang['newsletters.example_email']					= 'Ihre E-Mail Adresse';
$lang['newsletters.no_newsletters_error'] 			= 'Keine Newsletter vorhanden. <a href="'.current_url().'/create">Newsletter erstellen</a>';
$lang['newsletters.subscribed_success'] 			= 'Sie haben den Newsletter abonniert. Sie werden unseren aktuellen Newsletter bald erhalten.';
$lang['newsletters.admin_subscribed_success'] 		= 'Sie haben die E-Mail-Adresse zu den Abonnenten hinzugefügt.';
$lang['newsletters.subscribe_desc'] 				= 'Abonnieren Sie unseren Newsletter, um aktuelle Informationen per E-Mail zu erhalten.';
$lang['newsletters.subscriber_count']				= 'Sie haben %s Abonnenten.';
$lang['newsletters.unsubscribe_success'] 			= 'Die E-Mail-Adresse wurde von der Abonnenten-Liste gelöscht.';
$lang['newsletters.unsubscribe_error'] 				= 'Die E-Mail-Adresse konnte nicht gelöscht werden.';
$lang['newsletters.duplicate_email'] 				= 'Diese Adresse wurde bereits registriert.';
$lang['newsletters.default_email'] 					= 'Bitte geben Sie eine E-Mail-Adresse an.';
$lang['newsletters.delete_mail_success'] 			= 'Sie wurden von der Abonnenten-Liste entfernt.';
$lang['newsletters.delete_mail_error'] 				= 'Ihre E-Mail-Adresse konnte nicht von der Abonnenten-Liste entfernt werden. Bitte kontaktieren Sie uns, und wir werden Ihre Adresse manuell entfernen.';
$lang['newsletters.add_success'] 					= 'Der Newsletter "%s" wurde gespeichert.';
$lang['newsletters.add_error'] 						= 'Es ist ein Fehler aufgetreten und der Newsletter konnte nicht gespeichert werden.';
$lang['newsletters.template_add_success'] 			= 'Das Template "%s" wurde gespeichert.';
$lang['newsletters.template_delete_success'] 		= 'Das Template wurde gelöscht.';
$lang['newsletters.sent_success'] 					= 'Der Newsletter wurde erfolgreich gesendet.';
$lang['newsletters.sent_error'] 					= 'Ein Fehler ist aufgetreten, und der Newsletter konnte nicht an alle Abonnenten gesendet werden. Überprüfen Sie Ihre Einstellungen. E-mails, welche erfolgreich versendet wurden, werden nicht erneut versendet.';
$lang['newsletters.no_subscribers']					= 'Dieser Newsletter wurde bereits an alle Abonnenten versendet bzw. haben Sie keine Abonnenten.';
$lang['newsletters.all_sent']						= 'Alle %s E-Mails wurden versendet';
$lang['newsletters.number_sent']					= '%s von %s E-Mail wurden versendet';
$lang['newsletters.confirm']						= 'Sie sind dabei eine E-Mail Kampagne zu starten. Sind sie sicher?';
$lang['newsletters.tracked_urls_error']				= 'Der Wert im Feld &ldquo;Tracked URL &rdquo; ist ungültig. Alle Adressen müssen mit http:// oder https:// beginnen';
$lang['newsletters.sending']						= 'Newsletter werden gesendet...';
$lang['newsletters.cron_set']						= 'Die Newsletter werden gesendet, sobald der Cron-Job läuft.';
$lang['newsletters.opt_in_message']					= 'Viele Dank. Ein E-Mail zur Aktivierung wurde an Ihre E-Mail-Adresse gesendet. Sie müssen den im E-Mail enthaltenen Link anklicken, um Ihre Abonnement zu bestätigen.';
$lang['newsletters.opt_in_success']					= 'Vielen Dank. Ihre E-Mail-Adresse wurde in unsere Abonnenten-Liste hinzugefügt, und Sie werden bald unseren Newsletter erhalten.';
$lang['newsletters.opt_in_error']					= 'Der Aktivierungs-Link ist ungültig. Bitte kontaktieren Sie uns oder versuchen Sie die Anmeldung erneut.';