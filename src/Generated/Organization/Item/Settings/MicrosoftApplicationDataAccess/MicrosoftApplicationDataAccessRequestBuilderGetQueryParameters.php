<?php

namespace Microsoft\Graph\Beta\Generated\Organization\Item\Settings\MicrosoftApplicationDataAccess;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the settings in a microsoftApplicationDataAccessSettings object that specify access from Microsoft applications to Microsoft 365 user data in an organization. This API is supported in the following national cloud deployments.
*/
class MicrosoftApplicationDataAccessRequestBuilderGetQueryParameters 
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
     * Instantiates a new microsoftApplicationDataAccessRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
