<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\MailFolders\Item\UserConfigurations\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get userConfigurations from users
*/
class UserConfigurationItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new UserConfigurationItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
