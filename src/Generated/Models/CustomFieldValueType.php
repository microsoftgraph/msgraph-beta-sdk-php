<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CustomFieldValueType extends Enum {
    public const TEXT = "text";
    public const DATE = "date";
    public const UTC_DATE_TIME = "utcDateTime";
    public const NUMBER = "number";
    public const DECIMAL = "decimal";
    public const FLAG = "flag";
    public const SINGLE_CHOICE_TEXT = "singleChoiceText";
    public const MULTIPLE_CHOICE_TEXT = "multipleChoiceText";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
