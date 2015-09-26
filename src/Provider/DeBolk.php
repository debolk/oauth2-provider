<?php

namespace DeBolk\OAuth2\Client\Provider;

use League\OAuth2\Client\Provider\AbstractProvider;

/**
 * Implements a OAuth 2 provider for league/oauth2-client
 * to be used with the (not public) OAuth 2 authorisation
 * server of De Bolk at https://auth.debolk.nl
 */
class De Bolk extends AbstractProvider
{
    use BearerAuthorizationTrait;

    public function getBaseAuthorizationUrl()
    {

    }

    public function getBaseAccessTokenUrl(array $params)
    {

    }

    public function getResourceOwnerDetailsUrl(AccessToken $token)
    {

    }

    protected function getDefaultScopes()
    {

    }

    protected function checkResponse(ResponseInterface $response, $data)
    {

    }

    protected function createResourceOwner(array $response, AccessToken $token)
    {

    }
}
