<fieldset class="form-images">

    <h2><?php echo CmsModule::t('Images') ?></h2>

	<?php $this->widget('bootstrap.widgets.TbButton',array(
		'icon'=>'plus white',
		'label'=>  CmsModule::t('Add image'),
		'url'=>array('/cms/image/add','pageId'=>$model->id),
		'type'=>'primary',
		'htmlOptions'=>array('class'=>'add-button'),
	)); ?>

    <?php $this->widget('bootstrap.widgets.TbGridView',array(
		'type'=>array('striped','condensed'),
        'id'=>'images',
        'dataProvider'=>$model->getImages(),
        'template'=>'{items} {pager}',
        'emptyText'=>CmsModule::t('No images found.'),
        'showTableOnEmpty'=>false,
        'columns'=>array(
			array(
				'name'=>'id',
				'header'=>'#',
				'value'=>'$data->id',
			),
			array(
                'name'=>'name',
                'value'=>'$data->resolveFilename()',
            ),
			array(
				'header'=>  CmsModule::t('Tag'),
				'value'=>'\'{{image:\'.$data->id.\'}}\'',
				'sortable'=>false,
			),
            array(
                'class'=>'bootstrap.widgets.TbButtonColumn',
                'template'=>'{delete}',
                'buttons'=>array(
                    'delete'=>array(
                        'url'=>'Yii::app()->controller->createUrl("image/delete", array("id"=>$data->id))',
                    ),
                ),
            ),
        ),
    )); ?>

</fieldset>