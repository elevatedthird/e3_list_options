<?php

namespace Drupal\e3_list_options\Plugin\ListOptions;

use Drupal\list_predefined_options\Plugin\ListOptionsBase;
use Drupal\Core\Entity\FieldableEntityInterface;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\list_predefined_options\Attribute\ListOptions;
use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
 * Provides a list of Headings.
 */
#[ListOptions(
  id: "headings",
  label: new TranslatableMarkup("Headings"),
  field_types: [
    "list_string",
  ],
)]
class Heading extends ListOptionsBase {

  use StringTranslationTrait;

  /**
   * {@inheritdoc}
   */
  public function getListOptions(FieldStorageDefinitionInterface $definition, FieldableEntityInterface $entity = NULL, &$cacheable = TRUE) {
    $options['h2'] = $this->t('H2');
    $options['h3'] = $this->t('H3');
    $options['h4'] = $this->t('H4');
    $options['h5'] = $this->t('H5');
    return $options;
  }

}
