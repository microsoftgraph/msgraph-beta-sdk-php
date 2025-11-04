<?php

namespace Microsoft\\Graph\\Beta\\Generated\Directory\ExternalUserProfiles\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ExternalUserProfileItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ExternalUserProfileItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ExternalUserProfileItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ExternalUserProfileItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ExternalUserProfileItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ExternalUserProfileItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ExternalUserProfileItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ExternalUserProfileItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ExternalUserProfileItemRequestBuilderGetQueryParameters {
        return new ExternalUserProfileItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
