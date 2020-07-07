<?php
/**
 * Nubia Demo Import.
 *
 * @package Nubia
 */

function nubia_ocdi_import_files() {
  return array(
    array(
      'import_file_name'             => 'Demo Import',
      'local_import_file'            => trailingslashit( get_template_directory() ) . 'ocdi/content.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'ocdi/widgets.wie',
      'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'ocdi/customizer.dat',
    )
  );
}
add_filter( 'pt-ocdi/import_files', 'nubia_ocdi_import_files' );