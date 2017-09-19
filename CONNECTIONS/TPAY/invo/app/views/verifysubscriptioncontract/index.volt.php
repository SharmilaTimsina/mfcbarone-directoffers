
<?= $this->getContent() ?>

<div class="page-header">
    <h2>Verify Subscription Contract</h2>
</div>

<p>Send us a message and let us know how we can help. Please be as descriptive as possible as it will help us serve you better.</p>

<?= $this->tag->form(['verifysubscriptioncontract/send', 'role' => 'form']) ?>
    <fieldset>
        <div class="form-group">
            <?= $form->label('Signature') ?>
            <?= $form->render('Signature', ['class' => 'form-control']) ?>
        </div>
        <div class="form-group">
            <?= $form->label('subscriptionContractId') ?>
            <?= $form->render('subscriptionContractId', ['class' => 'form-control']) ?>
        </div>
        <div class="form-group">
            <?= $form->label('pinCode') ?>
            <?= $form->render('pinCode', ['class' => 'form-control']) ?>
        </div>
        <div class="form-group">
            <?= $form->label('operationStatusCode') ?>
            <?= $form->render('operationStatusCode', ['class' => 'form-control']) ?>
        </div>
        <div class="form-group">
            <?= $form->label('errorMessage') ?>
            <?= $form->render('errorMessage', ['class' => 'form-control']) ?>
        </div>
        <div class="form-group">
            <?= $this->tag->submitButton(['Send', 'class' => 'btn btn-primary btn-large']) ?>
        </div>
    </fieldset>
</form>





