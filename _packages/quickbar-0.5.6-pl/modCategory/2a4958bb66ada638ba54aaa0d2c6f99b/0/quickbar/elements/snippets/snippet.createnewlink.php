<?php
$context = $modx->context->key;
$classKey = $modx->resource->get('class_key');

$id = $modx->resource->get('id');

switch($classKey) {
    case 'ArticlesContainer':
    $classKey = 'Article';
    break;
    
    case 'Article':
    $id = $modx->resource->get('parent');
    break;
    
    default:
    $classKey = 'modDocument';
    break;
}

return MODX_MANAGER_URL . "?id=$id&a=55&class_key=$classKey&parent=$id&context_key=$context";