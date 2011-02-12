<td class="sf_admin_text sf_admin_list_td_titulo">
  <?php echo link_to($ofertas->getTitulo(), 'ofertas_edit', $ofertas) ?>
</td>
<td class="sf_admin_date sf_admin_list_td_fechainicio">
  <?php echo false !== strtotime($ofertas->getFechainicio()) ? format_date($ofertas->getFechainicio(), "dd/MM/yyyy") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_fechafin">
  <?php echo false !== strtotime($ofertas->getFechafin()) ? format_date($ofertas->getFechafin(), "dd/MM/yyyy") : '&nbsp;' ?>
</td>
<td class="sf_admin_text sf_admin_list_td_imagen">
  <?php echo get_partial('ofertas/imagen', array('type' => 'list', 'ofertas' => $ofertas)) ?>
</td>
