<?php

namespace Microsoft\Graph\Beta\Generated\Communications\CallRecords\MicrosoftGraphCallRecordsGetPstnBlockedUsersLogWithFrom_e4efc048;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: microsoftGraphCallRecordsGetPstnBlockedUsersLogWithFromDateTimeWithToDateTimeRequestBuilderGetRequestConfiguration
*/
class MicrosoftGraphCallRecordsGetPstnBlockedUsersLogWithFrom_dff0e64d extends BaseRequestConfiguration 
{
    /**
     * @var MicrosoftGraphCallRecordsGetPstnBlockedUsersLogWithFrom_26c0fde6|null $queryParameters Request query parameters
    */
    public ?MicrosoftGraphCallRecordsGetPstnBlockedUsersLogWithFrom_26c0fde6 $queryParameters = null;
    
    /**
     * Instantiates a new MicrosoftGraphCallRecordsGetPstnBlockedUsersLogWithFrom_dff0e64d and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MicrosoftGraphCallRecordsGetPstnBlockedUsersLogWithFrom_26c0fde6|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftGraphCallRecordsGetPstnBlockedUsersLogWithFrom_26c0fde6 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MicrosoftGraphCallRecordsGetPstnBlockedUsersLogWithFrom_26c0fde6.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return MicrosoftGraphCallRecordsGetPstnBlockedUsersLogWithFrom_26c0fde6
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): MicrosoftGraphCallRecordsGetPstnBlockedUsersLogWithFrom_26c0fde6 {
        return new MicrosoftGraphCallRecordsGetPstnBlockedUsersLogWithFrom_26c0fde6($count, $filter, $search, $skip, $top);
    }

}
