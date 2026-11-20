<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Data;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DataRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DataRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DataRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DataRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DataRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DataRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DataRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DataRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DataRequestBuilderGetQueryParameters {
        return new DataRequestBuilderGetQueryParameters($expand, $select);
    }

}
