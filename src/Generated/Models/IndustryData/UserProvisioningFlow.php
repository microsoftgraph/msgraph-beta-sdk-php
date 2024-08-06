<?php

namespace Microsoft\Graph\Beta\Generated\Models\IndustryData;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserProvisioningFlow extends ProvisioningFlow implements Parsable 
{
    /**
     * Instantiates a new UserProvisioningFlow and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.industryData.userProvisioningFlow');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserProvisioningFlow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserProvisioningFlow {
        return new UserProvisioningFlow();
    }

    /**
     * Gets the createUnmatchedUsers property value. A Boolean choice indicating whether unmatched users should be created or ignored.
     * @return bool|null
    */
    public function getCreateUnmatchedUsers(): ?bool {
        $val = $this->getBackingStore()->get('createUnmatchedUsers');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createUnmatchedUsers'");
    }

    /**
     * Gets the creationOptions property value. The different management choices for the new users to be provisioned.
     * @return UserCreationOptions|null
    */
    public function getCreationOptions(): ?UserCreationOptions {
        $val = $this->getBackingStore()->get('creationOptions');
        if (is_null($val) || $val instanceof UserCreationOptions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'creationOptions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createUnmatchedUsers' => fn(ParseNode $n) => $o->setCreateUnmatchedUsers($n->getBooleanValue()),
            'creationOptions' => fn(ParseNode $n) => $o->setCreationOptions($n->getObjectValue([UserCreationOptions::class, 'createFromDiscriminatorValue'])),
            'managementOptions' => fn(ParseNode $n) => $o->setManagementOptions($n->getObjectValue([UserManagementOptions::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the managementOptions property value. The managementOptions property
     * @return UserManagementOptions|null
    */
    public function getManagementOptions(): ?UserManagementOptions {
        $val = $this->getBackingStore()->get('managementOptions');
        if (is_null($val) || $val instanceof UserManagementOptions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managementOptions'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('createUnmatchedUsers', $this->getCreateUnmatchedUsers());
        $writer->writeObjectValue('creationOptions', $this->getCreationOptions());
        $writer->writeObjectValue('managementOptions', $this->getManagementOptions());
    }

    /**
     * Sets the createUnmatchedUsers property value. A Boolean choice indicating whether unmatched users should be created or ignored.
     * @param bool|null $value Value to set for the createUnmatchedUsers property.
    */
    public function setCreateUnmatchedUsers(?bool $value): void {
        $this->getBackingStore()->set('createUnmatchedUsers', $value);
    }

    /**
     * Sets the creationOptions property value. The different management choices for the new users to be provisioned.
     * @param UserCreationOptions|null $value Value to set for the creationOptions property.
    */
    public function setCreationOptions(?UserCreationOptions $value): void {
        $this->getBackingStore()->set('creationOptions', $value);
    }

    /**
     * Sets the managementOptions property value. The managementOptions property
     * @param UserManagementOptions|null $value Value to set for the managementOptions property.
    */
    public function setManagementOptions(?UserManagementOptions $value): void {
        $this->getBackingStore()->set('managementOptions', $value);
    }

}
