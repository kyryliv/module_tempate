<?php

namespace Drupal\funds_test\Controller;

use Drupal\Core\Controller\ControllerBase;

class FundsTestController extends ControllerBase {

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
