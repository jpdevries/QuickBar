<?php
if (!$modx->user->hasSessionContext('mgr') || !$modx->hasPermission('edit_document') ) return '';

$defaultQuickBarCorePath = $modx->getOption('core_path').'components/quickbar/';
$quickbarsCorePath = $modx->getOption('quickbar.core_path',null,$defaultQuickBarCorePath);
$quickbar = $modx->getService('quickbar','QuickBar',$quickbarsCorePath.'model/quickbar/',$scriptProperties);

$modx->regClientCSS($quickbar->parse($modx->getOption('quickbar.css',null,$modx->getOption('assets_url') . 'components/quickbar/retro.css')));
return $quickbar->getChunk('quickbar',array('mgr_url' => MODX_MANAGER_URL));
