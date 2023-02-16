<?php

namespace Microsoft\Graph\Beta\Generated\Shares\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SharedDriveItemItemRequestBuilderGetRequestConfiguration 
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
     * @var SharedDriveItemItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SharedDriveItemItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SharedDriveItemItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SharedDriveItemItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): SharedDriveItemItemRequestBuilderGetQueryParameters {
        return new SharedDriveItemItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new SharedDriveItemItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param SharedDriveItemItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SharedDriveItemItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
