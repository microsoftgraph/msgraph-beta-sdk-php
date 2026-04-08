<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\ExternalPartners\Item\RetrieveDeployAgentActionResultsactivityIdActivityIdCloudPcIdCloudPcId;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RetrieveDeployAgentActionResultsactivityIdActivityIdCloudPcIdCloudPcIdRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RetrieveDeployAgentActionResultsactivityIdActivityIdCloudPcIdCloudPcIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RetrieveDeployAgentActionResultsactivityIdActivityIdCloudPcIdCloudPcIdRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RetrieveDeployAgentActionResultsactivityIdActivityIdCloudPcIdCloudPcIdRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RetrieveDeployAgentActionResultsactivityIdActivityIdCloudPcIdCloudPcIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RetrieveDeployAgentActionResultsactivityIdActivityIdCloudPcIdCloudPcIdRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RetrieveDeployAgentActionResultsactivityIdActivityIdCloudPcIdCloudPcIdRequestBuilderGetQueryParameters.
     * @param string|null $activityId Usage: activityId='@activityId'
     * @param string|null $cloudPcId Usage: cloudPcId='@cloudPcId'
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return RetrieveDeployAgentActionResultsactivityIdActivityIdCloudPcIdCloudPcIdRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $activityId = null, ?string $cloudPcId = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): RetrieveDeployAgentActionResultsactivityIdActivityIdCloudPcIdCloudPcIdRequestBuilderGetQueryParameters {
        return new RetrieveDeployAgentActionResultsactivityIdActivityIdCloudPcIdCloudPcIdRequestBuilderGetQueryParameters($activityId, $cloudPcId, $count, $filter, $search, $skip, $top);
    }

}
