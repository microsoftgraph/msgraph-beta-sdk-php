<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\DeploymentAudiences\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DeploymentAudienceItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DeploymentAudienceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DeploymentAudienceItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DeploymentAudienceItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeploymentAudienceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeploymentAudienceItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeploymentAudienceItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeploymentAudienceItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeploymentAudienceItemRequestBuilderGetQueryParameters {
        return new DeploymentAudienceItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
