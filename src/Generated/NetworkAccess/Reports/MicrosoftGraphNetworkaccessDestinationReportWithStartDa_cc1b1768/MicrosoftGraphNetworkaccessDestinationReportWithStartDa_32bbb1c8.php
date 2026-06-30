<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessDestinationReportWithStartDa_cc1b1768;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: microsoftGraphNetworkaccessDestinationReportWithStartDateTimeWithEndDateTimeaiAgentIdAiAgentIdAiAgentNameAiAgentNameRequestBuilderGetRequestConfiguration
*/
class MicrosoftGraphNetworkaccessDestinationReportWithStartDa_32bbb1c8 extends BaseRequestConfiguration 
{
    /**
     * @var MicrosoftGraphNetworkaccessDestinationReportWithStartDa_b0d6dfec|null $queryParameters Request query parameters
    */
    public ?MicrosoftGraphNetworkaccessDestinationReportWithStartDa_b0d6dfec $queryParameters = null;
    
    /**
     * Instantiates a new MicrosoftGraphNetworkaccessDestinationReportWithStartDa_32bbb1c8 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MicrosoftGraphNetworkaccessDestinationReportWithStartDa_b0d6dfec|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftGraphNetworkaccessDestinationReportWithStartDa_b0d6dfec $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MicrosoftGraphNetworkaccessDestinationReportWithStartDa_b0d6dfec.
     * @param string|null $aiAgentId Usage: aiAgentId='@aiAgentId'
     * @param string|null $aiAgentName Usage: aiAgentName='@aiAgentName'
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return MicrosoftGraphNetworkaccessDestinationReportWithStartDa_b0d6dfec
    */
    public static function createQueryParameters(?string $aiAgentId = null, ?string $aiAgentName = null, ?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): MicrosoftGraphNetworkaccessDestinationReportWithStartDa_b0d6dfec {
        return new MicrosoftGraphNetworkaccessDestinationReportWithStartDa_b0d6dfec($aiAgentId, $aiAgentName, $count, $filter, $search, $skip, $top);
    }

}
