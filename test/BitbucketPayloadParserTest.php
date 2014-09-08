<?php

namespace ContaoCommunityAlliance\BitbucketPayload\Test;

use ContaoCommunityAlliance\BitbucketPayload\BitbucketPayloadParser;
use ContaoCommunityAlliance\BitbucketPayload\Event\PostEvent;

class BitbucketPayloadParserTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var BitbucketPayloadParser
     */
    protected $parser;

    public function setUp()
    {
        $this->parser = new BitbucketPayloadParser();
    }

    public function tearDown()
    {
        unset($this->parser);
        gc_collect_cycles();
    }

    public function testParse()
    {
        $payload = file_get_contents(
            __DIR__ . DIRECTORY_SEPARATOR . 'Fixtures' . DIRECTORY_SEPARATOR . 'payload.json'
        );

        $event = $this->parser->parse($payload);

        $this->assertNotNull($event);
        $this->assertTrue($event instanceof PostEvent);
    }
}
