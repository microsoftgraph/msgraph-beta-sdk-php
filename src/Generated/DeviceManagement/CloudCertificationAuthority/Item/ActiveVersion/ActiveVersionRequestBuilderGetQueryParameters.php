<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\CloudCertificationAuthority\Item\ActiveVersion;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The currently active certification authority version. This navigation property provides direct access to the active version's details including certificate information, URLs, and validity periods. The active version is automatically included in the default response when retrieving a certification authority entity without requiring $expand. Read-only.
*/
class ActiveVersionRequestBuilderGetQueryParameters 
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
     * Instantiates a new ActiveVersionRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
