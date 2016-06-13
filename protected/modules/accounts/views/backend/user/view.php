
<div class="page-head">
    <h2 class="pull-left"><i class="fa fa-user"></i> <?php echo AccountsModule::t('View User') ?></h2>
    <div class="clearfix"></div>
</div>


<div class="container">
    <div class="widget">
        <!-- Widget title -->
        <div class="widget-head">
            <div class="pull-left"><?php echo $model->username ?></div>
            <div class="clearfix"></div>
        </div>
        <div class="widget-content" style="display: block;">
            <table class="table table-striped table-bordered table-hover">
                <tbody>
                    <tr>
                        <td><?php echo $model->attributeLabels()['username'] ?></td>
                        <td><?php echo $model->username ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $model->attributeLabels()['first_name'] ?></td>
                        <td><?php echo $model->first_name ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $model->attributeLabels()['last_name'] ?></td>
                        <td><?php echo $model->last_name ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $model->attributeLabels()['email'] ?></td>
                        <td><?php echo $model->email ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $model->attributeLabels()['create_at'] ?></td>
                        <td><?php echo $model->create_at ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $model->attributeLabels()['last_visit'] ?></td>
                        <td><?php echo $model->last_visit ?></td>
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

