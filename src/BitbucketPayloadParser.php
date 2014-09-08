<?php

namespace ContaoCommunityAlliance\BitbucketPayload;

use ContaoCommunityAlliance\BitbucketPayload\Event\PostEvent;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Symfony\Component\HttpFoundation\Request;

class BitbucketPayloadParser
{
    /**
     * @var string
     */
    protected $secret;

    /**
     * @var Serializer
     */
    protected $serializer;

    /**
     * @return string
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * @param string $secret
     *
     * @return static
     */
    public function setSecret($secret)
    {
        $this->secret = empty($secret) ? null : (string) $secret;
        return $this;
    }

    /**
     * @return Serializer
     */
    public function getSerializer()
    {
        if (!$this->serializer) {
            $this->serializer = SerializerBuilder::create()->build();
        }
        return $this->serializer;
    }

    /**
     * @param Serializer $serializer
     *
     * @return static
     */
    public function setSerializer(Serializer $serializer)
    {
        $this->serializer = $serializer;
        return $this;
    }

    /**
     * Parse the payload from plain php. Useful if you write a little entry script that use plain php.
     *
     * @return PostEvent
     */
    public function parsePhp()
    {
        $payload = file_get_contents('php://input');

        return $this->parse($payload);
    }

    /**
     * Parse the payload from a symfony request.
     *
     * @param Request $request
     *
     * @return PostEvent
     */
    public function parseRequest($request)
    {
        if (!$request instanceof Request) {
            throw new \InvalidArgumentException(
                'The request must be an instance of Symfony\Component\HttpFoundation\Request'
            );
        }

        $payload = $request->getContent();

        return $this->parse($payload);
    }

    /**
     * Parse a plain request body. This is the simplest way to parse the payload from a string.
     *
     * @param string $payload The github payload, usually the POST body.
     *
     * @return PostEvent
     */
    public function parse($payload)
    {
        $serializer = $this->getSerializer();
        $class      = 'ContaoCommunityAlliance\BitbucketPayload\Event\PostEvent';
        $event      = $serializer->deserialize($payload, $class, 'json');

        return $event;
    }
}
