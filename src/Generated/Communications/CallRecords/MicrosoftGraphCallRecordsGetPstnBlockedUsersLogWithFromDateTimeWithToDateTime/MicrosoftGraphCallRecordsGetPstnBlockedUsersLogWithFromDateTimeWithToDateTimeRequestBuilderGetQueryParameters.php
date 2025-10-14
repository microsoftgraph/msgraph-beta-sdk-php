<?php

namespace Microsoft\\Graph\\Beta\\Generated\Communications\CallRecords\MicrosoftGraphCallRecordsGetPstnBlockedUsersLogWithFromDateTimeWithToDateTime;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the log of users who are blocked/unblocked from making public switched telephone network (PSTN) calls in Microsoft Teams as a collection of pstnBlockedUsersLogRow entries. The log includes information about each blocked user such as their assigned phone number and the reason they were blocked/unblocked from making calls.
*/
class MicrosoftGraphCallRecordsGetPstnBlockedUsersLogWithFromDateTimeWithToDateTimeRequestBuilderGetQueryParameters 
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
     * Instantiates a new MicrosoftGraphCallRecordsGetPstnBlockedUsersLogWithFromDateTimeWithToDateTimeRequestBuilderGetQueryParameters and sets the default values.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
    */
    public function __construct(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null) {
        $this->count = $count;
        $this->filter = $filter;
        $this->search = $search;
        $this->skip = $skip;
        $this->top = $top;
    }

}
