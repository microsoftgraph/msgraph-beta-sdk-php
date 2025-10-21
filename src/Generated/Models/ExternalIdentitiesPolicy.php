<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExternalIdentitiesPolicy extends PolicyBase implements Parsable 
{
    /**
     * Instantiates a new ExternalIdentitiesPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.externalIdentitiesPolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExternalIdentitiesPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExternalIdentitiesPolicy {
        return new ExternalIdentitiesPolicy();
    }

    /**
     * Gets the allowDeletedIdentitiesDataRemoval property value. Reserved for future use.
     * @return bool|null
    */
    public function getAllowDeletedIdentitiesDataRemoval(): ?bool {
        $val = $this->getBackingStore()->get('allowDeletedIdentitiesDataRemoval');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowDeletedIdentitiesDataRemoval'");
    }

    /**
     * Gets the allowExternalIdentitiesToLeave property value. Defines whether external users can leave the guest tenant. If set to false, self-service controls are disabled, and the admin of the guest tenant must manually remove the external user from the guest tenant. When the external user leaves the tenant, their data in the guest tenant is first soft-deleted then permanently deleted in 30 days.
     * @return bool|null
    */
    public function getAllowExternalIdentitiesToLeave(): ?bool {
        $val = $this->getBackingStore()->get('allowExternalIdentitiesToLeave');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowExternalIdentitiesToLeave'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowDeletedIdentitiesDataRemoval' => fn(ParseNode $n) => $o->setAllowDeletedIdentitiesDataRemoval($n->getBooleanValue()),
            'allowExternalIdentitiesToLeave' => fn(ParseNode $n) => $o->setAllowExternalIdentitiesToLeave($n->getBooleanValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowDeletedIdentitiesDataRemoval', $this->getAllowDeletedIdentitiesDataRemoval());
        $writer->writeBooleanValue('allowExternalIdentitiesToLeave', $this->getAllowExternalIdentitiesToLeave());
    }

    /**
     * Sets the allowDeletedIdentitiesDataRemoval property value. Reserved for future use.
     * @param bool|null $value Value to set for the allowDeletedIdentitiesDataRemoval property.
    */
    public function setAllowDeletedIdentitiesDataRemoval(?bool $value): void {
        $this->getBackingStore()->set('allowDeletedIdentitiesDataRemoval', $value);
    }

    /**
     * Sets the allowExternalIdentitiesToLeave property value. Defines whether external users can leave the guest tenant. If set to false, self-service controls are disabled, and the admin of the guest tenant must manually remove the external user from the guest tenant. When the external user leaves the tenant, their data in the guest tenant is first soft-deleted then permanently deleted in 30 days.
     * @param bool|null $value Value to set for the allowExternalIdentitiesToLeave property.
    */
    public function setAllowExternalIdentitiesToLeave(?bool $value): void {
        $this->getBackingStore()->set('allowExternalIdentitiesToLeave', $value);
    }

}
