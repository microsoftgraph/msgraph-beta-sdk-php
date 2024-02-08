<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\ForwardingProfiles\Item\ServicePrincipal;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ServicePrincipalRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ServicePrincipalRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ServicePrincipalRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ServicePrincipalRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ServicePrincipalRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ServicePrincipalRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ServicePrincipalRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ServicePrincipalRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ServicePrincipalRequestBuilderGetQueryParameters {
        return new ServicePrincipalRequestBuilderGetQueryParameters($expand, $select);
    }

}
