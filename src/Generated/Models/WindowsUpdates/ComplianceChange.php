<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ComplianceChange extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new complianceChange and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ComplianceChange
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ComplianceChange {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.windowsUpdates.contentApproval': return new ContentApproval();
            }
        }
        return new ComplianceChange();
    }

    /**
     * Gets the createdDateTime property value. The date and time when a compliance change was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'isRevoked' => fn(ParseNode $n) => $o->setIsRevoked($n->getBooleanValue()),
            'revokedDateTime' => fn(ParseNode $n) => $o->setRevokedDateTime($n->getDateTimeValue()),
            'updatePolicy' => fn(ParseNode $n) => $o->setUpdatePolicy($n->getObjectValue([UpdatePolicy::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isRevoked property value. True indicates that a compliance change is revoked, preventing further application. Revoking a compliance change is a final action.
     * @return bool|null
    */
    public function getIsRevoked(): ?bool {
        $val = $this->getBackingStore()->get('isRevoked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isRevoked'");
    }

    /**
     * Gets the revokedDateTime property value. The date and time when the compliance change was revoked.
     * @return DateTime|null
    */
    public function getRevokedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('revokedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'revokedDateTime'");
    }

    /**
     * Gets the updatePolicy property value. The policy this compliance change is a member of.
     * @return UpdatePolicy|null
    */
    public function getUpdatePolicy(): ?UpdatePolicy {
        $val = $this->getBackingStore()->get('updatePolicy');
        if (is_null($val) || $val instanceof UpdatePolicy) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'updatePolicy'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeBooleanValue('isRevoked', $this->getIsRevoked());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeDateTimeValue('revokedDateTime', $this->getRevokedDateTime());
        $writer->writeObjectValue('updatePolicy', $this->getUpdatePolicy());
    }

    /**
     * Sets the createdDateTime property value. The date and time when a compliance change was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the isRevoked property value. True indicates that a compliance change is revoked, preventing further application. Revoking a compliance change is a final action.
     * @param bool|null $value Value to set for the isRevoked property.
    */
    public function setIsRevoked(?bool $value): void {
        $this->getBackingStore()->set('isRevoked', $value);
    }

    /**
     * Sets the revokedDateTime property value. The date and time when the compliance change was revoked.
     * @param DateTime|null $value Value to set for the revokedDateTime property.
    */
    public function setRevokedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('revokedDateTime', $value);
    }

    /**
     * Sets the updatePolicy property value. The policy this compliance change is a member of.
     * @param UpdatePolicy|null $value Value to set for the updatePolicy property.
    */
    public function setUpdatePolicy(?UpdatePolicy $value): void {
        $this->getBackingStore()->set('updatePolicy', $value);
    }

}
