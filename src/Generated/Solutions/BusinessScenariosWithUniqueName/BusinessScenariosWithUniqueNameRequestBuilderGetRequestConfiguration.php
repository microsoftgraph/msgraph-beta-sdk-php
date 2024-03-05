<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\BusinessScenariosWithUniqueName;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BusinessScenariosWithUniqueNameRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var BusinessScenariosWithUniqueNameRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BusinessScenariosWithUniqueNameRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new BusinessScenariosWithUniqueNameRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param BusinessScenariosWithUniqueNameRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?BusinessScenariosWithUniqueNameRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new BusinessScenariosWithUniqueNameRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return BusinessScenariosWithUniqueNameRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): BusinessScenariosWithUniqueNameRequestBuilderGetQueryParameters {
        return new BusinessScenariosWithUniqueNameRequestBuilderGetQueryParameters($expand, $select);
    }

}
