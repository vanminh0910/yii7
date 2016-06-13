
<div class="page-head">
    <h2 class="pull-left"><i class="fa fa-language"></i> View User</h2>
    <div class="bread-crumb pull-right">
        <a href="#"><i class="fa fa-home"></i> Home</a>
        <span class="divider">/</span>
        <a class="bread-current" href="#">Language</a>
        <span class="divider">/</span>
        <a class="bread-current" href="#">View Language</a>
    </div>
    <div class="clearfix"></div>
</div>

<div class="container">
    <div class="widget">
        <!-- Widget title -->
        <div class="widget-head">
            <div class="pull-left">View Language</div>
            <div class="clearfix"></div>
        </div>
        <div class="widget-content" style="display: block;">
            <table class="table table-striped table-bordered table-hover">
                <tbody>
                    <tr>
                        <td><?php echo $model->attributeLabels()['id'] ?></td>
                        <td><?php echo $model->id ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $model->attributeLabels()['code'] ?></td>
                        <td><?php echo $model->code ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $model->attributeLabels()['name'] ?></td>
                        <td><?php echo $model->name ?></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <?php
    $urlEdit = $this->createAbsoluteUrl('update', array('id' => $model->id));
    ?>
    <?php
    echo CHtml::button(AccountsModule::t('Edit'), array('class' => 'btn btn-sm btn-primary',
        'onclick' => 'window.open("' . $urlEdit . '","_self")'));
    ?>
</div>
