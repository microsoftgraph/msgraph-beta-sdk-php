<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RoleManagementAlert extends Entity implements Parsable 
{
    /**
     * Instantiates a new RoleManagementAlert and sets the default values.
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
     * Gets the alertConfigurations property value. The alertConfigurations property
     * @return array<UnifiedRoleManagementAlertConfiguration>|null
    */
    public function getAlertConfigurations(): ?array {
        return $this->getBackingStore()->get('alertConfigurations');
    }

    /**
     * Gets the alertDefinitions property value. The alertDefinitions property
     * @return array<UnifiedRoleManagementAlertDefinition>|null
    */
    public function getAlertDefinitions(): ?array {
        return $this->getBackingStore()->get('alertDefinitions');
    }

    /**
     * Gets the alerts property value. The alerts property
     * @return array<UnifiedRoleManagementAlert>|null
    */
    public function getAlerts(): ?array {
        return $this->getBackingStore()->get('alerts');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
     * Gets the operations property value. The operations property
     * @return array<LongRunningOperation>|null
    */
    public function getOperations(): ?array {
        return $this->getBackingStore()->get('operations');
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
        $writer->writeCollectionOfObjectValues('operations', $this->getOperations());
    }

    /**
     * Sets the alertConfigurations property value. The alertConfigurations property
     * @param array<UnifiedRoleManagementAlertConfiguration>|null $value Value to set for the alertConfigurations property.
    */
    public function setAlertConfigurations(?array $value): void {
        $this->getBackingStore()->set('alertConfigurations', $value);
    }

    /**
     * Sets the alertDefinitions property value. The alertDefinitions property
     * @param array<UnifiedRoleManagementAlertDefinition>|null $value Value to set for the alertDefinitions property.
    */
    public function setAlertDefinitions(?array $value): void {
        $this->getBackingStore()->set('alertDefinitions', $value);
    }

    /**
     * Sets the alerts property value. The alerts property
     * @param array<UnifiedRoleManagementAlert>|null $value Value to set for the alerts property.
    */
    public function setAlerts(?array $value): void {
        $this->getBackingStore()->set('alerts', $value);
    }

    /**
     * Sets the operations property value. The operations property
     * @param array<LongRunningOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value): void {
        $this->getBackingStore()->set('operations', $value);
    }

}
