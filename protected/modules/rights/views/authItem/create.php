
<div class="page-head">
    <h2 class="pull-left"><i class="fa"></i> <?php echo Rights::getAuthItemTypeNamePlural($_GET['type']) ?></h2>
    <div class="clearfix"></div>
</div>

<div class="container" >

    <h2><?php
        echo Rights::t('core', 'Create :type', array(
            ':type' => Rights::getAuthItemTypeName($_GET['type']),
        ));
        ?></h2>

    <?php $this->renderPartial('_form', array('model' => $formModel)); ?>

</div>