<?php

namespace Drupal\configform\Controller;

use Drupal\Core\Controller\ControllerBase;

class ConfigForm extends ControllerBase {
  public function content() {
    $config = $this->config('configform.settings');
    $build['name'] = [
      '#type' => 'html_tag',
      '#tag' => 'h2',
      '#value' => $this->t($config->get('name')),
    ];
    $build['sex'] = [
      '#type' => 'html_tag',
      '#tag' => 'p',
      '#value' => $this->t($config->get('sex')),
    ];
    $build['occupation'] = [
      '#type' => 'html_tag',
      '#tag' => 'p',
      '#value' => $this->t($config->get('occupation')),
    ];

    return $build;
  }
}
