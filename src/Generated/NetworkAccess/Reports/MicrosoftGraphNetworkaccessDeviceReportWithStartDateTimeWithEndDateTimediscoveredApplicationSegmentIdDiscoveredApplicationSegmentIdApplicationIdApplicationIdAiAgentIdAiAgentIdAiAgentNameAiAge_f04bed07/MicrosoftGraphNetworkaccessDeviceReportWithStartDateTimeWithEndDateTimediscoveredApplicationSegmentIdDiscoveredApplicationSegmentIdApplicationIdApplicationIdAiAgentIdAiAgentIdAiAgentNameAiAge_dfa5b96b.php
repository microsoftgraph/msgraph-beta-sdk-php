<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessDeviceReportWithStartDateTimeWithEndDateTimediscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdApplicationIdApplicationIdAiAgentIdAiAgentIdAiAgentNameAiAge_f04bed07;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: microsoftGraphNetworkaccessDeviceReportWithStartDateTimeWithEndDateTimediscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdApplicationIdApplicationIdAiAgentIdAiAgentIdAiAgentNameAiAgentNameAgentTypeIdAgentTypeIdAgentVirtualIdAgentVirtualIdCloudApplicationNameCloudApplicationNameDestinationUrlDestinationUrlRequestBuilderGetRequestConfiguration
*/
class MicrosoftGraphNetworkaccessDeviceReportWithStartDateTimeWithEndDateTimediscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdApplicationIdApplicationIdAiAgentIdAiAgentIdAiAgentNameAiAge_dfa5b96b extends BaseRequestConfiguration 
{
    /**
     * @var MicrosoftGraphNetworkaccessDeviceReportWithStartDateTimeWithEndDateTimediscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdApplicationIdApplicationIdAiAgentIdAiAgentIdAiAgentNameAiAge_965a9c07|null $queryParameters Request query parameters
    */
    public ?MicrosoftGraphNetworkaccessDeviceReportWithStartDateTimeWithEndDateTimediscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdApplicationIdApplicationIdAiAgentIdAiAgentIdAiAgentNameAiAge_965a9c07 $queryParameters = null;
    
    /**
     * Instantiates a new MicrosoftGraphNetworkaccessDeviceReportWithStartDateTimeWithEndDateTimediscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdApplicationIdApplicationIdAiAgentIdAiAgentIdAiAgentNameAiAge_dfa5b96b and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MicrosoftGraphNetworkaccessDeviceReportWithStartDateTimeWithEndDateTimediscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdApplicationIdApplicationIdAiAgentIdAiAgentIdAiAgentNameAiAge_965a9c07|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftGraphNetworkaccessDeviceReportWithStartDateTimeWithEndDateTimediscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdApplicationIdApplicationIdAiAgentIdAiAgentIdAiAgentNameAiAge_965a9c07 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MicrosoftGraphNetworkaccessDeviceReportWithStartDateTimeWithEndDateTimediscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdApplicationIdApplicationIdAiAgentIdAiAgentIdAiAgentNameAiAge_965a9c07.
     * @param string|null $agentTypeId Usage: agentTypeId='@agentTypeId'
     * @param string|null $agentVirtualId Usage: agentVirtualId='@agentVirtualId'
     * @param string|null $aiAgentId Usage: aiAgentId='@aiAgentId'
     * @param string|null $aiAgentName Usage: aiAgentName='@aiAgentName'
     * @param string|null $applicationId Usage: applicationId='@applicationId'
     * @param string|null $cloudApplicationName Usage: cloudApplicationName='@cloudApplicationName'
     * @param bool|null $count Include count of items
     * @param string|null $destinationUrl Usage: destinationUrl='@destinationUrl'
     * @param string|null $discoveredApplicationSegmentId Usage: discoveredApplicationSegmentId='@discoveredApplicationSegmentId'
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return MicrosoftGraphNetworkaccessDeviceReportWithStartDateTimeWithEndDateTimediscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdApplicationIdApplicationIdAiAgentIdAiAgentIdAiAgentNameAiAge_965a9c07
    */
    public static function createQueryParameters(?string $agentTypeId = null, ?string $agentVirtualId = null, ?string $aiAgentId = null, ?string $aiAgentName = null, ?string $applicationId = null, ?string $cloudApplicationName = null, ?bool $count = null, ?string $destinationUrl = null, ?string $discoveredApplicationSegmentId = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): MicrosoftGraphNetworkaccessDeviceReportWithStartDateTimeWithEndDateTimediscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdApplicationIdApplicationIdAiAgentIdAiAgentIdAiAgentNameAiAge_965a9c07 {
        return new MicrosoftGraphNetworkaccessDeviceReportWithStartDateTimeWithEndDateTimediscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdApplicationIdApplicationIdAiAgentIdAiAgentIdAiAgentNameAiAge_965a9c07($agentTypeId, $agentVirtualId, $aiAgentId, $aiAgentName, $applicationId, $cloudApplicationName, $count, $destinationUrl, $discoveredApplicationSegmentId, $filter, $search, $skip, $top);
    }

}
