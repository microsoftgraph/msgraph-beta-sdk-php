<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Settings\CustomBlockPage;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CustomBlockPageRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CustomBlockPageRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CustomBlockPageRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CustomBlockPageRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CustomBlockPageRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CustomBlockPageRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CustomBlockPageRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CustomBlockPageRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CustomBlockPageRequestBuilderGetQueryParameters {
        return new CustomBlockPageRequestBuilderGetQueryParameters($expand, $select);
    }

}
