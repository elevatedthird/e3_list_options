<?php

namespace Drupal\e3_list_options\Plugin\ListOptions;

use Drupal\list_predefined_options\Plugin\ListOptionsBase;
use Drupal\Core\Entity\FieldableEntityInterface;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\list_predefined_options\Annotation\ListOptions;
use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
 * Provides a list of Layout options.
 */
#[ListOptions(
  id: "layout",
  label: new TranslatableMarkup("Layout"),
  field_types: [
      "list_string",
  ],
)]
class Layout extends ListOptionsBase {

  use StringTranslationTrait;

  /**
   * {@inheritdoc}
   */
  public function getListOptions(FieldStorageDefinitionInterface $definition, FieldableEntityInterface $entity = NULL, &$cacheable = TRUE) {
    $options['left'] = $this->t('Left');
    $options['right'] = $this->t('Right');
    return $options;
  }

}
