<?php

namespace ContaoCommunityAlliance\BitbucketPayload;

use ContaoCommunityAlliance\BitbucketPayload\Event\BitbucketEvent;
use ContaoCommunityAlliance\BitbucketPayload\Event\PostEvent;
use JMS\Serializer\EventDispatcher\EventDispatcher;
use JMS\Serializer\EventDispatcher\Events;
use JMS\Serializer\EventDispatcher\PreSerializeEvent;
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
            $builder = SerializerBuilder::create();
            $builder->configureListeners(
                function (EventDispatcher $eventDispatcher) {
                    $eventDispatcher->addListener(
                        Events::PRE_SERIALIZE,
                        function (PreSerializeEvent $event) {
                            /*
                             * Fixup issue 292, see https://github.com/schmittjoh/JMSSerializerBundle/issues/292
                             */
                            $object = $event->getObject();

                            if (is_object($object) && $object instanceof BitbucketEvent) {
                                $class = get_class($object);
                                $type  = $event->getType();

                                if ($class !== $type['name']) {
                                    $event->setType($class);
                                }
                            }
                        }
                    );
                }
            );
            $this->serializer = $builder->build();
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
        $payload = $_POST['payload'];

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

        $payload = $request->request->get('payload');

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
