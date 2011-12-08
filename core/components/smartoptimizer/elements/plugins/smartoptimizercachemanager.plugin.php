<?php
/**
 * SmartOptimizer SmartOptimizerCacheManager plugin
 *
 * Copyright 2011 Benjamin Vauchel <contact@omycode.fr>
 *
 * @author Benjamin Vauchel <contact@omycode.fr>
 * @version Version 1.0.0 Beta-1
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
 * MODx SmartOptimizer SmartOptimizerCacheManager plugin
 *
 * Description: Handles cache cleaning when clearing the site cache.
 * Events: OnSiteRefresh
 *
 * @package smartoptimizer
 *
 * @property
 */

switch ($modx->event->name) 
{
    case 'OnSiteRefresh':
        $cachePath = $modx->getOption('smartoptimizer.cache_path', null, $modx->getOption('assets_path').'components/smartoptimizer/cache');

        /* clear local cache */
        if (!empty($cachePath)) {
            foreach (new DirectoryIterator($cachePath) as $file) {
                if (!$file->isFile()) continue;
                @unlink($file->getPathname());
            }
        }

        break;
}