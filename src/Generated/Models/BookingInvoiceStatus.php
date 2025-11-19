<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class BookingInvoiceStatus extends Enum {
    public const DRAFT = "draft";
    public const REVIEWING = "reviewing";
    public const OPEN = "open";
    public const CANCELED = "canceled";
    public const PAID = "paid";
    public const CORRECTIVE = "corrective";
}
