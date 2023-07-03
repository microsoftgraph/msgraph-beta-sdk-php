<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DeviceRestrictionAction extends DlpActionInfo implements Parsable 
{
    /**
     * Instantiates a new DeviceRestrictionAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceRestrictionAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceRestrictionAction {
        return new DeviceRestrictionAction();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'restrictionAction' => fn(ParseNode $n) => $o->setRestrictionAction($n->getEnumValue(RestrictionAction::class)),
            'triggers' => fn(ParseNode $n) => $o->setTriggers($n->getCollectionOfEnumValues(RestrictionTrigger::class)),
        ]);
    }

    /**
     * Gets the message property value. The message property
     * @return string|null
    */
    public function getMessage(): ?string {
        $val = $this->getBackingStore()->get('message');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'message'");
    }

    /**
     * Gets the restrictionAction property value. The restrictionAction property
     * @return RestrictionAction|null
    */
    public function getRestrictionAction(): ?RestrictionAction {
        $val = $this->getBackingStore()->get('restrictionAction');
        if (is_null($val) || $val instanceof RestrictionAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restrictionAction'");
    }

    /**
     * Gets the triggers property value. The triggers property
     * @return array<RestrictionTrigger>|null
    */
    public function getTriggers(): ?array {
        $val = $this->getBackingStore()->get('triggers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RestrictionTrigger::class);
            /** @var array<RestrictionTrigger>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'triggers'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeEnumValue('restrictionAction', $this->getRestrictionAction());
        $writer->writeCollectionOfEnumValues('triggers', $this->getTriggers());
    }

    /**
     * Sets the message property value. The message property
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->getBackingStore()->set('message', $value);
    }

    /**
     * Sets the restrictionAction property value. The restrictionAction property
     * @param RestrictionAction|null $value Value to set for the restrictionAction property.
    */
    public function setRestrictionAction(?RestrictionAction $value): void {
        $this->getBackingStore()->set('restrictionAction', $value);
    }

    /**
     * Sets the triggers property value. The triggers property
     * @param array<RestrictionTrigger>|null $value Value to set for the triggers property.
    */
    public function setTriggers(?array $value): void {
        $this->getBackingStore()->set('triggers', $value);
    }

}
