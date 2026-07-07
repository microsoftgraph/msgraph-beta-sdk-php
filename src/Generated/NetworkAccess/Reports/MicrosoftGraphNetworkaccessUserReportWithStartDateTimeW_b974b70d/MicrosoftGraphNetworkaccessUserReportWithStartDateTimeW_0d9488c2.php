<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessUserReportWithStartDateTimeW_b974b70d;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: microsoftGraphNetworkaccessUserReportWithStartDateTimeWithEndDateTimediscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdApplicationIdApplicationIdAiAgentIdAiAgentIdAiAgentNameAiAgentNameCloudApplicationNameCloudApplicationNameDestinationUrlDestinationUrlRequestBuilderGetRequestConfiguration
*/
class MicrosoftGraphNetworkaccessUserReportWithStartDateTimeW_0d9488c2 extends BaseRequestConfiguration 
{
    /**
     * @var MicrosoftGraphNetworkaccessUserReportWithStartDateTimeW_cfb24ee6|null $queryParameters Request query parameters
    */
    public ?MicrosoftGraphNetworkaccessUserReportWithStartDateTimeW_cfb24ee6 $queryParameters = null;
    
    /**
     * Instantiates a new MicrosoftGraphNetworkaccessUserReportWithStartDateTimeW_0d9488c2 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MicrosoftGraphNetworkaccessUserReportWithStartDateTimeW_cfb24ee6|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftGraphNetworkaccessUserReportWithStartDateTimeW_cfb24ee6 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MicrosoftGraphNetworkaccessUserReportWithStartDateTimeW_cfb24ee6.
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
     * @return MicrosoftGraphNetworkaccessUserReportWithStartDateTimeW_cfb24ee6
    */
    public static function createQueryParameters(?string $aiAgentId = null, ?string $aiAgentName = null, ?string $applicationId = null, ?string $cloudApplicationName = null, ?bool $count = null, ?string $destinationUrl = null, ?string $discoveredApplicationSegmentId = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): MicrosoftGraphNetworkaccessUserReportWithStartDateTimeW_cfb24ee6 {
        return new MicrosoftGraphNetworkaccessUserReportWithStartDateTimeW_cfb24ee6($aiAgentId, $aiAgentName, $applicationId, $cloudApplicationName, $count, $destinationUrl, $discoveredApplicationSegmentId, $filter, $search, $skip, $top);
    }

}
