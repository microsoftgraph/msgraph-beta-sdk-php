<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\ExternalPartners\Item\RetrieveDeployAgentActionResultsactivityIdActivityIdCloudPcIdCloudPcId;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve the status of a specific deployment action on a specific Cloud PC device. If both activityId and cloudPcId are empty, the paging results are returned, and the pagination size is 100.
*/
class RetrieveDeployAgentActionResultsactivityIdActivityIdCloudPcIdCloudPcIdRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $activityId Usage: activityId='@activityId'
    */
    public ?string $activityId = null;
    
    /**
     * @var string|null $cloudPcId Usage: cloudPcId='@cloudPcId'
    */
    public ?string $cloudPcId = null;
    
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
    
    /**
     * Instantiates a new RetrieveDeployAgentActionResultsactivityIdActivityIdCloudPcIdCloudPcIdRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $activityId Usage: activityId='@activityId'
     * @param string|null $cloudPcId Usage: cloudPcId='@cloudPcId'
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
    */
    public function __construct(?string $activityId = null, ?string $cloudPcId = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null) {
        $this->activityId = $activityId;
        $this->cloudPcId = $cloudPcId;
        $this->count = $count;
        $this->filter = $filter;
        $this->search = $search;
        $this->skip = $skip;
        $this->top = $top;
    }

}
