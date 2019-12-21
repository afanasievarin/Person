<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class ChartJsAsset extends AssetBundle
{
    public $sourcePath = '@app/components/chartjs';
    public $css = [
        'css/Chart.min.css',
    ];
    public $js = [
        'js/Chart.min.js',
    ];
    public $jsOptions = ['position' => \yii\web\view::POS_END];
}
