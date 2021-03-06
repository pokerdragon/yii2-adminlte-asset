<?php
/**
 * User: harlen-angkemac
 * Date: 2017/7/6 - 上午10:04
 *
 */

namespace pokerDragon\colorAdmin\web\plugins;

use yii\web\AssetBundle as BaseColorAdminAsset;

class BootStrapAsset extends BaseColorAdminAsset
{
    public $sourcePath = '@vendor/pokerdragon/color-admin/assets';

    public $css = [
        'plugins/bootstrap/css/bootstrap.min.css'
    ];

    public $js = [
        'plugins/bootstrap/js/bootstrap.min.js',
    ];

    public $depends = [
        'pokerDragon\colorAdmin\web\plugins\JqueryAsset'
    ];
}