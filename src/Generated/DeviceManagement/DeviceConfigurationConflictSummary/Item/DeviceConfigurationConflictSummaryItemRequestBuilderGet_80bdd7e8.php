<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceConfigurationConflictSummary\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceConfigurationConflictSummaryItemRequestBuilderGetRequestConfiguration
*/
class DeviceConfigurationConflictSummaryItemRequestBuilderGet_80bdd7e8 extends BaseRequestConfiguration 
{
    /**
     * @var DeviceConfigurationConflictSummaryItemRequestBuilderGet_fce1b7b7|null $queryParameters Request query parameters
    */
    public ?DeviceConfigurationConflictSummaryItemRequestBuilderGet_fce1b7b7 $queryParameters = null;
    
    /**
     * Instantiates a new DeviceConfigurationConflictSummaryItemRequestBuilderGet_80bdd7e8 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceConfigurationConflictSummaryItemRequestBuilderGet_fce1b7b7|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceConfigurationConflictSummaryItemRequestBuilderGet_fce1b7b7 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceConfigurationConflictSummaryItemRequestBuilderGet_fce1b7b7.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceConfigurationConflictSummaryItemRequestBuilderGet_fce1b7b7
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceConfigurationConflictSummaryItemRequestBuilderGet_fce1b7b7 {
        return new DeviceConfigurationConflictSummaryItemRequestBuilderGet_fce1b7b7($expand, $select);
    }

}
