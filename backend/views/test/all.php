<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Countries and cities';
$this->params['breadcrumbs'][] = $this->title;
?>
<table class="table table-striped">
    <thead>
        <tr>
            <th>
                ID
            </th>
            <th>
                Country
            </th>
            <th>
                City
            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($countriesCities as $item) {?>
        <tr>
            <td>
                <?= $item->id?>
            </td>
            <td>
                <?= $item->country->name ?>
            </td>
            <td>
                <?= $item->name ?>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
