<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessDestinationReportWithStartDateTimeWithEndDateTimeaiAgentIdAiAgentIdAiAgentNameAiAgentNameAgentTypeIdAgentTypeIdAgentVirtualIdAgentVirtualIdDeviceCategoryDeviceCategory;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Invoke function destinationReport Original name: microsoftGraphNetworkaccessDestinationReportWithStartDateTimeWithEndDateTimeaiAgentIdAiAgentIdAiAgentNameAiAgentNameAgentTypeIdAgentTypeIdAgentVirtualIdAgentVirtualIdDeviceCategoryDeviceCategoryRequestBuilderGetQueryParameters
*/
class MicrosoftGraphNetworkaccessDestinationReportWithStartDateTimeWithEndDateTimeaiAgentIdAiAgentIdAiAgentNameAiAgentNameAgentTypeIdAgentTypeIdAgentVirtualIdAgentVirtualIdDeviceCategoryDeviceCateg_40f60a32 
{
    /**
     * @var string|null $agentTypeId Usage: agentTypeId='@agentTypeId'
    */
    public ?string $agentTypeId = null;
    
    /**
     * @var string|null $agentVirtualId Usage: agentVirtualId='@agentVirtualId'
    */
    public ?string $agentVirtualId = null;
    
    /**
     * @var string|null $aiAgentId Usage: aiAgentId='@aiAgentId'
    */
    public ?string $aiAgentId = null;
    
    /**
     * @var string|null $aiAgentName Usage: aiAgentName='@aiAgentName'
    */
    public ?string $aiAgentName = null;
    
    /**
     * @QueryParameter("%24count")
     * @var bool|null $count Include count of items
    */
    public ?bool $count = null;
    
    /**
     * @var string|null $deviceCategory Usage: deviceCategory='@deviceCategory'
    */
    public ?string $deviceCategory = null;
    
    /**
     * @QueryParameter("%24filter")
     * @var string|null $filter Filter items by property values
    */
    public ?string $filter = null;
    
    /**
     * @QueryParameter("%24search")
     * @var string|null $search Search items by search phrases
    */
    public ?string $search = null;
    
    /**
     * @QueryParameter("%24skip")
     * @var int|null $skip Skip the first n items
    */
    public ?int $skip = null;
    
    /**
     * @QueryParameter("%24top")
     * @var int|null $top Show only the first n items
    */
    public ?int $top = null;
    
    /**
     * Instantiates a new MicrosoftGraphNetworkaccessDestinationReportWithStartDateTimeWithEndDateTimeaiAgentIdAiAgentIdAiAgentNameAiAgentNameAgentTypeIdAgentTypeIdAgentVirtualIdAgentVirtualIdDeviceCategoryDeviceCateg_40f60a32 and sets the default values.
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
    */
    public function __construct(?string $agentTypeId = null, ?string $agentVirtualId = null, ?string $aiAgentId = null, ?string $aiAgentName = null, ?bool $count = null, ?string $deviceCategory = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null) {
        $this->agentTypeId = $agentTypeId;
        $this->agentVirtualId = $agentVirtualId;
        $this->aiAgentId = $aiAgentId;
        $this->aiAgentName = $aiAgentName;
        $this->count = $count;
        $this->deviceCategory = $deviceCategory;
        $this->filter = $filter;
        $this->search = $search;
        $this->skip = $skip;
        $this->top = $top;
    }

}
