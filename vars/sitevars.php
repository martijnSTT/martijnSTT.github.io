<?php

$root = $_SERVER['DOCUMENT_ROOT'];

$root .= "/12732Project15/";
define('BASE', 'http://'.$_SERVER['HTTP_HOST'].'/12732Project15/');
define('BASEDOCS', BASE.'modules/document/documents/');
/*
$root = $_SERVER['DOCUMENT_ROOT'].'/project15/nieuw/';
define('BASE', 'http://'.$_SERVER['HTTP_HOST'].'/project15/nieuw/');
*/
$sessionName = 'sessionUserLoginP15';

//------------STATES-------------//
define('state_euro', '<i class="material-icons state_icon green">monetization_on</i>');
define('state_good', '<i class="material-icons state_icon green">check_circle</i>');
define('state_ban', '<i class="material-icons state_icon orange">remove_circle</i>');
define('state_open', '<i class="material-icons state_icon grey">blur_on</i>');
define('state_late', '<i class="material-icons state_icon red">timer</i>');

//------------STATECOLORS-------------//
define('green_color', '#b9c400');
define('orange_color', '#e8ad00');
define('grey_color', '#37A3DC');
define('red_color', '#E72264');



//------------ICONS-------------//
/*
define('menu_icon', '<i class="material-icons">menu</i>');
define('home_icon', '<i class="material-icons">home</i>');
define('open_icon', '<i class="material-icons">warning</i>');
define('relation_icon', '<i class="material-icons">supervisor_account</i>');
define('contact_icon', '<i class="material-icons">person</i>');
define('project_icon', '<i class="material-icons">business_center</i>');
define('note_icon', ' <i class="material-icons">timer</i>');
define('quotation_icon', '<i class="material-icons">playlist_add_check</i>');
define('outsourcing_icon', '<i class="material-icons">free_breakfast</i>');
define('invoice_icon', '<i class="material-icons">euro_symbol</i>');
define('domain_icon', '<i class="material-icons">public</i>');
define('product_icon', '<i class="material-icons">shopping_basket</i>');
define('time_icon', '<i class="material-icons">timer</i>');
define('info_icon', '<i class="material-icons">speaker_notes</i>');
define('copy_icon', '<i class="material-icons">content_copy</i>');
define('list_icon', '<i class="material-icons">list</i>');
*/

//Menu icon
$menu_icon = array(
    'icon' => '<i class="material-icons">menu</i>',
    'txt' => 'Menu'
);
//Home icon
$home_icon=array(
    'icon' => '<i class="material-icons">home</i>',
    'txt' => 'Dashboard'
);

//Warning icon
$open_icon =array(
    'icon' => '<i class="material-icons">warning</i>',
    'txt' => 'Open'
);

//Relation icon
$relation_icon= array(
    'icon' => '<i class="material-icons">supervisor_account</i>',
    'txt' => 'Relatie'
);

//Contact icon
$contact_icon = array(
    'icon' => '<i class="material-icons">person</i>',
    'txt' => 'Contact'
);

//Project icon
$project_icon = array(
    'icon' => '<i class="material-icons">business_center</i>',
    'txt' => 'Project'
);

//Task icon
$note_icon = array(
    'icon' => '<i class="material-icons">timer</i>',
    'txt' => 'Taak',
    'txt2' => '/Notitie'
);

//Quotation icon
$quotation_icon = array(
    'icon' => '<i class="material-icons">playlist_add_check</i>',
    'txt' => 'Offerte'
);

//Outsourcing icon
$outsourcing_icon = array(
    'icon' => '<i class="material-icons">free_breakfast</i>',
    'txt' => 'Uitbesteding'
);

//Invoice icon
$invoice_icon = array(
    'icon' => '<i class="material-icons">euro_symbol</i>',
    'txt' => 'Factuur'
);

//Invoice icon
$domain_icon = array(
    'icon' => '<i class="material-icons">public</i>',
    'txt' => 'Domein'
);

//Invoice icon
$product_icon = array(
    'icon' => '<i class="material-icons">shopping_basket</i>',
    'txt' => 'Product',
);

//Invoice icon
$time_icon = array(
    'icon' => '<i class="material-icons">timer</i>',
    'txt' => 'Tijdregistratie'
);

//Invoice icon
$info_icon = array(
    'icon' => '<i class="material-icons">speaker_notes</i>',
    'txt' => 'Informatie'
);

//Invoice icon
$copy_icon = array(
    'icon' => '<i class="material-icons">content_copy</i>',
    'txt' => 'Duplicaat'
);

//Invoice icon
$list_icon = array(
    'icon' => '<i class="material-icons">list</i>',
    'txt' => 'Combinatie'
);

//Print icon
$print_icon = array(
    'icon' => '<i class="material-icons">print</i>',
    'txt' => 'Print'
);

//Print icon
$timeline_icon = array(
    'icon' => '<i class="material-icons">timeline</i>',
    'txt' => 'Overzicht'
);

//Print icon
$add_icon = array(
    'icon' => '<i class="material-icons">add</i>'
);

//Print icon
$setting_icon = array(
    'icon' => '<i class="material-icons">settings</i>',
    'txt' => 'Instellingen'
);


//------------PAGE-HEADERS List-------------//
$gegevens = 'Gegevens';
$dashboard_header = 'Dashboard';
$contacts_header = 'Contact';
$relations_header = 'Relatie';
$projects_header = 'Project';
$notes_header = 'Taak/Notitie';
$quotations_header = 'Offerte';
$invoices_header = 'Factuur';
$invoices_combi_header = 'Combinatie factuur';
$outsourcings_header = 'Uitbesteding';
$domains_header = 'Domein';
$documentations_header = 'Documentatie';
$products_header = 'Producten';
$daytasks_header = 'Openstaande taken';
$settings_header = 'Instellingen';


//------------TABS-------------//



//Relation
$tab0 = 'Overzicht';
$tab1 = 'Detail';
$tab2 = 'Financieel';
$tab3 = 'Notities';
$tab4 = "Todo's";
$tab5 = 'Documenten';
$tab6 = 'Takenoverzicht';
$tab7 = 'Projecten';
$tab8 = 'Contacten';
$tab9 = 'Huisstijl';
$tab10 = 'Offerteregels';
$tab11 = 'Factuurregels';
$tab12 = 'Uitbestedingregels';
$tab13 = 'Taken';
$tab14 = 'Project';
$tab15 = 'Correspondentie';
$tab16 = 'Tickets';
$tab17 = 'Uitbestedingen';
$tab18 = 'Maandoverzicht';
$tab19 = 'Detail';
$tab20 = 'Inloggegevens';
$tab21 = 'Overzicht combinatie';
$tab22 = 'Domein & Hosting';

//------------TABLEHEADERS-------------//


//Relation
$relations_h1 = 'Code';
$relations_h2 = 'Relatie';
$relations_h3 = 'Telefoon';
$relations_h4 = 'Adres';

//Contacts
/*$contacts_h0 = '';
$contacts_h1 = 'Voornaam';*/
$contacts_h2 = 'Contact';
$contacts_h3 = 'Relatie';
$contacts_h4 = 'Telefoon';
$contacts_h5 = 'Mobiel';
$contacts_h6 = 'Email';

//Projects
$projects_h1 = 'Project';
$projects_h2 = '';
$projects_h3 = 'Relatie';
$projects_h4 = 'Datum';
$projects_h5 = 'Status';


//Documents
$documents_h1 = 'Document';
$documents_h2 = 'Type';
$documents_h3 = 'Groote';
$documents_h4 = 'Link';
$documents_h5 = 'Aanmaakdatum';


//Tasks
$tasks_h1 = 'Taak';
$tasks_h2 = 'Project';
$tasks_h3 = 'Relatie';
$tasks_h4 = 'Informatie';
$tasks_h5 = 'Totaal';
$tasks_h6 = 'Datum';
$tasks_h7 = 'Status';
$tasks_h8 = 'Voor';


//Notes
$notes_h1 = 'Notitie';
$notes_h2 = 'Project';
$notes_h3 = 'Relatie';
$notes_h4 = 'Informatie';
$notes_h5 = 'Totaal';
$notes_h6 = 'Datum';
$notes_h7 = 'Status';


//Quotations
$quotations_h1 = 'Offerte';
$quotations_h2 = 'Project';
$quotations_h3 = 'Relatie';
$quotations_h4 = 'Omschrijving';
$quotations_h5 = 'Type';
$quotations_h6 = 'Datum';
$quotations_h7 = 'Status';

//Outsourcing
$outsourcings_h1 = 'Uitbesteding';
$outsourcings_h2 = 'Project';
$outsourcings_h3 = 'Relatie';
$outsourcings_h4 = 'Leverancier';
$outsourcings_h5 = 'Titel';
$outsourcings_h6 = 'Ex. BTW';
$outsourcings_h7 = 'Datum';

//Invoices
$invoices_h1 = 'Factuur';
$invoices_h2 = 'Project';
$invoices_h3 = 'Relatie';
$invoices_h4 = 'Titel';
$invoices_h5 = 'Ex. BTW';
$invoices_h6 = 'Datum';

//Domains
$domains_h1 = 'Domein';
$domains_h2 = 'Relatie';
$domains_h3 = 'Pakket';
$domains_h4 = 'Datum';
$domains_h5 = 'Tickets';
$domains_h6 = 'Status';


//Documentation
$documentation_1_h1 = 'Categorie';
$documentation_2_h1 = 'Document';
$documentation_2_h2 = 'Aangemaakt';
$documentation_2_h3 = 'Gewijzigd';
$documentation_2_h4 = 'Door';

//Correspondence domains
$correspondence_domains_h1 = 'Verstuurd';
$correspondence_domains_h2 = 'type';








//Table columns

$data_column = array(
    'width'=> 15,
    'text' => 'Datum'
);



//------------AVAILABILITY-------------//
$available1 = 'Nee';
$available2 = 'Ja';
$available3 = 'In overleg';
$available4 = "'s-Ochtends";
$available5 = "'s-Middags";
$available6 = "'s-Avonds";



//------------DETAILPAGE VARIABLES-------------//

//Generallabels
$door = 'Door';
$locatie = 'Locatie';
$aanmaakdatum = 'Aanmaakdatum';
$gegevens = 'Gegevens';
$prive = 'Privé';
$aanwezig = 'Aanwezigheid';
$naam = 'Naam';
$adres = 'Adres';
$postadres = 'Postadres';
$contactLabel = 'Contact';
$projectLabel = 'Project';
$informatie = 'Informatie';
$relatie = 'Relatie';
$iban = 'Iban';
$geboortedatum = 'Geboortedatum';
$relatie = 'Relatie';
$adrestel = 'Adres/Tel';
$type = 'Type';
$mobiel = 'Mobiel';
$email = 'Email';
$doorkiesnummer = 'Doorkiesnr.';
$nieuwsbrief = 'Nieuwsbr.';
$privegegevens = 'Privégegevens';
$straat = 'Straat';
$nummer = 'Nr.';
$toevoeging = 'Toev.';
$postcode = 'Postcode';
$plaats = 'Plaats';
$efactuur = 'E-factuur';
$kvk = 'Kvk';
$telefoon = 'Telefoon';
$fax = 'Fax';
$website = 'Website';
$status = 'Status';
$referentie = 'Refno.';
$takennotities = 'Taken/notities';
$datum = 'Datum';
$omschrijving = 'Omschrijving';
$totaal = 'Totaal';
$koppelaan = 'Koppel aan';
$actieVoor = 'Actie voor';
$deadline = 'Deadline';
$nav = 'N.a.v.';
$open = 'Open';
$geannuleerd = 'Geannuleerd';
$afgerond = 'Afgerond';
$overig = 'Overig';
$tijdregistratie = 'Tijdregistratie';
$leverdatum = 'Leverdatum';
$leverancier = 'Leverancier';
$opdracht = 'Opdracht';
$titel = 'Titel';
$aanhef = 'Aanhef';
$handtekening = 'Handtekening';
$afleveradres = 'Adres/Afleveradres';
$bedrijf = 'Bedrijf';
$straatpostbus = 'Straat/Postbus';
$pcplaats = 'Pc/Plaats';
$verzendmethode = 'Verz.mthd.';
$trackentrace = 'Track&trace';
$tav = 'T.a.v.';
$uitbestedingregels = 'Uitbestedingregels';
$regel = 'Regel';
$prijs = 'Prijs';
$vervaldatum = 'Vervaldatum';
$offerteregels = 'Offerteregels';
$productLabel = 'Product';
$prijsps = 'Prijs/ps';
$aantal = 'Aantal';
$factuurdatum = 'Factuurdatum';
$btw = 'Btw';
$factuurregels = 'Factuurregels';
$startLabel = 'Start';
$stopLabel = 'Stop';
$code = 'Code';
$zoeken = 'Zoeken';
$contractstart = 'Contract start';
$contracteind = 'Contract eind';
$verhuistoken = 'Verhuistoken';
$packageLabel = 'Pakket';
$providerLabel = 'Provider';
$serverLabel = 'Server';
$bedrijfsnaam = 'Bedrijfsnaam';

//Daysofweek
$monday = 'Maandag';
$tuesday = 'Dinsdag';
$wednesday = 'Woensdag';
$thursday = 'Donderdag';
$friday = 'Vrijdag';
$saturday = 'Zaterdag';
$sunday = 'Zondag';


$available = array(
    1 => 'Ja',
    2 => 'Nee',
    3 => 'In overleg',
    4 => 's-Ochtends',
    5 => 's-Middags',
    6 => 's-Avonds'
);

//COLUMNS
$column_left = 'col-sm-8';
$column_right = 'col-sm-4';

//SAVE/ERROR MESSAGE
$save_msg = 'Gegevens succesvol opgeslagen..';
$error_msg = 'Er is iets mis gegaan tijdens het opslaan';
