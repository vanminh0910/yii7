<div style="margin-top: 10px">
    <div class="form-group">
        <?php echo $form->labelEx($emailTrans, "subject", array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-5">
            <?php echo $form->textField($emailTrans, "[$i]subject", array('size' => 20, 'maxlength' => 200, 'class' => 'form-control')); ?>
        </div>
    </div>
    <div class="col-lg-offset-2" style="padding-left: 5px">
        <?php echo $form->error($emailTrans, "[$i]subject"); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($emailTrans, 'content', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-10">
            <?php echo $form->textArea($emailTrans, "[$i]content", array('class' => 'form-control')); ?>
        </div>
    </div>
    <div class="col-lg-offset-2" style="padding-left: 5px">
        <?php echo $form->error($emailTrans, "[$i]content"); ?>
    </div>

    <div class="form-group">
        <input id="<?php echo $i ?>_lefile" name="<?php echo $i ?>_files[]" multiple="multiple" type="file" style="display: none">
        <?php echo $form->labelEx($emailTrans, 'attach_file', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-5">
            <div class="row">
                <div class="col-lg-10">
                    <?php echo $form->textField($emailTrans, "[$i]attach_file", array('class' => 'form-control', 'readonly' => true)); ?>
                </div>
                <a class="btn btn-sm btn-primary" onclick="$('input[id=<?php echo $i ?>_lefile]').click();"><?php echo MailModule::t('Browse') ?></a>
            </div>
        </div>
    </div>
</div>

<script>
    $('input[id=<?php echo $i ?>_lefile]').change(function() {
        var inp = document.getElementById('<?php echo $i ?>_lefile');
        var values = '';
        for (var i = 0; i < inp.files.length; ++i) {
            var name = inp.files.item(i).name + ';';
            values += name;
        }
        $('#EmailTranslation_<?php echo $i ?>_attach_file').val(values);
    });
</script>
