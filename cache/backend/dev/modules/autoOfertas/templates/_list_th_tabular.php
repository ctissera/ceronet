<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_titulo">
  <?php if ('titulo' == $sort[0]): ?>
    <?php echo link_to(__('Titulo Oferta', array(), 'messages'), '@ofertas', array('query_string' => 'sort=titulo&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Titulo Oferta', array(), 'messages'), '@ofertas', array('query_string' => 'sort=titulo&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_date sf_admin_list_th_fechainicio">
  <?php if ('fechainicio' == $sort[0]): ?>
    <?php echo link_to(__('Inicio', array(), 'messages'), '@ofertas', array('query_string' => 'sort=fechainicio&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Inicio', array(), 'messages'), '@ofertas', array('query_string' => 'sort=fechainicio&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_date sf_admin_list_th_fechafin">
  <?php if ('fechafin' == $sort[0]): ?>
    <?php echo link_to(__('Fin', array(), 'messages'), '@ofertas', array('query_string' => 'sort=fechafin&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Fin', array(), 'messages'), '@ofertas', array('query_string' => 'sort=fechafin&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_imagen">
  <?php if ('imagen' == $sort[0]): ?>
    <?php echo link_to(__('Imagen', array(), 'messages'), '@ofertas', array('query_string' => 'sort=imagen&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Imagen', array(), 'messages'), '@ofertas', array('query_string' => 'sort=imagen&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>