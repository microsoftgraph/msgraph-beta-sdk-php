<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

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
     * Gets the alertConfiguration property value. The configuration of the alert in PIM for Azure AD roles. Alert configurations are pre-defined and cannot be created or deleted, but some configurations can be modified. Supports $expand.
     * @return UnifiedRoleManagementAlertConfiguration|null
    */
    public function getAlertConfiguration(): ?UnifiedRoleManagementAlertConfiguration {
        $val = $this->getBackingStore()->get('alertConfiguration');
        if (is_null($val) || $val instanceof UnifiedRoleManagementAlertConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alertConfiguration'");
    }

    /**
     * Gets the alertDefinition property value. Contains the description, impact, and measures to mitigate or prevent the security alert from being triggered in your tenant. Supports $expand.
     * @return UnifiedRoleManagementAlertDefinition|null
    */
    public function getAlertDefinition(): ?UnifiedRoleManagementAlertDefinition {
        $val = $this->getBackingStore()->get('alertDefinition');
        if (is_null($val) || $val instanceof UnifiedRoleManagementAlertDefinition) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alertDefinition'");
    }

    /**
     * Gets the alertDefinitionId property value. The identifier of an alert definition. Supports $filter (eq, ne).
     * @return string|null
    */
    public function getAlertDefinitionId(): ?string {
        $val = $this->getBackingStore()->get('alertDefinitionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alertDefinitionId'");
    }

    /**
     * Gets the alertIncidents property value. Represents the incidents of this alert that have been triggered in Privileged Identity Management (PIM) for Azure AD roles in the tenant. Supports $expand.
     * @return array<UnifiedRoleManagementAlertIncident>|null
    */
    public function getAlertIncidents(): ?array {
        $val = $this->getBackingStore()->get('alertIncidents');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UnifiedRoleManagementAlertIncident::class);
            /** @var array<UnifiedRoleManagementAlertIncident>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alertIncidents'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
     * Gets the incidentCount property value. The number of incidents triggered in the tenant and relating to the alert. Can only be a positive integer.
     * @return int|null
    */
    public function getIncidentCount(): ?int {
        $val = $this->getBackingStore()->get('incidentCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'incidentCount'");
    }

    /**
     * Gets the isActive property value. false by default. true if the alert is active.
     * @return bool|null
    */
    public function getIsActive(): ?bool {
        $val = $this->getBackingStore()->get('isActive');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isActive'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The date time when the alert configuration was updated or new incidents generated.
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
     * Gets the lastScannedDateTime property value. The date time when the tenant was last scanned for incidents that trigger this alert.
     * @return DateTime|null
    */
    public function getLastScannedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastScannedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastScannedDateTime'");
    }

    /**
     * Gets the scopeId property value. The identifier of the scope where the alert is related. / is the only supported one for the tenant. Supports $filter (eq, ne).
     * @return string|null
    */
    public function getScopeId(): ?string {
        $val = $this->getBackingStore()->get('scopeId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scopeId'");
    }

    /**
     * Gets the scopeType property value. The type of scope where the alert is created. DirectoryRole is the only currently supported scope type for Azure AD roles.
     * @return string|null
    */
    public function getScopeType(): ?string {
        $val = $this->getBackingStore()->get('scopeType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scopeType'");
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
     * Sets the alertConfiguration property value. The configuration of the alert in PIM for Azure AD roles. Alert configurations are pre-defined and cannot be created or deleted, but some configurations can be modified. Supports $expand.
     * @param UnifiedRoleManagementAlertConfiguration|null $value Value to set for the alertConfiguration property.
    */
    public function setAlertConfiguration(?UnifiedRoleManagementAlertConfiguration $value): void {
        $this->getBackingStore()->set('alertConfiguration', $value);
    }

    /**
     * Sets the alertDefinition property value. Contains the description, impact, and measures to mitigate or prevent the security alert from being triggered in your tenant. Supports $expand.
     * @param UnifiedRoleManagementAlertDefinition|null $value Value to set for the alertDefinition property.
    */
    public function setAlertDefinition(?UnifiedRoleManagementAlertDefinition $value): void {
        $this->getBackingStore()->set('alertDefinition', $value);
    }

    /**
     * Sets the alertDefinitionId property value. The identifier of an alert definition. Supports $filter (eq, ne).
     * @param string|null $value Value to set for the alertDefinitionId property.
    */
    public function setAlertDefinitionId(?string $value): void {
        $this->getBackingStore()->set('alertDefinitionId', $value);
    }

    /**
     * Sets the alertIncidents property value. Represents the incidents of this alert that have been triggered in Privileged Identity Management (PIM) for Azure AD roles in the tenant. Supports $expand.
     * @param array<UnifiedRoleManagementAlertIncident>|null $value Value to set for the alertIncidents property.
    */
    public function setAlertIncidents(?array $value): void {
        $this->getBackingStore()->set('alertIncidents', $value);
    }

    /**
     * Sets the incidentCount property value. The number of incidents triggered in the tenant and relating to the alert. Can only be a positive integer.
     * @param int|null $value Value to set for the incidentCount property.
    */
    public function setIncidentCount(?int $value): void {
        $this->getBackingStore()->set('incidentCount', $value);
    }

    /**
     * Sets the isActive property value. false by default. true if the alert is active.
     * @param bool|null $value Value to set for the isActive property.
    */
    public function setIsActive(?bool $value): void {
        $this->getBackingStore()->set('isActive', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date time when the alert configuration was updated or new incidents generated.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the lastScannedDateTime property value. The date time when the tenant was last scanned for incidents that trigger this alert.
     * @param DateTime|null $value Value to set for the lastScannedDateTime property.
    */
    public function setLastScannedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastScannedDateTime', $value);
    }

    /**
     * Sets the scopeId property value. The identifier of the scope where the alert is related. / is the only supported one for the tenant. Supports $filter (eq, ne).
     * @param string|null $value Value to set for the scopeId property.
    */
    public function setScopeId(?string $value): void {
        $this->getBackingStore()->set('scopeId', $value);
    }

    /**
     * Sets the scopeType property value. The type of scope where the alert is created. DirectoryRole is the only currently supported scope type for Azure AD roles.
     * @param string|null $value Value to set for the scopeType property.
    */
    public function setScopeType(?string $value): void {
        $this->getBackingStore()->set('scopeType', $value);
    }

}
