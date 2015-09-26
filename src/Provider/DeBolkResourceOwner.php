<?php

namespace DeBolk\OAuth2\Client\Provider;

use League\OAuth2\Client\Provider\ResourceOwnerInterface;

class DeBolkResourceOwner implements ResourceOwnerInterface
{
    /**
     * Username of the Bolkaccount
     * @var string
     */
    private $username;

    /**
     * Construct the resource owner object
     * @param string $username username of the Bolkaccount
     */
    public function __construct($username)
    {
        $this->username = $username;
    }

    /**
     * Returns the identifier of the authorized resource owner.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->username;
    }

    /**
     * Return all of the owner details available as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return ['username' => $this->username];
    }
}
