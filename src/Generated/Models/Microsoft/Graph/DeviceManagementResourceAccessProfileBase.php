<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementResourceAccessProfileBase extends Entity 
{
    /** @var array<DeviceManagementResourceAccessProfileAssignment>|null $assignments The list of assignments for the device configuration profile. */
    private ?array $assignments = null;
    
    /** @var DateTime|null $creationDateTime DateTime profile was created */
    private ?DateTime $creationDateTime = null;
    
    /** @var string|null $description Profile description */
    private ?string $description = null;
    
    /** @var string|null $displayName Profile display name */
    private ?string $displayName = null;
    
    /** @var DateTime|null $lastModifiedDateTime DateTime profile was last modified */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var array<string>|null $roleScopeTagIds Scope Tags */
    private ?array $roleScopeTagIds = null;
    
    /** @var int|null $version Version of the profile */
    private ?int $version = null;
    
    /**
     * Instantiates a new deviceManagementResourceAccessProfileBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementResourceAccessProfileBase
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementResourceAccessProfileBase {
        return new DeviceManagementResourceAccessProfileBase();
    }

    /**
     * Gets the assignments property value. The list of assignments for the device configuration profile.
     * @return array<DeviceManagementResourceAccessProfileAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->assignments;
    }

    /**
     * Gets the creationDateTime property value. DateTime profile was created
     * @return DateTime|null
    */
    public function getCreationDateTime(): ?DateTime {
        return $this->creationDateTime;
    }

    /**
     * Gets the description property value. Profile description
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. Profile display name
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => function (self $o, ParseNode $n) { $o->setAssignments($n->getCollectionOfObjectValues(DeviceManagementResourceAccessProfileAssignment::class)); },
            'creationDateTime' => function (self $o, ParseNode $n) { $o->setCreationDateTime($n->getDateTimeValue()); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'roleScopeTagIds' => function (self $o, ParseNode $n) { $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()); },
            'version' => function (self $o, ParseNode $n) { $o->setVersion($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. DateTime profile was last modified
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the roleScopeTagIds property value. Scope Tags
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->roleScopeTagIds;
    }

    /**
     * Gets the version property value. Version of the profile
     * @return int|null
    */
    public function getVersion(): ?int {
        return $this->version;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->assignments);
        $writer->writeDateTimeValue('creationDateTime', $this->creationDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->roleScopeTagIds);
        $writer->writeIntegerValue('version', $this->version);
    }

    /**
     * Sets the assignments property value. The list of assignments for the device configuration profile.
     *  @param array<DeviceManagementResourceAccessProfileAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value ): void {
        $this->assignments = $value;
    }

    /**
     * Sets the creationDateTime property value. DateTime profile was created
     *  @param DateTime|null $value Value to set for the creationDateTime property.
    */
    public function setCreationDateTime(?DateTime $value ): void {
        $this->creationDateTime = $value;
    }

    /**
     * Sets the description property value. Profile description
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. Profile display name
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. DateTime profile was last modified
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the roleScopeTagIds property value. Scope Tags
     *  @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value ): void {
        $this->roleScopeTagIds = $value;
    }

    /**
     * Sets the version property value. Version of the profile
     *  @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value ): void {
        $this->version = $value;
    }

}
