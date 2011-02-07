<ul class="sf_admin_actions">
<?php if ($form->isNew()): ?>
  <?php echo $helper->linkToList(array(  'label' => 'Volver a la Lista',  'params' =>   array(  ),  'class_suffix' => 'list',)) ?>
<?php else: ?>
  <?php echo $helper->linkToList(array(  'label' => 'Volver a la Lista',  'params' =>   array(  ),  'class_suffix' => 'list',)) ?>
<?php endif; ?>
</ul>
