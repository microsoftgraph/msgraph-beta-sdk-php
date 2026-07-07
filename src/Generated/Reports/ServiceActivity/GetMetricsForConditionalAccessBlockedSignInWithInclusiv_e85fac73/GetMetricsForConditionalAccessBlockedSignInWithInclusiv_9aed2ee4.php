<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServiceActivity\GetMetricsForConditionalAccessBlockedSignInWithInclusiv_e85fac73;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve the number of user sign-in attempts that were blocked by a Conditional Access policy during a specific period. Original name: getMetricsForConditionalAccessBlockedSignInWithInclusiveIntervalStartDateTimeWithExclusiveIntervalEndDateTimeWithAggregationIntervalInMinutesRequestBuilderGetQueryParameters
*/
class GetMetricsForConditionalAccessBlockedSignInWithInclusiv_9aed2ee4 
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
     * Instantiates a new GetMetricsForConditionalAccessBlockedSignInWithInclusiv_9aed2ee4 and sets the default values.
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
