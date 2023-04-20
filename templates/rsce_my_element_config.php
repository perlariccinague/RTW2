<?php
// rsce_my_element_config.php
return array(
    'label' => array('Showroom Document-Title ', 'Hier die exakte Bezeichnung einfügen wie -> Checkbox Feld im Formulargenerator'),
    'types' => array('content', 'module'),
    'contentCategory' => 'texts',
    'moduleCategory' => 'miscellaneous',
    'standardFields' => array('headline', 'cssID'),
    'wrapper' => array(
        'type' => 'none',
    ),
    'fields' => array(
        'text' => array(
            'label' => array('Text', 'Beschreibung...'),
            'eval' => array('rte' => 'tinyMCE'),
            'inputType' => 'textarea',
        ),
    ),
);