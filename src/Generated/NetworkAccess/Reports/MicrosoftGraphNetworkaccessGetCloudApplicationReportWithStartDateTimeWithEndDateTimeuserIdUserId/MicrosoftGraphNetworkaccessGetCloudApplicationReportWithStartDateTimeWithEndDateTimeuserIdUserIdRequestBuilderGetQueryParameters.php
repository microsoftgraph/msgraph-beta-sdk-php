<?php

namespace Microsoft\\Graph\\Beta\\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessGetCloudApplicationReportWithStartDateTimeWithEndDateTimeuserIdUserId;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get a collection of cloud application reports based on aggregated traffic logs for a specified time period in Global Secure Access.
*/
class MicrosoftGraphNetworkaccessGetCloudApplicationReportWithStartDateTimeWithEndDateTimeuserIdUserIdRequestBuilderGetQueryParameters 
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
    
    /**
     * @var string|null $userId Usage: userId='@userId'
    */
    public ?string $userId = null;
    
    /**
     * Instantiates a new MicrosoftGraphNetworkaccessGetCloudApplicationReportWithStartDateTimeWithEndDateTimeuserIdUserIdRequestBuilderGetQueryParameters and sets the default values.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @param string|null $userId Usage: userId='@userId'
    */
    public function __construct(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null, ?string $userId = null) {
        $this->count = $count;
        $this->filter = $filter;
        $this->search = $search;
        $this->skip = $skip;
        $this->top = $top;
        $this->userId = $userId;
    }

}
