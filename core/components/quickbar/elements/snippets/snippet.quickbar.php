<?php
if (!$modx->user->hasSessionContext('mgr') ) return '';
$modx->regClientCSS($modx->getOption('assets_url') . 'components/quickbar/style.css');
return $modx->getChunk('quickbar');