<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessUsageProfilingWithStartDateTimeWithEndDateTimeWithAggregatedBydiscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdApplicationIdApplicationIdAiAgentIdAiAgent_44b51529;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Returns an object containing count tables for the traffic types in Global Secure Access, aggregated by the time period specified. Original name: microsoftGraphNetworkaccessUsageProfilingWithStartDateTimeWithEndDateTimeWithAggregatedBydiscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdApplicationIdApplicationIdAiAgentIdAiAgentIdAiAgentNameAiAgentNameAgentTypeIdAgentTypeIdAgentVirtualIdAgentVirtualIdDestinationUrlDestinationUrlRequestBuilderGetQueryParameters
*/
class MicrosoftGraphNetworkaccessUsageProfilingWithStartDateTimeWithEndDateTimeWithAggregatedBydiscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdApplicationIdApplicationIdAiAgentIdAiAgent_6496d42b 
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
     * @var string|null $applicationId Usage: applicationId='@applicationId'
    */
    public ?string $applicationId = null;
    
    /**
     * @QueryParameter("%24count")
     * @var bool|null $count Include count of items
    */
    public ?bool $count = null;
    
    /**
     * @var string|null $destinationUrl Usage: destinationUrl='@destinationUrl'
    */
    public ?string $destinationUrl = null;
    
    /**
     * @var string|null $discoveredApplicationSegmentId Usage: discoveredApplicationSegmentId='@discoveredApplicationSegmentId'
    */
    public ?string $discoveredApplicationSegmentId = null;
    
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
     * Instantiates a new MicrosoftGraphNetworkaccessUsageProfilingWithStartDateTimeWithEndDateTimeWithAggregatedBydiscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdApplicationIdApplicationIdAiAgentIdAiAgent_6496d42b and sets the default values.
     * @param string|null $agentTypeId Usage: agentTypeId='@agentTypeId'
     * @param string|null $agentVirtualId Usage: agentVirtualId='@agentVirtualId'
     * @param string|null $aiAgentId Usage: aiAgentId='@aiAgentId'
     * @param string|null $aiAgentName Usage: aiAgentName='@aiAgentName'
     * @param string|null $applicationId Usage: applicationId='@applicationId'
     * @param bool|null $count Include count of items
     * @param string|null $destinationUrl Usage: destinationUrl='@destinationUrl'
     * @param string|null $discoveredApplicationSegmentId Usage: discoveredApplicationSegmentId='@discoveredApplicationSegmentId'
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
    */
    public function __construct(?string $agentTypeId = null, ?string $agentVirtualId = null, ?string $aiAgentId = null, ?string $aiAgentName = null, ?string $applicationId = null, ?bool $count = null, ?string $destinationUrl = null, ?string $discoveredApplicationSegmentId = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null) {
        $this->agentTypeId = $agentTypeId;
        $this->agentVirtualId = $agentVirtualId;
        $this->aiAgentId = $aiAgentId;
        $this->aiAgentName = $aiAgentName;
        $this->applicationId = $applicationId;
        $this->count = $count;
        $this->destinationUrl = $destinationUrl;
        $this->discoveredApplicationSegmentId = $discoveredApplicationSegmentId;
        $this->filter = $filter;
        $this->search = $search;
        $this->skip = $skip;
        $this->top = $top;
    }

}
