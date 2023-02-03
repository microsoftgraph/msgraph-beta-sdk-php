<?php

namespace Microsoft\Graph\Beta\Generated\Me\MicrosoftGraphFindRoomLists;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the room lists defined in a tenant, as represented by their emailAddress objects. Tenants can organize meeting rooms into room lists. In this API, each meeting room and room list is represented by an emailAddress instance.You can get all the room lists in the tenant, get all the rooms in the tenant, or get all the rooms in a specific room list.
*/
class FindRoomListsRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24count")
     * @var bool|null $count Include count of items
    */
    public ?bool $count = null;
    
    /**
     * @QueryParameter("%24filter")
     * @var string|null $filter Filter items by property values
    */
    public ?string $filter = null;
    
    /**
     * @QueryParameter("%24search")
     * @var string|null $search Search items by search phrases
    */
    public ?string $search = null;
    
    /**
     * @QueryParameter("%24skip")
     * @var int|null $skip Skip the first n items
    */
    public ?int $skip = null;
    
    /**
     * @QueryParameter("%24top")
     * @var int|null $top Show only the first n items
    */
    public ?int $top = null;
    
}
