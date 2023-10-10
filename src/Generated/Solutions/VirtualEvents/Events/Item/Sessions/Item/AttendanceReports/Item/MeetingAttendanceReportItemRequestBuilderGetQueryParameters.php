<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\VirtualEvents\Events\Item\Sessions\Item\AttendanceReports\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the meetingAttendanceReport for an onlineMeeting. Each time an online meeting ends, an attendance report will be generated for that session. This API is available in the following national cloud deployments.
*/
class MeetingAttendanceReportItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new MeetingAttendanceReportItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
