<?php
if (!$modx->user->hasSessionContext('mgr') ) return '';

$resource = $modx->resource;
$user = $modx->getUser();
$membership = $user->getUserGroups();
     
$policies = $resource->findPolicy();
     
if(count($policies)){
    $checkPolicy = $this->hasAccess($policies,$membership);        
    if(!$checkPolicy){
        return '{"error":"Access is denied"}';
    }
}

$defaultQuickBarCorePath = $modx->getOption('core_path').'components/quickbar/';
$quickbarsCorePath = $modx->getOption('quickbar.core_path',null,$defaultQuickBarCorePath);
$quickbar = $modx->getService('quickbar','QuickBar',$quickbarsCorePath.'model/quickbar/',$scriptProperties);

$modx->regClientCSS($quickbar->parse($modx->getOption('quickbar.css',null,$modx->getOption('assets_url') . 'components/quickbar/retro.css')));
return $quickbar->getChunk('quickbar',array('mgr_url' => MODX_MANAGER_URL));