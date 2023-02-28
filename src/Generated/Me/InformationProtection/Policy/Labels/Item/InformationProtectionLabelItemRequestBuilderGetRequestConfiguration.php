<?php

namespace Microsoft\Graph\Beta\Generated\Me\InformationProtection\Policy\Labels\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class InformationProtectionLabelItemRequestBuilderGetRequestConfiguration 
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
     * @var InformationProtectionLabelItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?InformationProtectionLabelItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new InformationProtectionLabelItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return InformationProtectionLabelItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): InformationProtectionLabelItemRequestBuilderGetQueryParameters {
        return new InformationProtectionLabelItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new InformationProtectionLabelItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param InformationProtectionLabelItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?InformationProtectionLabelItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
