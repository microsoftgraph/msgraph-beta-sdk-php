<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceAppManagement\WdacSupplementalPolicies\Item\DeploySummary;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DeploySummaryRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DeploySummaryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DeploySummaryRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DeploySummaryRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeploySummaryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeploySummaryRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeploySummaryRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeploySummaryRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeploySummaryRequestBuilderGetQueryParameters {
        return new DeploySummaryRequestBuilderGetQueryParameters($expand, $select);
    }

}
