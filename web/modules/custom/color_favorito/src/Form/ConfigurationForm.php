<?php

namespace Drupal\color_favorito\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class ConfigurationForm extends ConfigFormBase
{
    /**
     * {@inheritdoc}
     */

    public function getFormId()
    {
      return 'color_favorito.configuration_form';
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $form = parent::buildForm($form, $form_state);

        $config = $this->config('color_favorito.configuration');

        $form['color_favorito'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Ingrese su color favorito'),
            '#default_value' => $config->get('color_favorito'),
            '#size' => 64,
            '#maxlength' => 64,
        ];

        return $form;
    }
    /**
     * {@inheritdoc}
     */

    public function validateForm(array &$form, FormStateInterface $form_state)
    {
       //validar que el campo no sea vacio
    }
    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        $this->config('color_favorito.configuration')
        ->set('color_favorito', $form_state->getValue('color_favorito'))
        ->save();


        return parent::submitForm($form, $form_state);
    }
    /**
     * {@inheritdoc}
     */
    public function getEditableConfigNames()
    {
        return [
            'color_favorito.configuration'
        ];
    }

}