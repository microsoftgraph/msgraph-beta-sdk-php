<?php

namespace Microsoft\Graph\Beta\Generated\DataClassification;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DataClassificationRequestBuilderGetRequestConfiguration 
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
     * @var DataClassificationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DataClassificationRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new dataClassificationRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DataClassificationRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): DataClassificationRequestBuilderGetQueryParameters {
        return new DataClassificationRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new dataClassificationRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param DataClassificationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DataClassificationRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
