<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementTemplateSteps\Item\AcceptedVersion;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AcceptedVersionRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AcceptedVersionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AcceptedVersionRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AcceptedVersionRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AcceptedVersionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AcceptedVersionRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AcceptedVersionRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AcceptedVersionRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AcceptedVersionRequestBuilderGetQueryParameters {
        return new AcceptedVersionRequestBuilderGetQueryParameters($expand, $select);
    }

}
