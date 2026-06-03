<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\MacOSSoftwareUpdateAccountSummaries\Item\CategorySummaries\Item\UpdateStateSummaries\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: MacOSSoftwareUpdateStateSummaryItemRequestBuilderGetRequestConfiguration
*/
class MacOSSoftwareUpdateStateSummaryItemRequestBuilderGetReq_3f0e5894 extends BaseRequestConfiguration 
{
    /**
     * @var MacOSSoftwareUpdateStateSummaryItemRequestBuilderGetQue_38f1e424|null $queryParameters Request query parameters
    */
    public ?MacOSSoftwareUpdateStateSummaryItemRequestBuilderGetQue_38f1e424 $queryParameters = null;
    
    /**
     * Instantiates a new MacOSSoftwareUpdateStateSummaryItemRequestBuilderGetReq_3f0e5894 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MacOSSoftwareUpdateStateSummaryItemRequestBuilderGetQue_38f1e424|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MacOSSoftwareUpdateStateSummaryItemRequestBuilderGetQue_38f1e424 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MacOSSoftwareUpdateStateSummaryItemRequestBuilderGetQue_38f1e424.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MacOSSoftwareUpdateStateSummaryItemRequestBuilderGetQue_38f1e424
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MacOSSoftwareUpdateStateSummaryItemRequestBuilderGetQue_38f1e424 {
        return new MacOSSoftwareUpdateStateSummaryItemRequestBuilderGetQue_38f1e424($expand, $select);
    }

}
