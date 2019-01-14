<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:portfoliot_lafagnd/Resources/Private/Language/locallang_db.xlf:tx_portfoliotlafagnd_domain_model_profil',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'sortby' => 'sorting',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'name,first_name,birth_date,driving_licence,phone,mail,address,photo,projects,job,social,training',
        'iconfile' => 'EXT:portfoliot_lafagnd/Resources/Public/Icons/tx_portfoliotlafagnd_domain_model_profil.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, first_name, birth_date, driving_licence, phone, mail, address, photo, projects, job, social, training',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, first_name, birth_date, driving_licence, phone, mail, address, photo, projects, job, social, training, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_portfoliotlafagnd_domain_model_profil',
                'foreign_table_where' => 'AND tx_portfoliotlafagnd_domain_model_profil.pid=###CURRENT_PID### AND tx_portfoliotlafagnd_domain_model_profil.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
            ],
        ],

        'name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfoliot_lafagnd/Resources/Private/Language/locallang_db.xlf:tx_portfoliotlafagnd_domain_model_profil.name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'first_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfoliot_lafagnd/Resources/Private/Language/locallang_db.xlf:tx_portfoliotlafagnd_domain_model_profil.first_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'birth_date' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfoliot_lafagnd/Resources/Private/Language/locallang_db.xlf:tx_portfoliotlafagnd_domain_model_profil.birth_date',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'driving_licence' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfoliot_lafagnd/Resources/Private/Language/locallang_db.xlf:tx_portfoliotlafagnd_domain_model_profil.driving_licence',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'phone' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfoliot_lafagnd/Resources/Private/Language/locallang_db.xlf:tx_portfoliotlafagnd_domain_model_profil.phone',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'mail' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfoliot_lafagnd/Resources/Private/Language/locallang_db.xlf:tx_portfoliotlafagnd_domain_model_profil.mail',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'nospace,email'
            ]
        ],
        'address' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfoliot_lafagnd/Resources/Private/Language/locallang_db.xlf:tx_portfoliotlafagnd_domain_model_profil.address',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'photo' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfoliot_lafagnd/Resources/Private/Language/locallang_db.xlf:tx_portfoliotlafagnd_domain_model_profil.photo',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'photo',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
                    ],
                    'foreign_types' => [
                        '0' => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ]
                    ],
                    'maxitems' => 1,
                    'minitems' => 1
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
        ],
        'projects' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfoliot_lafagnd/Resources/Private/Language/locallang_db.xlf:tx_portfoliotlafagnd_domain_model_profil.projects',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_portfoliotlafagnd_domain_model_project',
                'foreign_field' => 'profil',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],

        ],
        'job' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfoliot_lafagnd/Resources/Private/Language/locallang_db.xlf:tx_portfoliotlafagnd_domain_model_profil.job',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_portfoliotlafagnd_domain_model_job',
                'foreign_field' => 'profil',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],

        ],
        'social' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfoliot_lafagnd/Resources/Private/Language/locallang_db.xlf:tx_portfoliotlafagnd_domain_model_profil.social',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_portfoliotlafagnd_domain_model_social',
                'foreign_field' => 'profil',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],

        ],
        'training' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfoliot_lafagnd/Resources/Private/Language/locallang_db.xlf:tx_portfoliotlafagnd_domain_model_profil.training',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_portfoliotlafagnd_domain_model_training',
                'MM' => 'tx_portfoliotlafagnd_profil_training_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],
            
        ],
    
    ],
];
