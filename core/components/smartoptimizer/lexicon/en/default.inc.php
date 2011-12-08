<?php
/**
 * SmartOptimizer
 *
 * 
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
 * @package smartoptimizer
 */
/**
 * Default Lexicon Topic
 *
 * @package smartoptimizer
 * @subpackage lexicon
 */

/* smartoptimizer example strings -
 * These would be used for messages displayed by your component
 * (e.g. error messages, prompts, etc.).
 */
$_lang['smartoptimizer'] = 'SmartOptimizer';

/* These are for any new system settings your component creates */
$_lang['setting_smartoptimizer.base_dir'] = 'Base path';
$_lang['setting_smartoptimizer.base_dir_desc'] = 'Optional. An absolute path to the base directory. By default the modx base path is used. The base path is preprend to the URL of CSS or JS files to get the real path of that files. Example : If the URL to CSS is assets/css/screen.css and base path is /my/base/path/, the real path will be /my/base/path/assets/css/screen.css. There is no need to specify base path if you use modx base relative CSS and JS links.';

$_lang['setting_smartoptimizer.charset'] = 'Charset';
$_lang['setting_smartoptimizer.charset_desc'] = 'Encoding of your JS and CSS files. (utf-8 or iso-8859-1)';

$_lang['setting_smartoptimizer.debug'] = 'Debug';
$_lang['setting_smartoptimizer.debug_desc'] = 'By setting this option to true, in case of error a message containing error details will be alerted. So it will be very helpful setting this option to true if SmartOptimizer doesn\'t work for you (that it may be due to a misconfiguration or bad installation).';

$_lang['setting_smartoptimizer.gzip'] = 'Gzip';
$_lang['setting_smartoptimizer.gzip_desc'] = 'Use this to set gzip compression On or Off';

$_lang['setting_smartoptimizer.compression_level'] = 'Compression level';
$_lang['setting_smartoptimizer.compression_level_desc'] = 'Use this to set gzip compression level (an integer between 1 and 9)';

$_lang['setting_smartoptimizer.gzip_exceptions'] = 'Gzip exceptions';
$_lang['setting_smartoptimizer.gzip_exceptions_desc'] = 'These types of files will not be gzipped nor minified';

$_lang['setting_smartoptimizer.minify'] = 'Minify';
$_lang['setting_smartoptimizer.minify_desc'] = 'Use this to set Minifier On or Off';

$_lang['setting_smartoptimizer.concatenate'] = 'Concatenate';
$_lang['setting_smartoptimizer.concatenate_desc'] = 'Use this to set file concatenation On or Off. To use concatenation feature, the files should be placed in the same place. and links to the files should be like the following examples: <link rel="stylesheet" href="path/to/file/cssfile1.css,cssfile2.css,cssfile3.css" /> or <script src="path/to/file/jsfile1.js,jsfile2.js,jsfile3.js"></script>';

$_lang['setting_smartoptimizer.separator'] = 'Concatenation separator';
$_lang['setting_smartoptimizer.separator_desc'] = 'Separator for files to be concatenated. By default : ,';

$_lang['setting_smartoptimizer.embed'] = 'Embed files';
$_lang['setting_smartoptimizer.embed_desc'] = 'Specifies whether to emebed files included in css files using the data URI scheme or not ';

$_lang['setting_smartoptimizer.embed_max_size'] = 'Embed max filesize';
$_lang['setting_smartoptimizer.embed_max_size_desc'] = 'The maximum size of an embedded file. (use 0 for unlimited size)';

$_lang['setting_smartoptimizer.embed_exceptions'] = 'Embed exceptions';
$_lang['setting_smartoptimizer.embed_exceptions_desc'] = 'These types of files will not be embedded';

$_lang['setting_smartoptimizer.server_cache'] = 'Sever cache';
$_lang['setting_smartoptimizer.server_cache_desc'] = 'To set server-side cache On or Off';

$_lang['setting_smartoptimizer.server_cache_check'] = 'Check server cache';
$_lang['setting_smartoptimizer.server_cache_check_desc'] = 'If you change it to false, the files will not be checked for modifications and always cached files will be used (for better performance)';

$_lang['setting_smartoptimizer.cache_dir'] = 'Cache path';
$_lang['setting_smartoptimizer.cache_dir_desc'] = 'Optional. An absolute path to cache directory.';

$_lang['setting_smartoptimizer.cache_prefix'] = 'Prefix';
$_lang['setting_smartoptimizer.cache_prefix_desc'] = 'Prefix for cache files. By default : so_';

$_lang['setting_smartoptimizer.client_cache'] = 'Client cache';
$_lang['setting_smartoptimizer.client_cache_desc'] = 'To set client-side cache On or Off';

$_lang['setting_smartoptimizer.client_cache_check'] = 'Check client cache';
$_lang['setting_smartoptimizer.client_cache_check_desc'] = 'Setting this to false will force the browser to use cached files without checking for changes.';

$_lang['setting_smartoptimizer.mime_types'] = 'Mime Types';
$_lang['setting_smartoptimizer.mime_types'] = 'Mime types of files being optimized.';

