<?php
/**
 * User: harlen-angkemac
 * Date: 2017/7/28 - 下午3:03
 *
 */

namespace pokerDragon\colorAdmin\web\plugins;

use yii\web\AssetBundle as BaseColorAdminAsset;

class JqueryPjaxAsset extends BaseColorAdminAsset
{
    public $sourcePath = '@vendor/pokerdragon/color-admin/assets';


    public $js = [
        'plugins/jquery-pjax/jquery.pjax.js',
    ];

    public $depends = [
        'pokerDragon\colorAdmin\web\plugins\JqueryAsset'
    ];
}