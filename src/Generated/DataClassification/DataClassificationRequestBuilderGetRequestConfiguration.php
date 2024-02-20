<?php

namespace Microsoft\Graph\Beta\Generated\DataClassification;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DataClassificationRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DataClassificationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DataClassificationRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DataClassificationRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DataClassificationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DataClassificationRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DataClassificationRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DataClassificationRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DataClassificationRequestBuilderGetQueryParameters {
        return new DataClassificationRequestBuilderGetQueryParameters($expand, $select);
    }

}
