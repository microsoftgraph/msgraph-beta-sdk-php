<?php

namespace Microsoft\Graph\Beta\Generated\Directory\OnPremisesSynchronization\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OnPremisesDirectorySynchronizationItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var OnPremisesDirectorySynchronizationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OnPremisesDirectorySynchronizationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OnPremisesDirectorySynchronizationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return OnPremisesDirectorySynchronizationItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): OnPremisesDirectorySynchronizationItemRequestBuilderGetQueryParameters {
        return new OnPremisesDirectorySynchronizationItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new OnPremisesDirectorySynchronizationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param OnPremisesDirectorySynchronizationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OnPremisesDirectorySynchronizationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
