<?php

namespace ContaoCommunityAlliance\BitbucketPayload\Meta;

use JMS\Serializer\Annotation as Serializer;

class Repository
{
    /**
     * @var string
     *
     * @Serializer\SerializedName("absolute_url")
     * @Serializer\Type("string")
     */
    protected $absoluteUrl;

    /**
     * @var bool
     *
     * @Serializer\SerializedName("fork")
     * @Serializer\Type("boolean")
     */
    protected $fork;

    /**
     * @var bool
     *
     * @Serializer\SerializedName("is_private")
     * @Serializer\Type("boolean")
     */
    protected $private;

    /**
     * @var string
     *
     * @Serializer\SerializedName("name")
     * @Serializer\Type("string")
     */
    protected $name;

    /**
     * @var string
     *
     * @Serializer\SerializedName("owner")
     * @Serializer\Type("string")
     */
    protected $owner;

    /**
     * @var string
     *
     * @Serializer\SerializedName("scm")
     * @Serializer\Type("string")
     */
    protected $scm;

    /**
     * @var string
     *
     * @Serializer\SerializedName("slug")
     * @Serializer\Type("string")
     */
    protected $slug;

    /**
     * @var string
     *
     * @Serializer\SerializedName("website")
     * @Serializer\Type("string")
     */
    protected $website;

    /**
     * @return string
     */
    public function getAbsoluteUrl()
    {
        return $this->absoluteUrl;
    }

    /**
     * @param string $absoluteUrl
     *
     * @return static
     */
    public function setAbsoluteUrl($absoluteUrl)
    {
        $this->absoluteUrl = (string) $absoluteUrl;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isFork()
    {
        return $this->fork;
    }

    /**
     * @param boolean $fork
     *
     * @return static
     */
    public function setFork($fork)
    {
        $this->fork = $fork;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isPrivate()
    {
        return $this->private;
    }

    /**
     * @param boolean $private
     *
     * @return static
     */
    public function setPrivate($private)
    {
        $this->private = $private;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return static
     */
    public function setName($name)
    {
        $this->name = (string) $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param string $owner
     *
     * @return static
     */
    public function setOwner($owner)
    {
        $this->owner = (string) $owner;
        return $this;
    }

    /**
     * @return string
     */
    public function getScm()
    {
        return $this->scm;
    }

    /**
     * @param string $scm
     *
     * @return static
     */
    public function setScm($scm)
    {
        $this->scm = (string) $scm;
        return $this;
    }

    /**
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     *
     * @return static
     */
    public function setSlug($slug)
    {
        $this->slug = (string) $slug;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param string $website
     *
     * @return static
     */
    public function setWebsite($website)
    {
        $this->website = (string) $website;
        return $this;
    }
}
