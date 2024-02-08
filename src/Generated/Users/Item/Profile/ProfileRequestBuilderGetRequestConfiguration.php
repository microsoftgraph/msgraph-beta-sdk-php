<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Profile;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ProfileRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ProfileRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ProfileRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ProfileRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ProfileRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ProfileRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ProfileRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ProfileRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ProfileRequestBuilderGetQueryParameters {
        return new ProfileRequestBuilderGetQueryParameters($expand, $select);
    }

}
