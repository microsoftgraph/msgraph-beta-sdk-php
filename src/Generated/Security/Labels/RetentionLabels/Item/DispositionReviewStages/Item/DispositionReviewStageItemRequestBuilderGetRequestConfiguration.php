<?php

namespace Microsoft\Graph\Beta\Generated\Security\Labels\RetentionLabels\Item\DispositionReviewStages\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DispositionReviewStageItemRequestBuilderGetRequestConfiguration 
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
     * @var DispositionReviewStageItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DispositionReviewStageItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DispositionReviewStageItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DispositionReviewStageItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DispositionReviewStageItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DispositionReviewStageItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DispositionReviewStageItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DispositionReviewStageItemRequestBuilderGetQueryParameters {
        return new DispositionReviewStageItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
