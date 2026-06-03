<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\MacOSSoftwareUpdateAccountSummaries\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: MacOSSoftwareUpdateAccountSummaryItemRequestBuilderGetRequestConfiguration
*/
class MacOSSoftwareUpdateAccountSummaryItemRequestBuilderGetR_759f1ddd extends BaseRequestConfiguration 
{
    /**
     * @var MacOSSoftwareUpdateAccountSummaryItemRequestBuilderGetQ_6b541c7c|null $queryParameters Request query parameters
    */
    public ?MacOSSoftwareUpdateAccountSummaryItemRequestBuilderGetQ_6b541c7c $queryParameters = null;
    
    /**
     * Instantiates a new MacOSSoftwareUpdateAccountSummaryItemRequestBuilderGetR_759f1ddd and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MacOSSoftwareUpdateAccountSummaryItemRequestBuilderGetQ_6b541c7c|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MacOSSoftwareUpdateAccountSummaryItemRequestBuilderGetQ_6b541c7c $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MacOSSoftwareUpdateAccountSummaryItemRequestBuilderGetQ_6b541c7c.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MacOSSoftwareUpdateAccountSummaryItemRequestBuilderGetQ_6b541c7c
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MacOSSoftwareUpdateAccountSummaryItemRequestBuilderGetQ_6b541c7c {
        return new MacOSSoftwareUpdateAccountSummaryItemRequestBuilderGetQ_6b541c7c($expand, $select);
    }

}
