<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Field: Content
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
class CSFramework_Option_content extends CSFramework_Options {

  public function __construct( $field, $value = '', $unique = '' ) {
    parent::__construct( $field, $value, $unique );
  }

  public function output() {

    polo_render($this->element_before());
    polo_render($this->field['content']);
    polo_render($this->element_after());

  }

}
