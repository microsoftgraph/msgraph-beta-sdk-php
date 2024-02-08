<?php

namespace Microsoft\Graph\Beta\Generated\Reports\UserInsights\Daily;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DailyRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DailyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DailyRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DailyRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DailyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DailyRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DailyRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DailyRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DailyRequestBuilderGetQueryParameters {
        return new DailyRequestBuilderGetQueryParameters($expand, $select);
    }

}
