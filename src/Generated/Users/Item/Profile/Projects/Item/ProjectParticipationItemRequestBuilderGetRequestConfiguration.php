<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Profile\Projects\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ProjectParticipationItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ProjectParticipationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ProjectParticipationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ProjectParticipationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ProjectParticipationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ProjectParticipationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ProjectParticipationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ProjectParticipationItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ProjectParticipationItemRequestBuilderGetQueryParameters {
        return new ProjectParticipationItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
