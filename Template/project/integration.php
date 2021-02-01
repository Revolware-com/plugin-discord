<h3><i class="fa fa-discord fa-fw"></i>Discord</h3>
<div class="panel">
    <?= $this->form->label(t('Webhook URL'), 'discord_webhook_url') ?>
    <?= $this->form->text('discord_webhook_url', $values) ?>

    <p class="form-help"><a href="https://github.com/Revolware-com/plugin-discord#configuration" target="_blank"><?= t('Help on Discord integration') ?></a></p>

    <div class="form-actions">
        <input type="submit" value="<?= t('Save') ?>" class="btn btn-blue"/>
    </div>
</div>
