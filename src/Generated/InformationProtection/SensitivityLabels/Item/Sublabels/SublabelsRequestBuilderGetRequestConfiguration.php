<?php

namespace Microsoft\Graph\Beta\Generated\InformationProtection\SensitivityLabels\Item\Sublabels;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SublabelsRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var SublabelsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SublabelsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
