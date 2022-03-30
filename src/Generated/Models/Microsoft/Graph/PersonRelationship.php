<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class PersonRelationship extends Enum {
    public const MANAGER = 'manager';
    public const COLLEAGUE = 'colleague';
    public const DIRECT_REPORT = 'directReport';
    public const DOT_LINE_REPORT = 'dotLineReport';
    public const ASSISTANT = 'assistant';
    public const DOT_LINE_MANAGER = 'dotLineManager';
    public const ALTERNATE_CONTACT = 'alternateContact';
    public const FRIEND = 'friend';
    public const SPOUSE = 'spouse';
    public const SIBLING = 'sibling';
    public const CHILD = 'child';
    public const PARENT = 'parent';
    public const SPONSOR = 'sponsor';
    public const EMERGENCY_CONTACT = 'emergencyContact';
    public const OTHER = 'other';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
