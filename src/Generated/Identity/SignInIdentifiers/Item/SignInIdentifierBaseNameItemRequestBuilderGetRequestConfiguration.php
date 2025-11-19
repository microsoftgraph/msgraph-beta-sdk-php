<?php

namespace Microsoft\\Graph\\Beta\\Generated\Identity\SignInIdentifiers\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SignInIdentifierBaseNameItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SignInIdentifierBaseNameItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SignInIdentifierBaseNameItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SignInIdentifierBaseNameItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SignInIdentifierBaseNameItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SignInIdentifierBaseNameItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SignInIdentifierBaseNameItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SignInIdentifierBaseNameItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SignInIdentifierBaseNameItemRequestBuilderGetQueryParameters {
        return new SignInIdentifierBaseNameItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
