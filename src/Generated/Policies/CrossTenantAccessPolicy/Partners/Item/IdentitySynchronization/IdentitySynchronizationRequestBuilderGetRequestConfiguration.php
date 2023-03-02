<?php

namespace Microsoft\Graph\Beta\Generated\Policies\CrossTenantAccessPolicy\Partners\Item\IdentitySynchronization;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class IdentitySynchronizationRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var IdentitySynchronizationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?IdentitySynchronizationRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new identitySynchronizationRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return IdentitySynchronizationRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): IdentitySynchronizationRequestBuilderGetQueryParameters {
        return new IdentitySynchronizationRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new identitySynchronizationRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param IdentitySynchronizationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?IdentitySynchronizationRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
