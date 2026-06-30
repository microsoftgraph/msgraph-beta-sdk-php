<?php

namespace Microsoft\Graph\Beta\Generated\Security\DataDiscovery\CloudAppDiscovery\UploadedStreams\Item\MicrosoftGraphSecurityAggregatedAppsDetailsWithPeriod;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: microsoftGraphSecurityAggregatedAppsDetailsWithPeriodRequestBuilderGetRequestConfiguration
*/
class MicrosoftGraphSecurityAggregatedAppsDetailsWithPeriodRe_218861cc extends BaseRequestConfiguration 
{
    /**
     * @var MicrosoftGraphSecurityAggregatedAppsDetailsWithPeriodRe_cdf8f59b|null $queryParameters Request query parameters
    */
    public ?MicrosoftGraphSecurityAggregatedAppsDetailsWithPeriodRe_cdf8f59b $queryParameters = null;
    
    /**
     * Instantiates a new MicrosoftGraphSecurityAggregatedAppsDetailsWithPeriodRe_218861cc and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MicrosoftGraphSecurityAggregatedAppsDetailsWithPeriodRe_cdf8f59b|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftGraphSecurityAggregatedAppsDetailsWithPeriodRe_cdf8f59b $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MicrosoftGraphSecurityAggregatedAppsDetailsWithPeriodRe_cdf8f59b.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return MicrosoftGraphSecurityAggregatedAppsDetailsWithPeriodRe_cdf8f59b
    */
    public static function createQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): MicrosoftGraphSecurityAggregatedAppsDetailsWithPeriodRe_cdf8f59b {
        return new MicrosoftGraphSecurityAggregatedAppsDetailsWithPeriodRe_cdf8f59b($count, $expand, $filter, $orderby, $search, $select, $skip, $top);
    }

}
