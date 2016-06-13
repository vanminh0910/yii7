<fieldset class="form-attachments">

    <h2><?php echo CmsModule::t('Attachments') ?></h2>

	<?php $this->widget('bootstrap.widgets.TbButton',array(
		'icon'=>'plus white',
		'label'=>CmsModule::t('Add file'),
		'url'=>array('/cms/attachment/add','pageId'=>$model->id),
		'type'=>'primary',
		'htmlOptions'=>array('class'=>'add-button'),
	)); ?>

    <?php $this->widget('bootstrap.widgets.TbGridView',array(
		'type'=>array('striped','condensed'),
        'id'=>'attachments',
        'dataProvider'=>$model->getAttachments(),
        'template'=>'{items} {pager}',
        'emptyText'=> CmsModule::t('No attachments found.'),
        'showTableOnEmpty'=>false,
        'columns'=>array(
			array(
				'name'=>'id',
				'header'=>'#',
				'value'=>'$data->id',
			),
			array(
                'name'=>'name',
                'value'=>'$data->resolveName()',
            ),
			array(
				'header'=> CmsModule::t('Tag'),
				'value'=>'$data->renderTag()',
				'sortable'=>false,
			),
            array(
                'class'=>'bootstrap.widgets.TbButtonColumn',
                'template'=>'{delete}',
                'buttons'=>array(
                    'delete'=>array(
                        'url'=>'Yii::app()->controller->createUrl("attachment/delete", array("id"=>$data->id))',
                    ),
                ),
            ),
        ),
    )); ?>

</fieldset>