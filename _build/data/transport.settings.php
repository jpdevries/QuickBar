<?php

$s = array(
    'admin_groups' => 'Administrator',
    'clear_cache' => true,
);

$settings = array();

foreach ($s as $key => $value) {
    if (is_string($value) || is_int($value)) { $type = 'textfield'; }
    elseif (is_bool($value)) { $type = 'combo-boolean'; }
    else { $type = 'textfield'; }

    $parts = explode('.',$key);
    if (count($parts) == 1) { $area = 'Default'; }
    else { $area = $parts[0]; }
    
    $settings['quickbar.'.$key] = $modx->newObject('modSystemSetting');
    $settings['quickbar.'.$key]->set('key', 'quickbar.'.$key);
    $settings['quickbar.'.$key]->fromArray(array(
        'value' => $value,
        'xtype' => $type,
        'namespace' => 'quickbar',
        'area' => $area
    ));
}

return $settings;


