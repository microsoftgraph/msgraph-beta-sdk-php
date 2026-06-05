<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ApplicationSignInDetailedSummary\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: ApplicationSignInDetailedSummaryItemRequestBuilderGetRequestConfiguration
*/
class ApplicationSignInDetailedSummaryItemRequestBuilderGetRe_63bed336 extends BaseRequestConfiguration 
{
    /**
     * @var ApplicationSignInDetailedSummaryItemRequestBuilderGetQu_4e1635ca|null $queryParameters Request query parameters
    */
    public ?ApplicationSignInDetailedSummaryItemRequestBuilderGetQu_4e1635ca $queryParameters = null;
    
    /**
     * Instantiates a new ApplicationSignInDetailedSummaryItemRequestBuilderGetRe_63bed336 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ApplicationSignInDetailedSummaryItemRequestBuilderGetQu_4e1635ca|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ApplicationSignInDetailedSummaryItemRequestBuilderGetQu_4e1635ca $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ApplicationSignInDetailedSummaryItemRequestBuilderGetQu_4e1635ca.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ApplicationSignInDetailedSummaryItemRequestBuilderGetQu_4e1635ca
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ApplicationSignInDetailedSummaryItemRequestBuilderGetQu_4e1635ca {
        return new ApplicationSignInDetailedSummaryItemRequestBuilderGetQu_4e1635ca($expand, $select);
    }

}
