<?php

declare(strict_types=1);

/**
 * SMARTGEAR for Contao Open Source CMS
 * Copyright (c) 2015-2022 Web ex Machina
 *
 * @category ContaoBundle
 * @package  Web-Ex-Machina/contao-smartgear
 * @author   Web ex Machina <contact@webexmachina.fr>
 * @link     https://github.com/Web-Ex-Machina/contao-smartgear/
 */

return [
    'label' => ['Citation'],
    'types' => ['content'],
    'contentCategory' => 'texts',
    'standardFields' => ['cssID'],
    'fields' => [
        'image_legend' => [
            'label' => ['Image'],
            'inputType' => 'group',
        ],
        'singleSRC' => [
            'inputType' => 'standardField',
            'eval' => ['mandatory' => false],
        ],
        'alt' => [
            'inputType' => 'standardField',
            'eval' => ['tl_class' => 'w100 long'],
        ],
        'size' => [
            'inputType' => 'standardField',
            'eval' => ['mandatory' => false]
        ],
        'image_pos' => array(
            'label' => ['Position image'],
            'inputType' => 'select',
            'options' => array(
                'before' => 'Gauche',
                'after' => 'Droite',
            ),
            'eval' => array('tl_class'=>'w50'),
        ),
        'image_ratio' => array(
            'label' => ['Ratio image'],
            'inputType' => 'select',
            'options' => array(
                '' => 'Original',
                'r_16-9' => '16:9',
                'r_4-3'  => '4:3',
                'r_2-1'  => '2:1',
                'r_1-1'  => '1:1',
                'r_1-2'  => '1:2',
            ),
            'dependsOn' => array(
                // 'field' => 'image_displaymode', 
                // 'value' => 'img--cover',
            ),
            'eval' => array('tl_class'=>'w50'),
        ),
        'image_displaymode' => array(
            'label' => ['image_displaymode'],
            'inputType' => 'select',
            'options' => array(
                'fit--cover'    => 'Remplir',
                'fit--contain'  => 'Ajustée',
                // 'fit--natural'  => 'image_displaymode natural',
            ),
            'default' => 'fit--cover',
            'dependsOn' => array(
                'field' => 'image_ratio', 
                'value' => array(
                    'r_16-9',
                    'r_4-3' ,
                    'r_2-1' ,
                    'r_1-1' ,
                    'r_1-2' ,
                ),
            ),
            'eval' => array('tl_class'=>'w50 '),
        ),
        'image_align_horizontal' => array(
            'label' => ['Alignement image horizontal'],
            'inputType' => 'select',
            'options' => array(
                'img--left'   => 'Gauche',
                'img--center' => 'Centre',
                'img--right'  => 'Droite',
            ),
            'default' =>  'img--center',
            // 'dependsOn' => array(
            //     'field' => 'image_displaymode', 
            //     'value' => 'img--cover',
            // ),
            'eval' => array('tl_class'=>'w50 clr'),
        ),
        'image_align_vertical' => array(
            'label' => ['Alignement image vertical'],
            'inputType' => 'select',
            'options' => array(
                'img--top'    => 'Haut',
                'img--center' => 'Centre',
                'img--bottom' => 'Bas',
            ),
            'default' =>  'img--center',
            // 'dependsOn' => array(
            //     'field' => 'image_displaymode', 
            //     'value' => 'img--cover',
            // ),
            'eval' => array('tl_class'=>'w50'),
        ),
        'rounded' => [
            'label'     => ['Bords image arrondis'],
            'inputType' => 'checkbox', 
            'default' => false,
            'eval'      => ['tl_class' => 'w50 clr'],
        ],
        'content_legend' => [
            'label' => ['Contenu'],
            'inputType' => 'group',
        ],
        'text' => [
            'inputType' => 'standardField',
            'eval' => ['mandatory' => true, 'tl_class' => 'clr'],
        ],
        'author' => [
            'label' => ['Auteur'], 
            'inputType' => 'text', 
            'eval' => ['tl_class' => 'w50 clr', 'mandatory' => false],
        ],
    ],
];