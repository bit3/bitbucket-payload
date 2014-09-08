<?php

namespace ContaoCommunityAlliance\BitbucketPayload\Meta;

use JMS\Serializer\Annotation as Serializer;

class Commit
{
    /**
     * @var string
     *
     * @Serializer\SerializedName("author")
     * @Serializer\Type("string")
     */
    protected $author;

    /**
     * @var string
     *
     * @Serializer\SerializedName("branch")
     * @Serializer\Type("string")
     */
    protected $branch;

    /**
     * @var File[]
     *
     * @Serializer\SerializedName("files")
     * @Serializer\Type("array<ContaoCommunityAlliance\BitbucketPayload\Meta\File>")
     */
    protected $files;

    /**
     * @var string
     *
     * @Serializer\SerializedName("message")
     * @Serializer\Type("string")
     */
    protected $message;

    /**
     * @var string
     *
     * @Serializer\SerializedName("node")
     * @Serializer\Type("string")
     */
    protected $node;

    /**
     * @var string[]
     *
     * @Serializer\SerializedName("parents")
     * @Serializer\Type("array<string>")
     */
    protected $parents;

    /**
     * @var string
     *
     * @Serializer\SerializedName("raw_author")
     * @Serializer\Type("string")
     */
    protected $rawAuthor;

    /**
     * @var string
     *
     * @Serializer\SerializedName("raw_node")
     * @Serializer\Type("string")
     */
    protected $rawNode;

    /**
     * @var int
     *
     * @Serializer\SerializedName("revision")
     * @Serializer\Type("integer")
     */
    protected $revision;

    /**
     * @var int
     *
     * @Serializer\SerializedName("size")
     * @Serializer\Type("integer")
     */
    protected $size;

    /**
     * @var \DateTime
     *
     * @Serializer\SerializedName("timestamp")
     * @Serializer\Type("DateTime<'Y-m-d H:i:s'>")
     */
    protected $timestamp;

    /**
     * @var \DateTime
     *
     * @Serializer\SerializedName("utctimestamp")
     * @Serializer\Type("DateTime<'Y-m-d H:i:sP'>")
     */
    protected $utcTimestamp;

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param string $author
     *
     * @return static
     */
    public function setAuthor($author)
    {
        $this->author = (string) $author;
        return $this;
    }

    /**
     * @return string
     */
    public function getBranch()
    {
        return $this->branch;
    }

    /**
     * @param string $branch
     *
     * @return static
     */
    public function setBranch($branch)
    {
        $this->branch = (string) $branch;
        return $this;
    }

    /**
     * @return File[]
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * @param File[] $files
     *
     * @return static
     */
    public function setFiles($files)
    {
        $this->files = $files;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     *
     * @return static
     */
    public function setMessage($message)
    {
        $this->message = (string) $message;
        return $this;
    }

    /**
     * @return string
     */
    public function getNode()
    {
        return $this->node;
    }

    /**
     * @param string $node
     *
     * @return static
     */
    public function setNode($node)
    {
        $this->node = (string) $node;
        return $this;
    }

    /**
     * @return \string[]
     */
    public function getParents()
    {
        return $this->parents;
    }

    /**
     * @param \string[] $parents
     *
     * @return static
     */
    public function setParents($parents)
    {
        $this->parents = $parents;
        return $this;
    }

    /**
     * @return string
     */
    public function getRawAuthor()
    {
        return $this->rawAuthor;
    }

    /**
     * @param string $rawAuthor
     *
     * @return static
     */
    public function setRawAuthor($rawAuthor)
    {
        $this->rawAuthor = (string) $rawAuthor;
        return $this;
    }

    /**
     * @return string
     */
    public function getRawNode()
    {
        return $this->rawNode;
    }

    /**
     * @param string $rawNode
     *
     * @return static
     */
    public function setRawNode($rawNode)
    {
        $this->rawNode = (string) $rawNode;
        return $this;
    }

    /**
     * @return int
     */
    public function getRevision()
    {
        return $this->revision;
    }

    /**
     * @param int $revision
     *
     * @return static
     */
    public function setRevision($revision)
    {
        $this->revision = (int) $revision;
        return $this;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param int $size
     *
     * @return static
     */
    public function setSize($size)
    {
        $this->size = (int) $size;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param \DateTime $timestamp
     *
     * @return static
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUtcTimestamp()
    {
        return $this->utcTimestamp;
    }

    /**
     * @param \DateTime $utcTimestamp
     *
     * @return static
     */
    public function setUtcTimestamp($utcTimestamp)
    {
        $this->utcTimestamp = $utcTimestamp;
        return $this;
    }
}
