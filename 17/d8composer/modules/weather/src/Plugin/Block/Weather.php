<?php

namespace Drupal\weather\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Forecast\Forecast;

/**
 * @Block(
 *   id = "weather",
 *   admin_label = @Translation("Get the weather."),
 * )
 */
class Weather extends BlockBase {
  public function build() {
    $f = new Forecast('7411b0e6d5e0c99fbd7405fd6de00cd5'); //getenv("WEATHER");
    $update = $f->get($this->configuration['lat'], $this->configuration['long']);

    $summary = $update->currently->summary;
    $temparature = round(($update->currently->temperature - 32) * (5/9), 2);

    $body = "Forecast is $summary with temparature of $temparature dec C.";

    return [
      'weather' => [
        '#markup' => $body,
      ],
    ];
  }

  public function blockForm($form, FormStateInterface $form_state) {
    $form = parent::blockForm($form, $form_state);

    $form['lat'] = [
      '#title' => t('Latitude'),
      '#type' => 'textfield',
      '#default_value' => $this->configuration['lat'],
    ];
    $form['long'] = [
      '#title' => t('Longitude'),
      '#type' => 'textfield',
      '#default_value' => $this->configuration['long'],
    ];

    return $form;
  }

  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->setConfigurationValue('lat', $form_state->getValue('lat'));
    $this->setConfigurationValue('long', $form_state->getValue('long'));
  }

}
