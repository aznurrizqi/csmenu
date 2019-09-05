<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Custom backend application asset bundle.
 */
class AdminLtePluginAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/plugins';
    public $css = [
        'datatables/dataTables.bootstrap.css',
    ];
    public $js = [
        'datatables/dataTables.bootstrap.min.js',
    ];
    public $depends = [
        'dmstr\web\AdminLteAsset',
    ];
}
