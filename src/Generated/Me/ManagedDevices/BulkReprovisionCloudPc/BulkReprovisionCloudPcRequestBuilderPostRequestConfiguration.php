<?php

namespace Microsoft\Graph\Beta\Generated\Me\ManagedDevices\BulkReprovisionCloudPc;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BulkReprovisionCloudPcRequestBuilderPostRequestConfiguration 
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
     * Instantiates a new bulkReprovisionCloudPcRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
    */
    public function __construct(?array $headers = null, ?array $options = null) {
        $this->headers = $headers;
        $this->options = $options;
    }

}
