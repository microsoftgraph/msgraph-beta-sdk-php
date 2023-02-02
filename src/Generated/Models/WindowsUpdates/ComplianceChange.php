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
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
     * Gets the isRevoked property value. The isRevoked property
     * @return bool|null
    */
    public function getIsRevoked(): ?bool {
        return $this->getBackingStore()->get('isRevoked');
    }

    /**
     * Gets the revokedDateTime property value. The revokedDateTime property
     * @return DateTime|null
    */
    public function getRevokedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('revokedDateTime');
    }

    /**
     * Gets the updatePolicy property value. The updatePolicy property
     * @return UpdatePolicy|null
    */
    public function getUpdatePolicy(): ?UpdatePolicy {
        return $this->getBackingStore()->get('updatePolicy');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeBooleanValue('isRevoked', $this->getIsRevoked());
        $writer->writeDateTimeValue('revokedDateTime', $this->getRevokedDateTime());
        $writer->writeObjectValue('updatePolicy', $this->getUpdatePolicy());
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the isRevoked property value. The isRevoked property
     * @param bool|null $value Value to set for the isRevoked property.
    */
    public function setIsRevoked(?bool $value): void {
        $this->getBackingStore()->set('isRevoked', $value);
    }

    /**
     * Sets the revokedDateTime property value. The revokedDateTime property
     * @param DateTime|null $value Value to set for the revokedDateTime property.
    */
    public function setRevokedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('revokedDateTime', $value);
    }

    /**
     * Sets the updatePolicy property value. The updatePolicy property
     * @param UpdatePolicy|null $value Value to set for the updatePolicy property.
    */
    public function setUpdatePolicy(?UpdatePolicy $value): void {
        $this->getBackingStore()->set('updatePolicy', $value);
    }

}
