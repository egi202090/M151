<?php echo $this->formHelper->createForm(
    "user",
    "/user/add",
    "POST"
); ?>

<div class="col-sm-6 col-sm-offset-3">

    <?php echo $this->formHelper->inputGroup('username', 'form-control', ['label' => 'Benutzername']); ?>
    <?php echo $this->formHelper->inputGroup('firstname', 'form-control', ['label' => 'Vorname']); ?>
    <?php echo $this->formHelper->inputGroup('lastname', 'form-control', ['label' => 'Nachname']); ?>

    <button class="btn btn-primary" type="submit">Absenden</button>
</div>

<?php echo $this->formHelper->endForm(); ?>
