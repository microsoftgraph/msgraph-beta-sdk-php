<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessGetCloudApplicationReportWit_b76c2738;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: microsoftGraphNetworkaccessGetCloudApplicationReportWithStartDateTimeWithEndDateTimeuserIdUserIdRequestBuilderGetRequestConfiguration
*/
class MicrosoftGraphNetworkaccessGetCloudApplicationReportWit_11cb3e0a extends BaseRequestConfiguration 
{
    /**
     * @var MicrosoftGraphNetworkaccessGetCloudApplicationReportWit_7bf114b3|null $queryParameters Request query parameters
    */
    public ?MicrosoftGraphNetworkaccessGetCloudApplicationReportWit_7bf114b3 $queryParameters = null;
    
    /**
     * Instantiates a new MicrosoftGraphNetworkaccessGetCloudApplicationReportWit_11cb3e0a and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MicrosoftGraphNetworkaccessGetCloudApplicationReportWit_7bf114b3|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftGraphNetworkaccessGetCloudApplicationReportWit_7bf114b3 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MicrosoftGraphNetworkaccessGetCloudApplicationReportWit_7bf114b3.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @param string|null $userId Usage: userId='@userId'
     * @return MicrosoftGraphNetworkaccessGetCloudApplicationReportWit_7bf114b3
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null, ?string $userId = null): MicrosoftGraphNetworkaccessGetCloudApplicationReportWit_7bf114b3 {
        return new MicrosoftGraphNetworkaccessGetCloudApplicationReportWit_7bf114b3($count, $filter, $search, $skip, $top, $userId);
    }

}
