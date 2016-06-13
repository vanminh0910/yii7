<?php //
$delete = $this->createAbsoluteUrl('delete', array('id' => $id));
$update = $this->createAbsoluteUrl('update', array('id' => $id));
?>
<!--<a href="<?php //echo $update ?>">
    <button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </button>
</a>-->
<a onclick="onDelete(<?php echo $id ?>)">
    <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </button>
</a>
