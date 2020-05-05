<?php

namespace Drupal\country_field\Plugin\Field\FieldWidget;

use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * Implementacion del widget 'country_field_widget_type'
 *
 * @FieldWidget(
 *   id = "country_field_widget_type",
 *   label = @Translation("Country Field - Widget"),
 *   description = @Translation("Country Field - Widget"),
 *   field_types = {
 *      "country_field_type",
 *   }
 * )
 */

class CountryFieldWidget extends WidgetBase{



    public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
        $element += [
            "#type" => 'select',
            "#default_value"=> isset($items[$delta]->value) ? $items[$delta]->value : '',
            "#title" => $this->t('Select country'),
            "#options" => \Drupal::service('country_manager')->getList(),
            "#element_validate" => [
                [static::class, 'validate'],
            ]
        ];

        return ['value' =>$element];
      }

      /**
       * Valida el campo country_field
       *
       * @param $element
       * @param FormStateInterface $form_state
       * @return void
       */

      public static function validate($element, FormStateInterface $form_state)
      {

      }
}