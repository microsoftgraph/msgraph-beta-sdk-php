<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementTemplateStepVersions\Item\AcceptedFor;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AcceptedForRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AcceptedForRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AcceptedForRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AcceptedForRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AcceptedForRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AcceptedForRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AcceptedForRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AcceptedForRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AcceptedForRequestBuilderGetQueryParameters {
        return new AcceptedForRequestBuilderGetQueryParameters($expand, $select);
    }

}
