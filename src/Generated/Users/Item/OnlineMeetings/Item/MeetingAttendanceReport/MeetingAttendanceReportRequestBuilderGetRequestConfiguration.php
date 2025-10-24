<?php

namespace Microsoft\\Graph\\Beta\\Generated\Users\Item\OnlineMeetings\Item\MeetingAttendanceReport;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MeetingAttendanceReportRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MeetingAttendanceReportRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MeetingAttendanceReportRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MeetingAttendanceReportRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MeetingAttendanceReportRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MeetingAttendanceReportRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MeetingAttendanceReportRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MeetingAttendanceReportRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MeetingAttendanceReportRequestBuilderGetQueryParameters {
        return new MeetingAttendanceReportRequestBuilderGetQueryParameters($expand, $select);
    }

}
