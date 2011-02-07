<td colspan="4">
  <?php echo __('%%titulo%% - %%fechainicio%% - %%fechafin%% - %%imagen%%', array('%%titulo%%' => link_to($ofertas->getTitulo(), 'ofertas_edit', $ofertas), '%%fechainicio%%' => false !== strtotime($ofertas->getFechainicio()) ? format_date($ofertas->getFechainicio(), "f") : '&nbsp;', '%%fechafin%%' => false !== strtotime($ofertas->getFechafin()) ? format_date($ofertas->getFechafin(), "f") : '&nbsp;', '%%imagen%%' => $ofertas->getImagen()), 'messages') ?>
</td>
