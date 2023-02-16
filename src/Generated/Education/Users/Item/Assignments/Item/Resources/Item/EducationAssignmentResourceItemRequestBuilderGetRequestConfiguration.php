<?php

namespace Microsoft\Graph\Beta\Generated\Education\Users\Item\Assignments\Item\Resources\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EducationAssignmentResourceItemRequestBuilderGetRequestConfiguration 
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
     * @var EducationAssignmentResourceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EducationAssignmentResourceItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new EducationAssignmentResourceItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return EducationAssignmentResourceItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): EducationAssignmentResourceItemRequestBuilderGetQueryParameters {
        return new EducationAssignmentResourceItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new EducationAssignmentResourceItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param EducationAssignmentResourceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EducationAssignmentResourceItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
