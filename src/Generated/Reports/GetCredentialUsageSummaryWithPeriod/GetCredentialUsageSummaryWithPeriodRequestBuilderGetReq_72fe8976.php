<?php

namespace Microsoft\Graph\Beta\Generated\Reports\GetCredentialUsageSummaryWithPeriod;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getCredentialUsageSummaryWithPeriodRequestBuilderGetRequestConfiguration
*/
class GetCredentialUsageSummaryWithPeriodRequestBuilderGetReq_72fe8976 extends BaseRequestConfiguration 
{
    /**
     * @var GetCredentialUsageSummaryWithPeriodRequestBuilderGetQue_b0094b44|null $queryParameters Request query parameters
    */
    public ?GetCredentialUsageSummaryWithPeriodRequestBuilderGetQue_b0094b44 $queryParameters = null;
    
    /**
     * Instantiates a new GetCredentialUsageSummaryWithPeriodRequestBuilderGetReq_72fe8976 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetCredentialUsageSummaryWithPeriodRequestBuilderGetQue_b0094b44|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetCredentialUsageSummaryWithPeriodRequestBuilderGetQue_b0094b44 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetCredentialUsageSummaryWithPeriodRequestBuilderGetQue_b0094b44.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetCredentialUsageSummaryWithPeriodRequestBuilderGetQue_b0094b44
    */
    public static function createQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): GetCredentialUsageSummaryWithPeriodRequestBuilderGetQue_b0094b44 {
        return new GetCredentialUsageSummaryWithPeriodRequestBuilderGetQue_b0094b44($count, $expand, $filter, $orderby, $search, $select, $skip, $top);
    }

}
