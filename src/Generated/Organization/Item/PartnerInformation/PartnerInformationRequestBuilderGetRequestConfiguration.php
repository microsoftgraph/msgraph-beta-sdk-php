<?php

namespace Microsoft\Graph\Beta\Generated\Organization\Item\PartnerInformation;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PartnerInformationRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PartnerInformationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PartnerInformationRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PartnerInformationRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PartnerInformationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PartnerInformationRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PartnerInformationRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PartnerInformationRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PartnerInformationRequestBuilderGetQueryParameters {
        return new PartnerInformationRequestBuilderGetQueryParameters($expand, $select);
    }

}
