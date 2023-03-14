<?php

namespace Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\SourceCollections\Item\AddToReviewSetOperation;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AddToReviewSetOperationRequestBuilderGetRequestConfiguration 
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
     * @var AddToReviewSetOperationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AddToReviewSetOperationRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new addToReviewSetOperationRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AddToReviewSetOperationRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): AddToReviewSetOperationRequestBuilderGetQueryParameters {
        return new AddToReviewSetOperationRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new addToReviewSetOperationRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AddToReviewSetOperationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AddToReviewSetOperationRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
