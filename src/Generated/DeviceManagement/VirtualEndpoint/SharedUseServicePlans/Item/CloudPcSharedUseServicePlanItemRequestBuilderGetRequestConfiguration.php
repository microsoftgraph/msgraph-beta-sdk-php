<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\SharedUseServicePlans\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CloudPcSharedUseServicePlanItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CloudPcSharedUseServicePlanItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CloudPcSharedUseServicePlanItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CloudPcSharedUseServicePlanItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CloudPcSharedUseServicePlanItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CloudPcSharedUseServicePlanItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CloudPcSharedUseServicePlanItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CloudPcSharedUseServicePlanItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CloudPcSharedUseServicePlanItemRequestBuilderGetQueryParameters {
        return new CloudPcSharedUseServicePlanItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
