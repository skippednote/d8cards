<?php

namespace Drupal\autocapitalize\Plugin\Filter;

use Drupal\Core\Form\FormStateInterface;
use Drupal\filter\FilterProcessResult;
use Drupal\filter\Plugin\FilterBase;


/**
 * @Filter(
 *   id = "filter_autocapitalize",
 *   title = @Translation("Auto Capitalize"),
 *   description = @Translation("A filter to Auto Capitalize given set of words."),
 *   type = Drupal\filter\Plugin\FilterInterface::TYPE_TRANSFORM_REVERSIBLE
 * )
 */
class FilterAutoCapitalize extends FilterBase {

  /**
   * {@inheritdoc}
   */
  public function process($text, $langcode) {
    $words = explode(',', $this->settings['autocapitalizeform']);
    $words = array_map('trim', $words);
    $words_upper = array_map('strtoupper', $words);

    $text = str_ireplace($words, $words_upper, $text);
    return new FilterProcessResult($text);
  }

  public function settingsForm(array $form, FormStateInterface $form_state) {
    $form['autocapitalizeform'] = [
      '#type' => 'textfield',
      '#default_value' => $this->settings['autocapitalizeform'],
      '#title' => $this->t('Words to Auto Capitalize'),
      '#description' => $this->t('List of words which should be Auto Capitalized.'),
    ];

    return $form;
  }
}
