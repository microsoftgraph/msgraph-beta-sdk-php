<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessDeviceReportWithStartDateTim_88652905;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: microsoftGraphNetworkaccessDeviceReportWithStartDateTimeWithEndDateTimediscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdApplicationIdApplicationIdAiAgentIdAiAgentIdAiAgentNameAiAgentNameCloudApplicationNameCloudApplicationNameDestinationUrlDestinationUrlRequestBuilderGetRequestConfiguration
*/
class MicrosoftGraphNetworkaccessDeviceReportWithStartDateTim_f3635fb0 extends BaseRequestConfiguration 
{
    /**
     * @var MicrosoftGraphNetworkaccessDeviceReportWithStartDateTim_a627536a|null $queryParameters Request query parameters
    */
    public ?MicrosoftGraphNetworkaccessDeviceReportWithStartDateTim_a627536a $queryParameters = null;
    
    /**
     * Instantiates a new MicrosoftGraphNetworkaccessDeviceReportWithStartDateTim_f3635fb0 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MicrosoftGraphNetworkaccessDeviceReportWithStartDateTim_a627536a|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftGraphNetworkaccessDeviceReportWithStartDateTim_a627536a $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MicrosoftGraphNetworkaccessDeviceReportWithStartDateTim_a627536a.
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
     * @return MicrosoftGraphNetworkaccessDeviceReportWithStartDateTim_a627536a
    */
    public static function createQueryParameters(?string $aiAgentId = null, ?string $aiAgentName = null, ?string $applicationId = null, ?string $cloudApplicationName = null, ?bool $count = null, ?string $destinationUrl = null, ?string $discoveredApplicationSegmentId = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): MicrosoftGraphNetworkaccessDeviceReportWithStartDateTim_a627536a {
        return new MicrosoftGraphNetworkaccessDeviceReportWithStartDateTim_a627536a($aiAgentId, $aiAgentName, $applicationId, $cloudApplicationName, $count, $destinationUrl, $discoveredApplicationSegmentId, $filter, $search, $skip, $top);
    }

}
