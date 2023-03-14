<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\LifecycleWorkflows\DeletedItems;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DeletedItemsRequestBuilderGetRequestConfiguration 
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
     * @var DeletedItemsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DeletedItemsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new deletedItemsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeletedItemsRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): DeletedItemsRequestBuilderGetQueryParameters {
        return new DeletedItemsRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new deletedItemsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeletedItemsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeletedItemsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
