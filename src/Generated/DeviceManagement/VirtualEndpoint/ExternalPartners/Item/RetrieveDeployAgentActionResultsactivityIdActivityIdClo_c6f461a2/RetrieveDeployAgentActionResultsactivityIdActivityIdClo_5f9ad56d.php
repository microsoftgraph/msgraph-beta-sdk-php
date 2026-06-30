<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\ExternalPartners\Item\RetrieveDeployAgentActionResultsactivityIdActivityIdClo_c6f461a2;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: retrieveDeployAgentActionResultsactivityIdActivityIdCloudPcIdCloudPcIdRequestBuilderGetRequestConfiguration
*/
class RetrieveDeployAgentActionResultsactivityIdActivityIdClo_5f9ad56d extends BaseRequestConfiguration 
{
    /**
     * @var RetrieveDeployAgentActionResultsactivityIdActivityIdClo_f981ae45|null $queryParameters Request query parameters
    */
    public ?RetrieveDeployAgentActionResultsactivityIdActivityIdClo_f981ae45 $queryParameters = null;
    
    /**
     * Instantiates a new RetrieveDeployAgentActionResultsactivityIdActivityIdClo_5f9ad56d and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RetrieveDeployAgentActionResultsactivityIdActivityIdClo_f981ae45|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RetrieveDeployAgentActionResultsactivityIdActivityIdClo_f981ae45 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RetrieveDeployAgentActionResultsactivityIdActivityIdClo_f981ae45.
     * @param string|null $activityId Usage: activityId='@activityId'
     * @param string|null $cloudPcId Usage: cloudPcId='@cloudPcId'
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return RetrieveDeployAgentActionResultsactivityIdActivityIdClo_f981ae45
    */
    public static function createQueryParameters(?string $activityId = null, ?string $cloudPcId = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): RetrieveDeployAgentActionResultsactivityIdActivityIdClo_f981ae45 {
        return new RetrieveDeployAgentActionResultsactivityIdActivityIdClo_f981ae45($activityId, $cloudPcId, $count, $filter, $search, $skip, $top);
    }

}
