<?php

function renderVariation($variation, $i) {
    if (!ProductSpecification::model()->findByPk(1))
        return false;
    if (!$variation) {
        $variation = new ProductVariation;
        $variation->specification_id = 1;
    }

    $str = '<tr style="margin-bottom:10px"> <td>';
    $str .= CHtml::dropDownList("Variations[{$i}][specification_id]", $variation->specification_id, CHtml::listData(
                            ProductSpecification::model()->findall(), "id", "title"), array(
                'empty' => '-', 'class' => 'form-control'));

    $str .= '</td> <td>';
    $str .= CHtml::textField("Variations[{$i}][title]", $variation->title, array('class' => 'form-control'));
    $str .= '</td> <td>';
    $str .= CHtml::dropDownList("Variations[{$i}][sign]", $variation->price_adjustion >= 0 ? '+' : '-', array(
                '+' => '+',
                '-' => '-'), array('class' => 'form-control'));
    $str .= '</td> <td>';
    $str .= CHtml::textField("Variations[{$i}][price_adjustion]", abs($variation->price_adjustion), array('class' => 'form-control'));
    $str .= '</td> <td>';
    for ($j = -10; $j <= 10; $j++)
        $positions[$j] = $j;
    $str .= CHtml::dropDownList("Variations[{$i}][position]", $variation->position, $positions, array('class' => 'form-control'));
    $str .= '</td> </tr>';

    return $str;
}
?>

<div class="container" style="margin-left: 10px">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'product-specification-form',
        'enableAjaxValidation' => false,
        'htmlOptions' => array('class' => 'form-horizontal'),
    ));
    ?>

    <?php echo $form->errorSummary($model); ?>

    <div>
        <fieldset>
            <legend> <?php echo Shop::t('Article Information'); ?> </legend>
            <div class="form-group">
                <?php echo $form->labelEx($model, 'category_id', array('class' => 'control-label col-lg-2')); ?>
                <div class="col-lg-5">
                    <?php
                    $this->widget('application.modules.shop.components.Relation', array(
                        'model' => $model,
                        'relation' => 'category',
                        'fields' => 'title',
                        'showAddButton' => false,
                        'htmlOptions' => array('class' => 'form-control')));
                    ?>
                </div>
                <?php echo $form->error($model, 'category_id'); ?>
            </div>

            <div class="form-group">
                <?php echo $form->labelEx($model, 'category_id', array('class' => 'control-label col-lg-2')); ?>
                <div class="col-lg-5">
                    <?php
                    $this->widget('application.modules.shop.components.Relation', array(
                        'model' => $model,
                        'relation' => 'tax',
                        'fields' => 'title',
                        'showAddButton' => false,
                        'htmlOptions' => array('class' => 'form-control')));
                    ?>
                </div>
                <?php echo $form->error($model, 'category_id'); ?>
            </div>


            <div class="form-group">
                <?php echo $form->labelEx($model, 'title', array('class' => 'control-label col-lg-2')); ?>
                <div class="col-lg-5">
                    <?php echo $form->textField($model, 'title', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
                    <?php echo $form->error($model, 'title'); ?>

                </div>
            </div>

            <div class="form-group">
                <?php echo $form->labelEx($model, 'description', array('class' => 'control-label col-lg-2')); ?>
                <div class="col-lg-10">
                    <?php echo $form->textArea($model, 'description', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control', 'id' => 'product-description')); ?>
                    <?php echo $form->error($model, 'description'); ?>

                </div>
            </div>


        </fieldset>
    </div>


    <fieldset>
        <legend> <?php echo Yii::t('ShopModule.shop', 'Article Specifications'); ?> </legend>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'price', array('class' => 'control-label col-lg-2')); ?>
            <div class="col-lg-5">
                <?php echo $form->textField($model, 'price', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
                <?php echo $form->error($model, 'price'); ?>

            </div>
        </div>

        <?php foreach (ProductSpecification::model()->findAll() as $specification) { ?>
            <div class="form-group">
                <?php echo CHtml::label($specification->title, '', array('class' => 'control-label col-lg-2')); ?>
                <div class="col-lg-5">
                    <?php
                    echo CHtml::textField("Specifications[{$specification->title}]", $model->getSpecification($specification->title), array(
                        'size' => 45, 'maxlength' => 45, 'class' => 'form-control'));
                    ?>
                </div>
            </div>
        <?php } ?>

    </fieldset>
    <?php if (!$model->isNewRecord) { ?>
        <fieldset>
            <legend> <?php echo Shop::t('Article Variations'); ?> </legend>
            <div id="variations">

                <table>
                    <?php
                    printf('<tr><th>%s</th><th>%s</th><th colspan = 2>%s</th><th>%s</th></tr>', Shop::t('Specification'), Shop::t('Value'), Shop::t('Price adjustion'), Shop::t('Position'));
                    $i = 0;
                    foreach ($model->variations as $variation) {
                        echo renderVariation($variation, $i);
                        $i++;
                    }

                    echo renderVariation(null, $i);
                    ?>
                </table>
                <?php
                echo CHtml::button(Shop::t('Save specifications'), array(
                    'submit' => array(
                        '//shop/products/update',
                        'return' => 'product',
                        'id' => $model->product_id),
                    'class' => 'btn btn-sm btn-primary'));
                ?>


        </fieldset>
        <br><br>

    <?php } ?>

    <div class="row col-lg-offset-2">
        <?php
        echo CHtml::submitButton(Yii::t('ShopModule.shop', 'Save'), array('class' => 'btn btn-sm btn-primary'));
        ?>
    </div>
    <?php $this->endWidget(); ?>

</div><!-- form -->
