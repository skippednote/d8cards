<?php

namespace Drupal\ratings\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\Plugin\Field\FieldFormatter\DecimalFormatter;

/**
 * Formatter to convert decimal to rating.
 *
 * @FieldFormatter(
 *   id = "ratings",
 *   label = @Translation("Convert decimal to rating."),
 *   field_types = {
 *     "decimal"
 *   }
 * )
 */

class RatingsFieldFormatter extends DecimalFormatter {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $fields, $langcode) {
    $build = [];

    foreach($fields as $field => $field_value) {
      var_dump($field_value->value);
      $build[$field] = [
        '#theme' => 'ratings',
        '#rating' => $field_value->value * 20,
        '#attached' => [
          'library' => [
            'ratings/ratings',
          ],
        ],
      ];
    }

    return $build;
  }
}
