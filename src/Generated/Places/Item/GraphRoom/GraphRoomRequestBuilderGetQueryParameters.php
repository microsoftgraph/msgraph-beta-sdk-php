<?php

namespace Microsoft\\Graph\\Beta\\Generated\Places\Item\GraphRoom;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get a collection of the specified type of place objects defined in a tenant. You can do the following for a given tenant:- List all buildings.- List all floors.- List all sections.- List all desks.- List all rooms.- List all workspaces.- List all room lists.- List rooms in a specific room list.- List workspaces in a specific room list. By default, this operation returns up to 100 rooms, workspaces, and room lists per page, and 1,000 buildings, floors, sections, and desks per page. Compared with the findRooms and findRoomLists functions, this operation returns a richer payload for rooms and room lists. For details about how they compare, see Using the places API.
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
