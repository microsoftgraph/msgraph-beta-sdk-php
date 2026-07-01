<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessTransactionSummariesWithStar_d11d4593;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: microsoftGraphNetworkaccessTransactionSummariesWithStartDateTimeWithEndDateTimeRequestBuilderGetRequestConfiguration
*/
class MicrosoftGraphNetworkaccessTransactionSummariesWithStar_95d6d3c4 extends BaseRequestConfiguration 
{
    /**
     * @var MicrosoftGraphNetworkaccessTransactionSummariesWithStar_8dd019a1|null $queryParameters Request query parameters
    */
    public ?MicrosoftGraphNetworkaccessTransactionSummariesWithStar_8dd019a1 $queryParameters = null;
    
    /**
     * Instantiates a new MicrosoftGraphNetworkaccessTransactionSummariesWithStar_95d6d3c4 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MicrosoftGraphNetworkaccessTransactionSummariesWithStar_8dd019a1|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftGraphNetworkaccessTransactionSummariesWithStar_8dd019a1 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MicrosoftGraphNetworkaccessTransactionSummariesWithStar_8dd019a1.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return MicrosoftGraphNetworkaccessTransactionSummariesWithStar_8dd019a1
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): MicrosoftGraphNetworkaccessTransactionSummariesWithStar_8dd019a1 {
        return new MicrosoftGraphNetworkaccessTransactionSummariesWithStar_8dd019a1($count, $filter, $search, $skip, $top);
    }

}
