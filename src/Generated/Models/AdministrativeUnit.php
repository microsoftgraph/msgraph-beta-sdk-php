<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AdministrativeUnit extends DirectoryObject implements Parsable 
{
    /**
     * @var string|null $description An optional description for the administrative unit. Supports $filter (eq, ne, in, startsWith), $search.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName Display name for the administrative unit. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderBy.
    */
    private ?string $displayName = null;
    
    /**
     * @var array<Extension>|null $extensions The collection of open extensions defined for this administrative unit. Nullable.
    */
    private ?array $extensions = null;
    
    /**
     * @var bool|null $isMemberManagementRestricted The isMemberManagementRestricted property
    */
    private ?bool $isMemberManagementRestricted = null;
    
    /**
     * @var array<DirectoryObject>|null $members Users and groups that are members of this administrative unit. Supports $expand.
    */
    private ?array $members = null;
    
    /**
     * @var array<ScopedRoleMembership>|null $scopedRoleMembers Scoped-role members of this administrative unit.
    */
    private ?array $scopedRoleMembers = null;
    
    /**
     * @var string|null $visibility Controls whether the administrative unit and its members are hidden or public. Can be set to HiddenMembership. If not set (value is null), the default behavior is public. When set to HiddenMembership, only members of the administrative unit can list other members of the administrative unit.
    */
    private ?string $visibility = null;
    
    /**
     * Instantiates a new AdministrativeUnit and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AdministrativeUnit
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AdministrativeUnit {
        return new AdministrativeUnit();
    }

    /**
     * Gets the description property value. An optional description for the administrative unit. Supports $filter (eq, ne, in, startsWith), $search.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. Display name for the administrative unit. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderBy.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the extensions property value. The collection of open extensions defined for this administrative unit. Nullable.
     * @return array<Extension>|null
    */
    public function getExtensions(): ?array {
        return $this->extensions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'extensions' => function (ParseNode $n) use ($o) { $o->setExtensions($n->getCollectionOfObjectValues(array(Extension::class, 'createFromDiscriminatorValue'))); },
            'isMemberManagementRestricted' => function (ParseNode $n) use ($o) { $o->setIsMemberManagementRestricted($n->getBooleanValue()); },
            'members' => function (ParseNode $n) use ($o) { $o->setMembers($n->getCollectionOfObjectValues(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
            'scopedRoleMembers' => function (ParseNode $n) use ($o) { $o->setScopedRoleMembers($n->getCollectionOfObjectValues(array(ScopedRoleMembership::class, 'createFromDiscriminatorValue'))); },
            'visibility' => function (ParseNode $n) use ($o) { $o->setVisibility($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the isMemberManagementRestricted property value. The isMemberManagementRestricted property
     * @return bool|null
    */
    public function getIsMemberManagementRestricted(): ?bool {
        return $this->isMemberManagementRestricted;
    }

    /**
     * Gets the members property value. Users and groups that are members of this administrative unit. Supports $expand.
     * @return array<DirectoryObject>|null
    */
    public function getMembers(): ?array {
        return $this->members;
    }

    /**
     * Gets the scopedRoleMembers property value. Scoped-role members of this administrative unit.
     * @return array<ScopedRoleMembership>|null
    */
    public function getScopedRoleMembers(): ?array {
        return $this->scopedRoleMembers;
    }

    /**
     * Gets the visibility property value. Controls whether the administrative unit and its members are hidden or public. Can be set to HiddenMembership. If not set (value is null), the default behavior is public. When set to HiddenMembership, only members of the administrative unit can list other members of the administrative unit.
     * @return string|null
    */
    public function getVisibility(): ?string {
        return $this->visibility;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('extensions', $this->extensions);
        $writer->writeBooleanValue('isMemberManagementRestricted', $this->isMemberManagementRestricted);
        $writer->writeCollectionOfObjectValues('members', $this->members);
        $writer->writeCollectionOfObjectValues('scopedRoleMembers', $this->scopedRoleMembers);
        $writer->writeStringValue('visibility', $this->visibility);
    }

    /**
     * Sets the description property value. An optional description for the administrative unit. Supports $filter (eq, ne, in, startsWith), $search.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. Display name for the administrative unit. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderBy.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the extensions property value. The collection of open extensions defined for this administrative unit. Nullable.
     *  @param array<Extension>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value ): void {
        $this->extensions = $value;
    }

    /**
     * Sets the isMemberManagementRestricted property value. The isMemberManagementRestricted property
     *  @param bool|null $value Value to set for the isMemberManagementRestricted property.
    */
    public function setIsMemberManagementRestricted(?bool $value ): void {
        $this->isMemberManagementRestricted = $value;
    }

    /**
     * Sets the members property value. Users and groups that are members of this administrative unit. Supports $expand.
     *  @param array<DirectoryObject>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value ): void {
        $this->members = $value;
    }

    /**
     * Sets the scopedRoleMembers property value. Scoped-role members of this administrative unit.
     *  @param array<ScopedRoleMembership>|null $value Value to set for the scopedRoleMembers property.
    */
    public function setScopedRoleMembers(?array $value ): void {
        $this->scopedRoleMembers = $value;
    }

    /**
     * Sets the visibility property value. Controls whether the administrative unit and its members are hidden or public. Can be set to HiddenMembership. If not set (value is null), the default behavior is public. When set to HiddenMembership, only members of the administrative unit can list other members of the administrative unit.
     *  @param string|null $value Value to set for the visibility property.
    */
    public function setVisibility(?string $value ): void {
        $this->visibility = $value;
    }

}
