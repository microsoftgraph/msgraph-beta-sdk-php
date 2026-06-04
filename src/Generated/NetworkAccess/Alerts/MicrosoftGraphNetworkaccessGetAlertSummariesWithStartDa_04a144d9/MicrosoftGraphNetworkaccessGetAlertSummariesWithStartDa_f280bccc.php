<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Alerts\MicrosoftGraphNetworkaccessGetAlertSummariesWithStartDa_04a144d9;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: microsoftGraphNetworkaccessGetAlertSummariesWithStartDateTimeWithEndDateTimeRequestBuilderGetRequestConfiguration
*/
class MicrosoftGraphNetworkaccessGetAlertSummariesWithStartDa_f280bccc extends BaseRequestConfiguration 
{
    /**
     * @var MicrosoftGraphNetworkaccessGetAlertSummariesWithStartDa_0c855ff0|null $queryParameters Request query parameters
    */
    public ?MicrosoftGraphNetworkaccessGetAlertSummariesWithStartDa_0c855ff0 $queryParameters = null;
    
    /**
     * Instantiates a new MicrosoftGraphNetworkaccessGetAlertSummariesWithStartDa_f280bccc and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MicrosoftGraphNetworkaccessGetAlertSummariesWithStartDa_0c855ff0|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftGraphNetworkaccessGetAlertSummariesWithStartDa_0c855ff0 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MicrosoftGraphNetworkaccessGetAlertSummariesWithStartDa_0c855ff0.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return MicrosoftGraphNetworkaccessGetAlertSummariesWithStartDa_0c855ff0
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): MicrosoftGraphNetworkaccessGetAlertSummariesWithStartDa_0c855ff0 {
        return new MicrosoftGraphNetworkaccessGetAlertSummariesWithStartDa_0c855ff0($count, $filter, $search, $skip, $top);
    }

}
