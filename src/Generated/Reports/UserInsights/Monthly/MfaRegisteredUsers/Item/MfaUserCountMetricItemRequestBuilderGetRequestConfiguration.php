<?php

namespace Microsoft\\Graph\\Beta\\Generated\Reports\UserInsights\Monthly\MfaRegisteredUsers\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MfaUserCountMetricItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MfaUserCountMetricItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MfaUserCountMetricItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MfaUserCountMetricItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MfaUserCountMetricItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MfaUserCountMetricItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MfaUserCountMetricItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MfaUserCountMetricItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MfaUserCountMetricItemRequestBuilderGetQueryParameters {
        return new MfaUserCountMetricItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
