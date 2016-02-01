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

/**
 * Pro mods for video construction.
 */
class tubepress_proyoutube_impl_listeners_media_ProHttpItemListener extends tubepress_procore_impl_listeners_media_AbstractHttpItemListener
{
    protected function convertThumbToHQ(tubepress_app_api_media_MediaItem      $mediaItem,
                                        tubepress_lib_api_event_EventInterface $event)
    {
        $index      = $event->getArgument('zeroBasedIndex');
        $metadata   = $event->getArgument('metadataAsArray');
        $reader     = $this->getArrayReader();
        $items      = $reader->getAsArray($metadata, tubepress_youtube3_impl_ApiUtility::RESPONSE_ITEMS);
        $item       = $items[$index];
        $hqThumbUrl = $reader->getAsString($item, sprintf('%s.%s.%s.%s',
            tubepress_youtube3_impl_ApiUtility::RESOURCE_VIDEO_SNIPPET,
            tubepress_youtube3_impl_ApiUtility::RESOURCE_VIDEO_SNIPPET_THUMBS,
            'high',
            tubepress_youtube3_impl_ApiUtility::RESOURCE_VIDEO_SNIPPET_THUMBS_URL
        ));

        $mediaItem->setAttribute(tubepress_app_api_media_MediaItem::ATTRIBUTE_THUMBNAIL_URL, $hqThumbUrl);
    }
}