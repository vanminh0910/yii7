<?php
$delete = $this->createAbsoluteUrl('delete', array('id' => $id));
$update = $this->createAbsoluteUrl('update', array('id' => $id));
$imageUrl = Yii::app()->baseUrl . '/backend/shop/image/admin?product_id=' . $id;
?>
<a href="<?php echo $update ?>">
    <button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </button>
</a>
<!--<a href="<?php //echo $imageUrl ?>">
    <button class="btn btn-xs btn-info"><i class="fa fa-image"></i> </button>
</a>
<a onclick='onDelete("<?php //echo $delete ?>")'>
    <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </button>
</a>-->
