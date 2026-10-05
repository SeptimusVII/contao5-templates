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
    'label' => ['Block Card Icon'],
    'types' => ['content'],
    'contentCategory' => 'miscellaneous',
    'standardFields' => ['cssID'],
    'fields' => [
        'icon_legend' => [
            'label' => ['Icône'],
            'inputType' => 'group',
        ],
        'html' => [
            'inputType' => 'standardField',
            'eval' => ['tl_class' => 'clr w100 long'],
        ],
        'icon_pos' => [
            'label' => ['Position'],
            'inputType' => 'select',
            'options' => [
                'left' => 'Gauche',
                'right' => 'Droite',
            ],
            'eval' => ['tl_class' => 'clr w50'],
        ],
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
