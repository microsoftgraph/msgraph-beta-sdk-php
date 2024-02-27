<?php

namespace Microsoft\Graph\Beta\Generated\AppCatalogs\TeamsApps\Item\AppDefinitions\Item\ColorIcon\HostedContent;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class HostedContentRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var HostedContentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?HostedContentRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new HostedContentRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param HostedContentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?HostedContentRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new HostedContentRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return HostedContentRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): HostedContentRequestBuilderGetQueryParameters {
        return new HostedContentRequestBuilderGetQueryParameters($expand, $select);
    }

}
