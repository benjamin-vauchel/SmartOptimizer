<?php
/** Array of system settings for SmartOptimizer package
 * @package smartoptimizer
 * @subpackage build
 */


/* This section is ONLY for new System Settings to be added to
 * The System Settings grid. If you include existing settings,
 * they will be removed on uninstall. Existing setting can be
 * set in a script resolver (see install.script.php).
 */
$settings = array();

/* The first three are new settings */
$settings['smartoptimizer.base_dir']= $modx->newObject('modSystemSetting');
$settings['smartoptimizer.base_dir']->fromArray(array (
    'key' => 'smartoptimizer.base_dir',
    'value' => '',
    'namespace' => 'smartoptimizer',
    'area' => 'smartoptimizer',
), '', true, true);

$settings['smartoptimizer.charset']= $modx->newObject('modSystemSetting');
$settings['smartoptimizer.charset']->fromArray(array (
    'key' => 'smartoptimizer.charset',
    'value' => 'utf-8',
    'namespace' => 'smartoptimizer',
    'area' => 'smartoptimizer',
), '', true, true);

$settings['smartoptimizer.debug']= $modx->newObject('modSystemSetting');
$settings['smartoptimizer.debug']->fromArray(array (
    'key' => 'smartoptimizer.debug',
    'value' => '0',
    'xtype' => 'combo-boolean',
    'namespace' => 'smartoptimizer',
    'area' => 'smartoptimizer',
), '', true, true);

$settings['smartoptimizer.gzip']= $modx->newObject('modSystemSetting');
$settings['smartoptimizer.gzip']->fromArray(array (
    'key' => 'smartoptimizer.gzip',
    'value' => '1',
    'xtype' => 'combo-boolean',
    'namespace' => 'smartoptimizer',
    'area' => 'gzip',
), '', true, true);

$settings['smartoptimizer.compression_level']= $modx->newObject('modSystemSetting');
$settings['smartoptimizer.compression_level']->fromArray(array (
    'key' => 'smartoptimizer.compression_level',
    'value' => '9',
    'namespace' => 'smartoptimizer',
    'area' => 'gzip',
), '', true, true);

$settings['smartoptimizer.gzip_exceptions']= $modx->newObject('modSystemSetting');
$settings['smartoptimizer.gzip_exceptions']->fromArray(array (
    'key' => 'smartoptimizer.gzip_exceptions',
    'value' => 'gif,jpeg,jpg,png,swf',
    'namespace' => 'smartoptimizer',
    'area' => 'gzip',
), '', true, true);

$settings['smartoptimizer.minify']= $modx->newObject('modSystemSetting');
$settings['smartoptimizer.minify']->fromArray(array (
    'key' => 'smartoptimizer.minify',
    'value' => '1',
    'xtype' => 'combo-boolean',
    'namespace' => 'smartoptimizer',
    'area' => 'minify',
), '', true, true);

$settings['smartoptimizer.concatenate']= $modx->newObject('modSystemSetting');
$settings['smartoptimizer.concatenate']->fromArray(array (
    'key' => 'smartoptimizer.concatenate',
    'value' => '1',
    'xtype' => 'combo-boolean',
    'namespace' => 'smartoptimizer',
    'area' => 'concatenate',
), '', true, true);

$settings['smartoptimizer.separator']= $modx->newObject('modSystemSetting');
$settings['smartoptimizer.separator']->fromArray(array (
    'key' => 'smartoptimizer.separator',
    'value' => ',',
    'namespace' => 'smartoptimizer',
    'area' => 'concatenate',
), '', true, true);

$settings['smartoptimizer.embed']= $modx->newObject('modSystemSetting');
$settings['smartoptimizer.embed']->fromArray(array (
    'key' => 'smartoptimizer.embed',
    'value' => '0',
    'xtype' => 'combo-boolean',
    'namespace' => 'smartoptimizer',
    'area' => 'embed',
), '', true, true);

$settings['smartoptimizer.embed_max_size']= $modx->newObject('modSystemSetting');
$settings['smartoptimizer.embed_max_size']->fromArray(array (
    'key' => 'smartoptimizer.embed_max_size',
    'value' => '5120',
    'namespace' => 'smartoptimizer',
    'area' => 'embed',
), '', true, true);

$settings['smartoptimizer.embed_exceptions']= $modx->newObject('modSystemSetting');
$settings['smartoptimizer.embed_exceptions']->fromArray(array (
    'key' => 'smartoptimizer.embed_exceptions',
    'value' => 'htc',
    'namespace' => 'smartoptimizer',
    'area' => 'embed',
), '', true, true);

$settings['smartoptimizer.server_cache']= $modx->newObject('modSystemSetting');
$settings['smartoptimizer.server_cache']->fromArray(array (
    'key' => 'smartoptimizer.server_cache',
    'value' => '1',
    'xtype' => 'combo-boolean',
    'namespace' => 'smartoptimizer',
    'area' => 'cache',
), '', true, true);

$settings['smartoptimizer.server_cache_check']= $modx->newObject('modSystemSetting');
$settings['smartoptimizer.server_cache_check']->fromArray(array (
    'key' => 'smartoptimizer.server_cache_check',
    'value' => '1',
    'xtype' => 'combo-boolean',
    'namespace' => 'smartoptimizer',
    'area' => 'cache',
), '', true, true);

$settings['smartoptimizer.cache_dir']= $modx->newObject('modSystemSetting');
$settings['smartoptimizer.cache_dir']->fromArray(array (
    'key' => 'smartoptimizer.cache_dir',
    'value' => '',
    'namespace' => 'smartoptimizer',
    'area' => 'cache',
), '', true, true);

$settings['smartoptimizer.cache_prefix']= $modx->newObject('modSystemSetting');
$settings['smartoptimizer.cache_prefix']->fromArray(array (
    'key' => 'smartoptimizer.cache_prefix',
    'value' => 'so_',
    'namespace' => 'smartoptimizer',
    'area' => 'cache',
), '', true, true);

$settings['smartoptimizer.client_cache']= $modx->newObject('modSystemSetting');
$settings['smartoptimizer.client_cache']->fromArray(array (
    'key' => 'smartoptimizer.client_cache',
    'value' => '1',
    'xtype' => 'combo-boolean',
    'namespace' => 'smartoptimizer',
    'area' => 'cache',
), '', true, true);

$settings['smartoptimizer.client_cache_check']= $modx->newObject('modSystemSetting');
$settings['smartoptimizer.client_cache_check']->fromArray(array (
    'key' => 'smartoptimizer.client_cache_check',
    'value' => '0',
    'xtype' => 'combo-boolean',
    'namespace' => 'smartoptimizer',
    'area' => 'cache',
), '', true, true);

$settings['smartoptimizer.mime_types']= $modx->newObject('modSystemSetting');
$settings['smartoptimizer.mime_types']->fromArray(array (
    'key' => 'smartoptimizer.mime_types',
    'value' => '{"js":"text\/javascript","css":"text\/css","htm":"text\/html","html":"text\/html","xml":"text\/xml","txt":"text\/plain","jpg":"image\/jpeg","jpeg":"image\/jpeg","png":"image\/png","gif":"image\/gif","swf":"application\/x-shockwave-flash","ico":"image\/x-icon"}',
    'namespace' => 'smartoptimizer',
    'area' => 'smartoptimizer',
), '', true, true);

return $settings;