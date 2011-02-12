<?php use_helper('I18N', 'Date') ?>
<?php include_partial('ofertas/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edici&oacute;n de Oferta de %%Titulo%%', array('%%Titulo%%' => $ofertas->getTitulo()), 'messages') ?></h1>

  <?php include_partial('ofertas/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('ofertas/form_header', array('ofertas' => $ofertas, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('ofertas/form', array('ofertas' => $ofertas, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('ofertas/form_footer', array('ofertas' => $ofertas, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
