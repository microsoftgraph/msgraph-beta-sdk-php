<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\IntuneBrandingProfiles\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class IntuneBrandingProfileItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var IntuneBrandingProfileItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?IntuneBrandingProfileItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new IntuneBrandingProfileItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param IntuneBrandingProfileItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?IntuneBrandingProfileItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new IntuneBrandingProfileItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return IntuneBrandingProfileItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): IntuneBrandingProfileItemRequestBuilderGetQueryParameters {
        return new IntuneBrandingProfileItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
