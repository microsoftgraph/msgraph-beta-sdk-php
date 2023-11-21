<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class VirtualAppointmentSmsType extends Enum {
    public const CONFIRMATION = 'confirmation';
    public const RESCHEDULE = 'reschedule';
    public const CANCELLATION = 'cancellation';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
