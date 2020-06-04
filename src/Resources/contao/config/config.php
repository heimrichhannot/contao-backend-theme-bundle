<?php

/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['initializeSystem']['contaoBackendThemeBundle'] = [\HeimrichHannot\BackendThemeBundle\EventListener\HookListener::class, '__invoke'];
