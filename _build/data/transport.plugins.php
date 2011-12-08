<?php
/**
 * SmartOptimizer transport plugins
 * Copyright 2011 Benjamin Vauchel <contact@omycode.fr>
 * @author Benjamin Vauchel <contact@omycode.fr>
 * 12/8/11
 *
 * SmartOptimizer is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * SmartOptimizer is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * SmartOptimizer; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package smartoptimizer
 */
/**
 * Description:  Array of plugin objects for SmartOptimizer package
 * @package smartoptimizer
 * @subpackage build
 */

if (! function_exists('getPluginContent')) {
    function getpluginContent($filename) {
        $o = file_get_contents($filename);
        $o = str_replace('<?php','',$o);
        $o = str_replace('?>','',$o);
        $o = trim($o);
        return $o;
    }
}
$plugins = array();

$plugins[1]= $modx->newObject('modplugin');
$plugins[1]->fromArray(array(
    'id' => 1,
    'name' => 'SmartOptimizerCacheManager',
    'description' => 'Handles cache cleaning when clearing the site cache.',
    'plugincode' => getPluginContent($sources['source_core'].'/elements/plugins/smartoptimizercachemanager.plugin.php'),
),'',true,true);

return $plugins;