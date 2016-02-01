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
class tubepress_provimeo_impl_listeners_media_ProHttpItemListener extends tubepress_procore_impl_listeners_media_AbstractHttpItemListener
{
    protected function convertThumbToHQ(tubepress_app_api_media_MediaItem $mediaItem, tubepress_lib_api_event_EventInterface $event)
    {
        $video          = $event->getSubject();
        $videoArray     = $event->getArgument('videoArray');
        $index          = $event->getArgument('zeroBasedIndex');
        $node           = $videoArray[$index];
        $thumbnailArray = $node->thumbnails->thumbnail;
        $size           = count($thumbnailArray);

        do {

            $size--;
            $thumb = $thumbnailArray[$size]->_content;
            $width = $thumbnailArray[$size]->width;

        } while ($size > 0 && (strpos($thumb, 'defaults') !== false || intval($width) > 640));

        $video->setAttribute(tubepress_app_api_media_MediaItem::ATTRIBUTE_THUMBNAIL_URL, $thumb);
    }
}