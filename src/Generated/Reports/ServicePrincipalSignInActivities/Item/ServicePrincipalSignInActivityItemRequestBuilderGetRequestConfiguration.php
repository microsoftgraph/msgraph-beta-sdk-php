<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServicePrincipalSignInActivities\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ServicePrincipalSignInActivityItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ServicePrincipalSignInActivityItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ServicePrincipalSignInActivityItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ServicePrincipalSignInActivityItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ServicePrincipalSignInActivityItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ServicePrincipalSignInActivityItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ServicePrincipalSignInActivityItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ServicePrincipalSignInActivityItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ServicePrincipalSignInActivityItemRequestBuilderGetQueryParameters {
        return new ServicePrincipalSignInActivityItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
