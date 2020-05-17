<?php

namespace Drupal\cargar_css_y_js\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class CargarController.
 */
class CargarController extends ControllerBase {

  /**
   * Index.
   *
   * @return string
   */
  public function index()
  {
    $items = [
      [
        'title'=> $this->t('Title 1'),
        'description'=> $this->t('Bacon ipsum dolor amet pork loin shankle pork pancetta cow. Pork belly tongue swine shoulder. Tongue prosciutto shankle corned beef strip steak, bacon doner rump pork belly ribeye capicola short loin. Filet mignon chicken shoulder picanha pastrami jerky, doner andouille turkey.'),
      ],
      [
        'title'=> $this->t('Title 2'),
        'description'=> $this->t('Bacon ipsum dolor amet pork loin shankle pork pancetta cow. Pork belly tongue swine shoulder. Tongue prosciutto shankle corned beef strip steak, bacon doner rump pork belly ribeye capicola short loin. Filet mignon chicken shoulder picanha pastrami jerky, doner andouille turkey.'),
      ],
      [
        'title'=> $this->t('Title 3'),
        'description'=> $this->t('Bacon ipsum dolor amet pork loin shankle pork pancetta cow. Pork belly tongue swine shoulder. Tongue prosciutto shankle corned beef strip steak, bacon doner rump pork belly ribeye capicola short loin. Filet mignon chicken shoulder picanha pastrami jerky, doner andouille turkey.'),
      ],
      [
        'title'=> $this->t('Title 4'),
        'description'=> $this->t('Bacon ipsum dolor amet pork loin shankle pork pancetta cow. Pork belly tongue swine shoulder. Tongue prosciutto shankle corned beef strip steak, bacon doner rump pork belly ribeye capicola short loin. Filet mignon chicken shoulder picanha pastrami jerky, doner andouille turkey.'),
      ],
    ];

    $build = [
        '#prefix' => '<div class="container">',
        '#suffix' => '</div>',
        'items'=> [],
        '#attached' => [
          'library'=>[
            'cargar_css_y_js/cargar_css_y_js',
            'cargar_css_y_js/axios',
            'cargar_css_y_js/font-awesome',
          ]
       ]
    ];

    foreach($items as $item){
      $build['items'][]=[
          '#theme' => 'item_accordion',
          '#title' => $item['title'],
          '#description' => $item['description'],
      ];
    }

    return $build;
  }

}
