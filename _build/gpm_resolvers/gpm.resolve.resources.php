<?php
/**
 *
 * Resolve Resources
 *
 * THIS RESOLVER IS AUTOMATICALLY GENERATED, NO CHANGES WILL APPLY
 *
 * @package uswds-theme
 * @subpackage build
 */

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

if (!function_exists('setResourceMap')) {
    function setResourceMap($resourceMap) {
        global $modx;

        $assetsPath = rtrim($modx->getOption('uswds-theme.assets_path',null,$modx->getOption('assets_path').'components/uswds-theme/'), '/') . '/';
        $rmf = $assetsPath . 'resourcemap.php';
        file_put_contents($rmf, '<?php return ' . var_export($resourceMap, true) . ';');

    }
}

if (!function_exists('createResource')) {
    function createResource($resource) {
        global $modx;

        if (isset($resource['tvs'])) {
            $tvs = $resource['tvs'];
            unset($resource['tvs']);
        } else {
            $tvs = array();
        }

        $res = $modx->runProcessor('resource/create', $resource);
        $resObject = $res->getObject();

        if ($resObject && isset($resObject['id'])) {
            /** @var modResource $modResource */
            $modResource = $modx->getObject('modResource', array('id' => $resObject['id']));

            if ($modResource) {
                foreach ($tvs as $tv) {
                    $modResource->setTVValue($tv['name'], $tv['value']);
                }

                return $modResource->id;
            }
        }

        return false;
    }
}

if (!function_exists('updateResource')) {
    function updateResource($resource) {
        global $modx;

        if (isset($resource['tvs'])) {
            $tvs = $resource['tvs'];
            unset($resource['tvs']);
        } else {
            $tvs = array();
        }

        $res = $modx->runProcessor('resource/update', $resource);
        $resObject = $res->getObject();

        if ($resObject && isset($resObject['id'])) {
            /** @var modResource $modResource */
            $modResource = $modx->getObject('modResource', array('id' => $resObject['id']));

            if ($modResource) {
                foreach ($tvs as $tv) {
                    $modResource->setTVValue($tv['name'], $tv['value']);
                }

                return $modResource->id;
            }
        }

        return false;
    }
}

switch ($options[xPDOTransport::PACKAGE_ACTION]) {
    case xPDOTransport::ACTION_INSTALL:
    case xPDOTransport::ACTION_UPGRADE:
        $resources = array (
  0 => 
  array (
    'pagetitle' => 'Home',
    'alias' => 'index',
    'parent' => 0,
    'content' => '',
    'context_key' => 'web',
    'class_key' => 'modDocument',
    'longtitle' => 'Home',
    'description' => '',
    'isfolder' => 0,
    'introtext' => '',
    'deleted' => 0,
    'menutitle' => '',
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'set_as_home' => 1,
    'tvs' => 
    array (
      'content_tpl' => 
      array (
        'name' => 'content_tpl',
        'value' => 'grid',
      ),
      'body_tpl' => 
      array (
        'name' => 'body_tpl',
        'value' => 'page',
      ),
      'page_icon' => 
      array (
        'name' => 'page_icon',
        'value' => 'fa-home',
      ),
      'page_img' => 
      array (
        'name' => 'page_img',
        'value' => '',
      ),
      'fpost_ids' => 
      array (
        'name' => 'fpost_ids',
        'value' => '',
      ),
      'hero_banner' => 
      array (
        'name' => 'hero_banner',
        'value' => '',
      ),
      'carousel_ids' => 
      array (
        'name' => 'carousel_ids',
        'value' => '',
      ),
      'slider_ids' => 
      array (
        'name' => 'slider_ids',
        'value' => '',
      ),
      'listing_ids' => 
      array (
        'name' => 'listing_ids',
        'value' => '',
      ),
      'listbyparent' => 
      array (
        'name' => 'listbyparent',
        'value' => '',
      ),
    ),
    'template' => 'MX Template',
    'content_type' => 1,
    'published' => 1,
  ),
);

        $resourceMap = getResourceMap();
        $toRemove = $resourceMap;
        $siteStart = $modx->getOption('site_start');

        foreach ($resources as $resource) {
            if (is_string($resource['parent'])) {
                if (isset($resourceMap[$resource['parent']])) {
                    $resource['parent'] = $resourceMap[$resource['parent']];
                } else {
                    /** @var modResource $parent */
                    $parent = $modx->getObject('modResource', array('pagetitle' => $resource['parent']));
                    if ($parent) {
                        $resource['parent'] = $parent->id;
                    }
                }
            } else {
                if ($resource['parent'] != 0) {
                    /** @var modResource $parent */
                    $parent = $modx->getObject('modResource', array('id' => $resource['parent']));
                    if ($parent) {
                        $resource['parent'] = $parent->id;
                    }
                } else {
                    $resource['parent'] = 0;
                }
            }

            if ($resource['template'] !== null) {
                if ($resource['template'] !== 0) {
                    $template = $modx->getObject('modTemplate', array('templatename' => $resource['template']));
                    if ($template) {
                        $resource['template'] = $template->id;
                    }
                } else {
                    $resource['template'] = 0;
                }
            }

            if ($resource['content_type'] !== null) {
                $content_type = $modx->getObject('modContentType', array('name' => $resource['content_type']));
                if ($content_type) {
                    $resource['content_type'] = $content_type->id;
                }
            } else {
                $resource['content_type'] = $modx->getOption('default_content_type', null, 1);
            }

            if (isset($resourceMap[$resource['pagetitle']])) {
                unset($toRemove[$resource['pagetitle']]);

                /** @var modResource $exists */
                $exists = $modx->getObject('modResource', array('id' => $resourceMap[$resource['pagetitle']]));
                if ($exists) {
                    $resource['id'] = $exists->id;
                    $resId = updateResource($resource);

                    if ($resId !== false) {
                        $resourceMap[$resource['pagetitle']] = $resId;
                    }
                } else {
                    if ($resource['set_as_home'] == 1) {
                        unset($resource['set_as_home']);
                        $resource['id'] = $siteStart;

                        $resId = updateResource($resource);

                        if ($resId !== false) {
                            $resourceMap[$resource['pagetitle']] = $resId;
                        }
                    } else {
                        $resId = createResource($resource);

                        if ($resId !== false) {
                            $resourceMap[$resource['pagetitle']] = $resId;
                        }
                    }
                }
            } else {
                $resId = createResource($resource);

                if ($resId !== false) {
                    $resourceMap[$resource['pagetitle']] = $resId;
                }
            }
        }

        foreach ($toRemove as $pageTitle => $resource) {
            unset($resourceMap[$pageTitle]);

            if ($resource == $siteStart) continue;

            /** @var modResource $modResource */
            $modResource = $modx->getObject('modResource', $resource);
            if ($modResource) {
                $modx->updateCollection('modResource', array('parent' => 0), array('parent' => $resource));

                $modResource->remove();
            }
        }

        setResourceMap($resourceMap);

        break;
    case xPDOTransport::ACTION_UNINSTALL:

        break;
}

return true;