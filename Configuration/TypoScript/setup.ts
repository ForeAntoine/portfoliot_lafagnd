
plugin.tx_portfoliotlafagnd_trainingslafagnd {
    view {
        templateRootPaths.0 = EXT:portfoliot_lafagnd/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_portfoliotlafagnd_trainingslafagnd.view.templateRootPath}
        partialRootPaths.0 = EXT:portfoliot_lafagnd/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_portfoliotlafagnd_trainingslafagnd.view.partialRootPath}
        layoutRootPaths.0 = EXT:portfoliot_lafagnd/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_portfoliotlafagnd_trainingslafagnd.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_portfoliotlafagnd_trainingslafagnd.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

plugin.tx_portfoliotlafagnd_profilesafagnd {
    view {
        templateRootPaths.0 = EXT:portfoliot_lafagnd/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_portfoliotlafagnd_profilesafagnd.view.templateRootPath}
        partialRootPaths.0 = EXT:portfoliot_lafagnd/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_portfoliotlafagnd_profilesafagnd.view.partialRootPath}
        layoutRootPaths.0 = EXT:portfoliot_lafagnd/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_portfoliotlafagnd_profilesafagnd.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_portfoliotlafagnd_profilesafagnd.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

plugin.tx_portfoliotlafagnd_projectafagnd {
    view {
        templateRootPaths.0 = EXT:portfoliot_lafagnd/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_portfoliotlafagnd_projectafagnd.view.templateRootPath}
        partialRootPaths.0 = EXT:portfoliot_lafagnd/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_portfoliotlafagnd_projectafagnd.view.partialRootPath}
        layoutRootPaths.0 = EXT:portfoliot_lafagnd/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_portfoliotlafagnd_projectafagnd.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_portfoliotlafagnd_projectafagnd.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

# these classes are only used in auto-generated templates
plugin.tx_portfoliotlafagnd._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-portfoliot-lafagnd table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-portfoliot-lafagnd table th {
        font-weight:bold;
    }

    .tx-portfoliot-lafagnd table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
