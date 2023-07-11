<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class RoleManagementAlert extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new roleManagementAlert and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RoleManagementAlert
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RoleManagementAlert {
        return new RoleManagementAlert();
    }

    /**
     * Gets the alertConfigurations property value. The various configurations of an alert for Azure AD roles. The configurations are pre-defined and cannot be created or deleted, but some of the configurations can be modified.
     * @return array<UnifiedRoleManagementAlertConfiguration>|null
    */
    public function getAlertConfigurations(): ?array {
        $val = $this->getBackingStore()->get('alertConfigurations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UnifiedRoleManagementAlertConfiguration::class);
            /** @var array<UnifiedRoleManagementAlertConfiguration>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alertConfigurations'");
    }

    /**
     * Gets the alertDefinitions property value. Defines an alert, its impact, and measures to mitigate or prevent it.
     * @return array<UnifiedRoleManagementAlertDefinition>|null
    */
    public function getAlertDefinitions(): ?array {
        $val = $this->getBackingStore()->get('alertDefinitions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UnifiedRoleManagementAlertDefinition::class);
            /** @var array<UnifiedRoleManagementAlertDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alertDefinitions'");
    }

    /**
     * Gets the alerts property value. Represents the alert entity.
     * @return array<UnifiedRoleManagementAlert>|null
    */
    public function getAlerts(): ?array {
        $val = $this->getBackingStore()->get('alerts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UnifiedRoleManagementAlert::class);
            /** @var array<UnifiedRoleManagementAlert>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alerts'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'alertConfigurations' => fn(ParseNode $n) => $o->setAlertConfigurations($n->getCollectionOfObjectValues([UnifiedRoleManagementAlertConfiguration::class, 'createFromDiscriminatorValue'])),
            'alertDefinitions' => fn(ParseNode $n) => $o->setAlertDefinitions($n->getCollectionOfObjectValues([UnifiedRoleManagementAlertDefinition::class, 'createFromDiscriminatorValue'])),
            'alerts' => fn(ParseNode $n) => $o->setAlerts($n->getCollectionOfObjectValues([UnifiedRoleManagementAlert::class, 'createFromDiscriminatorValue'])),
            'operations' => fn(ParseNode $n) => $o->setOperations($n->getCollectionOfObjectValues([LongRunningOperation::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the operations property value. Represents operations on resources that take a long time to complete and can run in the background until completion.
     * @return array<LongRunningOperation>|null
    */
    public function getOperations(): ?array {
        $val = $this->getBackingStore()->get('operations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, LongRunningOperation::class);
            /** @var array<LongRunningOperation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operations'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('alertConfigurations', $this->getAlertConfigurations());
        $writer->writeCollectionOfObjectValues('alertDefinitions', $this->getAlertDefinitions());
        $writer->writeCollectionOfObjectValues('alerts', $this->getAlerts());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('operations', $this->getOperations());
    }

    /**
     * Sets the alertConfigurations property value. The various configurations of an alert for Azure AD roles. The configurations are pre-defined and cannot be created or deleted, but some of the configurations can be modified.
     * @param array<UnifiedRoleManagementAlertConfiguration>|null $value Value to set for the alertConfigurations property.
    */
    public function setAlertConfigurations(?array $value): void {
        $this->getBackingStore()->set('alertConfigurations', $value);
    }

    /**
     * Sets the alertDefinitions property value. Defines an alert, its impact, and measures to mitigate or prevent it.
     * @param array<UnifiedRoleManagementAlertDefinition>|null $value Value to set for the alertDefinitions property.
    */
    public function setAlertDefinitions(?array $value): void {
        $this->getBackingStore()->set('alertDefinitions', $value);
    }

    /**
     * Sets the alerts property value. Represents the alert entity.
     * @param array<UnifiedRoleManagementAlert>|null $value Value to set for the alerts property.
    */
    public function setAlerts(?array $value): void {
        $this->getBackingStore()->set('alerts', $value);
    }

    /**
     * Sets the operations property value. Represents operations on resources that take a long time to complete and can run in the background until completion.
     * @param array<LongRunningOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value): void {
        $this->getBackingStore()->set('operations', $value);
    }

}
