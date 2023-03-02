<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleManagementAlert extends Entity implements Parsable 
{
    /**
     * Instantiates a new unifiedRoleManagementAlert and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRoleManagementAlert
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRoleManagementAlert {
        return new UnifiedRoleManagementAlert();
    }

    /**
     * Gets the alertConfiguration property value. The alertConfiguration property
     * @return UnifiedRoleManagementAlertConfiguration|null
    */
    public function getAlertConfiguration(): ?UnifiedRoleManagementAlertConfiguration {
        return $this->getBackingStore()->get('alertConfiguration');
    }

    /**
     * Gets the alertDefinition property value. The alertDefinition property
     * @return UnifiedRoleManagementAlertDefinition|null
    */
    public function getAlertDefinition(): ?UnifiedRoleManagementAlertDefinition {
        return $this->getBackingStore()->get('alertDefinition');
    }

    /**
     * Gets the alertDefinitionId property value. The alertDefinitionId property
     * @return string|null
    */
    public function getAlertDefinitionId(): ?string {
        return $this->getBackingStore()->get('alertDefinitionId');
    }

    /**
     * Gets the alertIncidents property value. The alertIncidents property
     * @return array<UnifiedRoleManagementAlertIncident>|null
    */
    public function getAlertIncidents(): ?array {
        return $this->getBackingStore()->get('alertIncidents');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'alertConfiguration' => fn(ParseNode $n) => $o->setAlertConfiguration($n->getObjectValue([UnifiedRoleManagementAlertConfiguration::class, 'createFromDiscriminatorValue'])),
            'alertDefinition' => fn(ParseNode $n) => $o->setAlertDefinition($n->getObjectValue([UnifiedRoleManagementAlertDefinition::class, 'createFromDiscriminatorValue'])),
            'alertDefinitionId' => fn(ParseNode $n) => $o->setAlertDefinitionId($n->getStringValue()),
            'alertIncidents' => fn(ParseNode $n) => $o->setAlertIncidents($n->getCollectionOfObjectValues([UnifiedRoleManagementAlertIncident::class, 'createFromDiscriminatorValue'])),
            'incidentCount' => fn(ParseNode $n) => $o->setIncidentCount($n->getIntegerValue()),
            'isActive' => fn(ParseNode $n) => $o->setIsActive($n->getBooleanValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'lastScannedDateTime' => fn(ParseNode $n) => $o->setLastScannedDateTime($n->getDateTimeValue()),
            'scopeId' => fn(ParseNode $n) => $o->setScopeId($n->getStringValue()),
            'scopeType' => fn(ParseNode $n) => $o->setScopeType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the incidentCount property value. The incidentCount property
     * @return int|null
    */
    public function getIncidentCount(): ?int {
        return $this->getBackingStore()->get('incidentCount');
    }

    /**
     * Gets the isActive property value. The isActive property
     * @return bool|null
    */
    public function getIsActive(): ?bool {
        return $this->getBackingStore()->get('isActive');
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the lastScannedDateTime property value. The lastScannedDateTime property
     * @return DateTime|null
    */
    public function getLastScannedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastScannedDateTime');
    }

    /**
     * Gets the scopeId property value. The scopeId property
     * @return string|null
    */
    public function getScopeId(): ?string {
        return $this->getBackingStore()->get('scopeId');
    }

    /**
     * Gets the scopeType property value. The scopeType property
     * @return string|null
    */
    public function getScopeType(): ?string {
        return $this->getBackingStore()->get('scopeType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('alertConfiguration', $this->getAlertConfiguration());
        $writer->writeObjectValue('alertDefinition', $this->getAlertDefinition());
        $writer->writeStringValue('alertDefinitionId', $this->getAlertDefinitionId());
        $writer->writeCollectionOfObjectValues('alertIncidents', $this->getAlertIncidents());
        $writer->writeIntegerValue('incidentCount', $this->getIncidentCount());
        $writer->writeBooleanValue('isActive', $this->getIsActive());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeDateTimeValue('lastScannedDateTime', $this->getLastScannedDateTime());
        $writer->writeStringValue('scopeId', $this->getScopeId());
        $writer->writeStringValue('scopeType', $this->getScopeType());
    }

    /**
     * Sets the alertConfiguration property value. The alertConfiguration property
     * @param UnifiedRoleManagementAlertConfiguration|null $value Value to set for the alertConfiguration property.
    */
    public function setAlertConfiguration(?UnifiedRoleManagementAlertConfiguration $value): void {
        $this->getBackingStore()->set('alertConfiguration', $value);
    }

    /**
     * Sets the alertDefinition property value. The alertDefinition property
     * @param UnifiedRoleManagementAlertDefinition|null $value Value to set for the alertDefinition property.
    */
    public function setAlertDefinition(?UnifiedRoleManagementAlertDefinition $value): void {
        $this->getBackingStore()->set('alertDefinition', $value);
    }

    /**
     * Sets the alertDefinitionId property value. The alertDefinitionId property
     * @param string|null $value Value to set for the alertDefinitionId property.
    */
    public function setAlertDefinitionId(?string $value): void {
        $this->getBackingStore()->set('alertDefinitionId', $value);
    }

    /**
     * Sets the alertIncidents property value. The alertIncidents property
     * @param array<UnifiedRoleManagementAlertIncident>|null $value Value to set for the alertIncidents property.
    */
    public function setAlertIncidents(?array $value): void {
        $this->getBackingStore()->set('alertIncidents', $value);
    }

    /**
     * Sets the incidentCount property value. The incidentCount property
     * @param int|null $value Value to set for the incidentCount property.
    */
    public function setIncidentCount(?int $value): void {
        $this->getBackingStore()->set('incidentCount', $value);
    }

    /**
     * Sets the isActive property value. The isActive property
     * @param bool|null $value Value to set for the isActive property.
    */
    public function setIsActive(?bool $value): void {
        $this->getBackingStore()->set('isActive', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the lastScannedDateTime property value. The lastScannedDateTime property
     * @param DateTime|null $value Value to set for the lastScannedDateTime property.
    */
    public function setLastScannedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastScannedDateTime', $value);
    }

    /**
     * Sets the scopeId property value. The scopeId property
     * @param string|null $value Value to set for the scopeId property.
    */
    public function setScopeId(?string $value): void {
        $this->getBackingStore()->set('scopeId', $value);
    }

    /**
     * Sets the scopeType property value. The scopeType property
     * @param string|null $value Value to set for the scopeType property.
    */
    public function setScopeType(?string $value): void {
        $this->getBackingStore()->set('scopeType', $value);
    }

}
