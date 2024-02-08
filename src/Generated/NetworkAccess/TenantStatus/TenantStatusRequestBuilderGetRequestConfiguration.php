<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\TenantStatus;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TenantStatusRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TenantStatusRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TenantStatusRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TenantStatusRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TenantStatusRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TenantStatusRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TenantStatusRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TenantStatusRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TenantStatusRequestBuilderGetQueryParameters {
        return new TenantStatusRequestBuilderGetQueryParameters($expand, $select);
    }

}
