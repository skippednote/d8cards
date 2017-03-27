<?php

namespace Drupal\configform\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class ConfigFormForm extends ConfigFormBase {
  protected function getEditableConfigNames() {
    return [
      'configform.settings',
    ];
  }

  public function getFormId() {
    return 'configform_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('configform.settings');
    $form['name'] = [
      '#type' => 'textfield',
      '#title' => 'Name',
      '#required' => TRUE,
      '#default_value' => $config->get('name'),
    ];

    $form['sex'] = [
      '#type' => 'radios',
      '#title' => 'Sex',
      '#required' => TRUE,
      '#options' => [
        'male' => t('Male'),
        'female' => t('Female'),
      ],
      '#default_value' => $config->get('sex'),
    ];

    $form['occupation'] = [
      '#type' => 'select',
      '#title' => 'Occupation',
      '#required' => TRUE,
      '#options' => [
        'frontend' => t('Front-end Developer'),
        'backend' => t('Backend-end Developer'),
        'Manager' => t('Manager'),
      ],
      '#default_value' => $config->get('occupation'),
    ];

    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => t('Save'),
    ];

    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('configform.settings')
      ->set('name', $form_state->getValue('name'))
      ->set('sex', $form_state->getValue('sex'))
      ->set('occupation', $form_state->getValue('occupation'))
      ->save();
  }
}
