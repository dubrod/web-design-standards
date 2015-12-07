<?php
if (!$object->xpdo) return false;
/** @var modX $modx */
$modx =& $object->xpdo;

if (!function_exists('getResourceMap')) {
    function getResourceMap() {
        global $modx;

        $assetsPath = rtrim($modx->getOption('uswds-theme.assets_path',null,$modx->getOption('assets_path').'components/uswds-theme/'), '/') . '/';
        $rmf = $assetsPath . 'resourcemap.php';

        if (is_readable($rmf)) {
            $map = include $rmf;
        } else {
            $map = array();
        }

        return $map;
    }
}

switch ($options[xPDOTransport::PACKAGE_ACTION]) {
    case xPDOTransport::ACTION_INSTALL:

        $themeSetting = $modx->getObject('modSystemSetting', array('key' => 'mxt.theme'));
        if ($themeSetting) {
            $themeSetting->set('value','uswds');
            $themeSetting->save();
        }

        $themeCopyrightSetting = $modx->getObject('modSystemSetting', array('key' => 'mxt.default_copyright'));
        if ($themeCopyrightSetting) {
            $themeCopyrightSetting->set('value','&copy;2015 MODX');
            $themeCopyrightSetting->save();
        }

        $themeSloganSetting = $modx->getObject('modSystemSetting', array('key' => 'mxt.default_slogan'));
        if ($themeSloganSetting) {
            $themeSloganSetting->set('value','Open source UI components and visual style guide');
            $themeSloganSetting->save();
        }

        $themeFBSetting = $modx->getObject('modSystemSetting', array('key' => 'mxt.social_facebook'));
        if ($themeFBSetting) {
            $themeFBSetting->set('value','https://www.facebook.com/modxcms');
            $themeFBSetting->save();
        }

        $themeTWITSetting = $modx->getObject('modSystemSetting', array('key' => 'mxt.social_twitter'));
        if ($themeTWITSetting) {
            $themeTWITSetting->set('value','https://twitter.com/modx');
            $themeTWITSetting->save();
        }

        $themeImgSetting = $modx->getObject('modSystemSetting', array('key' => 'mxt.default_theme_img'));
        if ($themeImgSetting) {
            $themeImgSetting->set('value','assets/components/uswds-theme/img/logo-img.png');
            $themeImgSetting->save();
        }

        break;
    case xPDOTransport::ACTION_UPGRADE:

        $resourceMap = getResourceMap();
        $rssResource = '';

        if (!empty($resourceMap)) {
            $rssResource = '';
        }

        break;
    case xPDOTransport::ACTION_UNINSTALL:
        break;
}

return true;
