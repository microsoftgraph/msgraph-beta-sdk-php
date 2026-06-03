<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Alerts\MicrosoftGraphNetworkaccessGetAlertSeveritySummariesWit_472bb6fa;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: microsoftGraphNetworkaccessGetAlertSeveritySummariesWithStartDateTimeWithEndDateTimeRequestBuilderGetRequestConfiguration
*/
class MicrosoftGraphNetworkaccessGetAlertSeveritySummariesWit_484d48e9 extends BaseRequestConfiguration 
{
    /**
     * @var MicrosoftGraphNetworkaccessGetAlertSeveritySummariesWit_f3ff8427|null $queryParameters Request query parameters
    */
    public ?MicrosoftGraphNetworkaccessGetAlertSeveritySummariesWit_f3ff8427 $queryParameters = null;
    
    /**
     * Instantiates a new MicrosoftGraphNetworkaccessGetAlertSeveritySummariesWit_484d48e9 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MicrosoftGraphNetworkaccessGetAlertSeveritySummariesWit_f3ff8427|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftGraphNetworkaccessGetAlertSeveritySummariesWit_f3ff8427 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MicrosoftGraphNetworkaccessGetAlertSeveritySummariesWit_f3ff8427.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return MicrosoftGraphNetworkaccessGetAlertSeveritySummariesWit_f3ff8427
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): MicrosoftGraphNetworkaccessGetAlertSeveritySummariesWit_f3ff8427 {
        return new MicrosoftGraphNetworkaccessGetAlertSeveritySummariesWit_f3ff8427($count, $filter, $search, $skip, $top);
    }

}
