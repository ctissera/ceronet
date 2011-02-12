<td colspan="4">
  <?php echo __('%%titulo%% - %%fechainicio%% - %%fechafin%% - %%imagen%%', array('%%titulo%%' => link_to($ofertas->getTitulo(), 'ofertas_edit', $ofertas), '%%fechainicio%%' => false !== strtotime($ofertas->getFechainicio()) ? format_date($ofertas->getFechainicio(), "dd/MM/yyyy") : '&nbsp;', '%%fechafin%%' => false !== strtotime($ofertas->getFechafin()) ? format_date($ofertas->getFechafin(), "dd/MM/yyyy") : '&nbsp;', '%%imagen%%' => get_partial('ofertas/imagen', array('type' => 'list', 'ofertas' => $ofertas))), 'messages') ?>
</td>
