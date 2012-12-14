<?php
if (!$modx->user->hasSessionContext('mgr') ) return '';
$modx->regClientCSS($modx->getOption('assets_url') . 'components/quickbar/style.css');
return $modx->getChunk('quickbar',array('mgr_url' => MODX_MANAGER_URL));