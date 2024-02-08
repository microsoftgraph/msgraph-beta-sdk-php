<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A class containing the properties used for managed app protection PolicySetItem.
*/
class ManagedAppProtectionPolicySetItem extends PolicySetItem implements Parsable 
{
    /**
     * Instantiates a new ManagedAppProtectionPolicySetItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.managedAppProtectionPolicySetItem');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedAppProtectionPolicySetItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedAppProtectionPolicySetItem {
        return new ManagedAppProtectionPolicySetItem();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'targetedAppManagementLevels' => fn(ParseNode $n) => $o->setTargetedAppManagementLevels($n->getStringValue()),
        ]);
    }

    /**
     * Gets the targetedAppManagementLevels property value. TargetedAppManagementLevels of the ManagedAppPolicySetItem.
     * @return string|null
    */
    public function getTargetedAppManagementLevels(): ?string {
        $val = $this->getBackingStore()->get('targetedAppManagementLevels');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetedAppManagementLevels'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('targetedAppManagementLevels', $this->getTargetedAppManagementLevels());
    }

    /**
     * Sets the targetedAppManagementLevels property value. TargetedAppManagementLevels of the ManagedAppPolicySetItem.
     * @param string|null $value Value to set for the targetedAppManagementLevels property.
    */
    public function setTargetedAppManagementLevels(?string $value): void {
        $this->getBackingStore()->set('targetedAppManagementLevels', $value);
    }

}
