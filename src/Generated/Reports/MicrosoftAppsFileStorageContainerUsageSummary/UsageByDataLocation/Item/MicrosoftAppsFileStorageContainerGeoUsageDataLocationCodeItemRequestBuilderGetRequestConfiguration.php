<?php

namespace Microsoft\Graph\Beta\Generated\Reports\MicrosoftAppsFileStorageContainerUsageSummary\UsageByDataLocation\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MicrosoftAppsFileStorageContainerGeoUsageDataLocationCodeItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MicrosoftAppsFileStorageContainerGeoUsageDataLocationCodeItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MicrosoftAppsFileStorageContainerGeoUsageDataLocationCodeItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MicrosoftAppsFileStorageContainerGeoUsageDataLocationCodeItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MicrosoftAppsFileStorageContainerGeoUsageDataLocationCodeItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftAppsFileStorageContainerGeoUsageDataLocationCodeItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MicrosoftAppsFileStorageContainerGeoUsageDataLocationCodeItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MicrosoftAppsFileStorageContainerGeoUsageDataLocationCodeItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MicrosoftAppsFileStorageContainerGeoUsageDataLocationCodeItemRequestBuilderGetQueryParameters {
        return new MicrosoftAppsFileStorageContainerGeoUsageDataLocationCodeItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
