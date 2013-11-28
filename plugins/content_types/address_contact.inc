<?php

$plugin = array(
  'title' => t('Ding library address & contact info'),
  'description' => t('Display the address and contact info for the particular library'),
  'single' => TRUE,
  'required context' => new ctools_context_required(t('Node'), 'node'),
  'edit form' => 'ding_library_address_contact_content_type_edit_form',
  'render callback' => 'ding_library_address_contact_content_type_render',
  'category' => t('Ding!'),
);

function ding_library_address_contact_content_type_render($subtype, $conf, $panel_args, $context = NULL) {
  $block = new stdClass();
  if (empty($context->data)) {
    return $block;
  }
  $node = $context->data;
  $data = _preprocess_address_and_contact($node);

  $content = '';
  foreach ($data as $key => $value) {
    if ($value) {
      $content .= '<span class="' . $key . '">' . $value . '</span>';
    }
  }

  $block->title = t('Address and contact info');
  $block->content = $content;

  return $block;
}

/**
 * 'Edit form' callback for the content type.
 */
function ding_library_address_contact_content_type_edit_form($form, &$form_state) {
  return $form;
}
