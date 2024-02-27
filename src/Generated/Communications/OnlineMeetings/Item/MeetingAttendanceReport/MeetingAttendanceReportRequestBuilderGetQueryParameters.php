<?php

namespace Microsoft\Graph\Beta\Generated\Communications\OnlineMeetings\Item\MeetingAttendanceReport;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the meetingAttendanceReport for an onlineMeeting. Each time an online meeting ends, an attendance report is generated for that session.
*/
class MeetingAttendanceReportRequestBuilderGetQueryParameters 
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
     * Instantiates a new MeetingAttendanceReportRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
