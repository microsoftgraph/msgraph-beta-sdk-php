<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessUsageProfilingWithStartDateTimeWithEndDateTimeWithAggregatedBydiscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdApplicationIdApplicationId;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MicrosoftGraphNetworkaccessUsageProfilingWithStartDateTimeWithEndDateTimeWithAggregatedBydiscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdApplicationIdApplicationIdRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MicrosoftGraphNetworkaccessUsageProfilingWithStartDateTimeWithEndDateTimeWithAggregatedBydiscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdApplicationIdApplicationIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MicrosoftGraphNetworkaccessUsageProfilingWithStartDateTimeWithEndDateTimeWithAggregatedBydiscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdApplicationIdApplicationIdRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MicrosoftGraphNetworkaccessUsageProfilingWithStartDateTimeWithEndDateTimeWithAggregatedBydiscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdApplicationIdApplicationIdRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MicrosoftGraphNetworkaccessUsageProfilingWithStartDateTimeWithEndDateTimeWithAggregatedBydiscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdApplicationIdApplicationIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftGraphNetworkaccessUsageProfilingWithStartDateTimeWithEndDateTimeWithAggregatedBydiscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdApplicationIdApplicationIdRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MicrosoftGraphNetworkaccessUsageProfilingWithStartDateTimeWithEndDateTimeWithAggregatedBydiscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdApplicationIdApplicationIdRequestBuilderGetQueryParameters.
     * @param string|null $applicationId Usage: applicationId='@applicationId'
     * @param bool|null $count Include count of items
     * @param string|null $discoveredApplicationSegmentId Usage: discoveredApplicationSegmentId='@discoveredApplicationSegmentId'
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return MicrosoftGraphNetworkaccessUsageProfilingWithStartDateTimeWithEndDateTimeWithAggregatedBydiscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdApplicationIdApplicationIdRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $applicationId = null, ?bool $count = null, ?string $discoveredApplicationSegmentId = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): MicrosoftGraphNetworkaccessUsageProfilingWithStartDateTimeWithEndDateTimeWithAggregatedBydiscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdApplicationIdApplicationIdRequestBuilderGetQueryParameters {
        return new MicrosoftGraphNetworkaccessUsageProfilingWithStartDateTimeWithEndDateTimeWithAggregatedBydiscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdApplicationIdApplicationIdRequestBuilderGetQueryParameters($applicationId, $count, $discoveredApplicationSegmentId, $filter, $search, $skip, $top);
    }

}
