<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WhatIfUserActionContext extends ConditionalAccessContext implements Parsable 
{
    /**
     * Instantiates a new WhatIfUserActionContext and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.whatIfUserActionContext');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WhatIfUserActionContext
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WhatIfUserActionContext {
        return new WhatIfUserActionContext();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'userAction' => fn(ParseNode $n) => $o->setUserAction($n->getEnumValue(UserAction::class)),
        ]);
    }

    /**
     * Gets the userAction property value. The userAction property
     * @return UserAction|null
    */
    public function getUserAction(): ?UserAction {
        $val = $this->getBackingStore()->get('userAction');
        if (is_null($val) || $val instanceof UserAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userAction'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('userAction', $this->getUserAction());
    }

    /**
     * Sets the userAction property value. The userAction property
     * @param UserAction|null $value Value to set for the userAction property.
    */
    public function setUserAction(?UserAction $value): void {
        $this->getBackingStore()->set('userAction', $value);
    }

}
