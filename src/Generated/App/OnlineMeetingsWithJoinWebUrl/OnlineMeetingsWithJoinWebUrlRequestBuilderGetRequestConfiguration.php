<?php

namespace Microsoft\Graph\Beta\Generated\App\OnlineMeetingsWithJoinWebUrl;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OnlineMeetingsWithJoinWebUrlRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var OnlineMeetingsWithJoinWebUrlRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OnlineMeetingsWithJoinWebUrlRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OnlineMeetingsWithJoinWebUrlRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OnlineMeetingsWithJoinWebUrlRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OnlineMeetingsWithJoinWebUrlRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OnlineMeetingsWithJoinWebUrlRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return OnlineMeetingsWithJoinWebUrlRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): OnlineMeetingsWithJoinWebUrlRequestBuilderGetQueryParameters {
        return new OnlineMeetingsWithJoinWebUrlRequestBuilderGetQueryParameters($expand, $select);
    }

}
