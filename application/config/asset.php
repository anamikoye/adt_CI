<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Sekati CodeIgniter Asset Helper
 *
 * @package		assets
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
 * @notes		Organized assets in the top level of your CodeIgniter 2.x app:
 *					- assets/
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
| URL Paths to static assets library
|
*/

$config['asset_path'] 		= 	'assets/';
$config['css_path'] 		= 	'assets/template/css/';
$config['download_path'] 	= 	'assets/download/';
$config['less_path'] 		= 	'assets/less/';
$config['js_path'] 			= 	'assets/template/js/';
// $config['img_path'] 		= 	'assets/template/img/';
$config['swf_path'] 		= 	'assets/swf/';
$config['upload_path'] 		= 	'assets/upload/';
$config['xml_path'] 		= 	'assets/xml/';
$config['plugin_path']		=	'assets/plugins/';
$config['files_path']		=	'assets/files/';

$config['css_files']		=	array(
							array('title' => 'bootstrap'	,	'file'	=>	'bootstrap.min.css'),
						    array('title' => 'demo'   		,   'file'  =>  'demo.min.css'),
						    array('title' => 'fonts'		,	'file'	=>	'font-awesome.min.css'),
						    array('title' => 'smartadmin'	,	'file'	=>	'smartadmin-production-plugins.min.css'),
						    array('title' => 'smartadmin'	,	'file'	=>	'smartadmin-production.min.css'),
						    array('title' => 'smartadmin'	,	'file'	=>	'smartadmin-rtl.min.css'),
						    array('title' => 'smartadmin'	,	'file'	=>	'smartadmin-skins.min.css')
									);
$config['js_files']			=	array(
							array('title' => 'jquery'	,	'file'	=>	'libs/jquery-2.1.1.min.js'),
							array('title' => 'jquery'	,	'file'	=>	'libs/jquery-ui-1.10.3.min.js'),
							array('title' => 'bootstrap'	,	'file'	=>	'bootstrap/bootstrap.min.js'),
							array('title' => 'smartchart'	,	'file'	=>	'smart-chat-ui/smart.chat.manager.min.js'),
							array('title' => 'smartchart'	,	'file'	=>	'smart-chat-ui/smart.chat.ui.min.js'),
							array('title' => 'app', 'file' => 'app.min.js'),
							array('title' => 'demo', 'file' => 'demo.min.js'),
							array('title' => 'notification', 'file' => 'SmartNotification.min.js'),
							array('title' => 'plugins', 'file' => 'plugin/bootstrap-slider/bootstrap-slider.min.js'),
							array('title' => 'plugins', 'file' => 'plugin/easy-pie-chart/jquery.easy-pie-chart.min.js'),
							array('title' => 'plugins', 'file' => 'plugin/fastclick/fastclick.min.js'),
							array('title' => 'plugins', 'file' => 'plugin/jquery-touch/jquery.ui.touch-punch.min.js'),
							array('title' => 'plugins', 'file' => 'plugin/jquery-validate/jquery.validate.min.js'),
							array('title' => 'plugins', 'file' => 'plugin/masked-input/jquery.maskedinput.min.js'),
							array('title' => 'plugins', 'file' => 'plugin/msie-fix/jquery.mb.browser.min.js'),
							array('title' => 'plugins', 'file' => 'plugin/pace/pace.min.js'),
							array('title' => 'plugins', 'file' => 'plugin/select2/jquery.select2.min.js'),
							array('title' => 'plugins', 'file' => 'plugin/sparkline/sparkline.min.js'),
							array('title' => 'smartwidgets', 'file' => 'jarvis.widget.min.js'),
							array('title' => 'configjs'	,	'file'	=>	'app.config.js')
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
