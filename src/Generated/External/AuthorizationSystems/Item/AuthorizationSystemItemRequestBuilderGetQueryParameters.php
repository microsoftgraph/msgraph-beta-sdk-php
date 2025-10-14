<?php

namespace Microsoft\\Graph\\Beta\\Generated\External\AuthorizationSystems\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Represents an onboarded Amazon Web Services (AWS) account, Azure subscription, or Google Cloud Platform (GCP) project that Microsoft Entra Permissions Management collects and analyzes permissions and actions on.
*/
class AuthorizationSystemItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new AuthorizationSystemItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
