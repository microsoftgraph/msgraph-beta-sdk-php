<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AzureAuthorizationSystem extends AuthorizationSystem implements Parsable 
{
    /**
     * Instantiates a new AzureAuthorizationSystem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.azureAuthorizationSystem');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AzureAuthorizationSystem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AzureAuthorizationSystem {
        return new AzureAuthorizationSystem();
    }

    /**
     * Gets the actions property value. List of actions for service in authorization system.
     * @return array<AzureAuthorizationSystemTypeAction>|null
    */
    public function getActions(): ?array {
        $val = $this->getBackingStore()->get('actions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AzureAuthorizationSystemTypeAction::class);
            /** @var array<AzureAuthorizationSystemTypeAction>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actions'");
    }

    /**
     * Gets the associatedIdentities property value. Identities in the authorization system.
     * @return AzureAssociatedIdentities|null
    */
    public function getAssociatedIdentities(): ?AzureAssociatedIdentities {
        $val = $this->getBackingStore()->get('associatedIdentities');
        if (is_null($val) || $val instanceof AzureAssociatedIdentities) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'associatedIdentities'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actions' => fn(ParseNode $n) => $o->setActions($n->getCollectionOfObjectValues([AzureAuthorizationSystemTypeAction::class, 'createFromDiscriminatorValue'])),
            'associatedIdentities' => fn(ParseNode $n) => $o->setAssociatedIdentities($n->getObjectValue([AzureAssociatedIdentities::class, 'createFromDiscriminatorValue'])),
            'resources' => fn(ParseNode $n) => $o->setResources($n->getCollectionOfObjectValues([AzureAuthorizationSystemResource::class, 'createFromDiscriminatorValue'])),
            'roleDefinitions' => fn(ParseNode $n) => $o->setRoleDefinitions($n->getCollectionOfObjectValues([AzureRoleDefinition::class, 'createFromDiscriminatorValue'])),
            'services' => fn(ParseNode $n) => $o->setServices($n->getCollectionOfObjectValues([AuthorizationSystemTypeService::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the resources property value. Resources associated with the authorization system type.
     * @return array<AzureAuthorizationSystemResource>|null
    */
    public function getResources(): ?array {
        $val = $this->getBackingStore()->get('resources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AzureAuthorizationSystemResource::class);
            /** @var array<AzureAuthorizationSystemResource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resources'");
    }

    /**
     * Gets the roleDefinitions property value. Roles associated with the authorization system type.
     * @return array<AzureRoleDefinition>|null
    */
    public function getRoleDefinitions(): ?array {
        $val = $this->getBackingStore()->get('roleDefinitions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AzureRoleDefinition::class);
            /** @var array<AzureRoleDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleDefinitions'");
    }

    /**
     * Gets the services property value. Services associated with the authorization system type.
     * @return array<AuthorizationSystemTypeService>|null
    */
    public function getServices(): ?array {
        $val = $this->getBackingStore()->get('services');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AuthorizationSystemTypeService::class);
            /** @var array<AuthorizationSystemTypeService>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'services'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('actions', $this->getActions());
        $writer->writeObjectValue('associatedIdentities', $this->getAssociatedIdentities());
        $writer->writeCollectionOfObjectValues('resources', $this->getResources());
        $writer->writeCollectionOfObjectValues('roleDefinitions', $this->getRoleDefinitions());
        $writer->writeCollectionOfObjectValues('services', $this->getServices());
    }

    /**
     * Sets the actions property value. List of actions for service in authorization system.
     * @param array<AzureAuthorizationSystemTypeAction>|null $value Value to set for the actions property.
    */
    public function setActions(?array $value): void {
        $this->getBackingStore()->set('actions', $value);
    }

    /**
     * Sets the associatedIdentities property value. Identities in the authorization system.
     * @param AzureAssociatedIdentities|null $value Value to set for the associatedIdentities property.
    */
    public function setAssociatedIdentities(?AzureAssociatedIdentities $value): void {
        $this->getBackingStore()->set('associatedIdentities', $value);
    }

    /**
     * Sets the resources property value. Resources associated with the authorization system type.
     * @param array<AzureAuthorizationSystemResource>|null $value Value to set for the resources property.
    */
    public function setResources(?array $value): void {
        $this->getBackingStore()->set('resources', $value);
    }

    /**
     * Sets the roleDefinitions property value. Roles associated with the authorization system type.
     * @param array<AzureRoleDefinition>|null $value Value to set for the roleDefinitions property.
    */
    public function setRoleDefinitions(?array $value): void {
        $this->getBackingStore()->set('roleDefinitions', $value);
    }

    /**
     * Sets the services property value. Services associated with the authorization system type.
     * @param array<AuthorizationSystemTypeService>|null $value Value to set for the services property.
    */
    public function setServices(?array $value): void {
        $this->getBackingStore()->set('services', $value);
    }

}
