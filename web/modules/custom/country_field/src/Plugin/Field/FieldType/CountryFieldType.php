<?php

namespace Drupal\country_field\Plugin\Field\FieldType;

use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\TypedData\DataDefinition;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\Core\Field\FieldStorageDefinitionInterface;


/**
 * @FieldType(
 *   id = "country_field_type",
 *   label = @Translation("Country field type"),
 *   description = @Translation("Country field type"),
 *   default_widget = "country_field_widget_type",
 *   default_formatter = "country_field_formatter_type"
 * )
*/


class CountryFieldType extends FielditemBase
{
    /**
     * {@inheritDoc}
     */
    public static function propertyDefinitions(FieldStorageDefinitionInterface $field_definition)
    {
        $properties['value'] = DataDefinition::create('string')
            ->setLabel(new TranslatableMarkup('Country'));

        return $properties;
    }

    public static function schema(FieldStorageDefinitionInterface $field_definition)
    {
        //country field va a almacenar el codigo de paris por eje: CR US FR
        $columns = [
            "columns" => [
                'value' => [
                    'type' => 'varchar',
                    'length' => '2',
                    'description' => t('Country Field'),
                    'not null'=> FALSE
                ]
            ]

        ];

        return $columns;
    }
    /**
    * {@inheritdoc}
    */
    public function isEmpty() {
        $value = $this->get('value')->getValue();
        return $value === NULL || $value === '';
    }
}