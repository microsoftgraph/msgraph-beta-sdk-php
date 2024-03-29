<?php

namespace Microsoft\Graph\Beta\Generated\Activitystatistics;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ActivitystatisticsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ActivitystatisticsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ActivitystatisticsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ActivitystatisticsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ActivitystatisticsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ActivitystatisticsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ActivitystatisticsRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return ActivitystatisticsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): ActivitystatisticsRequestBuilderGetQueryParameters {
        return new ActivitystatisticsRequestBuilderGetQueryParameters($count, $expand, $filter, $search, $select, $skip, $top);
    }

}
