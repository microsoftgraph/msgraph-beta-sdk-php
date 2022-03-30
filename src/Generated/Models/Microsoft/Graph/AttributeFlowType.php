<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class AttributeFlowType extends Enum {
    public const ALWAYS = 'Always';
    public const OBJECT_ADD_ONLY = 'ObjectAddOnly';
    public const MULTI_VALUE_ADD_ONLY = 'MultiValueAddOnly';
    public const VALUE_ADD_ONLY = 'ValueAddOnly';
    public const ATTRIBUTE_ADD_ONLY = 'AttributeAddOnly';
}
