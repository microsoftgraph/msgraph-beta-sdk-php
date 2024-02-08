<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AzureRolePermissionsDefinitionAction extends AzurePermissionsDefinitionAction implements Parsable 
{
    /**
     * Instantiates a new AzureRolePermissionsDefinitionAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.azureRolePermissionsDefinitionAction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AzureRolePermissionsDefinitionAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AzureRolePermissionsDefinitionAction {
        return new AzureRolePermissionsDefinitionAction();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'roles' => fn(ParseNode $n) => $o->setRoles($n->getCollectionOfObjectValues([PermissionsDefinitionAzureRole::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the roles property value. The roles property
     * @return array<PermissionsDefinitionAzureRole>|null
    */
    public function getRoles(): ?array {
        $val = $this->getBackingStore()->get('roles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PermissionsDefinitionAzureRole::class);
            /** @var array<PermissionsDefinitionAzureRole>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roles'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('roles', $this->getRoles());
    }

    /**
     * Sets the roles property value. The roles property
     * @param array<PermissionsDefinitionAzureRole>|null $value Value to set for the roles property.
    */
    public function setRoles(?array $value): void {
        $this->getBackingStore()->set('roles', $value);
    }

}
