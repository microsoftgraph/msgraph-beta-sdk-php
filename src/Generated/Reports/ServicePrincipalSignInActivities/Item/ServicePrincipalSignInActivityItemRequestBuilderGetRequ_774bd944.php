<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServicePrincipalSignInActivities\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: ServicePrincipalSignInActivityItemRequestBuilderGetRequestConfiguration
*/
class ServicePrincipalSignInActivityItemRequestBuilderGetRequ_774bd944 extends BaseRequestConfiguration 
{
    /**
     * @var ServicePrincipalSignInActivityItemRequestBuilderGetQuer_19c081fc|null $queryParameters Request query parameters
    */
    public ?ServicePrincipalSignInActivityItemRequestBuilderGetQuer_19c081fc $queryParameters = null;
    
    /**
     * Instantiates a new ServicePrincipalSignInActivityItemRequestBuilderGetRequ_774bd944 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ServicePrincipalSignInActivityItemRequestBuilderGetQuer_19c081fc|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ServicePrincipalSignInActivityItemRequestBuilderGetQuer_19c081fc $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ServicePrincipalSignInActivityItemRequestBuilderGetQuer_19c081fc.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ServicePrincipalSignInActivityItemRequestBuilderGetQuer_19c081fc
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ServicePrincipalSignInActivityItemRequestBuilderGetQuer_19c081fc {
        return new ServicePrincipalSignInActivityItemRequestBuilderGetQuer_19c081fc($expand, $select);
    }

}
