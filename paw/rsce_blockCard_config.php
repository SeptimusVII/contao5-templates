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
    'label' => ['Block Card'],
    'types' => ['content'],
    'contentCategory' => 'miscellaneous',
    'standardFields' => ['cssID'],
    'fields' => [
        'image_legend' => [
            'label' => ['Image'],
            'inputType' => 'group',
        ],
        'singleSRC' => [
            'inputType' => 'standardField',
            'eval' => ['tl_class' => 'w50', 'mandatory' => false],
        ],
        'alt' => [
            'inputType' => 'standardField',
            'eval' => ['tl_class' => 'clr w100 long'],
        ],
        'size' => [
            'inputType' => 'standardField',
        ],
        'image_css' => [
            'label' => ['Classe css image'], 'inputType' => 'text', 'eval' => ['tl_class' => 'w50', 'mandatory' => false],
        ],
        'image_displaymode' => array(
            'label' => ['Mode d\'affichage'],
            'inputType' => 'select',
            'options' => array(
                'fit--cover'    => 'Remplissage',
                'fit--contain'  => 'Ajusté',
                'fit--natural'  => 'Naturel',
            ),
            'default' => 'fit--cover',
            'eval' => array('tl_class'=>'w50 clr'),
        ),
        'image_ratio' => array(
            'label' => ['Ratio'],
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
                'field' => 'image_displaymode', 
                'value' => array('fit--cover','fit--contain'),
            ),
            'eval' => array('tl_class'=>'w50'),
        ),
        'image_align_horizontal' => array(
            'label' => ['Alignement horizontal'],
            'inputType' => 'select',
            'options' => array(
                'img--left'   => 'gauche',
                'img--center' => 'centre',
                'img--right'  => 'droite',
            ),
            'default' =>  'img--center',
            'dependsOn' => array(
                'field' => 'image_displaymode', 
                'value' => array('fit--cover','fit--contain'),
            ),
            'eval' => array('tl_class'=>'w50 clr'),
        ),
        'image_align_vertical' => array(
            'label' => ['Alignement vertical'],
            'inputType' => 'select',
            'options' => array(
                'img--top'    => 'haut',
                'img--center' => 'centre',
                'img--bottom' => 'bas',
            ),
            'default' =>  'img--center',
            'dependsOn' => array(
                'field' => 'image_displaymode', 
                'value' => array('fit--cover','fit--contain'),
            ),
            'eval' => array('tl_class'=>'w50'),
        ),
        'content_legend' => [
            'label' => ['Contenu'],
            'inputType' => 'group',
        ],
        'headline' => [
            'inputType' => 'standardField', 'eval' => ['tl_class' => 'w50', 'mandatory' => false, 'allowHtml' => true, 'includeBlankOption' => true],
        ],
        'title_css' => [
            'label' => ['Classe css titre'], 'inputType' => 'text', 'eval' => ['tl_class' => 'w50', 'mandatory' => false],
        ],
        'text' => [
            'inputType' => 'standardField',
            'eval' => ['tl_class' => 'clr', 'mandatory' => false],
        ],
        // 'content_background' => array(
        //     'label' => array('Couleur de fond', 'Si souhaité, ajustez la couleur de fond'),
        //     'inputType' => 'select',
        //     'options' => \WEM\SmartgearBundle\Classes\Util::getSmartgearColors(),
        //     'eval' => array('tl_class'=>'w50 clr','includeBlankOption'=>true),
        // ),
        // 'content_opacity' => array(
        //     'label' => array('Opacité du fond', 'Ajustez l\'opacité du fond de l\'item'),
        //     'inputType' => 'select',
        //     'options' => [
        //         '0'  => '0%',
        //         '1'  => '10%',
        //         '2'  => '20%',
        //         '3'  => '30%',
        //         '4'  => '40%',
        //         '5'  => '50%',
        //         '6'  => '60%',
        //         '7'  => '70%',
        //         '8'  => '80%',
        //         '9'  => '90%',
        //         '10' => '100%',
        //     ],
        //     'default' => '10',
        //     'eval' => ['tl_class' => 'w50', 'isAssociative' => true ],
        // ),
        'text_css' => [
            'label' => ['Classe css texte'], 'inputType' => 'text', 'eval' => ['tl_class' => 'long ', 'mandatory' => false],
        ],
        'link_legend' => [
            'label' => ['Lien'],
            'inputType' => 'group',
        ],
        'url' => [
            'inputType' => 'standardField',
            'eval' => ['mandatory' => false],
        ],
        'target' => [
            'inputType' => 'standardField',
            'eval' => ['tl_class' => 'w50 m12'],
        ],
        'titleText' => [
            'inputType' => 'standardField',
            'eval' => ['allowHtml' => true],
        ],
        'linkTitle' => [
            'inputType' => 'standardField',
            'eval' => ['allowHtml' => true],
        ],
        'link_mode' => [
            'label' => ['Type de lien'],
            'inputType' => 'select',
            'options' => [
                'wrapper' => 'Tout le block',
                'btn' => 'Boutton',
                'link' => 'Lien hypertext',
            ],
            'eval' => ['tl_class' => 'w50 clr'],
        ],
        'link_css' => [
            'label' => ['Classe css du lien'], 'inputType' => 'text', 'eval' => ['tl_class' => 'w50 ', 'mandatory' => false],
        ],
        'advanced_legend' => [
            'label' => ['Paramètres avancés'],
            'inputType' => 'group',
        ],
        'content_order' => [
            'label' => ['Ordre du contenu'],
            'inputType' => 'select',
            'options' => [
                'img_first' => 'Image en premier',
                'txt_first' => 'Texte en premier',
            ],
            'eval' => ['tl_class' => 'clr w50'],
        ],
        // 'addRadius' => [
        //     'label' => ['Block arrondis'],
        //     'inputType' => 'checkbox',
        //     'eval' => ['tl_class' => 'clr m12'],
        // ],
        'preset' => [
            'label' => ['Preset'],
            'inputType' => 'select',
            'options' => [
                'light' => 'Minimaliste',
                'thumbnail' => 'Miniature',
                'inline' => 'En ligne',
                'anael--navcard' => 'ANAEL - Navigation Card',
            ],
            'eval' => ['tl_class' => 'w50 clr', 'includeBlankOption' => true],
        ],
    ],
];
