<?php

namespace Microsoft\\Graph\\Beta\\Generated\Users\Item\InformationProtection\Policy\Labels\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class InformationProtectionLabelItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var InformationProtectionLabelItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?InformationProtectionLabelItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new InformationProtectionLabelItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param InformationProtectionLabelItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?InformationProtectionLabelItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new InformationProtectionLabelItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return InformationProtectionLabelItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): InformationProtectionLabelItemRequestBuilderGetQueryParameters {
        return new InformationProtectionLabelItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
