<td>
  <ul class="sf_admin_td_actions">
    <?php echo $helper->linkToEdit($ofertas, array(  'label' => 'Editar',  'params' =>   array(  ),  'class_suffix' => 'edit',)) ?>
    <?php echo $helper->linkToDelete($ofertas, array(  'label' => 'Eliminar',  'params' => 'confirm=Esta seguro ?',  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',)) ?>
  </ul>
</td>
