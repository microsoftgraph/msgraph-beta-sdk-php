<?php

namespace Microsoft\Graph\Beta\Generated\ServicePrincipals\Item\Synchronization;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SynchronizationRequestBuilderGetRequestConfiguration 
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
     * @var SynchronizationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SynchronizationRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new synchronizationRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SynchronizationRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): SynchronizationRequestBuilderGetQueryParameters {
        return new SynchronizationRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new synchronizationRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SynchronizationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SynchronizationRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
