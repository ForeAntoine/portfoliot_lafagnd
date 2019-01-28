<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'TLAFAGND.PortfoliotLafagnd',
            'Trainingslafagnd',
            [
                'Training' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Training' => 'search'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'TLAFAGND.PortfoliotLafagnd',
            'Profilesafagnd',
            [
                'Profile' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Project' => '',
                'Profile' => '',
                'Training' => '',
                'Skill' => ''
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'TLAFAGND.PortfoliotLafagnd',
            'Projectafagnd',
            [
                'Project' => 'list, show, highlight, skills'
            ],
            // non-cacheable actions
            [
                'Project' => 'search'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    trainingslafagnd {
                        iconIdentifier = portfoliot_lafagnd-plugin-trainingslafagnd
                        title = LLL:EXT:portfoliot_lafagnd/Resources/Private/Language/locallang_db.xlf:tx_portfoliot_lafagnd_trainingslafagnd.name
                        description = LLL:EXT:portfoliot_lafagnd/Resources/Private/Language/locallang_db.xlf:tx_portfoliot_lafagnd_trainingslafagnd.description
                        tt_content_defValues {
                            CType = list
                            list_type = portfoliotlafagnd_trainingslafagnd
                        }
                    }
                    profilesafagnd {
                        iconIdentifier = portfoliot_lafagnd-plugin-profilesafagnd
                        title = LLL:EXT:portfoliot_lafagnd/Resources/Private/Language/locallang_db.xlf:tx_portfoliot_lafagnd_profilesafagnd.name
                        description = LLL:EXT:portfoliot_lafagnd/Resources/Private/Language/locallang_db.xlf:tx_portfoliot_lafagnd_profilesafagnd.description
                        tt_content_defValues {
                            CType = list
                            list_type = portfoliotlafagnd_profilesafagnd
                        }
                    }
                    projectafagnd {
                        iconIdentifier = portfoliot_lafagnd-plugin-projectafagnd
                        title = LLL:EXT:portfoliot_lafagnd/Resources/Private/Language/locallang_db.xlf:tx_portfoliot_lafagnd_projectafagnd.name
                        description = LLL:EXT:portfoliot_lafagnd/Resources/Private/Language/locallang_db.xlf:tx_portfoliot_lafagnd_projectafagnd.description
                        tt_content_defValues {
                            CType = list
                            list_type = portfoliotlafagnd_projectafagnd
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'portfoliot_lafagnd-plugin-trainingslafagnd',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:portfoliot_lafagnd/Resources/Public/Icons/user_plugin_trainingslafagnd.svg']
			);
		
			$iconRegistry->registerIcon(
				'portfoliot_lafagnd-plugin-profilesafagnd',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:portfoliot_lafagnd/Resources/Public/Icons/user_plugin_profilesafagnd.svg']
			);
		
			$iconRegistry->registerIcon(
				'portfoliot_lafagnd-plugin-projectafagnd',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:portfoliot_lafagnd/Resources/Public/Icons/user_plugin_projectafagnd.svg']
			);
		
    }
);
