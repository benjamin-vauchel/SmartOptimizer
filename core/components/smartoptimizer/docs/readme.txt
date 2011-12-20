--------------------
SmartOptimizer
--------------------
Version: 1.0.0-beta1
Released: December 20, 2011
Since: December 20, 2011
Author: Benjamin Vauchel <contact@omycode.fr>

This extra is a MODx version of SmartOptimizer by Ali Farhadi. 
"SmartOptimizer (previously named JSmart) is a PHP library that enhances your website performance by optimizing the front end using techniques such as minifying, compression, caching, concatenation and embedding. All the work is done on the fly on demand."
To know more about SmartOptimizer : http://farhadi.ir/works/smartoptimizer

Official Documentation: http://rtfm.modx.com/display/ADDON/SmartOptimizer
Bugs and Feature Requests: https://github.com/omycode/smartoptimizer
Questions: http://forums.modx.com/thread/72679/support-comments-for-smartoptimizer


How to use SmartOptimizer ? 
==================================================

There is 3 different ways to use SmartOptimizer :


#1 : Using the snippet SmartOptimizer
--------------------------------------

Replace :
	<link rel="stylesheet" href="assets/css/file1.css"/>
	<link rel="stylesheet" href="assets/css/file2.css"/>
	<script src="assets/js/file.js"></script>
By :
	<link rel="stylesheet" href="[[SmartOptimizer? &files=`assets/css/file1.css,file2.css`]]"/>
	<script src="[[SmartOptimizer? &files=`assets/js/file.js`]]"></script>
	
	
	
#2 : Using the output filter smartoptimizer
--------------------------------------------

Replace :
	<link rel="stylesheet" href="[[+link_to_css]]"/>
	<script src="[[+link_to_js]]"></script>
By :
	<link rel="stylesheet" href="[[+link_to_css:smartoptimizer]]"/>
	<script src="[[+link_to_js:smartoptimizer]]"></script>



#3 : Using an .htaccess
-------------------------------------------

Add this at the end of your .htaccess : 

<IfModule mod_expires.c>
	<FilesMatch "\.(gif|jpg|jpeg|png|swf|css|js|html?|xml|txt|ico)$">
		ExpiresActive On
		ExpiresDefault "access plus 10 years"
	</FilesMatch>
</IfModule>
<IfModule mod_rewrite.c>
	RewriteEngine On
	
	RewriteCond %{REQUEST_FILENAME} !-f
	RewriteCond %{REQUEST_FILENAME} !-d
	RewriteRule ^(.*\.(js|css))$ assets/components/smartoptimizer/connector.php?$1
	
	<IfModule mod_expires.c>
		RewriteCond %{REQUEST_FILENAME} -f
		RewriteRule ^(.*\.(js|css|html?|xml|txt))$ assets/components/smartoptimizer/connector.php?$1
	</IfModule>

	<IfModule !mod_expires.c>
		RewriteCond %{REQUEST_FILENAME} -f
		RewriteRule ^(.*\.(gif|jpg|jpeg|png|swf|css|js|html?|xml|txt|ico))$ assets/components/smartoptimizer/connector.php?$1
	</IfModule>
</IfModule>
<FilesMatch "\.(gif|jpg|jpeg|png|swf|css|js|html?|xml|txt|ico)$">
	FileETag none
</FilesMatch>

If you enabled friendly URLs, add also : 
	RewriteCond %{REQUEST_FILENAME} !(\.css)$
	RewriteCond %{REQUEST_FILENAME} !(\.js)$
Before :
	RewriteRule ^(.*)$ index.php?q=$1 [L,QSA]

Finally, call your stylesheets and scripts this way : 
	<link rel="stylesheet" href="assets/css/file1.css,file2.css"/>
	<link rel="stylesheet" href="assets/css/file1.css,file2.css"/>

For more details, read documentation : http://rtfm.modx.com/display/ADDON/SmartOptimizer