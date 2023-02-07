<?php

namespace Microsoft\Graph\Beta\Generated\OnPremisesPublishingProfiles\Item\PublishedResources;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PublishedResourcesRequestBuilderGetRequestConfiguration 
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
     * @var PublishedResourcesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PublishedResourcesRequestBuilderGetQueryParameters $queryParameters = null;
    
}
