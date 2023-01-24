<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrivilegedRoleAssignment extends Entity implements Parsable 
{
    /**
     * Instantiates a new privilegedRoleAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrivilegedRoleAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrivilegedRoleAssignment {
        return new PrivilegedRoleAssignment();
    }

    /**
     * Gets the expirationDateTime property value. The UTC DateTime when the temporary privileged role assignment will be expired. For permanent role assignment, the value is null.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->getBackingStore()->get('expirationDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'isElevated' => fn(ParseNode $n) => $o->setIsElevated($n->getBooleanValue()),
            'resultMessage' => fn(ParseNode $n) => $o->setResultMessage($n->getStringValue()),
            'roleId' => fn(ParseNode $n) => $o->setRoleId($n->getStringValue()),
            'roleInfo' => fn(ParseNode $n) => $o->setRoleInfo($n->getObjectValue([PrivilegedRole::class, 'createFromDiscriminatorValue'])),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isElevated property value. true if the role assignment is activated. false if the role assignment is deactivated.
     * @return bool|null
    */
    public function getIsElevated(): ?bool {
        return $this->getBackingStore()->get('isElevated');
    }

    /**
     * Gets the resultMessage property value. Result message set by the service.
     * @return string|null
    */
    public function getResultMessage(): ?string {
        return $this->getBackingStore()->get('resultMessage');
    }

    /**
     * Gets the roleId property value. Role identifier. In GUID string format.
     * @return string|null
    */
    public function getRoleId(): ?string {
        return $this->getBackingStore()->get('roleId');
    }

    /**
     * Gets the roleInfo property value. Read-only. Nullable. The associated role information.
     * @return PrivilegedRole|null
    */
    public function getRoleInfo(): ?PrivilegedRole {
        return $this->getBackingStore()->get('roleInfo');
    }

    /**
     * Gets the userId property value. User identifier. In GUID string format.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->getBackingStore()->get('userId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeBooleanValue('isElevated', $this->getIsElevated());
        $writer->writeStringValue('resultMessage', $this->getResultMessage());
        $writer->writeStringValue('roleId', $this->getRoleId());
        $writer->writeObjectValue('roleInfo', $this->getRoleInfo());
        $writer->writeStringValue('userId', $this->getUserId());
    }

    /**
     * Sets the expirationDateTime property value. The UTC DateTime when the temporary privileged role assignment will be expired. For permanent role assignment, the value is null.
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the isElevated property value. true if the role assignment is activated. false if the role assignment is deactivated.
     * @param bool|null $value Value to set for the isElevated property.
    */
    public function setIsElevated(?bool $value): void {
        $this->getBackingStore()->set('isElevated', $value);
    }

    /**
     * Sets the resultMessage property value. Result message set by the service.
     * @param string|null $value Value to set for the resultMessage property.
    */
    public function setResultMessage(?string $value): void {
        $this->getBackingStore()->set('resultMessage', $value);
    }

    /**
     * Sets the roleId property value. Role identifier. In GUID string format.
     * @param string|null $value Value to set for the roleId property.
    */
    public function setRoleId(?string $value): void {
        $this->getBackingStore()->set('roleId', $value);
    }

    /**
     * Sets the roleInfo property value. Read-only. Nullable. The associated role information.
     * @param PrivilegedRole|null $value Value to set for the roleInfo property.
    */
    public function setRoleInfo(?PrivilegedRole $value): void {
        $this->getBackingStore()->set('roleInfo', $value);
    }

    /**
     * Sets the userId property value. User identifier. In GUID string format.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

}
