<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrivilegedRoleAssignment extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $expirationDateTime The UTC DateTime when the temporary privileged role assignment will be expired. For permanent role assignment, the value is null.
    */
    private ?DateTime $expirationDateTime = null;
    
    /**
     * @var bool|null $isElevated true if the role assignment is activated. false if the role assignment is deactivated.
    */
    private ?bool $isElevated = null;
    
    /**
     * @var string|null $resultMessage Result message set by the service.
    */
    private ?string $resultMessage = null;
    
    /**
     * @var string|null $roleId Role identifier. In GUID string format.
    */
    private ?string $roleId = null;
    
    /**
     * @var PrivilegedRole|null $roleInfo Read-only. Nullable. The associated role information.
    */
    private ?PrivilegedRole $roleInfo = null;
    
    /**
     * @var string|null $userId User identifier. In GUID string format.
    */
    private ?string $userId = null;
    
    /**
     * Instantiates a new PrivilegedRoleAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.privilegedRoleAssignment');
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
        return $this->expirationDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'expirationDateTime' => function (ParseNode $n) use ($o) { $o->setExpirationDateTime($n->getDateTimeValue()); },
            'isElevated' => function (ParseNode $n) use ($o) { $o->setIsElevated($n->getBooleanValue()); },
            'resultMessage' => function (ParseNode $n) use ($o) { $o->setResultMessage($n->getStringValue()); },
            'roleId' => function (ParseNode $n) use ($o) { $o->setRoleId($n->getStringValue()); },
            'roleInfo' => function (ParseNode $n) use ($o) { $o->setRoleInfo($n->getObjectValue(array(PrivilegedRole::class, 'createFromDiscriminatorValue'))); },
            'userId' => function (ParseNode $n) use ($o) { $o->setUserId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the isElevated property value. true if the role assignment is activated. false if the role assignment is deactivated.
     * @return bool|null
    */
    public function getIsElevated(): ?bool {
        return $this->isElevated;
    }

    /**
     * Gets the resultMessage property value. Result message set by the service.
     * @return string|null
    */
    public function getResultMessage(): ?string {
        return $this->resultMessage;
    }

    /**
     * Gets the roleId property value. Role identifier. In GUID string format.
     * @return string|null
    */
    public function getRoleId(): ?string {
        return $this->roleId;
    }

    /**
     * Gets the roleInfo property value. Read-only. Nullable. The associated role information.
     * @return PrivilegedRole|null
    */
    public function getRoleInfo(): ?PrivilegedRole {
        return $this->roleInfo;
    }

    /**
     * Gets the userId property value. User identifier. In GUID string format.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('expirationDateTime', $this->expirationDateTime);
        $writer->writeBooleanValue('isElevated', $this->isElevated);
        $writer->writeStringValue('resultMessage', $this->resultMessage);
        $writer->writeStringValue('roleId', $this->roleId);
        $writer->writeObjectValue('roleInfo', $this->roleInfo);
        $writer->writeStringValue('userId', $this->userId);
    }

    /**
     * Sets the expirationDateTime property value. The UTC DateTime when the temporary privileged role assignment will be expired. For permanent role assignment, the value is null.
     *  @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value ): void {
        $this->expirationDateTime = $value;
    }

    /**
     * Sets the isElevated property value. true if the role assignment is activated. false if the role assignment is deactivated.
     *  @param bool|null $value Value to set for the isElevated property.
    */
    public function setIsElevated(?bool $value ): void {
        $this->isElevated = $value;
    }

    /**
     * Sets the resultMessage property value. Result message set by the service.
     *  @param string|null $value Value to set for the resultMessage property.
    */
    public function setResultMessage(?string $value ): void {
        $this->resultMessage = $value;
    }

    /**
     * Sets the roleId property value. Role identifier. In GUID string format.
     *  @param string|null $value Value to set for the roleId property.
    */
    public function setRoleId(?string $value ): void {
        $this->roleId = $value;
    }

    /**
     * Sets the roleInfo property value. Read-only. Nullable. The associated role information.
     *  @param PrivilegedRole|null $value Value to set for the roleInfo property.
    */
    public function setRoleInfo(?PrivilegedRole $value ): void {
        $this->roleInfo = $value;
    }

    /**
     * Sets the userId property value. User identifier. In GUID string format.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

}
