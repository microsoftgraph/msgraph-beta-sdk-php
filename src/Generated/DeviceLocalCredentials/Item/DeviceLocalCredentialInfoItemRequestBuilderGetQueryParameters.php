<?php

namespace Microsoft\Graph\Beta\Generated\DeviceLocalCredentials\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get entity from deviceLocalCredentials by key
*/
class DeviceLocalCredentialInfoItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new DeviceLocalCredentialInfoItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
