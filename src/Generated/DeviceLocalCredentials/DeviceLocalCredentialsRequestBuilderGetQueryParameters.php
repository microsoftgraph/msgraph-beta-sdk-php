<?php

namespace Microsoft\Graph\Beta\Generated\DeviceLocalCredentials;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get a list of the deviceLocalCredentialInfo objects and their properties excluding the credentials. 
*/
class DeviceLocalCredentialsRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24filter")
     * @var string|null $filter Filter items by property values
    */
    public ?string $filter = null;
    
    /**
     * @QueryParameter("%24orderby")
     * @var array<string>|null $orderby Order items by property values
    */
    public ?array $orderby = null;
    
    /**
     * @QueryParameter("%24search")
     * @var string|null $search Search items by search phrases
    */
    public ?string $search = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new deviceLocalCredentialsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null) {
        $this->filter = $filter;
        $this->orderby = $orderby;
        $this->search = $search;
        $this->select = $select;
    }

}
