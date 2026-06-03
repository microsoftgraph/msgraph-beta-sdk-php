<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessGetDestinationSummariesWithS_790ff302;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: microsoftGraphNetworkaccessGetDestinationSummariesWithStartDateTimeWithEndDateTimeWithAggregatedByRequestBuilderGetRequestConfiguration
*/
class MicrosoftGraphNetworkaccessGetDestinationSummariesWithS_24d72b2c extends BaseRequestConfiguration 
{
    /**
     * @var MicrosoftGraphNetworkaccessGetDestinationSummariesWithS_b4511d42|null $queryParameters Request query parameters
    */
    public ?MicrosoftGraphNetworkaccessGetDestinationSummariesWithS_b4511d42 $queryParameters = null;
    
    /**
     * Instantiates a new MicrosoftGraphNetworkaccessGetDestinationSummariesWithS_24d72b2c and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MicrosoftGraphNetworkaccessGetDestinationSummariesWithS_b4511d42|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftGraphNetworkaccessGetDestinationSummariesWithS_b4511d42 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MicrosoftGraphNetworkaccessGetDestinationSummariesWithS_b4511d42.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return MicrosoftGraphNetworkaccessGetDestinationSummariesWithS_b4511d42
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): MicrosoftGraphNetworkaccessGetDestinationSummariesWithS_b4511d42 {
        return new MicrosoftGraphNetworkaccessGetDestinationSummariesWithS_b4511d42($count, $filter, $search, $skip, $top);
    }

}
