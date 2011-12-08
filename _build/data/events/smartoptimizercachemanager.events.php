<?php
/**
 * Array of plugin events for SmartOptimizer package
 *
 * @package smartoptimizer
 * @subpackage build
 */
$events = array();

$events['OnSiteRefresh']= $modx->newObject('modPluginEvent');
$events['OnSiteRefresh']->fromArray(array(
    'event' => 'OnSiteRefresh',
    'priority' => 0,
    'propertyset' => 0,
),'',true,true);

return $events;