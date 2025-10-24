<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InactiveGroupFinding extends Finding implements Parsable 
{
    /**
     * Instantiates a new InactiveGroupFinding and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InactiveGroupFinding
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InactiveGroupFinding {
        return new InactiveGroupFinding();
    }

    /**
     * Gets the actionSummary property value. The actionSummary property
     * @return ActionSummary|null
    */
    public function getActionSummary(): ?ActionSummary {
        $val = $this->getBackingStore()->get('actionSummary');
        if (is_null($val) || $val instanceof ActionSummary) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actionSummary'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actionSummary' => fn(ParseNode $n) => $o->setActionSummary($n->getObjectValue([ActionSummary::class, 'createFromDiscriminatorValue'])),
            'group' => fn(ParseNode $n) => $o->setGroup($n->getObjectValue([AuthorizationSystemIdentity::class, 'createFromDiscriminatorValue'])),
            'permissionsCreepIndex' => fn(ParseNode $n) => $o->setPermissionsCreepIndex($n->getObjectValue([PermissionsCreepIndex::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the group property value. The group property
     * @return AuthorizationSystemIdentity|null
    */
    public function getGroup(): ?AuthorizationSystemIdentity {
        $val = $this->getBackingStore()->get('group');
        if (is_null($val) || $val instanceof AuthorizationSystemIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'group'");
    }

    /**
     * Gets the permissionsCreepIndex property value. The permissionsCreepIndex property
     * @return PermissionsCreepIndex|null
    */
    public function getPermissionsCreepIndex(): ?PermissionsCreepIndex {
        $val = $this->getBackingStore()->get('permissionsCreepIndex');
        if (is_null($val) || $val instanceof PermissionsCreepIndex) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissionsCreepIndex'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('actionSummary', $this->getActionSummary());
        $writer->writeObjectValue('group', $this->getGroup());
        $writer->writeObjectValue('permissionsCreepIndex', $this->getPermissionsCreepIndex());
    }

    /**
     * Sets the actionSummary property value. The actionSummary property
     * @param ActionSummary|null $value Value to set for the actionSummary property.
    */
    public function setActionSummary(?ActionSummary $value): void {
        $this->getBackingStore()->set('actionSummary', $value);
    }

    /**
     * Sets the group property value. The group property
     * @param AuthorizationSystemIdentity|null $value Value to set for the group property.
    */
    public function setGroup(?AuthorizationSystemIdentity $value): void {
        $this->getBackingStore()->set('group', $value);
    }

    /**
     * Sets the permissionsCreepIndex property value. The permissionsCreepIndex property
     * @param PermissionsCreepIndex|null $value Value to set for the permissionsCreepIndex property.
    */
    public function setPermissionsCreepIndex(?PermissionsCreepIndex $value): void {
        $this->getBackingStore()->set('permissionsCreepIndex', $value);
    }

}
