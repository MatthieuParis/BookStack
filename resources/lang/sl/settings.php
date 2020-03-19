<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Nastavitve',
    'settings_save' => 'Shrani nastavitve',
    'settings_save_success' => 'Nastavitve, shranjene',

    // App Settings
    'app_customization' => 'Prilagajanje',
    'app_features_security' => 'Lastnosti & Varnost',
    'app_name' => 'Ime aplikacije',
    'app_name_desc' => 'To ime je prikazano v glavi in vsaki sistemski e-pošti.',
    'app_name_header' => 'Prikaži ime v glavi',
    'app_public_access' => 'Javni dostop',
    'app_public_access_desc' => 'Če omogočite to možnost, bo obiskovalcem, ki niso prijavljeni, omogočen dostop do vsebine v BookStack.',
    'app_public_access_desc_guest' => 'Dostop za javne obiskovalce je mogoče nadzorovati prek uporabnika "Gost".',
    'app_public_access_toggle' => 'Dovoli javni dostop',
    'app_public_viewing' => 'Dovoli javni pregled?',
    'app_secure_images' => 'Nalaganje slik z večjo varnostjo',
    'app_secure_images_toggle' => 'Omogoči nalaganje slik z večjo varnostjo',
    'app_secure_images_desc' => 'Zaradi delovanja so vse slike javne. Ta možnost doda naključni, hard-to-guess niz pred Url-ji slike. Prepričajte se, da indeksi imenikov niso omogočeni, da preprečite enostaven dostop.',
    'app_editor' => 'Urejevalnik strani',
    'app_editor_desc' => 'Izberite urejevalnik, ki bodo uporabniki uporabljali za urejanje strani.',
    'app_custom_html' => 'Po meri HTML vsebina glave',
    'app_custom_html_desc' => 'Katerakoli vsebina dodana tukaj, bo vstavljena na dno <head> dela vsake strani. To je uporabno za uporabo prevladujočih slogov ali dodajanje analitike.',
    'app_custom_html_disabled_notice' => 'Po meri narejena HTML glava vsebine je onemogočena na tej strani z nastavitvami, da se zagotovi, da bodo morebitne zrušitve lahko povrnjene.',
    'app_logo' => 'Logotip aplikacije',
    'app_logo_desc' => 'Ta slika bi morala biti 43px visoka. <br>Velike slike bodo pomanjšane.',
    'app_primary_color' => 'Osnovna barva aplikacije',
    'app_primary_color_desc' => 'Nastavi osnovno barvo za aplikacijo vključno s pasico, gumbi in povezavami.',
    'app_homepage' => 'Domača stran aplikacije',
    'app_homepage_desc' => 'Izberi pogled, da se pokaže na domači strani, namesto osnovnega pogleda. Dovoljenja strani so prezrta za izbrane strani.',
    'app_homepage_select' => 'Izberi stran',
    'app_disable_comments' => 'Onemogoči komentarje',
    'app_disable_comments_toggle' => 'Onemogoči komentarje',
    'app_disable_comments_desc' => 'Onemogoči komentarje na vseh straneh v aplikaciji. <br> Obstoječi komentarji se ne prikazujejo.',

    // Color settings
    'content_colors' => 'Barve vsebine',
    'content_colors_desc' => 'Nastavi barve za vse elemente v hierarhiji. Izbor barv s podobno barvno svetlostjo je priporočljivo za osnovne barve za branje.',
    'bookshelf_color' => 'Barva police',
    'book_color' => 'knjiga barv',
    'chapter_color' => 'barvno poglavje',
    'page_color' => 'Stran barv',
    'page_draft_color' => 'stran osnutka barv',

    // Registration Settings
    'reg_settings' => 'registracija',
    'reg_enable' => 'onemogočena registracija',
    'reg_enable_toggle' => 'omogočena registracija',
    'reg_enable_desc' => 'Ko je registracija omogočena, se  bo uporabnik lahko prijavil sam kot uporabnik aplikacije. Po registraciji je uporabniku dodeljena ena prevzeta vloga.',
    'reg_default_role' => 'prevzeta uporabniška vloga po registraciji',
    'reg_enable_external_warning' => 'The option above is ignored while external LDAP or SAML authentication is active. User accounts for non-existing members will be auto-created if authentication, against the external system in use, is successful.',
    'reg_email_confirmation' => 'potrditev e-pošte',
    'reg_email_confirmation_toggle' => 'potrebna potrditev e-pošte',
    'reg_confirm_email_desc' => 'Če uporabite omejitev domene, bo potrebna potrditev e-pošte in ta možnost bo prezrta.',
    'reg_confirm_restrict_domain' => 'omejitev domene',
    'reg_confirm_restrict_domain_desc' => 'Vnesite seznam domen, ločenih z vejico, na katere želite omejiti registracijo. Uporabnik bo prejel e-pošto za potrditev naslova, preden bo omogočena interakcija z aplikacijo. <br> Upoštevajte, da uporabnik po uspešni registrciji lahko spremeni svoj e-poštni naslov.',
    'reg_confirm_restrict_domain_placeholder' => 'Brez omejitev',

    // Maintenance settings
    'maint' => 'Vzdrževanje',
    'maint_image_cleanup' => 'odstrani /počisti slike',
    'maint_image_cleanup_desc' => "Scans page & revision content to check which images and drawings are currently in use and which images are redundant. Ensure you create a full database and image backup before running this.",
    'maint_image_cleanup_ignore_revisions' => 'Ignore images in revisions',
    'maint_image_cleanup_run' => 'zaženite čiščenje',
    'maint_image_cleanup_warning' => ':zaznano je bilo število neuporabljenih slik. Ali si prepričan, da želiš odstraniti izbrane slike?',
    'maint_image_cleanup_success' => ':najdeno in izbrisano je bilo število neuporabljenih slik!',
    'maint_image_cleanup_nothing_found' => 'Najdenih ni bilo nobenih neuporabljenih slik!',
    'maint_send_test_email' => 'Pošlji testno e-pismo',
    'maint_send_test_email_desc' => 'To pošlje testno e-pošto na vaš e-poštni naslov, naveden v vašem profilu.',
    'maint_send_test_email_run' => 'Pošlji preizkusno sporočilo',
    'maint_send_test_email_success' => 'e-pošta poslana na :naslov',
    'maint_send_test_email_mail_subject' => 'Preizkusno sporočilo',
    'maint_send_test_email_mail_greeting' => 'Zdi se, da dostava e-pošte deluje!',
    'maint_send_test_email_mail_text' => 'Čestitke! Če ste prejeli e.poštno obvestilo so bile vaše e-poštne nastavitve pravilno konfigurirane.',

    // Role Settings
    'roles' => 'Vloge',
    'role_user_roles' => 'Pravilo uporabnika',
    'role_create' => 'Izdelaj novo polico',
    'role_create_success' => 'Zapis uspešno ustvarjen',
    'role_delete' => 'Brisanje vloge',
    'role_delete_confirm' => 'Izbrisana bo vloga z imenom \':vlogaImena\'.',
    'role_delete_users_assigned' => 'This role has :userCount users assigned to it. If you would like to migrate the users from this role select a new role below.',
    'role_delete_no_migration' => "Uporabniki niso prenosljivi",
    'role_delete_sure' => 'Ali ste prepričani, da želite izbrisati to element?',
    'role_delete_success' => 'Uspešno izbrisano',
    'role_edit' => 'Uredi zapis',
    'role_details' => 'Podrobnosti zapisa',
    'role_name' => 'Ime zapisa',
    'role_desc' => 'Kratki opis ',
    'role_external_auth_id' => 'Zunanje dokazilo ID',
    'role_system' => 'Sistemska dovoljenja',
    'role_manage_users' => 'Upravljanje uporabnikov',
    'role_manage_roles' => 'Vloga upravljanja & vloga dovoljenj',
    'role_manage_entity_permissions' => 'Upravljanje vseh knjig, poglavij & dovoljenj',
    'role_manage_own_entity_permissions' => 'Manage permissions on own book, chapter & pages',
    'role_manage_page_templates' => 'Manage page templates',
    'role_access_api' => 'Access system API',
    'role_manage_settings' => 'Nastavitve za upravljanje',
    'role_asset' => 'Sistemska dovoljenja',
    'role_asset_desc' => 'These permissions control default access to the assets within the system. Permissions on Books, Chapters and Pages will override these permissions.',
    'role_asset_admins' => 'Admins are automatically given access to all content but these options may show or hide UI options.',
    'role_all' => 'Vse',
    'role_own' => 'Own',
    'role_controlled_by_asset' => '
46/5000
Nadzira ga sredstvo, v katerega so naloženi',
    'role_save' => 'Shrani vlogo',
    'role_update_success' => 'Vloga uspešno posodobljena',
    'role_users' => 'Uporabniki v tej vlogi',
    'role_users_none' => '
V tej vlogi trenutno ni dodeljen noben uporabnik',

    // Users
    'users' => 'Uporabniki',
    'user_profile' => 'Uporabniški profil',
    'users_add_new' => 'Dodaj novega uporabnika',
    'users_search' => 'Išči uporabnike',
    'users_details' => 'Podatki o uporabniku',
    'users_details_desc' => 'Nastavite prikazno ime in e-poštni naslov za tega uporabnika. E-poštni naslov bo uporabljen za prijavo v aplikacijo.',
    'users_details_desc_no_email' => ' Nastavite prikazno ime za tega uporabnika, da ga bodo drugi lahko prepoznali.',
    'users_role' => 'Vloge uporabnika',
    'users_role_desc' => 'Izberi katere vloge bodo dodeljene uporabniku. Če je uporabniku dodeljenih več vlog, se dovoljenja združijo in prejmenjo vse sposobnosti dodeljenih vlog.',
    'users_password' => 'Uporabniško geslo',
    'users_password_desc' => 'Nastavite geslo, ki se uporablja za prijavo v aplikacijo. Dolg mora biti vsaj 6 znakov.',
    'users_send_invite_text' => 'Uporabniku lahko pošljete e-poštno sporočilo s povabilom, ki mu omogoča, da nastavi svoje geslo, ali ga nastavite kar sami.',
    'users_send_invite_option' => 'Pošlji uporabniku e-povabilo',
    'users_external_auth_id' => 'Zunanje dokazilo ID',
    'users_external_auth_id_desc' => 'To je ID, s katerim se ta uporabnik ujema pri komunikaciji z vašim zunanjim sistemom za preverjanje pristnosti.',
    'users_password_warning' => 'Spodaj izpolni le, če želiš spremeniti geslo.',
    'users_system_public' => 'Ta uporabnik predstavlja vse gostujoče uporabnike, ki obiščejo vaš primer. Za prijavo je ni mogoče uporabiti, ampak je dodeljena samodejno.',
    'users_delete' => 'Brisanje uporabnika',
    'users_delete_named' => 'Brisanje uporabnika :userName',
    'users_delete_warning' => 'Iz sistema se bo popolnoma  izbrisal uporabnik z imenom \':userName\'',
    'users_delete_confirm' => 'Ste prepričani, da želite izbrisati izbranega uporabnika?',
    'users_delete_success' => 'Uporabniki uspešno odstranjeni.',
    'users_edit' => 'Uredi uporabnika',
    'users_edit_profile' => 'Uredi profil',
    'users_edit_success' => 'Uporabnik uspešno posodobljen',
    'users_avatar' => 'uporabnikov avatar',
    'users_avatar_desc' => 'Izberi sliko, ki predstavlja uporabnika. Velikost mora biti približno 256px.',
    'users_preferred_language' => 'Izbrani jezik',
    'users_preferred_language_desc' => 'Ta možnost bo spremenila jezik, ki se uporablja za uporabniški vmesnik aplikacije. To ne bo vplivalo na nobeno vsebino, ki jo ustvari uporabnik.',
    'users_social_accounts' => 'Družbene ikone / računi',
    'users_social_accounts_info' => 'Here you can connect your other accounts for quicker and easier login. Disconnecting an account here does not revoke previously authorized access. Revoke access from your profile settings on the connected social account.',
    'users_social_connect' => 'Povežite račun',
    'users_social_disconnect' => 'Odklop računa',
    'users_social_connected' => ':socialAccount  račun je bil uspešno dodan na vašem profilu',
    'users_social_disconnected' => ':socialAccount račun je bil uspešno odstranjen iz vašega profila',
    'users_api_tokens' => 'API žeton',
    'users_api_tokens_none' => 'Nič API žetonov ni bilo ustvarjenih za uporabnika',
    'users_api_tokens_create' => 'Ustvari žeton',
    'users_api_tokens_expires' => 'Poteče',
    'users_api_tokens_docs' => 'API dokumentacija',

    // API Tokens
    'user_api_token_create' => 'Ustvari žeton',
    'user_api_token_name' => 'Ime',
    'user_api_token_name_desc' => 'Give your token a readable name as a future reminder of its intended purpose.',
    'user_api_token_expiry' => 'Datum poteka',
    'user_api_token_expiry_desc' => 'Določi datum izteka uporabnosti žetona. Po tem datumu, zahteve poslane s tem žetonom, ne bodo več delovale. 
Če pustite to polje prazno, bo iztek uporabnosti 100.let .',
    'user_api_token_create_secret_message' => 'Takoj po ustvarjanju tega žetona se ustvari in prikaže "Token ID" "in" Token Secret ". Skrivnost  bo prikazana samo enkrat, zato se pred nadaljevanjem prepričajte o varnosti kopirnega mesta.',
    'user_api_token_create_success' => 'API žeton uspešno ustvarjen',
    'user_api_token_update_success' => 'API žeton uspešno posodobljen',
    'user_api_token' => 'API žeton',
    'user_api_token_id' => 'Žeton ID',
    'user_api_token_id_desc' => 'This is a non-editable system generated identifier for this token which will need to be provided in API requests.',
    'user_api_token_secret' => 'Skrivnost žetona',
    'user_api_token_secret_desc' => 'This is a system generated secret for this token which will need to be provided in API requests. This will only be displayed this one time so copy this value to somewhere safe and secure.',
    'user_api_token_created' => 'Žeton ustvarjen :timeAgo',
    'user_api_token_updated' => 'Žeton posodobljen :timeAgo',
    'user_api_token_delete' => 'Briši žeton',
    'user_api_token_delete_warning' => 'Iz sistema se bo popolnoma  izbrisal API žeton z imenom \':tokenName\' ',
    'user_api_token_delete_confirm' => 'Ali ste prepričani, da želite izbrisati ta API žeton?',
    'user_api_token_delete_success' => 'API žeton uspešno izbrisan',

    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'cs' => 'Česky',
        'da' => 'danščina',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'fr' => 'Français',
        'hu' => 'Magyar',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'nl' => 'Nederlands',
        'pl' => 'Polski',
        'pt_BR' => 'Português do Brasil',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ]
    //!////////////////////////////////
];
