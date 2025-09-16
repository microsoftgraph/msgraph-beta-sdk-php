<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ProtectionPolicyBase extends Entity implements Parsable 
{
    /**
     * Instantiates a new ProtectionPolicyBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProtectionPolicyBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProtectionPolicyBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.exchangeProtectionPolicy': return new ExchangeProtectionPolicy();
                case '#microsoft.graph.oneDriveForBusinessProtectionPolicy': return new OneDriveForBusinessProtectionPolicy();
                case '#microsoft.graph.sharePointProtectionPolicy': return new SharePointProtectionPolicy();
            }
        }
        return new ProtectionPolicyBase();
    }

    /**
     * Gets the billingPolicyId property value. The billingPolicyId property
     * @return string|null
    */
    public function getBillingPolicyId(): ?string {
        $val = $this->getBackingStore()->get('billingPolicyId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'billingPolicyId'");
    }

    /**
     * Gets the createdBy property value. The identity of person who created the policy.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the createdDateTime property value. The date and time when the policy was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
     * Gets the displayName property value. The name of the policy to be created.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'billingPolicyId' => fn(ParseNode $n) => $o->setBillingPolicyId($n->getStringValue()),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'protectionPolicyArtifactCount' => fn(ParseNode $n) => $o->setProtectionPolicyArtifactCount($n->getObjectValue([ProtectionPolicyArtifactCount::class, 'createFromDiscriminatorValue'])),
            'retentionSettings' => fn(ParseNode $n) => $o->setRetentionSettings($n->getCollectionOfObjectValues([RetentionSetting::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(ProtectionPolicyStatus::class)),
        ]);
    }

    /**
     * Gets the isEnabled property value. Indicates whether the policy is enabled.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEnabled'");
    }

    /**
     * Gets the lastModifiedBy property value. The identity of the person who last modified the policy.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('lastModifiedBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedBy'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time when the policy was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
     * Gets the protectionPolicyArtifactCount property value. The count of artifacts in the protection policy by status. Returned only on $select.
     * @return ProtectionPolicyArtifactCount|null
    */
    public function getProtectionPolicyArtifactCount(): ?ProtectionPolicyArtifactCount {
        $val = $this->getBackingStore()->get('protectionPolicyArtifactCount');
        if (is_null($val) || $val instanceof ProtectionPolicyArtifactCount) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'protectionPolicyArtifactCount'");
    }

    /**
     * Gets the retentionSettings property value. Contains the retention setting details for the policy.
     * @return array<RetentionSetting>|null
    */
    public function getRetentionSettings(): ?array {
        $val = $this->getBackingStore()->get('retentionSettings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RetentionSetting::class);
            /** @var array<RetentionSetting>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'retentionSettings'");
    }

    /**
     * Gets the status property value. The aggregated status of the protection units associated with the policy. The possible values are: inactive, activeWithErrors, updating, active, unknownFutureValue.
     * @return ProtectionPolicyStatus|null
    */
    public function getStatus(): ?ProtectionPolicyStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof ProtectionPolicyStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('billingPolicyId', $this->getBillingPolicyId());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('isEnabled', $this->getIsEnabled());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeObjectValue('protectionPolicyArtifactCount', $this->getProtectionPolicyArtifactCount());
        $writer->writeCollectionOfObjectValues('retentionSettings', $this->getRetentionSettings());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the billingPolicyId property value. The billingPolicyId property
     * @param string|null $value Value to set for the billingPolicyId property.
    */
    public function setBillingPolicyId(?string $value): void {
        $this->getBackingStore()->set('billingPolicyId', $value);
    }

    /**
     * Sets the createdBy property value. The identity of person who created the policy.
     * @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time when the policy was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the displayName property value. The name of the policy to be created.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isEnabled property value. Indicates whether the policy is enabled.
     * @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEnabled', $value);
    }

    /**
     * Sets the lastModifiedBy property value. The identity of the person who last modified the policy.
     * @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time when the policy was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the protectionPolicyArtifactCount property value. The count of artifacts in the protection policy by status. Returned only on $select.
     * @param ProtectionPolicyArtifactCount|null $value Value to set for the protectionPolicyArtifactCount property.
    */
    public function setProtectionPolicyArtifactCount(?ProtectionPolicyArtifactCount $value): void {
        $this->getBackingStore()->set('protectionPolicyArtifactCount', $value);
    }

    /**
     * Sets the retentionSettings property value. Contains the retention setting details for the policy.
     * @param array<RetentionSetting>|null $value Value to set for the retentionSettings property.
    */
    public function setRetentionSettings(?array $value): void {
        $this->getBackingStore()->set('retentionSettings', $value);
    }

    /**
     * Sets the status property value. The aggregated status of the protection units associated with the policy. The possible values are: inactive, activeWithErrors, updating, active, unknownFutureValue.
     * @param ProtectionPolicyStatus|null $value Value to set for the status property.
    */
    public function setStatus(?ProtectionPolicyStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
