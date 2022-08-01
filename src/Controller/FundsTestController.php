<?php

namespace Drupal\module_template\Controller;

use Drupal\Core\Controller\ControllerBase;

class ModuleTemplateController extends ControllerBase {

    /**
     * 
     * @param string $theme
     * @return array
     */
    public function content($theme) {
        $data = [
            'a1' => [
                '#theme' => 'a1',
                '#a11' => [
                    '#theme' => 'a11',
                    '#a111' => [
                        '#theme' => 'a111',
                    ],
                    '#a112' => [
                        '#theme' => 'a112',
                    ],
                ],
            ],
            'a11' => [
                '#theme' => 'a11',
                '#a111' => [
                    '#theme' => 'a111',
                ],
                '#a112' => [
                    '#theme' => 'a112',
                ],
            ],
            'a111' => [
                '#theme' => 'a111',
            ],
            'a112' => [
                '#theme' => 'a112',
            ],
        ];
        return $data[$theme];
    }

}
