<?php

namespace Microsoft\\Graph\\Beta\\Generated\Users\Item\InvitedBy;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class InvitedByRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var InvitedByRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?InvitedByRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new InvitedByRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param InvitedByRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?InvitedByRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new InvitedByRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return InvitedByRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): InvitedByRequestBuilderGetQueryParameters {
        return new InvitedByRequestBuilderGetQueryParameters($expand, $select);
    }

}
