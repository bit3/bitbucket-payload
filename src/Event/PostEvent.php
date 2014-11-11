<?php

namespace ContaoCommunityAlliance\BitbucketPayload\Event;

use ContaoCommunityAlliance\BitbucketPayload\Meta\Repository;
use ContaoCommunityAlliance\BitbucketPayload\Meta\Commit;
use JMS\Serializer\Annotation as Serializer;

class PostEvent extends BitbucketEvent
{
    /**
     * @var string
     *
     * @Serializer\SerializedName("canon_url")
     * @Serializer\Type("string")
     */
    protected $canonUrl;

    /**
     * @var Commit[]
     *
     * @Serializer\SerializedName("commits")
     * @Serializer\Type("array<ContaoCommunityAlliance\BitbucketPayload\Meta\Commit>")
     */
    protected $commits;

    /**
     * @var Repository
     *
     * @Serializer\SerializedName("repository")
     * @Serializer\Type("ContaoCommunityAlliance\BitbucketPayload\Meta\Repository")
     */
    protected $repository;

    /**
     * @var string
     *
     * @Serializer\SerializedName("user")
     * @Serializer\Type("string")
     */
    protected $user;

    /**
     * @return string
     */
    public function getCanonUrl()
    {
        return $this->canonUrl;
    }

    /**
     * @param string $canonUrl
     *
     * @return static
     */
    public function setCanonUrl($canonUrl)
    {
        $this->canonUrl = (string) $canonUrl;
        return $this;
    }

    /**
     * @return Commit
     */
    public function getCommits()
    {
        return $this->commits;
    }

    /**
     * @param Commit $commit
     *
     * @return static
     */
    public function setCommits($commit)
    {
        $this->commits = $commit;
        return $this;
    }

    /**
     * @return Repository
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * @param Repository $repository
     *
     * @return static
     */
    public function setRepository($repository)
    {
        $this->repository = $repository;
        return $this;
    }

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param string $user
     *
     * @return static
     */
    public function setUser($user)
    {
        $this->user = (string) $user;
        return $this;
    }
}
