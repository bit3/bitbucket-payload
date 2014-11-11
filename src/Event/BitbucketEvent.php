<?php

namespace ContaoCommunityAlliance\BitbucketPayload\Event;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\Discriminator(
 *   field = "type",
 *   map = {
 *     "post": "ContaoCommunityAlliance\BitbucketPayload\Event\PostEvent",
 *   }
 * )
 */
abstract class BitbucketEvent
{
}
