<?php

namespace Microsoft\Graph\Beta\Generated\Communications\CallRecords\MicrosoftGraphCallRecordsGetSmsLogWithFromDateTimeWithToDateTime;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: microsoftGraphCallRecordsGetSmsLogWithFromDateTimeWithToDateTimeRequestBuilderGetRequestConfiguration
*/
class MicrosoftGraphCallRecordsGetSmsLogWithFromDateTimeWithT_f313facb extends BaseRequestConfiguration 
{
    /**
     * @var MicrosoftGraphCallRecordsGetSmsLogWithFromDateTimeWithT_e29b50e9|null $queryParameters Request query parameters
    */
    public ?MicrosoftGraphCallRecordsGetSmsLogWithFromDateTimeWithT_e29b50e9 $queryParameters = null;
    
    /**
     * Instantiates a new MicrosoftGraphCallRecordsGetSmsLogWithFromDateTimeWithT_f313facb and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MicrosoftGraphCallRecordsGetSmsLogWithFromDateTimeWithT_e29b50e9|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftGraphCallRecordsGetSmsLogWithFromDateTimeWithT_e29b50e9 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MicrosoftGraphCallRecordsGetSmsLogWithFromDateTimeWithT_e29b50e9.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return MicrosoftGraphCallRecordsGetSmsLogWithFromDateTimeWithT_e29b50e9
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): MicrosoftGraphCallRecordsGetSmsLogWithFromDateTimeWithT_e29b50e9 {
        return new MicrosoftGraphCallRecordsGetSmsLogWithFromDateTimeWithT_e29b50e9($count, $filter, $search, $skip, $top);
    }

}
