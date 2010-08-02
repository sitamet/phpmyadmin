<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * List of avaible forms, each form is described as an array of fields to display.
 * Fields MUST have their counterparts in the $cfg array.
 *
 * There are two possible notations:
 * $forms['Form group']['Form name'] = array('Servers' => array(1 => array('host')));
 * can be written as
 * $forms['Form group']['Form name'] = array('Servers/1/host');
 *
 * You can assign default values set by special button ("set value: ..."), eg.:
 * 'Servers/1/pmadb' => 'phpmyadmin'
 *
 * To group options, use:
 * ':group:' . __('group name') // just define a group
 * or
 * 'option' => ':group' // group starting from this option
 * End group blocks with:
 * ':group:end'
 *
 * @package phpMyAdmin-setup
 */

$forms = array();
$forms['_config.php'] = array(
    'DefaultLang',
    'ServerDefault');
$forms['Servers']['Server'] = array('Servers' => array(1 => array(
    'verbose',
    'host',
    'port',
    'socket',
    'ssl',
    'connect_type',
    'extension',
    'compress',
    'nopassword')));
$forms['Servers']['Server_auth'] = array('Servers' => array(1 => array(
    'auth_type',
    ':group:' . __('Config authentication'),
    'user',
    'password',
    ':group:' . __('Cookie authentication'),
    'auth_swekey_config' => './swekey.conf',
    ':group:' . __('HTTP authentication'),
    'auth_http_realm',
    ':group:' . __('Signon authentication'),
    'SignonSession',
    'SignonURL',
    'LogoutURL')));
$forms['Servers']['Server_config'] = array('Servers' => array(1 => array(
    'only_db',
    'hide_db',
    'AllowRoot',
    'AllowNoPassword',
    'DisableIS',
    'AllowDeny/order',
    'AllowDeny/rules',
    'ShowDatabasesCommand',
    'CountTables')));
$forms['Servers']['Server_pmadb'] = array('Servers' => array(1 => array(
    'pmadb' => 'phpmyadmin',
    'controluser',
    'controlpass',
    'verbose_check',
    'bookmarktable' => 'pma_bookmark',
    'relation' => 'pma_relation',
    'userconfig' => 'pma_userconfig',
    'table_info' => 'pma_table_info',
    'column_info' => 'pma_column_info',
    'history' => 'pma_history',
    'tracking' => 'pma_tracking',
    'table_coords' => 'pma_table_coords',
    'pdf_pages' => 'pma_pdf_pages',
    'designer_coords' => 'pma_designer_coords')));
$forms['Servers']['Server_tracking'] = array('Servers' => array(1 => array(
    'tracking_version_auto_create',
    'tracking_default_statements',
    'tracking_add_drop_view',
    'tracking_add_drop_table',
    'tracking_add_drop_database',
)));
$forms['Features']['Import_export'] = array(
    'UploadDir',
    'SaveDir',
    'RecodingEngine' => ':group',
    'IconvExtraParams',
    ':group:end',
    'ZipDump',
    'GZipDump',
    'BZipDump',
    'CompressOnFly');
$forms['Features']['Security'] = array(
    'blowfish_secret',
    'ForceSSL',
    'CheckConfigurationPermissions',
    'TrustedProxies',
    'AllowUserDropDatabase',
    'AllowArbitraryServer',
    'LoginCookieRecall',
    'LoginCookieValidity',
    'LoginCookieStore',
    'LoginCookieDeleteAll');
$forms['Features']['Page_titles'] = array(
    'TitleDefault',
    'TitleTable',
    'TitleDatabase',
    'TitleServer');
$forms['Features']['Warnings'] = array(
    'PmaNoRelation_DisableWarning',
    'SuhosinDisableWarning',
    'McryptDisableWarning');
$forms['Features']['Developer'] = array(
    'UserprefsDeveloperTab',
    'Error_Handler/display',
    'Error_Handler/gather',
    'DBG/sql',
    'DBG/php');
$forms['Features']['Other_core_settings'] = array(
    'NaturalOrder',
    'InitialSlidersState',
    'ErrorIconic',
    'ReplaceHelpImg',
    'MaxDbList',
    'MaxTableList',
    'OBGzip',
    'PersistentConnections',
    'ExecTimeLimit',
    'MemoryLimit',
    'SkipLockedTables',
    'UseDbSearch',
    'AllowThirdPartyFraming');
$forms['Sql_queries']['Sql_queries'] = array(
    'ShowSQL',
    'Confirm',
    'QueryHistoryDB',
    'QueryHistoryMax',
    'IgnoreMultiSubmitErrors',
    'VerboseMultiSubmit',
    'MaxCharactersInDisplayedSQL',
    'EditInWindow',
    //'QueryWindowWidth', // overridden in theme
    //'QueryWindowHeight',
    'QueryWindowDefTab');
$forms['Sql_queries']['Sql_box'] = array('SQLQuery' => array(
    'Edit',
    'Explain',
    'ShowAsPHP',
    'Validate',
    'Refresh'));
$forms['Sql_queries']['Sql_validator'] = array('SQLValidator' => array(
    'use',
    'username',
    'password'));
$forms['Left_frame']['Left_frame'] = array(
    'LeftFrameLight',
    'LeftDisplayLogo',
    'LeftLogoLink',
    'LeftLogoLinkWindow',
    'LeftPointerEnable');
$forms['Left_frame']['Left_servers'] = array(
    'LeftDisplayServers',
    'DisplayServersList');
$forms['Left_frame']['Left_databases'] = array(
    'DisplayDatabasesList',
    'LeftFrameDBTree',
    'LeftFrameDBSeparator',
    'ShowTooltipAliasDB');
$forms['Left_frame']['Left_tables'] = array(
    'LeftDefaultTabTable',
    'LeftFrameTableSeparator',
    'LeftFrameTableLevel',
    'ShowTooltip',
    'ShowTooltipAliasTB');
$forms['Main_frame']['Startup'] = array(
    'MainPageIconic',
    'ShowCreateDb' => ':group',
    'SuggestDBName',
    ':group:end',
    'ShowStats',
    'ShowServerInfo',
    'ShowPhpInfo',
    'ShowChgPassword');
$forms['Main_frame']['Browse'] = array(
    'NavigationBarIconic',
    'ShowAll',
    'MaxRows',
    'Order',
    'BrowsePointerEnable',
    'BrowseMarkerEnable',
    'RepeatCells',
    'LimitChars',
    'ModifyDeleteAtLeft',
    'ModifyDeleteAtRight',
    'DefaultDisplay');
$forms['Main_frame']['Edit'] = array(
    'ProtectBinary',
    'ShowFunctionFields',
    'ShowFieldTypesInDataEditView',
    'CharEditing',
    'CharTextareaCols',
    'CharTextareaRows',
    'TextareaCols',
    'TextareaRows',
    'LongtextDoubleTextarea',
    'InsertRows',
    'ForeignKeyDropdownOrder',
    'ForeignKeyMaxLimit',
    'DefaultPropDisplay');
$forms['Main_frame']['Tabs'] = array(
    'LightTabs',
    'PropertiesIconic',
    'DefaultTabServer',
    'DefaultTabDatabase',
    'DefaultTabTable',
	'QueryWindowDefTab');
$forms['Import']['Import_defaults'] = array('Import' => array(
    'format',
    'charset',
    'allow_interrupt',
    'skip_queries'));
$forms['Import']['Sql'] = array('Import' => array(
    'sql_compatibility',
    'sql_no_auto_value_on_zero'));
$forms['Import']['Csv'] = array('Import' => array(
    ':group:' . __('CSV'),
    'csv_replace',
    'csv_ignore',
    'csv_terminated',
    'csv_enclosed',
    'csv_escaped',
    'csv_col_names',
    ':group:' . __('CSV using LOAD DATA'),
    'ldi_replace',
    'ldi_ignore',
    'ldi_terminated',
    'ldi_enclosed',
    'ldi_escaped',
    'ldi_local_option'));
$forms['Import']['Microsoft_Office'] = array('Import' => array(
    ':group:' . __('Excel 97-2003 XLS Workbook'),
    'xls_col_names',
    ':group:' . __('Excel 2007 XLSX Workbook'),
    'xlsx_col_names'));
$forms['Import']['Open_Document'] = array('Import' => array(
    ':group:' . __('Open Document Spreadsheet'),
    'ods_col_names',
    'ods_empty_rows',
    'ods_recognize_percentages',
    'ods_recognize_currency'));
$forms['Export']['Export_defaults'] = array('Export' => array(
    'format',
    'compression',
    'charset',
    'asfile' => ':group',
    'onserver',
    'onserver_overwrite',
    ':group:end',
    'remember_file_template',
    'file_template_table',
    'file_template_database',
    'file_template_server'));
$forms['Export']['Sql'] = array('Export' => array(
    'sql_include_comments',
    'sql_use_transaction',
    'sql_disable_fk',
    'sql_compatibility',
    ':group:' . __('Database export options'),
    'sql_drop_database',
    'sql_structure' => ':group',
    'sql_drop_table',
    'sql_if_not_exists',
    'sql_auto_increment',
    'sql_backquotes',
    'sql_procedure_function',
    ':group:' . __('Add into comments'),
    'sql_dates',
    'sql_relation',
    'sql_mime',
    'sql_data' => ':group',
    'sql_columns',
    'sql_extended',
    'sql_max_query_size',
    'sql_delayed',
    'sql_ignore',
    'sql_hex_for_blob',
    'sql_utc_time',
    'sql_type'));
$forms['Export']['CodeGen'] = array('Export' => array(
    'codegen_format'));
$forms['Export']['Csv'] = array('Export' => array(
    ':group:' . __('CSV'),
    'csv_separator',
    'csv_enclosed',
    'csv_escaped',
    'csv_terminated',
    'csv_null',
    'csv_removeCRLF',
    'csv_columns',
    ':group:' . __('CSV for MS Excel'),
    'excel_null',
    'excel_removeCRLF',
    'excel_columns',
    'excel_edition'));
$forms['Export']['Latex'] = array('Export' => array(
    'latex_caption',
    'latex_structure' => ':group',
    'latex_structure_caption',
    'latex_structure_continued_caption',
    'latex_structure_label',
    'latex_relation',
    'latex_comments',
    'latex_mime',
    'latex_data' => ':group',
    'latex_columns',
    'latex_data_caption',
    'latex_data_continued_caption',
    'latex_data_label',
    'latex_null'));
$forms['Export']['Microsoft_Office'] = array('Export' => array(
    ':group:' . __('Excel 97-2003 XLS Workbook'),
    'xls_null',
    'xls_columns',
    ':group:' . __('Excel 2007 XLSX Workbook'),
    'xlsx_null',
    'xlsx_columns',
    ':group:' . __('Microsoft Word 2000'),
    'htmlword_structure',
    'htmlword_data',
    'htmlword_null',
    'htmlword_columns'));
$forms['Export']['Open_Document'] = array('Export' => array(
    ':group:' . __('Open Document Spreadsheet'),
    'ods_null',
    'ods_columns',
    ':group:' . __('Open Document Text'),
    'odt_structure' => ':group',
    'odt_relation',
    'odt_comments',
    'odt_mime',
    'odt_data' => ':group',
    'odt_columns',
    'odt_null'));
$forms['Export']['Texy'] = array('Export' => array(
    'texytext_structure',
    'texytext_data' => ':group',
    'texytext_null',
    'texytext_columns'));
?>