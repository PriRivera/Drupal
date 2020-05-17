<?php

namespace Drupal\country_field\Plugin\Field\FieldFormatter;

use Drupal\Component\Utility\Html;
use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemInterface;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * Implementacion del 'country_field_formatter_type'
 *
 * @FieldFormatter(
 *   id = "country_field_formatter_type",
 *   label = @Translation("Country Field - Formatter"),
 *   description = @Translation("Country Field - Formatter"),
 *   field_types = {
 *     "country_field_type",
 *   }
 * )
 */

class CountryFieldFormatter extends FormatterBase
{
 /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode)
  {
    $elements = [];

    foreach($items as $delta => $item){
        $elements[$delta] = [
            'value' => [
                '#markup' => $this->viewValue($item)
            ]
        ];
    }

    return $elements;
  }
  /**
   * generate the output
   *
   * @param FieldItemInterface $item
   * @return string
   */
  private function viewValue(FieldItemInterface $item)
  {
      //Crear un array de paises
      //pasando el item->value como $llave, obtener el nombre del pais y mostrarlo
      //eje: $paises[$item->value]
      // CR, FR
      // Tiene que imprimir Costa Rica en vez de las iniciales
      $paises = array(
        array(
            'id' => 'CR',
            'name'=> 'Costa Rica'
        ),
        array(
            'id' => 'SL',
            'name'=> 'Salvador'
        )
    );

    $length =count($paises);

    for($i=0;$i<$length;$i++){
        if($paises[$i]['id'] == 'CR'){
            echo $paises[$i]['name'];
        }
    }
      //return  nl2br(Html::escape($item->value));
  }
}