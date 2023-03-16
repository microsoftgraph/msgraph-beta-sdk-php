<?php

namespace Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\MonthlyPrintUsageSummariesByUser;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MonthlyPrintUsageSummariesByUserRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var MonthlyPrintUsageSummariesByUserRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MonthlyPrintUsageSummariesByUserRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new monthlyPrintUsageSummariesByUserRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MonthlyPrintUsageSummariesByUserRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MonthlyPrintUsageSummariesByUserRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new monthlyPrintUsageSummariesByUserRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return MonthlyPrintUsageSummariesByUserRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): MonthlyPrintUsageSummariesByUserRequestBuilderGetQueryParameters {
        return new MonthlyPrintUsageSummariesByUserRequestBuilderGetQueryParameters($count, $expand, $filter, $orderby, $search, $select, $skip, $top);
    }

}
