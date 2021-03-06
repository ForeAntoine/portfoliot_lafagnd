<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:portfoliot_lafagnd/Resources/Private/Language/locallang_db.xlf:tx_portfoliotlafagnd_domain_model_job',
        'label' => 'job_name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'job_name,company_name,description,date_debut,date_fin,contract,localisation,skills',
        'iconfile' => 'EXT:portfoliot_lafagnd/Resources/Public/Icons/tx_portfoliotlafagnd_domain_model_job.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, job_name, company_name, description, date_debut, date_fin, contract, localisation, skills',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, job_name, company_name, description, date_debut, date_fin, contract, localisation, skills, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table' => 'tx_portfoliotlafagnd_domain_model_job',
                'foreign_table_where' => 'AND tx_portfoliotlafagnd_domain_model_job.pid=###CURRENT_PID### AND tx_portfoliotlafagnd_domain_model_job.sys_language_uid IN (-1,0)',
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

        'job_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfoliot_lafagnd/Resources/Private/Language/locallang_db.xlf:tx_portfoliotlafagnd_domain_model_job.job_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'company_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfoliot_lafagnd/Resources/Private/Language/locallang_db.xlf:tx_portfoliotlafagnd_domain_model_job.company_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'description' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfoliot_lafagnd/Resources/Private/Language/locallang_db.xlf:tx_portfoliotlafagnd_domain_model_job.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'date_debut' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfoliot_lafagnd/Resources/Private/Language/locallang_db.xlf:tx_portfoliotlafagnd_domain_model_job.date_debut',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 7,
                'eval' => 'date,required',
                'default' => time()
            ],
        ],
        'date_fin' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfoliot_lafagnd/Resources/Private/Language/locallang_db.xlf:tx_portfoliotlafagnd_domain_model_job.date_fin',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 7,
                'eval' => 'date',
                'default' => time()
            ],
        ],
        'contract' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfoliot_lafagnd/Resources/Private/Language/locallang_db.xlf:tx_portfoliotlafagnd_domain_model_job.contract',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['-- Label --', 0],
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => 'required'
            ],
        ],
        'localisation' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfoliot_lafagnd/Resources/Private/Language/locallang_db.xlf:tx_portfoliotlafagnd_domain_model_job.localisation',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'skills' => [
            'exclude' => true,
            'label' => 'LLL:EXT:portfoliot_lafagnd/Resources/Private/Language/locallang_db.xlf:tx_portfoliotlafagnd_domain_model_job.skills',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_portfoliotlafagnd_domain_model_skill',
                'MM' => 'tx_portfoliotlafagnd_job_skill_mm',
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
    
        'profile' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ],
];
