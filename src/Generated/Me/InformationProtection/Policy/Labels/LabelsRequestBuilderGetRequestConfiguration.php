<?php

namespace Microsoft\Graph\Beta\Generated\Me\InformationProtection\Policy\Labels;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LabelsRequestBuilderGetRequestConfiguration 
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
     * @var LabelsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LabelsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
