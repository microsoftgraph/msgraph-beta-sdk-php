<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\IndustryData;

use DateTime;
use Microsoft\\Graph\\Beta\\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProvisioningFlow extends Entity implements Parsable 
{
    /**
     * Instantiates a new ProvisioningFlow and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProvisioningFlow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProvisioningFlow {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.industryData.administrativeUnitProvisioningFlow': return new AdministrativeUnitProvisioningFlow();
                case '#microsoft.graph.industryData.classGroupProvisioningFlow': return new ClassGroupProvisioningFlow();
                case '#microsoft.graph.industryData.securityGroupProvisioningFlow': return new SecurityGroupProvisioningFlow();
                case '#microsoft.graph.industryData.userProvisioningFlow': return new UserProvisioningFlow();
            }
        }
        return new ProvisioningFlow();
    }

    /**
     * Gets the createdDateTime property value. The date and time when the provisioning flow was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'readinessStatus' => fn(ParseNode $n) => $o->setReadinessStatus($n->getEnumValue(ReadinessStatus::class)),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time when the provisioning flow was most recently changed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the readinessStatus property value. The state of the activity from creation through to ready to do work. The possible values are: notReady, ready, failed, disabled, expired, unknownFutureValue.
     * @return ReadinessStatus|null
    */
    public function getReadinessStatus(): ?ReadinessStatus {
        $val = $this->getBackingStore()->get('readinessStatus');
        if (is_null($val) || $val instanceof ReadinessStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'readinessStatus'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
    }

    /**
     * Sets the createdDateTime property value. The date and time when the provisioning flow was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time when the provisioning flow was most recently changed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the readinessStatus property value. The state of the activity from creation through to ready to do work. The possible values are: notReady, ready, failed, disabled, expired, unknownFutureValue.
     * @param ReadinessStatus|null $value Value to set for the readinessStatus property.
    */
    public function setReadinessStatus(?ReadinessStatus $value): void {
        $this->getBackingStore()->set('readinessStatus', $value);
    }

}
