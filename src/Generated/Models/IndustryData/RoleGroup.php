<?php

namespace Microsoft\Graph\Beta\Generated\Models\IndustryData;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RoleGroup extends Entity implements Parsable 
{
    /**
     * Instantiates a new roleGroup and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RoleGroup
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RoleGroup {
        return new RoleGroup();
    }

    /**
     * Gets the displayName property value. The name of the role group.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'roles' => fn(ParseNode $n) => $o->setRoles($n->getCollectionOfObjectValues([RoleReferenceValue::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the roles property value. The set of roles included in the role group.
     * @return array<RoleReferenceValue>|null
    */
    public function getRoles(): ?array {
        return $this->getBackingStore()->get('roles');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('roles', $this->getRoles());
    }

    /**
     * Sets the displayName property value. The name of the role group.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the roles property value. The set of roles included in the role group.
     * @param array<RoleReferenceValue>|null $value Value to set for the roles property.
    */
    public function setRoles(?array $value): void {
        $this->getBackingStore()->set('roles', $value);
    }

}
