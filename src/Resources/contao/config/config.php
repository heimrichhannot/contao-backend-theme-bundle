<?php

if (System::getContainer()->get(\Contao\CoreBundle\Routing\ScopeMatcher::class)->isBackendRequest(
    System::getContainer()->get(\Symfony\Component\HttpFoundation\RequestStack::class)->getCurrentRequest()
)) {
    $GLOBALS['TL_CSS']['contao-backend-theme-bundle'] = 'bundles/heimrichhannotbackendtheme/css/contao-backend-theme.css|static';
}