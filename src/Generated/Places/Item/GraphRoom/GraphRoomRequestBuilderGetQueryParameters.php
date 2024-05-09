<?php

namespace Microsoft\Graph\Beta\Generated\Places\Item\GraphRoom;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get a collection of the specified type of place objects defined in the tenant.  You can do the following for a given tenant:- List all the rooms.- List all the workspaces.- List all the room lists.- List rooms in a specific room list.- List workspaces in a specific room list. A place object can be one of the following types: The room, workspace and roomList resources are derived from the place object. By default, this operation returns up to 100 places per page.  Compared with the findRooms and findRoomLists functions, this operation returns a richer payload for rooms and room lists. For details about how they compare, see Using the places API.
*/
class GraphRoomRequestBuilderGetQueryParameters 
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
     * Instantiates a new GraphRoomRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
