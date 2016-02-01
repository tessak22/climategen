<?php
/**
 * Copyright 2006 - 2015 TubePress LLC (http://tubepress.com/)
 *
 * This file is part of TubePress Pro.
 *
 * License summary
 *   - Can be used on 1 site, 1 server
 *   - Cannot be resold or distributed
 *   - Commercial use allowed
 *   - Can modify source-code but cannot distribute modifications (derivative works)
 *
 * Please see http://tubepress.com/license for details.
 */

class tubepress_provimeo_impl_listeners_embedded_VimeoEmbeddedPlayerApiListener
{
    /**
     * @var tubepress_platform_api_url_UrlFactoryInterface
     */
    private $_urlFactory;

    public function __construct(tubepress_platform_api_url_UrlFactoryInterface $urlFactory)
    {
        $this->_urlFactory = $urlFactory;
    }

    public function onEmbeddedHtml(tubepress_lib_api_event_EventInterface $event)
    {
        $existingTemplateVars = $event->getArguments();

        if (!isset($existingTemplateVars[tubepress_app_api_template_VariableNames::MEDIA_ITEM])) {

            return;
        }

        $html      = $event->getSubject();
        $srcResult = preg_match_all('~.*\s+src="([^"]+)"\s+.*~', $html, $srcMatches);
        $idResult  = preg_match_all('~.*\s+id="([^"]+)"\s+.*~', $html, $idMatches);

        if ($srcResult !== 1 || $idResult !== 1) {

            return;
        }

        $srcAsString = $srcMatches[1][0];
        $idAsString  = $idMatches[1][0];
        $url         = $this->_urlFactory->fromString(htmlspecialchars_decode($srcAsString));

        $url->getQuery()->set('player_id', $idAsString);

        $newHtml = str_replace($srcAsString, htmlspecialchars($url->toString()), $html);

        $event->setSubject($newHtml);
    }
}