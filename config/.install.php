<?php
/**
 * Этот файл является частью расширения модуля веб-приложения GearMagic.
 * 
 * Файл конфигурации установки расширения.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    'id'          => 'gm.be.mp.desk',
    'moduleId'    => 'gm.be.mp',
    'name'        => 'Marketplace Panel',
    'description' => 'Panel for displaying Marketplace elements',
    'namespace'   => 'Gm\Backend\Marketplace\Desk',
    'path'        => '/gm/gm.be.mp.desk',
    'route'       => 'desk',
    'locales'     => ['ru_RU', 'en_GB'],
    'permissions' => ['any', 'view', 'read', 'info'],
    'events'      => [],
    'required'    => [
        ['php', 'version' => '8.2'],
        ['app', 'code' => 'GM MS'],
        ['app', 'code' => 'GM CMS'],
        ['app', 'code' => 'GM CRM'],
        ['module', 'id' => 'gm.be.mp']
    ]
];
