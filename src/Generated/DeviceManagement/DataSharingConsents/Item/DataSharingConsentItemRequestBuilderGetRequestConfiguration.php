<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\DataSharingConsents\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DataSharingConsentItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DataSharingConsentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DataSharingConsentItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DataSharingConsentItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DataSharingConsentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DataSharingConsentItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DataSharingConsentItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DataSharingConsentItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DataSharingConsentItemRequestBuilderGetQueryParameters {
        return new DataSharingConsentItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
