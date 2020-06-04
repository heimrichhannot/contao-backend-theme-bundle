<?php

/*
 * Copyright (c) 2020 Heimrich & Hannot GmbH
 *
 * @license LGPL-3.0-or-later
 */

namespace HeimrichHannot\BackendThemeBundle\EventListener;

use Contao\CoreBundle\Routing\ScopeMatcher;
use Symfony\Component\HttpFoundation\RequestStack;

class HookListener
{
    /**
     * @var ScopeMatcher
     */
    private $scopeMatcher;
    /**
     * @var RequestStack
     */
    private $requestStack;

    public function __construct(ScopeMatcher $scopeMatcher, RequestStack $requestStack)
    {
        $this->scopeMatcher = $scopeMatcher;
        $this->requestStack = $requestStack;
    }

    public function __invoke(): void
    {
        if (null !== $this->requestStack->getCurrentRequest() && $this->scopeMatcher->isBackendRequest(
            $this->requestStack->getCurrentRequest()
        )) {
            $GLOBALS['TL_CSS']['contao-backend-theme-bundle'] = 'bundles/heimrichhannotbackendtheme/css/contao-backend-theme.css|static';
        }
    }
}
