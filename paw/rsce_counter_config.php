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
    'label' => ['rsce_counter'], 
    'contentCategory' => 'miscellaneous', 
    'standardFields' => ['cssID'], 
    'fields' => [
        'config_legend' => [
            'label' => ['Configuration'], 
            'inputType' => 'group',
        ], 
        'startVal' => [
            'label' => ['Valeur de départ'], 
            'inputType' => 'text', 
            'eval' => ['tl_class' => 'w50', 
            'rgxp' => 'digit', 
            'mandatory' => true],
        ], 
        'endVal' => [
            'label' => ['valeur de fin'], 
            'inputType' => 'text', 
            'eval' => ['tl_class' => 'w50', 
            'rgxp' => 'digit', 
            'mandatory' => true],
        ],
        'prefix' =>[
            'label' =>['prefixe'],
            'inputType' => 'text',
            'eval' =>['tl_class' => 'w50']
        ],
        'unit' => [
            'label' => ['unité'], 
            'inputType' => 'text', 
            'eval' => ['tl_class' => 'w50'],
        ], 
        'decimals' => [
            'label' => ['Nombre de décimales','Définissez le nombre de décimales du compteur (0 par défaut)'], 
            'inputType' => 'text', 
            'eval' => ['tl_class' => 'w50', 
            'rgxp' => 'digit', 
            'minval' => 0],
        ], 
        'decimal' =>[
            'label' =>['Symbole décimales','Définissez le symbole de séparation des décimales ( . par défaut)'],
            'inputType' => 'text',
            'eval' =>['tl_class' => 'w50']
        ],
        'separator' =>[
            'label' =>['Séparateur milliers'],
            'inputType' => 'checkbox',
            'default' => 1,
            'eval' =>['tl_class' => 'w50 clr']
        ],
        'duration' => [
            'label' => ['Durée','En secondes'], 
            'inputType' => 'text', 
            'eval' => ['tl_class' => 'w50 clr', 
            'rgxp' => 'digit', 
            'minval' => 0],
        ], 
        'delay' => [
            'label' => ['Délai de déclenchement','En secondes'], 
            'inputType' => 'text', 
            'eval' => ['tl_class' => 'w50', 
            'rgxp' => 'digit', 
            'minval' => 0],
        ], 
        'label' => [
            'label' => ['Texte','Définissez un court texte qui sera affiché en dessous du compteur'], 
            'inputType' => 'text', 
            'eval' => ['tl_class' => 'w50'],
        ],
        'icon' =>[
            'label' =>['Icone','Indiquez si souhaité le &lt;b&gt;code html&lt;/b&gt; d\'une icone &lt;a style=&quot;text-decoration: underline&quot; href=&quot;https://fontawesome.com/search&quot; target=&quot;_blank&quot;&gt;Font Awesome&lt;/a&gt; à placer au dessus du compteur'],
            'inputType' => 'text',
            'eval' =>['tl_class' => 'w50','allowHtml'=>true]
        ],
    //     'color' =>[
    //         'label' =>['dominant_color'],
    //         'inputType' => 'select',
    //         'options' => \WEM\SmartgearBundle\Classes\Util::getSmartgearColors(),
    //         'eval' =>['tl_class'=>'w50','includeBlankOption'=>true]
    //     ],
    ],
];
