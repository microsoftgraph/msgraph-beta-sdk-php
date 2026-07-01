<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessGetApplicationUsageAnalytics_498a5660;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: microsoftGraphNetworkaccessGetApplicationUsageAnalyticsWithStartDateTimeWithEndDateTimeWithAggregatedByRequestBuilderGetRequestConfiguration
*/
class MicrosoftGraphNetworkaccessGetApplicationUsageAnalytics_f9e52fca extends BaseRequestConfiguration 
{
    /**
     * @var MicrosoftGraphNetworkaccessGetApplicationUsageAnalytics_9f168b4c|null $queryParameters Request query parameters
    */
    public ?MicrosoftGraphNetworkaccessGetApplicationUsageAnalytics_9f168b4c $queryParameters = null;
    
    /**
     * Instantiates a new MicrosoftGraphNetworkaccessGetApplicationUsageAnalytics_f9e52fca and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MicrosoftGraphNetworkaccessGetApplicationUsageAnalytics_9f168b4c|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftGraphNetworkaccessGetApplicationUsageAnalytics_9f168b4c $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MicrosoftGraphNetworkaccessGetApplicationUsageAnalytics_9f168b4c.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return MicrosoftGraphNetworkaccessGetApplicationUsageAnalytics_9f168b4c
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): MicrosoftGraphNetworkaccessGetApplicationUsageAnalytics_9f168b4c {
        return new MicrosoftGraphNetworkaccessGetApplicationUsageAnalytics_9f168b4c($count, $filter, $search, $skip, $top);
    }

}
