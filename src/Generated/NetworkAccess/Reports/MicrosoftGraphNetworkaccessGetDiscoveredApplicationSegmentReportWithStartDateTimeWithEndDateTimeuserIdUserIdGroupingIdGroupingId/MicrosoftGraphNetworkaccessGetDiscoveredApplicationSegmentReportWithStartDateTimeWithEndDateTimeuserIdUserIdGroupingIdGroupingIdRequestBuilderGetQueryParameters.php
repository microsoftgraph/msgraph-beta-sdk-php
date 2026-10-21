<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessGetDiscoveredApplicationSegmentReportWithStartDateTimeWithEndDateTimeuserIdUserIdGroupingIdGroupingId;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Returns a collection of discovered application segments based on aggregated traffic logs for a given period.
*/
class MicrosoftGraphNetworkaccessGetDiscoveredApplicationSegmentReportWithStartDateTimeWithEndDateTimeuserIdUserIdGroupingIdGroupingIdRequestBuilderGetQueryParameters 
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
     * @var string|null $groupingId Usage: groupingId='@groupingId'
    */
    public ?string $groupingId = null;
    
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
     * @var string|null $userId Usage: userId='@userId'
    */
    public ?string $userId = null;
    
    /**
     * Instantiates a new MicrosoftGraphNetworkaccessGetDiscoveredApplicationSegmentReportWithStartDateTimeWithEndDateTimeuserIdUserIdGroupingIdGroupingIdRequestBuilderGetQueryParameters and sets the default values.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $groupingId Usage: groupingId='@groupingId'
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @param string|null $userId Usage: userId='@userId'
    */
    public function __construct(?bool $count = null, ?string $filter = null, ?string $groupingId = null, ?string $search = null, ?int $skip = null, ?int $top = null, ?string $userId = null) {
        $this->count = $count;
        $this->filter = $filter;
        $this->groupingId = $groupingId;
        $this->search = $search;
        $this->skip = $skip;
        $this->top = $top;
        $this->userId = $userId;
    }

}
