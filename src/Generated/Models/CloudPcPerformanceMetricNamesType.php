<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CloudPcPerformanceMetricNamesType extends Enum {
    public const CPU_USAGE_IN_PERCENTAGE = "cpuUsageInPercentage";
    public const AVAILABLE_MEMORY_IN_PERCENTAGE = "availableMemoryInPercentage";
    public const VM_AVAILABILITY = "vmAvailability";
    public const NETWORK_INBOUND_IN_BYTES = "networkInboundInBytes";
    public const NETWORK_OUTBOUND_IN_BYTES = "networkOutboundInBytes";
    public const INBOUND_FLOWS_COUNT = "inboundFlowsCount";
    public const OUTBOUND_FLOWS_COUNT = "outboundFlowsCount";
    public const DISK_READ_IN_BYTES = "diskReadInBytes";
    public const DISK_WRITE_IN_BYTES = "diskWriteInBytes";
    public const DISK_READ_OPERATIONS_PER_SECOND = "diskReadOperationsPerSecond";
    public const DISK_WRITE_OPERATIONS_PER_SECOND = "diskWriteOperationsPerSecond";
    public const OS_DISK_LATENCY_IN_MS = "osDiskLatencyInMs";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
