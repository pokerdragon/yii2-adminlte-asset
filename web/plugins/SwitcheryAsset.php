<?php
/**
 * User: harlen-angkemac
 * Date: 2017/8/2 - 上午10:23
 *
 */

namespace pokerDragon\colorAdmin\web\plugins;

use yii\web\AssetBundle as BaseColorAdminAsset;

class SwitcheryAsset extends BaseColorAdminAsset
{
    public $sourcePath = '@vendor/pokerdragon/color-admin/assets';

    public $css = [
    'plugins/switchery/switchery.min.css'
];
    public $js = [
    'plugins/switchery/switchery.min.js',
];

//    public $depends = [
//    'pokerDragon\colorAdmin\web\plugins\JqueryAsset'
//];
}