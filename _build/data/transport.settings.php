<?php

$settingSource = array(
    'dashboard' => array(
        'area' => 'Toolbar',
        'value' => true,
    ),
    'create' => array(
        'area' => 'Toolbar',
        'value' => true,
    ),
    'css' => array(
        'area' => 'Theme',
        'value' => '[[++assets_url]]components/quickbar/retro.css',
    ),
    'help' => array(
        'area' => 'Toolbar',
        'value' => false,
    ),
    'helplink' => array(
        'area' => 'Toolbar',
        'value' => 'http://rtfm.modx.com/display/revolution20/An+Overview+of+MODX',
    ),
   'helptarget' => array(
    'area' => 'Toolbar',
    'value' => '_blank',
),
);

$settings = array();

/**
 * Loop over setting stuff to interpret the xtype and to create the modSystemSetting object for the package. (thanks @mark_hamstra)
 */
foreach ($settingSource as $key => $options) {
    $val = $options['value'];

    if (isset($options['xtype'])) $xtype = $options['xtype'];
    elseif (is_int($val)) $xtype = 'numberfield';
    elseif (is_bool($val)) $xtype = 'modx-combo-boolean';
    else $xtype = 'textfield';

    /** @var modSystemSetting */
    $settings[$key] = $modx->newObject('modSystemSetting');
    $settings[$key]->fromArray(array(
        'key' => 'quickbar.' . $key,
        'xtype' => $xtype,
        'value' => $options['value'],
        'namespace' => 'quickbar',
        'area' => $options['area'],
        'editedon' => time(),
    ), '', true, true);
}



return $settings;
