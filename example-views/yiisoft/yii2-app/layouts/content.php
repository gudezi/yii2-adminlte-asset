<?php
use yii\widgets\Breadcrumbs;
use gudezi\widgets\Alert;

?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <?php if (isset($this->blocks['content-header'])) { ?>
            <h1><?= $this->blocks['content-header'] ?></h1>
        <?php } else { ?>
            <h1>
                <?php
                if ($this->title !== null) {
                    echo \yii\helpers\Html::encode($this->title);
                } else {
                    echo \yii\helpers\Inflector::camel2words(
                        \yii\helpers\Inflector::id2camel($this->context->module->id)
                    );
                    echo ($this->context->module->id !== \Yii::$app->id) ? '<small>Module</small>' : '';
                } ?>
            </h1>
        <?php } ?>
        
        <ol class="breadcrumb">
        <?=
        Breadcrumbs::widget(
            [
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]
        ) ?>

        <!--   <li><a href="#"><i class="fa fa-home"></i> Inicio</a></li>
            <li class="active">Test</li>  -->
        </ol>
      
    </section>


    <!-- Main content -->
    <section class="content">
        <?= Alert::widget() ?>
        <?= $content ?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->