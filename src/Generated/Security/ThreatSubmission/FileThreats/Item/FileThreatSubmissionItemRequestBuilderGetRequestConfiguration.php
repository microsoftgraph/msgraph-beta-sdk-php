<?php

namespace Microsoft\Graph\Beta\Generated\Security\ThreatSubmission\FileThreats\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FileThreatSubmissionItemRequestBuilderGetRequestConfiguration 
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
     * @var FileThreatSubmissionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FileThreatSubmissionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}
