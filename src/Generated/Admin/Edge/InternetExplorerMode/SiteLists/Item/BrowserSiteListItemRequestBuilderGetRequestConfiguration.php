<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Edge\InternetExplorerMode\SiteLists\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BrowserSiteListItemRequestBuilderGetRequestConfiguration 
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
     * @var BrowserSiteListItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BrowserSiteListItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new BrowserSiteListItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param BrowserSiteListItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?BrowserSiteListItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new BrowserSiteListItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return BrowserSiteListItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): BrowserSiteListItemRequestBuilderGetQueryParameters {
        return new BrowserSiteListItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
