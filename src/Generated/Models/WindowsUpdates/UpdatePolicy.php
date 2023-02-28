<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdatePolicy extends Entity implements Parsable 
{
    /**
     * Instantiates a new updatePolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdatePolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdatePolicy {
        return new UpdatePolicy();
    }

    /**
     * Gets the audience property value. Specifies the audience to target.
     * @return DeploymentAudience|null
    */
    public function getAudience(): ?DeploymentAudience {
        return $this->getBackingStore()->get('audience');
    }

    /**
     * Gets the complianceChangeRules property value. Rules for governing the automatic creation of compliance changes.
     * @return array<ComplianceChangeRule>|null
    */
    public function getComplianceChangeRules(): ?array {
        return $this->getBackingStore()->get('complianceChangeRules');
    }

    /**
     * Gets the complianceChanges property value. Compliance changes like content approvals which result in the automatic creation of deployments using the audience and deploymentSettings of the policy.
     * @return array<ComplianceChange>|null
    */
    public function getComplianceChanges(): ?array {
        return $this->getBackingStore()->get('complianceChanges');
    }

    /**
     * Gets the createdDateTime property value. The date and time when the update policy was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the deploymentSettings property value. Settings for governing how to deploy content.
     * @return DeploymentSettings|null
    */
    public function getDeploymentSettings(): ?DeploymentSettings {
        return $this->getBackingStore()->get('deploymentSettings');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'audience' => fn(ParseNode $n) => $o->setAudience($n->getObjectValue([DeploymentAudience::class, 'createFromDiscriminatorValue'])),
            'complianceChangeRules' => fn(ParseNode $n) => $o->setComplianceChangeRules($n->getCollectionOfObjectValues([ComplianceChangeRule::class, 'createFromDiscriminatorValue'])),
            'complianceChanges' => fn(ParseNode $n) => $o->setComplianceChanges($n->getCollectionOfObjectValues([ComplianceChange::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'deploymentSettings' => fn(ParseNode $n) => $o->setDeploymentSettings($n->getObjectValue([DeploymentSettings::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('audience', $this->getAudience());
        $writer->writeCollectionOfObjectValues('complianceChangeRules', $this->getComplianceChangeRules());
        $writer->writeCollectionOfObjectValues('complianceChanges', $this->getComplianceChanges());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('deploymentSettings', $this->getDeploymentSettings());
    }

    /**
     * Sets the audience property value. Specifies the audience to target.
     * @param DeploymentAudience|null $value Value to set for the audience property.
    */
    public function setAudience(?DeploymentAudience $value): void {
        $this->getBackingStore()->set('audience', $value);
    }

    /**
     * Sets the complianceChangeRules property value. Rules for governing the automatic creation of compliance changes.
     * @param array<ComplianceChangeRule>|null $value Value to set for the complianceChangeRules property.
    */
    public function setComplianceChangeRules(?array $value): void {
        $this->getBackingStore()->set('complianceChangeRules', $value);
    }

    /**
     * Sets the complianceChanges property value. Compliance changes like content approvals which result in the automatic creation of deployments using the audience and deploymentSettings of the policy.
     * @param array<ComplianceChange>|null $value Value to set for the complianceChanges property.
    */
    public function setComplianceChanges(?array $value): void {
        $this->getBackingStore()->set('complianceChanges', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time when the update policy was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the deploymentSettings property value. Settings for governing how to deploy content.
     * @param DeploymentSettings|null $value Value to set for the deploymentSettings property.
    */
    public function setDeploymentSettings(?DeploymentSettings $value): void {
        $this->getBackingStore()->set('deploymentSettings', $value);
    }

}
