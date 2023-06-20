<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Settings\ForwardingOptions;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ForwardingOptionsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ForwardingOptionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ForwardingOptionsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new forwardingOptionsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ForwardingOptionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ForwardingOptionsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new forwardingOptionsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ForwardingOptionsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ForwardingOptionsRequestBuilderGetQueryParameters {
        return new ForwardingOptionsRequestBuilderGetQueryParameters($expand, $select);
    }

}
