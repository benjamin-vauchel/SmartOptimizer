<?php
/**
 * SmartOptimizer
 * Copyright 2011 Benjamin Vauchel <contact@omycode.fr>
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
 * SmartOptimizer; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package SmartOptimizer
 * @author Benjamin Vauchel <contact@omycode.fr>
 *
 * @version Version 1.0.0-beta1
 * 12/8/11
 *
 * This snippet return the URL to the SmartOptimizer connector for CSS or JS files
 *

/**
  @version Version 1.0.0-beta1

 /** Example properties
 * &package SmartOptimizer
 *
 *  Required Properties:
 *    @property input - (string) Url to JS or CSS files. Examples: assets/css/main.css or assets/css/main.css,index.css. Required if property files not used.
 *    @property files - (string) Url to JS or CSS files. Examples: assets/css/main.css or assets/css/main.css,index.css. Required if property input not used.
 *
 */
 
$files = (!empty($input) ? $input : (!empty($files) ? $files : ''));

return $modx->getOption('assets_url').'components/smartoptimizer/connector.php?'.urlencode($files);

?>
