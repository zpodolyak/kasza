<?php 

defined( '_JEXEC' ) or die( 'Restricted access' );

$app  = JFactory::getApplication();
$doc  = JFactory::getDocument();
$this->language = $doc->language;
$this->direction = $doc->direction;

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->getCfg('sitename');

// Add JavaScript Frameworks
// JHtml::_('bootstrap.framework');
$doc->addScript('templates/' .$this->template. '/js/ja.js');
$doc->addScript('templates/' .$this->template. '/js/common.js');

// Add Stylesheets
$doc->addStyleSheet('templates/'.$this->template.'/css/template.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/orange.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/kasza.css');

// Load optional RTL Bootstrap CSS
// JHtml::_('bootstrap.loadCss', false, $this->direction);

// Add current user information
$user = JFactory::getUser();

$kt_template_name = 'kaszasok';
$kt_base = JURI::base();
$kt_template_path = $kt_base.'templates/'.$kt_template_name;
$kt_header_img =  $kt_base.'images/headers/';

// auto collapse divs functions 
$ja_left = $this->countModules('left');
$ja_right = $this->countModules('right');

if ( $ja_left && $ja_right ) 
{
	$divid = '';
} 
elseif ( $ja_left ) 
{ 
	$divid = '-fr';
}
elseif ( $ja_right ) 
{
	$divid = '-fl';
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
   
 <head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="google-site-verification" content="googlef37560218768ff04.html" />
	<jdoc:include type="head" />

	<?php // TODOZP: if ( $my->id && $_REQUEST['option'] == 'com_kaszasokadmin' ) { initEditor();} ?>

	<!--[if lt IE 9]>
		<script src="<?php echo $this->baseurl; ?>/media/jui/js/html5.js"></script>
	<![endif]-->
</head>


<body id="bd" class="wide fs3">
<div id="ja-wrapper">
<div id="ja-wrapper-inner">

<!-- BEGIN: HEADER -->
<div id="ja-headerwrap">
	<div id="ja-header" class="clearfix">
		<h1>
			<a href="<?php echo $kt_base; ?>">
				<img id="headerpic" src="<?php echo $kt_header_img;  ?>" alt="<?php echo $sitename; ?>" />
			</a>
		</h1>
	</div>
</div>
<!-- END: HEADER -->

<div id="ja-containerwrap">
	<div id="ja-container<?php echo $divid ?>" class="clearfix">
	
		<!-- BEGIN: CONTENT -->
		<div id="ja-mainbody<?php echo $divid; ?>">
		<a name="Content" id="Content"></a>
		<div id="ja-contentwrap">
			<div id="ja-content">
				<jdoc:include type="component" />
			</div>
		</div>
	
		<?php if ($ja_right) { ?>
		<!-- BEGIN: RIGHT COLUMN -->
		<div id="ja-rightcol">
			<div id="ja-rightcol-inner">
				<jdoc:include type="modules" name="right" style="none" />
			</div>
		</div>
		<!-- END: RIGHT COLUMN -->
		<?php } ?>

		</div>
		<!-- END: CONTENT -->
	
		<?php if ($ja_left) { ?>
		<!-- BEGIN: LEFT COLUMN -->
			<div id="ja-leftcol">
				<jdoc:include type="modules" name="weekly_banner" style="none" />
				<jdoc:include type="modules" name="left" style="menu" headerLevel="3" />
			</div>
		<br />
		<!-- END: LEFT COLUMN -->
		<?php } ?>
	</div>
</div>

<!-- BEGIN: FOOTER -->
<div id="ja-footerwrap">
<div id="ja-footer">
	<jdoc:include type="modules" name="login" style="none" />
	<div id="ja-sublogo">
		<a href="<?php echo $kt_base;?>"><?php echo JText::_('TPL_KASZASOK_TOHOME'); ?></a>
		<br/>
		<a hef="#" id="showpopup"><?php echo JText::_('TPL_KASZASOK_LOGINOUT'); ?></a>
	</div>
	<p id="ja-bottomline">
		Copyright &copy; <?php echo '2005 - ' . date('Y') . ' ' . $sitename;?>.
		<br/>
	</p>
	<div id="ja-cert">
		<a href="<?php echo $kt_base; ?>index.php?option=com_rss&amp;feed=RSS2.0&amp;no_html=1" target="_blank" title="RSS 2.0" style="text-decoration: none;">
			<img src="<?php echo $kt_template_path;?>/images/but-rss.gif" alt="RSS 2.0" />
		</a>
		<a href="http://jigsaw.w3.org/css-validator/validator?uri=<?php echo $this->baseurl; ?>" target="_blank" title="Our site is valid CSS" style="text-decoration: none;">
			<img src="<?php echo $kt_template_path;?>/images/but-css-orange.gif" alt="Our site is valid CSS" />
		</a>
		<a href="http://validator.w3.org/check/referer" target="_blank" title="Our site is valid XHTML 1.0 Transitional" style="text-decoration: none;">
			<img src="<?php echo $kt_template_path;?>/images/but-xhtml10-orange.gif" alt="Our site is valid XHTML 1.0 Transitional" />
		</a>
		<a href="#Top" title="Go to top" style="text-decoration: none;">
			<img src="<?php echo $kt_template_path;?>/images/but-top-orange.gif" alt="Go to top!" />
		</a>
	</div>	
</div>
</div>
<!-- END: FOOTER -->
</div>
</div>
<jdoc:include type="modules" name="debug" style="none" />
</body>
</html>
