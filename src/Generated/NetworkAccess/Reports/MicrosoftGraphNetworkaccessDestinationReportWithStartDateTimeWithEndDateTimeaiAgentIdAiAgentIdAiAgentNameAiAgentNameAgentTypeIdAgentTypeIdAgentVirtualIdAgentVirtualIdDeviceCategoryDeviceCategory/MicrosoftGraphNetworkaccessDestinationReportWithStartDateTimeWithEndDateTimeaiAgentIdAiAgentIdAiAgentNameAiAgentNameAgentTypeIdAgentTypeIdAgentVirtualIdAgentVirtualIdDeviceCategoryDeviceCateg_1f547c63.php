<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessDestinationReportWithStartDateTimeWithEndDateTimeaiAgentIdAiAgentIdAiAgentNameAiAgentNameAgentTypeIdAgentTypeIdAgentVirtualIdAgentVirtualIdDeviceCategoryDeviceCategory;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: microsoftGraphNetworkaccessDestinationReportWithStartDateTimeWithEndDateTimeaiAgentIdAiAgentIdAiAgentNameAiAgentNameAgentTypeIdAgentTypeIdAgentVirtualIdAgentVirtualIdDeviceCategoryDeviceCategoryRequestBuilderGetRequestConfiguration
*/
class MicrosoftGraphNetworkaccessDestinationReportWithStartDateTimeWithEndDateTimeaiAgentIdAiAgentIdAiAgentNameAiAgentNameAgentTypeIdAgentTypeIdAgentVirtualIdAgentVirtualIdDeviceCategoryDeviceCateg_1f547c63 extends BaseRequestConfiguration 
{
    /**
     * @var MicrosoftGraphNetworkaccessDestinationReportWithStartDateTimeWithEndDateTimeaiAgentIdAiAgentIdAiAgentNameAiAgentNameAgentTypeIdAgentTypeIdAgentVirtualIdAgentVirtualIdDeviceCategoryDeviceCateg_40f60a32|null $queryParameters Request query parameters
    */
    public ?MicrosoftGraphNetworkaccessDestinationReportWithStartDateTimeWithEndDateTimeaiAgentIdAiAgentIdAiAgentNameAiAgentNameAgentTypeIdAgentTypeIdAgentVirtualIdAgentVirtualIdDeviceCategoryDeviceCateg_40f60a32 $queryParameters = null;
    
    /**
     * Instantiates a new MicrosoftGraphNetworkaccessDestinationReportWithStartDateTimeWithEndDateTimeaiAgentIdAiAgentIdAiAgentNameAiAgentNameAgentTypeIdAgentTypeIdAgentVirtualIdAgentVirtualIdDeviceCategoryDeviceCateg_1f547c63 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MicrosoftGraphNetworkaccessDestinationReportWithStartDateTimeWithEndDateTimeaiAgentIdAiAgentIdAiAgentNameAiAgentNameAgentTypeIdAgentTypeIdAgentVirtualIdAgentVirtualIdDeviceCategoryDeviceCateg_40f60a32|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftGraphNetworkaccessDestinationReportWithStartDateTimeWithEndDateTimeaiAgentIdAiAgentIdAiAgentNameAiAgentNameAgentTypeIdAgentTypeIdAgentVirtualIdAgentVirtualIdDeviceCategoryDeviceCateg_40f60a32 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MicrosoftGraphNetworkaccessDestinationReportWithStartDateTimeWithEndDateTimeaiAgentIdAiAgentIdAiAgentNameAiAgentNameAgentTypeIdAgentTypeIdAgentVirtualIdAgentVirtualIdDeviceCategoryDeviceCateg_40f60a32.
     * @param string|null $agentTypeId Usage: agentTypeId='@agentTypeId'
     * @param string|null $agentVirtualId Usage: agentVirtualId='@agentVirtualId'
     * @param string|null $aiAgentId Usage: aiAgentId='@aiAgentId'
     * @param string|null $aiAgentName Usage: aiAgentName='@aiAgentName'
     * @param bool|null $count Include count of items
     * @param string|null $deviceCategory Usage: deviceCategory='@deviceCategory'
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return MicrosoftGraphNetworkaccessDestinationReportWithStartDateTimeWithEndDateTimeaiAgentIdAiAgentIdAiAgentNameAiAgentNameAgentTypeIdAgentTypeIdAgentVirtualIdAgentVirtualIdDeviceCategoryDeviceCateg_40f60a32
    */
    public static function createQueryParameters(?string $agentTypeId = null, ?string $agentVirtualId = null, ?string $aiAgentId = null, ?string $aiAgentName = null, ?bool $count = null, ?string $deviceCategory = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): MicrosoftGraphNetworkaccessDestinationReportWithStartDateTimeWithEndDateTimeaiAgentIdAiAgentIdAiAgentNameAiAgentNameAgentTypeIdAgentTypeIdAgentVirtualIdAgentVirtualIdDeviceCategoryDeviceCateg_40f60a32 {
        return new MicrosoftGraphNetworkaccessDestinationReportWithStartDateTimeWithEndDateTimeaiAgentIdAiAgentIdAiAgentNameAiAgentNameAgentTypeIdAgentTypeIdAgentVirtualIdAgentVirtualIdDeviceCategoryDeviceCateg_40f60a32($agentTypeId, $agentVirtualId, $aiAgentId, $aiAgentName, $count, $deviceCategory, $filter, $search, $skip, $top);
    }

}
