<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Reports\MicrosoftGraphNetworkaccessDeviceReportWithStartDateTim_88652905;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Invoke function deviceReport Original name: microsoftGraphNetworkaccessDeviceReportWithStartDateTimeWithEndDateTimediscoveredApplicationSegmentIdDiscoveredApplicationSegmentIdApplicationIdApplicationIdAiAgentIdAiAgentIdAiAgentNameAiAgentNameCloudApplicationNameCloudApplicationNameDestinationUrlDestinationUrlRequestBuilderGetQueryParameters
*/
class MicrosoftGraphNetworkaccessDeviceReportWithStartDateTim_a627536a 
{
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
     * @var string|null $cloudApplicationName Usage: cloudApplicationName='@cloudApplicationName'
    */
    public ?string $cloudApplicationName = null;
    
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
     * Instantiates a new MicrosoftGraphNetworkaccessDeviceReportWithStartDateTim_a627536a and sets the default values.
     * @param string|null $aiAgentId Usage: aiAgentId='@aiAgentId'
     * @param string|null $aiAgentName Usage: aiAgentName='@aiAgentName'
     * @param string|null $applicationId Usage: applicationId='@applicationId'
     * @param string|null $cloudApplicationName Usage: cloudApplicationName='@cloudApplicationName'
     * @param bool|null $count Include count of items
     * @param string|null $destinationUrl Usage: destinationUrl='@destinationUrl'
     * @param string|null $discoveredApplicationSegmentId Usage: discoveredApplicationSegmentId='@discoveredApplicationSegmentId'
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
    */
    public function __construct(?string $aiAgentId = null, ?string $aiAgentName = null, ?string $applicationId = null, ?string $cloudApplicationName = null, ?bool $count = null, ?string $destinationUrl = null, ?string $discoveredApplicationSegmentId = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null) {
        $this->aiAgentId = $aiAgentId;
        $this->aiAgentName = $aiAgentName;
        $this->applicationId = $applicationId;
        $this->cloudApplicationName = $cloudApplicationName;
        $this->count = $count;
        $this->destinationUrl = $destinationUrl;
        $this->discoveredApplicationSegmentId = $discoveredApplicationSegmentId;
        $this->filter = $filter;
        $this->search = $search;
        $this->skip = $skip;
        $this->top = $top;
    }

}
