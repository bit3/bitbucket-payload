<?php

namespace ContaoCommunityAlliance\BitbucketPayload\Meta;

use JMS\Serializer\Annotation as Serializer;

class File
{
    /**
     * @var string
     *
     * @Serializer\SerializedName("file")
     * @Serializer\Type("string")
     */
    protected $file;

    /**
     * @var string
     *
     * @Serializer\SerializedName("type")
     * @Serializer\Type("string")
     */
    protected $type;
}
