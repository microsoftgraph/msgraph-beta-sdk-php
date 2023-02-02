<?php

namespace Microsoft\Graph\Beta\Generated\Security\InformationProtection\SensitivityLabels;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SensitivityLabelsRequestBuilderGetRequestConfiguration 
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
     * @var SensitivityLabelsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SensitivityLabelsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
