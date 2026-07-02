<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetActiveUserMetricsForiOSOrAndroidMailByReadEmailWithI_bdccfb21;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getActiveUserMetricsForiOSOrAndroidMailByReadEmailWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetRequestConfiguration
*/
class GetActiveUserMetricsForiOSOrAndroidMailByReadEmailWithI_e8e6ce68 extends BaseRequestConfiguration 
{
    /**
     * @var GetActiveUserMetricsForiOSOrAndroidMailByReadEmailWithI_fd59dbcd|null $queryParameters Request query parameters
    */
    public ?GetActiveUserMetricsForiOSOrAndroidMailByReadEmailWithI_fd59dbcd $queryParameters = null;
    
    /**
     * Instantiates a new GetActiveUserMetricsForiOSOrAndroidMailByReadEmailWithI_e8e6ce68 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetActiveUserMetricsForiOSOrAndroidMailByReadEmailWithI_fd59dbcd|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetActiveUserMetricsForiOSOrAndroidMailByReadEmailWithI_fd59dbcd $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetActiveUserMetricsForiOSOrAndroidMailByReadEmailWithI_fd59dbcd.
     * @param int|null $aggregationIntervalInMinutes Usage: aggregationIntervalInMinutes=@aggregationIntervalInMinutes
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetActiveUserMetricsForiOSOrAndroidMailByReadEmailWithI_fd59dbcd
    */
    public static function createQueryParameters(?int $aggregationIntervalInMinutes = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetActiveUserMetricsForiOSOrAndroidMailByReadEmailWithI_fd59dbcd {
        return new GetActiveUserMetricsForiOSOrAndroidMailByReadEmailWithI_fd59dbcd($aggregationIntervalInMinutes, $count, $filter, $search, $skip, $top);
    }

}
