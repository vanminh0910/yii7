<?php
$delete = $this->createAbsoluteUrl('delete', array('id' => $id));
$update = $this->createAbsoluteUrl('update', array('id' => $id));
?>
<a href="<?php echo $update ?>">
    <button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </button>
</a>
<a onclick="onDelete()">
    <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </button>
</a>
<script>
    function onDelete() {
        bootbox.confirm("Are you sure?", function(result) {
            if (result === true) {
                window.open("<?php echo $delete ?>", '_self');
            }
        });

    }
</script>