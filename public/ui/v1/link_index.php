<!--<?php
require_once template('head'); 
require_once template('sidebar');
$metlinkimg=methtm_link('img','all','0','100','1');
$metlinktext=methtm_link('text','all','0','100','1');
echo <<<EOT
-->
        <div id="linklist">
            <dl class="metlist">
                <dt class="ctitle">{$lang_PictureLink}</dt>
                <dd class="img">$metlinkimg</dd>
            </dl>
            <dl class="metlist">
                <dt class="ctitle">{$lang_TextLink}</dt>
                <dd class="txt">$metlinktext</dd>
            </dl>
			<div class="clear"></div>
<!--
EOT;
if($class_list[$classnow][releclass]!=0){
echo <<<EOT
-->
            <div class="inside"><a href="$addlink_url" class="button orange">{$lang_ApplyLink}</a></div>
<!--
EOT;
}
echo <<<EOT
-->
        </div>
<!--
EOT;
require_once template('gap');
require_once template('foot'); 
?>