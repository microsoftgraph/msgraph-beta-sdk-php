<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Alerts\MicrosoftGraphNetworkaccessGetAlertFrequenciesWithStart_00987de1;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: microsoftGraphNetworkaccessGetAlertFrequenciesWithStartDateTimeWithEndDateTimeRequestBuilderGetRequestConfiguration
*/
class MicrosoftGraphNetworkaccessGetAlertFrequenciesWithStart_b2f15e22 extends BaseRequestConfiguration 
{
    /**
     * @var MicrosoftGraphNetworkaccessGetAlertFrequenciesWithStart_119a1a9c|null $queryParameters Request query parameters
    */
    public ?MicrosoftGraphNetworkaccessGetAlertFrequenciesWithStart_119a1a9c $queryParameters = null;
    
    /**
     * Instantiates a new MicrosoftGraphNetworkaccessGetAlertFrequenciesWithStart_b2f15e22 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MicrosoftGraphNetworkaccessGetAlertFrequenciesWithStart_119a1a9c|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftGraphNetworkaccessGetAlertFrequenciesWithStart_119a1a9c $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MicrosoftGraphNetworkaccessGetAlertFrequenciesWithStart_119a1a9c.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return MicrosoftGraphNetworkaccessGetAlertFrequenciesWithStart_119a1a9c
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): MicrosoftGraphNetworkaccessGetAlertFrequenciesWithStart_119a1a9c {
        return new MicrosoftGraphNetworkaccessGetAlertFrequenciesWithStart_119a1a9c($count, $filter, $search, $skip, $top);
    }

}
