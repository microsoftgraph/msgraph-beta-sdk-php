<?php

namespace Microsoft\Graph\Beta\Generated\Monitoring;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MonitoringRequestBuilderGetRequestConfiguration 
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
     * @var MonitoringRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MonitoringRequestBuilderGetQueryParameters $queryParameters = null;
    
}
