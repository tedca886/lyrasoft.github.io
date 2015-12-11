<?php
/**
 * Part of ihealth project. 
 *
 * @copyright  Copyright (C) 2011 - 2014 SMS Taiwan, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

$tpl = \TplLyrasoft\LyrasoftTemplate::getInstance();

$tmpl = $displayData['tmpl'];

$layout = $tpl::isHome() ? 'landing' : $tpl->getTemplate()->params->get('layout', 'default');

\Windwalker\Helper\ProfilerHelper::mark('Template Layout: ' . $layout, 'Application');

?><!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->tpl->language; ?>" lang="<?php echo $this->tpl->language; ?>" dir="<?php echo $this->tpl->direction; ?>">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="<?php echo $this->tpl->baseurl ?>/templates/<?php echo $this->tpl->template; ?>/images/favicon.ico" type="image/x-icon">
<jdoc:include type="head" />

    <!-- Typekit -->
    <script>
        (function(d) {
            var config = {
                kitId: 'ain2eby',
                scriptTimeout: 3000,
                async: true
            },
            h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
        })(document);
    </script>
</head>
<body class="<?php echo $tpl::getOs(); ?> tmpl-layout-<?php echo str_replace('.', '-', $layout); ?> <?php echo \Astra\Helper\StyleHelper::getBodyClass(); ?> <?php echo \Astra\Helper\StyleHelper::getPathClass(); ?>">
<?php echo (new \Astra\Layout\FileLayout('tmpl.' . $tmpl))->render(array('layout' => $layout)); ?>
</body>
</html>
