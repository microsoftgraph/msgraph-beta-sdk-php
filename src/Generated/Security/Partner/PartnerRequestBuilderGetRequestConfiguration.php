<?php

namespace Microsoft\\Graph\\Beta\\Generated\Security\Partner;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PartnerRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PartnerRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PartnerRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PartnerRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PartnerRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PartnerRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PartnerRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PartnerRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PartnerRequestBuilderGetQueryParameters {
        return new PartnerRequestBuilderGetQueryParameters($expand, $select);
    }

}
