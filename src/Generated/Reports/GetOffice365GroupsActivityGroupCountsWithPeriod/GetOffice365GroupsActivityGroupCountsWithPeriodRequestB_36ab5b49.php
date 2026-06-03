<?php

namespace Microsoft\Graph\Beta\Generated\Reports\GetOffice365GroupsActivityGroupCountsWithPeriod;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getOffice365GroupsActivityGroupCountsWithPeriodRequestBuilderGetRequestConfiguration
*/
class GetOffice365GroupsActivityGroupCountsWithPeriodRequestB_36ab5b49 extends BaseRequestConfiguration 
{
    /**
     * @var GetOffice365GroupsActivityGroupCountsWithPeriodRequestB_939800f7|null $queryParameters Request query parameters
    */
    public ?GetOffice365GroupsActivityGroupCountsWithPeriodRequestB_939800f7 $queryParameters = null;
    
    /**
     * Instantiates a new GetOffice365GroupsActivityGroupCountsWithPeriodRequestB_36ab5b49 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetOffice365GroupsActivityGroupCountsWithPeriodRequestB_939800f7|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetOffice365GroupsActivityGroupCountsWithPeriodRequestB_939800f7 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetOffice365GroupsActivityGroupCountsWithPeriodRequestB_939800f7.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetOffice365GroupsActivityGroupCountsWithPeriodRequestB_939800f7
    */
    public static function createQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): GetOffice365GroupsActivityGroupCountsWithPeriodRequestB_939800f7 {
        return new GetOffice365GroupsActivityGroupCountsWithPeriodRequestB_939800f7($count, $expand, $filter, $orderby, $search, $select, $skip, $top);
    }

}
