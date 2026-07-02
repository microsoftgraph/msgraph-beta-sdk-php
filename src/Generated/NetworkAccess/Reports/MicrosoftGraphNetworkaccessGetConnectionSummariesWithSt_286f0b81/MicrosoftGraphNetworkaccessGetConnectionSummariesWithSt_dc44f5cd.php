<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessGetConnectionSummariesWithSt_286f0b81;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: microsoftGraphNetworkaccessGetConnectionSummariesWithStartDateTimeWithEndDateTimeRequestBuilderGetRequestConfiguration
*/
class MicrosoftGraphNetworkaccessGetConnectionSummariesWithSt_dc44f5cd extends BaseRequestConfiguration 
{
    /**
     * @var MicrosoftGraphNetworkaccessGetConnectionSummariesWithSt_6b33b35c|null $queryParameters Request query parameters
    */
    public ?MicrosoftGraphNetworkaccessGetConnectionSummariesWithSt_6b33b35c $queryParameters = null;
    
    /**
     * Instantiates a new MicrosoftGraphNetworkaccessGetConnectionSummariesWithSt_dc44f5cd and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MicrosoftGraphNetworkaccessGetConnectionSummariesWithSt_6b33b35c|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftGraphNetworkaccessGetConnectionSummariesWithSt_6b33b35c $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MicrosoftGraphNetworkaccessGetConnectionSummariesWithSt_6b33b35c.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return MicrosoftGraphNetworkaccessGetConnectionSummariesWithSt_6b33b35c
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): MicrosoftGraphNetworkaccessGetConnectionSummariesWithSt_6b33b35c {
        return new MicrosoftGraphNetworkaccessGetConnectionSummariesWithSt_6b33b35c($count, $filter, $search, $skip, $top);
    }

}
