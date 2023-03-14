<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\LifecycleWorkflows\CustomTaskExtensions\Item\LastModifiedBy;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LastModifiedByRequestBuilderGetRequestConfiguration 
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
     * @var LastModifiedByRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LastModifiedByRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new lastModifiedByRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return LastModifiedByRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): LastModifiedByRequestBuilderGetQueryParameters {
        return new LastModifiedByRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new lastModifiedByRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param LastModifiedByRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LastModifiedByRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
