<?php

namespace Drupal\cargar_libs_externas\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'SliderBlock' block.
 *
 * @Block(
 *  id = "slider_block",
 *  admin_label = @Translation("Slider block"),
 * )
 */
class SliderBlock extends BlockBase
{

	/**
	 * {@inheritdoc}
	 */
	public function build()
	{
		$build = [];

		$build['slider'] = [
			'#theme' => 'slider_theme',
			'#attached' => [
				'library' => [
					'libraries/flexslider', // Esto gracias al modulo 'libraries'
					'cargar_libs_externas/cargar_libs_externas',
				]
			]
		];

		return $build;
	}
}
