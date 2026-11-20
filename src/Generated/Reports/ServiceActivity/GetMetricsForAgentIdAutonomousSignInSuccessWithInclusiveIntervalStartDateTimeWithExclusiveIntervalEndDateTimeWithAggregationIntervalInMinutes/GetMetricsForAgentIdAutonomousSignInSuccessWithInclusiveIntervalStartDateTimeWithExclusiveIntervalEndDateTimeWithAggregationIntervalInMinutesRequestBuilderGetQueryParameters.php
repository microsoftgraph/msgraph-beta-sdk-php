<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForAgentIdAutonomousSignInSuccessWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutes;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve the number of completed autonomous sign-ins by Agent IDs during a specified time period. In Agent ID autonomous sign-ins, the agent signs in and acts as itself, including both Agent ID instances and designated service principals. These sign-ins are distinct from Agent ID interactive sign-ins, in which agents sign in on behalf of human users.
*/
class GetMetricsForAgentIdAutonomousSignInSuccessWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetQueryParameters 
{
    /**
     * @var int|null $aggregationIntervalInMinutes Usage: aggregationIntervalInMinutes=@aggregationIntervalInMinutes
    */
    public ?int $aggregationIntervalInMinutes = null;
    
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
     * Instantiates a new GetMetricsForAgentIdAutonomousSignInSuccessWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetQueryParameters and sets the default values.
     * @param int|null $aggregationIntervalInMinutes Usage: aggregationIntervalInMinutes=@aggregationIntervalInMinutes
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
    */
    public function __construct(?int $aggregationIntervalInMinutes = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null) {
        $this->aggregationIntervalInMinutes = $aggregationIntervalInMinutes;
        $this->count = $count;
        $this->filter = $filter;
        $this->search = $search;
        $this->skip = $skip;
        $this->top = $top;
    }

}
