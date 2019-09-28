<?= form_open(base_url().'usuario/autenticar'); ?>
<?= form_fieldset('Login'); ?>

<?= form_label('Email', 'email');?>
<?= form_input(array(
    'name' => 'email',
    'id' => 'email'
)); ?>

<?= form_label('Senha', 'senha');?>
<?= form_password(array(
    'name' => 'senha',
    'id' => 'senha'
));?>

<?= form_button(array(
    'class' => 'btn_submit',
    'type' => 'submit',
    'content' => 'login'
));?>

<?php if ($this->session->flashdata('success') == TRUE):?>
    <h2><?= $this->session->flashdata('seccess')?></h2>
<?php endif;?>

<?php if ($this->session->flashdata('error') == TRUE):?>
    <h2><?= $this->session->flashdata('error')?></h2>
<?php endif;?>

<?= form_fieldset_close();?>
<?= form_close();?>