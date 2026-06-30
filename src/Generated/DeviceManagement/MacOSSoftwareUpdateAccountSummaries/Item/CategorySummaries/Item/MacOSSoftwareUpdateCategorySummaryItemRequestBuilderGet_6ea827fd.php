<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\MacOSSoftwareUpdateAccountSummaries\Item\CategorySummaries\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: MacOSSoftwareUpdateCategorySummaryItemRequestBuilderGetRequestConfiguration
*/
class MacOSSoftwareUpdateCategorySummaryItemRequestBuilderGet_6ea827fd extends BaseRequestConfiguration 
{
    /**
     * @var MacOSSoftwareUpdateCategorySummaryItemRequestBuilderGet_59b76f51|null $queryParameters Request query parameters
    */
    public ?MacOSSoftwareUpdateCategorySummaryItemRequestBuilderGet_59b76f51 $queryParameters = null;
    
    /**
     * Instantiates a new MacOSSoftwareUpdateCategorySummaryItemRequestBuilderGet_6ea827fd and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MacOSSoftwareUpdateCategorySummaryItemRequestBuilderGet_59b76f51|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MacOSSoftwareUpdateCategorySummaryItemRequestBuilderGet_59b76f51 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MacOSSoftwareUpdateCategorySummaryItemRequestBuilderGet_59b76f51.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MacOSSoftwareUpdateCategorySummaryItemRequestBuilderGet_59b76f51
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MacOSSoftwareUpdateCategorySummaryItemRequestBuilderGet_59b76f51 {
        return new MacOSSoftwareUpdateCategorySummaryItemRequestBuilderGet_59b76f51($expand, $select);
    }

}
