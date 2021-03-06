<?php
/**
 * User: harlen-angkemac
 * Date: 2017/7/20 - 下午3:24
 *
 */

namespace pokerDragon\colorAdmin\web\plugins;

use yii\web\AssetBundle as BaseColorAdminAsset;

class JstreeAsset extends BaseColorAdminAsset
{
    public $sourcePath = '@vendor/pokerdragon/color-admin/assets';

    public $css = [
        'plugins/jstree/dist/themes/default/style.min.css'
    ];

    public $js = [
        'plugins/jstree/dist/jstree.min.js'
    ];

    public $depends = [
        'pokerDragon\colorAdmin\web\plugins\JqueryAsset'
    ];
}