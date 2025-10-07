<?php

namespace Microsoft\\Graph\\Beta\\Generated\External\IndustryData\InboundFlows\Item\Year;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class YearRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var YearRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?YearRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new YearRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param YearRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?YearRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new YearRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return YearRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): YearRequestBuilderGetQueryParameters {
        return new YearRequestBuilderGetQueryParameters($expand, $select);
    }

}
