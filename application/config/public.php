<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Sekati CodeIgniter Asset Helper
 *
 * @package		public
 * @author		</Name>
 * @copyright	Copyright (c) 2013, Sekati LLC.
 * @license		http://www.opensource.org/licenses/mit-license.php
 * @link		http://sekati.com
 * @version		v1.2.7
 * @filesource
 *
 * @usage 		$autoload['config'] = array('asset');
 * 				$autoload['helper'] = array('asset');
 * @example		<img src="<?=asset_url();?>imgs/photo.jpg" />
 * @example		<?=img('photo.jpg')?>
 *
 * @install		Copy config/asset.php to your CI application/config directory
 *				& helpers/asset_helper.php to your application/helpers/ directory.
 * 				Then add both files as autoloads in application/autoload.php:
 *
 *				$autoload['config'] = array('asset');
 * 				$autoload['helper'] = array('asset');
 *
 *				Autoload CodeIgniter's url_helper in `application/config/autoload.php`:
 *				$autoload['helper'] = array('url');
 *
 * @notes		Organized public in the top level of your CodeIgniter 2.x app:
 *					- public/
 *						-- css/
 *						-- download/
 *						-- img/
 *						-- js/
 *						-- less/
 *						-- swf/
 *						-- upload/
 *						-- xml/
 *					- application/
 * 						-- config/asset.php
 * 						-- helpers/asset_helper.php
 */

/*
|--------------------------------------------------------------------------
| Custom Asset Paths for asset_helper.php
|--------------------------------------------------------------------------
|
| URL Paths to static public library
|
*/

$config['asset_path'] 		= 	'public/';
$config['css_path'] 		= 	'public/template/css/';
$config['download_path'] 	= 	'public/download/';
$config['less_path'] 		= 	'public/less/';
$config['js_path'] 			= 	'public/template/js/';
$config['img_path'] 		= 	'pulic/template/img/';
$config['swf_path'] 		= 	'public/swf/';
$config['upload_path'] 		= 	'public/upload/';
$config['xml_path'] 		= 	'public/xml/';
$config['plugin_path']		=	'public/plugins/';
$config['files_path']		=	'public/files/';

$config['css_files']		=	array(

							array('title' => 'bootstrap'	,	'file'	=>	'bootstrap.min.css'),
						    array('title' => 'demo'   		,   'file'  =>  'demo.min.css'),
						    array('title' => 'fonts'		,	'file'	=>	'font-awesome.min.css'),,
						    array('title' => 'smartadmin'	,	'file'	=>	'smartadmin-production.min.css'),
						    array('title' => 'smartadmin'	,	'file'	=>	'smartadmin-production-plugins.min.css'),
						    array('title' => 'smartadmin'	,	'file'	=>	'smartadmin-rtl.min.css'),
						    array('title' => 'smartadmin'	,	'file'	=>	'smartadmin-skins.min.css')
									);
$config['js_files']			=	array(
									array('')
								);
$config['plugin_js_files']	=	array(

									array('')
								);	
$config['plugin_css_files']	=	array(
									array('')

								);
$config['plugin_php_files']	=	array(
								array('')
								);
/* End of file asset.php */
