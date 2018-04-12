<div class="form-group">
    <label for=""><?php echo $this->labelText ?></label>
    <input name="<?PHP echo $this->name ?>" <?php echo $this->attributes ?> placeholder="<?php echo $this->options['placeholder']?>" class="<?php echo $this->classes ?>" type="<?php echo $this->type ?>"<?php echo $this->required;?>>
</div>