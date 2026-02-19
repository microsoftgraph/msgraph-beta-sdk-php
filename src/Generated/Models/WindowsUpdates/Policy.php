<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Policy extends Entity implements Parsable 
{
    /**
     * Instantiates a new Policy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Policy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Policy {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.windowsUpdates.qualityUpdatePolicy': return new QualityUpdatePolicy();
            }
        }
        return new Policy();
    }

    /**
     * Gets the applicableContent property value. Represents content applicable for offering to the related collection of devices.
     * @return array<ApplicableContent>|null
    */
    public function getApplicableContent(): ?array {
        $val = $this->getBackingStore()->get('applicableContent');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ApplicableContent::class);
            /** @var array<ApplicableContent>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicableContent'");
    }

    /**
     * Gets the approvalRules property value. The approved rule of the policy that determines which published content matches the rule on an ongoing basis.
     * @return array<ApprovalRule>|null
    */
    public function getApprovalRules(): ?array {
        $val = $this->getBackingStore()->get('approvalRules');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ApprovalRule::class);
            /** @var array<ApprovalRule>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'approvalRules'");
    }

    /**
     * Gets the approvals property value. Represents a set of quality updates policy approval types.
     * @return array<PolicyApproval>|null
    */
    public function getApprovals(): ?array {
        $val = $this->getBackingStore()->get('approvals');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PolicyApproval::class);
            /** @var array<PolicyApproval>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'approvals'");
    }

    /**
     * Gets the createdDateTime property value. The date and time when the policy is created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
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
     * Gets the description property value. The policy description. The maximum length is 1,500 characters.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The policy display name. The maximum length is 200 characters.
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
            'applicableContent' => fn(ParseNode $n) => $o->setApplicableContent($n->getCollectionOfObjectValues([ApplicableContent::class, 'createFromDiscriminatorValue'])),
            'approvalRules' => fn(ParseNode $n) => $o->setApprovalRules($n->getCollectionOfObjectValues([ApprovalRule::class, 'createFromDiscriminatorValue'])),
            'approvals' => fn(ParseNode $n) => $o->setApprovals($n->getCollectionOfObjectValues([PolicyApproval::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'rings' => fn(ParseNode $n) => $o->setRings($n->getCollectionOfObjectValues([Ring::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time when the policy was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
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
     * Gets the rings property value. Represents a set of deployment rings that contains update deployment settings.
     * @return array<Ring>|null
    */
    public function getRings(): ?array {
        $val = $this->getBackingStore()->get('rings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Ring::class);
            /** @var array<Ring>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rings'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('applicableContent', $this->getApplicableContent());
        $writer->writeCollectionOfObjectValues('approvalRules', $this->getApprovalRules());
        $writer->writeCollectionOfObjectValues('approvals', $this->getApprovals());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeCollectionOfObjectValues('rings', $this->getRings());
    }

    /**
     * Sets the applicableContent property value. Represents content applicable for offering to the related collection of devices.
     * @param array<ApplicableContent>|null $value Value to set for the applicableContent property.
    */
    public function setApplicableContent(?array $value): void {
        $this->getBackingStore()->set('applicableContent', $value);
    }

    /**
     * Sets the approvalRules property value. The approved rule of the policy that determines which published content matches the rule on an ongoing basis.
     * @param array<ApprovalRule>|null $value Value to set for the approvalRules property.
    */
    public function setApprovalRules(?array $value): void {
        $this->getBackingStore()->set('approvalRules', $value);
    }

    /**
     * Sets the approvals property value. Represents a set of quality updates policy approval types.
     * @param array<PolicyApproval>|null $value Value to set for the approvals property.
    */
    public function setApprovals(?array $value): void {
        $this->getBackingStore()->set('approvals', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time when the policy is created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. The policy description. The maximum length is 1,500 characters.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The policy display name. The maximum length is 200 characters.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time when the policy was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the rings property value. Represents a set of deployment rings that contains update deployment settings.
     * @param array<Ring>|null $value Value to set for the rings property.
    */
    public function setRings(?array $value): void {
        $this->getBackingStore()->set('rings', $value);
    }

}
