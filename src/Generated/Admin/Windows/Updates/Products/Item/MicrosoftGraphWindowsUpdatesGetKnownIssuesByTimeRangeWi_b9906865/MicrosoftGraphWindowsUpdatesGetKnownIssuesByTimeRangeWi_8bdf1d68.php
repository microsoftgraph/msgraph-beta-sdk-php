<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Products\Item\MicrosoftGraphWindowsUpdatesGetKnownIssuesByTimeRangeWi_b9906865;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: microsoftGraphWindowsUpdatesGetKnownIssuesByTimeRangeWithDaysInPastWithIncludeAllActiveRequestBuilderGetRequestConfiguration
*/
class MicrosoftGraphWindowsUpdatesGetKnownIssuesByTimeRangeWi_8bdf1d68 extends BaseRequestConfiguration 
{
    /**
     * @var MicrosoftGraphWindowsUpdatesGetKnownIssuesByTimeRangeWi_7f3917b8|null $queryParameters Request query parameters
    */
    public ?MicrosoftGraphWindowsUpdatesGetKnownIssuesByTimeRangeWi_7f3917b8 $queryParameters = null;
    
    /**
     * Instantiates a new MicrosoftGraphWindowsUpdatesGetKnownIssuesByTimeRangeWi_8bdf1d68 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MicrosoftGraphWindowsUpdatesGetKnownIssuesByTimeRangeWi_7f3917b8|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftGraphWindowsUpdatesGetKnownIssuesByTimeRangeWi_7f3917b8 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MicrosoftGraphWindowsUpdatesGetKnownIssuesByTimeRangeWi_7f3917b8.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param bool|null $includeAllActive Usage: includeAllActive=@includeAllActive
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return MicrosoftGraphWindowsUpdatesGetKnownIssuesByTimeRangeWi_7f3917b8
    */
    public static function createQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?bool $includeAllActive = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): MicrosoftGraphWindowsUpdatesGetKnownIssuesByTimeRangeWi_7f3917b8 {
        return new MicrosoftGraphWindowsUpdatesGetKnownIssuesByTimeRangeWi_7f3917b8($count, $expand, $filter, $includeAllActive, $orderby, $search, $select, $skip, $top);
    }

}
