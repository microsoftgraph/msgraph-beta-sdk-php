<?php

namespace Microsoft\Graph\Beta\Generated\Me\Presence;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PresenceRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PresenceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PresenceRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new presenceRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PresenceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PresenceRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new presenceRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PresenceRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PresenceRequestBuilderGetQueryParameters {
        return new PresenceRequestBuilderGetQueryParameters($expand, $select);
    }

}
