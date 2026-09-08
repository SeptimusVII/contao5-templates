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

use Contao\BackendUser;
use Contao\System;

return [
    'label' => ['Bannière', 'Bannière (Hero)'], 
    'contentCategory' => 'banner', 
    'standardFields' => ['cssID'], 
    'fields' => [
        'image_legend' => [
            'label' => ['Image'],
            'inputType' => 'group',
        ],
        'singleSRC' => [
            'inputType' => 'standardField',
        ],
        'size' => [
            'inputType' => 'standardField',
            'eval' => ['mandatory' => false]
        ],
        'alt' => [
            'inputType' => 'standardField',
            'eval' => ['tl_class' => 'w50'],
        ],
        'image_align_horizontal' => array(
            'label' => ['Alignement image horizontal'],
            'inputType' => 'select',
            'options' => array(
                'img--left'   => 'left',
                'img--center' => 'center',
                'img--right'  => 'right',
            ),
            'default' =>  'img--center',
            'eval' => array('tl_class'=>'w50 clr'),
        ),
        'image_align_vertical' => array(
            'label' => ['Alignement image vertical'],
            'inputType' => 'select',
            'options' => array(
                'img--top'    => 'top',
                'img--center' => 'center',
                'img--bottom' => 'bottom',
            ),
            'default' =>  'img--center',
            'eval' => array('tl_class'=>'w50'),
        ),
        'image_opacity' => [
            'label' => ['Opacité image'],
            'inputType' => 'select',
            'options' => [
                '0' => '0%',
                '1' => '10%',
                '2' => '20%',
                '3' => '30%',
                '4' => '40%',
                '5' => '50%',
                '6' => '60%',
                '7' => '70%',
                '8' => '80%',
                '9' => '90%',
                '10' => '100%',
            ],
            'default' => '10',
            'eval' => ['tl_class' => 'w50', 'isAssociative' => true],
        ],
        'overlay_legend' => [
            'label' => ['Overlay'],
            'inputType' => 'group',
        ],
        'overlay_background' => array(
            'label' => ['Couleur'],
            'inputType' => 'select',
            'options' => [
                "primary"=>"Primaire"
                ,"secondary"=>"Secondaire"
                ,"success"=>"Succès"
                ,"error"=>"Erreur"
                ,"warning"=>"Avertissement"
                ,"red"=>"red"
                ,"grey"=>"grey"
                ,"yellow"=>"yellow"
                ,"blue"=>"blue"
                ,"green"=>"green"
                ,"orange"=>"orange"
                ,"darkblue"=>"darkblue"
                ,"gold"=>"gold"
                ,"black"=>"black"
                ,"blacklight"=>"blacklight"
                ,"blacklighter"=>"blacklighter"
                ,"greystronger"=>"greystronger"
                ,"greystrong"=>"greystrong"
                ,"greylight"=>"greylight"
                ,"greylighter"=>"greylighter"
                ,"white"=>"white"
                ,"none"=> "none"
            ],
            'eval' => array('tl_class'=>'w50 clr','includeBlankOption'=>true),
        ),
        'overlay_opacity' => array(
            'label' => ['Opacité'],
            'inputType' => 'select',
            'options' => [
                '0'  => '0%',
                '1'  => '10%',
                '2'  => '20%',
                '3'  => '30%',
                '4'  => '40%',
                '5'  => '50%',
                '6'  => '60%',
                '7'  => '70%',
                '8'  => '80%',
                '9'  => '90%',
                '10' => '100%',
            ],
            'default' => '2',
            'eval' => ['tl_class' => 'w50', 'isAssociative' => true ],
        ),
        'content_legend' => [
            'label' => ['Contenus'],
            'inputType' => 'group',
        ],
        'headline' => [
            'inputType' => 'standardField',
            'eval' => ['mandatory' => false, 'includeBlankOption' => true, 'allowHtml'=>true],
        ],
        'title_modifier' => [
            'label' => ['Modificateur titre'],
            'inputType' => 'select',
            'options' => [
                'title--1' => 'title--1',
                'title--2' => 'title--2',
                'title--3' => 'title--3',
                'title--4' => 'title--4',
            ],
            'eval' => ['tl_class' => 'w50','includeBlankOption'=>true],
        ],
        'title_css' => [
            'label' => ['Classe css titre'], 'inputType' => 'text', 'eval' => ['tl_class' => 'w50', 'mandatory' => false],
        ],
        'text' => [
            'inputType' => 'standardField',
            'eval' => ['mandatory' => false, 'tl_class' => 'clr'],
        ],
        'content_horizontal' => [
            'label' => ['Alignement contenu horizontal'],
            'inputType' => 'select',
            'options' => [
                '' => 'default',
                'center' => 'Centre',
                'left' => 'Gauche',
                'right' => 'Droite',
            ],
            'eval' => ['tl_class' => 'w50'],
        ],
        'content_vertical' => [
            'label' => ['Alignement contenu vertical'],
            'inputType' => 'select',
            'options' => [
                '' => 'default',
                'center' => 'Centre',
                'top' => 'Haut',
                'bottom' => 'Bas',
            ],
            'eval' => ['tl_class' => 'w50'],
        ],
        'content_fontcolor' => array(
            'label' => ['Couleur police'],
            'inputType' => 'select',
            'options' => [
                "primary"=>"Primaire"
                ,"secondary"=>"Secondaire"
                ,"success"=>"Succès"
                ,"error"=>"Erreur"
                ,"warning"=>"Avertissement"
                ,"red"=>"red"
                ,"grey"=>"grey"
                ,"yellow"=>"yellow"
                ,"blue"=>"blue"
                ,"green"=>"green"
                ,"orange"=>"orange"
                ,"darkblue"=>"darkblue"
                ,"gold"=>"gold"
                ,"black"=>"black"
                ,"blacklight"=>"blacklight"
                ,"blacklighter"=>"blacklighter"
                ,"greystronger"=>"greystronger"
                ,"greystrong"=>"greystrong"
                ,"greylight"=>"greylight"
                ,"greylighter"=>"greylighter"
                ,"white"=>"white"
                ,"none"=> "none"
            ],
            'eval' => array('tl_class'=>'w50 clr','includeBlankOption'=>true),
        ),
        // Link
        'link_legend' => [
            'label' => ['Lien'],
            'inputType' => 'group',
        ],
        'link_href' => [
            'label' => &$GLOBALS['TL_LANG']['MSC']['url'], 'inputType' => 'text', 'eval' => ['rgxp' => 'url', 'tl_class' => 'w50 wizard', 'dcaPicker'=>true],
        ], 
        'link_text' => [
            'label' => ['Texte du lien'], 'inputType' => 'text', 'eval' => ['tl_class' => 'w50'],
        ], 
        'link_title' => [
            'label' => ['Attribut title du lien'], 'inputType' => 'text', 'eval' => ['tl_class' => 'w50'],
        ], 
        'link_classes' => [
            'label' => ['Classe css lien'], 'inputType' => 'text', 'eval' => ['tl_class' => 'w50'],
        ], 
        'link_target' => [
            'label' => &$GLOBALS['TL_LANG']['MSC']['target'], 'inputType' => 'checkbox', 'eval' => ['tl_class' => 'w50'],
        ],
        'config_legend' => [
            'label' => ['Configuration avancée'], 'inputType' => 'group',
        ],
        'hero_height' => [
            'label' => ['Hauteur bannière'],
            'inputType' => 'radio',
            'options' => [
                'viewport' => 'viewport',
                'content' => 'content',
                'custom' => 'custom',
            ],
            'default' => 'custom',
            'eval' => ['tl_class' => 'w50 clr'],
        ],
        'block_height' => [
            'label' => '',
            'inputType' => 'text',
            'eval' => ['tl_class' => 'w50 clr cbx', 'style' => 'margin-top: 0;', 'mandatory' => true],
            'default' => '40vh',
            'dependsOn' => [
                'field' => 'hero_height',
                'value' => 'custom',
            ],
        ],
        'hero_width' => [
            'label' => ['Largeur bannière'],
            'inputType' => 'radio',
            'options' => [
                'default' => 'default',
                'viewport' => 'viewport',
                'container' => 'container',
                'content' => 'content',
            ],
            'default' => 'default',
            'eval' => ['tl_class' => 'w50 clr'],
        ],
    ],
];
