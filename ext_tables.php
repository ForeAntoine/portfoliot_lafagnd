<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Pottfoliotlafagnd.PortfoliotLafagnd',
            'Trainingslafagnd',
            'catalogue de formation'
        );

        $pluginSignature = str_replace('_', '', 'portfoliot_lafagnd') . '_trainingslafagnd';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:portfoliot_lafagnd/Configuration/FlexForms/flexform_trainingslafagnd.xml');

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Pottfoliotlafagnd.PortfoliotLafagnd',
            'Profilesafagnd',
            'CVteque'
        );

        $pluginSignature = str_replace('_', '', 'portfoliot_lafagnd') . '_profilesafagnd';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:portfoliot_lafagnd/Configuration/FlexForms/flexform_profilesafagnd.xml');

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Pottfoliotlafagnd.PortfoliotLafagnd',
            'Projectafagnd',
            'Projects'
        );

        $pluginSignature = str_replace('_', '', 'portfoliot_lafagnd') . '_projectafagnd';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:portfoliot_lafagnd/Configuration/FlexForms/flexform_projectafagnd.xml');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('portfoliot_lafagnd', 'Configuration/TypoScript', 'Portfolio TL AF AG ND');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_portfoliotlafagnd_domain_model_project', 'EXT:portfoliot_lafagnd/Resources/Private/Language/locallang_csh_tx_portfoliotlafagnd_domain_model_project.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_portfoliotlafagnd_domain_model_project');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_portfoliotlafagnd_domain_model_profile', 'EXT:portfoliot_lafagnd/Resources/Private/Language/locallang_csh_tx_portfoliotlafagnd_domain_model_profile.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_portfoliotlafagnd_domain_model_profile');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_portfoliotlafagnd_domain_model_training', 'EXT:portfoliot_lafagnd/Resources/Private/Language/locallang_csh_tx_portfoliotlafagnd_domain_model_training.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_portfoliotlafagnd_domain_model_training');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_portfoliotlafagnd_domain_model_job', 'EXT:portfoliot_lafagnd/Resources/Private/Language/locallang_csh_tx_portfoliotlafagnd_domain_model_job.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_portfoliotlafagnd_domain_model_job');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_portfoliotlafagnd_domain_model_skill', 'EXT:portfoliot_lafagnd/Resources/Private/Language/locallang_csh_tx_portfoliotlafagnd_domain_model_skill.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_portfoliotlafagnd_domain_model_skill');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_portfoliotlafagnd_domain_model_category', 'EXT:portfoliot_lafagnd/Resources/Private/Language/locallang_csh_tx_portfoliotlafagnd_domain_model_category.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_portfoliotlafagnd_domain_model_category');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_portfoliotlafagnd_domain_model_social', 'EXT:portfoliot_lafagnd/Resources/Private/Language/locallang_csh_tx_portfoliotlafagnd_domain_model_social.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_portfoliotlafagnd_domain_model_social');

    }
);
