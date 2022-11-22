<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlannerRosterMember extends Entity implements Parsable 
{
    /**
     * Instantiates a new plannerRosterMember and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerRosterMember
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerRosterMember {
        return new PlannerRosterMember();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'roles' => fn(ParseNode $n) => $o->setRoles($n->getCollectionOfPrimitiveValues()),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the roles property value. Additional roles associated with the PlannerRosterMember, which determines permissions of the member in the plannerRoster. Currently there are no available roles to assign, and every member has full control over the contents of the plannerRoster.
     * @return array<string>|null
    */
    public function getRoles(): ?array {
        return $this->getBackingStore()->get('roles');
    }

    /**
     * Gets the tenantId property value. Identifier of the tenant the user belongs to. Currently only the users from the same tenant can be added to a plannerRoster.
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->getBackingStore()->get('tenantId');
    }

    /**
     * Gets the userId property value. Identifier of the user.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->getBackingStore()->get('userId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('roles', $this->getRoles());
        $writer->writeStringValue('tenantId', $this->getTenantId());
        $writer->writeStringValue('userId', $this->getUserId());
    }

    /**
     * Sets the roles property value. Additional roles associated with the PlannerRosterMember, which determines permissions of the member in the plannerRoster. Currently there are no available roles to assign, and every member has full control over the contents of the plannerRoster.
     *  @param array<string>|null $value Value to set for the roles property.
    */
    public function setRoles(?array $value): void {
        $this->getBackingStore()->set('roles', $value);
    }

    /**
     * Sets the tenantId property value. Identifier of the tenant the user belongs to. Currently only the users from the same tenant can be added to a plannerRoster.
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

    /**
     * Sets the userId property value. Identifier of the user.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

}
