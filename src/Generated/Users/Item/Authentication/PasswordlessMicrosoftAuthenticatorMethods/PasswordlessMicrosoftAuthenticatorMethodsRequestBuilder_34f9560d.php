<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Authentication\PasswordlessMicrosoftAuthenticatorMethods;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: passwordlessMicrosoftAuthenticatorMethodsRequestBuilderGetRequestConfiguration
*/
class PasswordlessMicrosoftAuthenticatorMethodsRequestBuilder_34f9560d extends BaseRequestConfiguration 
{
    /**
     * @var PasswordlessMicrosoftAuthenticatorMethodsRequestBuilder_0794c99f|null $queryParameters Request query parameters
    */
    public ?PasswordlessMicrosoftAuthenticatorMethodsRequestBuilder_0794c99f $queryParameters = null;
    
    /**
     * Instantiates a new PasswordlessMicrosoftAuthenticatorMethodsRequestBuilder_34f9560d and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PasswordlessMicrosoftAuthenticatorMethodsRequestBuilder_0794c99f|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PasswordlessMicrosoftAuthenticatorMethodsRequestBuilder_0794c99f $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PasswordlessMicrosoftAuthenticatorMethodsRequestBuilder_0794c99f.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return PasswordlessMicrosoftAuthenticatorMethodsRequestBuilder_0794c99f
    */
    public static function createQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): PasswordlessMicrosoftAuthenticatorMethodsRequestBuilder_0794c99f {
        return new PasswordlessMicrosoftAuthenticatorMethodsRequestBuilder_0794c99f($count, $expand, $filter, $orderby, $search, $select, $skip, $top);
    }

}
