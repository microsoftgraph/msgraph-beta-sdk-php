<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageResourceEnvironment extends Entity 
{
    /** @var array<AccessPackageResource>|null $accessPackageResources Read-only. Required. */
    private ?array $accessPackageResources = null;
    
    /** @var ConnectionInfo|null $connectionInfo Connection information of an environment used to connect to a resource. */
    private ?ConnectionInfo $connectionInfo = null;
    
    /** @var string|null $createdBy The display name of the user that created this object. */
    private ?string $createdBy = null;
    
    /** @var DateTime|null $createdDateTime The date and time that this object was created. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    private ?DateTime $createdDateTime = null;
    
    /** @var string|null $description The description of this object. */
    private ?string $description = null;
    
    /** @var string|null $displayName The display name of this object. */
    private ?string $displayName = null;
    
    /** @var bool|null $isDefaultEnvironment Determines whether this is default environment or not. It is set to true for all static origin systems, such as Azure AD groups and Azure AD Applications. */
    private ?bool $isDefaultEnvironment = null;
    
    /** @var string|null $modifiedBy The display name of the entity that last modified this object. */
    private ?string $modifiedBy = null;
    
    /** @var DateTime|null $modifiedDateTime The date and time that this object was last modified. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    private ?DateTime $modifiedDateTime = null;
    
    /** @var string|null $originId The unique identifier of this environment in the origin system. */
    private ?string $originId = null;
    
    /** @var string|null $originSystem The type of the resource in the origin system, that is, SharePointOnline. Requires $filter (eq). */
    private ?string $originSystem = null;
    
    /**
     * Instantiates a new accessPackageResourceEnvironment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageResourceEnvironment
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageResourceEnvironment {
        return new AccessPackageResourceEnvironment();
    }

    /**
     * Gets the accessPackageResources property value. Read-only. Required.
     * @return array<AccessPackageResource>|null
    */
    public function getAccessPackageResources(): ?array {
        return $this->accessPackageResources;
    }

    /**
     * Gets the connectionInfo property value. Connection information of an environment used to connect to a resource.
     * @return ConnectionInfo|null
    */
    public function getConnectionInfo(): ?ConnectionInfo {
        return $this->connectionInfo;
    }

    /**
     * Gets the createdBy property value. The display name of the user that created this object.
     * @return string|null
    */
    public function getCreatedBy(): ?string {
        return $this->createdBy;
    }

    /**
     * Gets the createdDateTime property value. The date and time that this object was created. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. The description of this object.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The display name of this object.
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
            'accessPackageResources' => function (self $o, ParseNode $n) { $o->setAccessPackageResources($n->getCollectionOfObjectValues(AccessPackageResource::class)); },
            'connectionInfo' => function (self $o, ParseNode $n) { $o->setConnectionInfo($n->getObjectValue(ConnectionInfo::class)); },
            'createdBy' => function (self $o, ParseNode $n) { $o->setCreatedBy($n->getStringValue()); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'isDefaultEnvironment' => function (self $o, ParseNode $n) { $o->setIsDefaultEnvironment($n->getBooleanValue()); },
            'modifiedBy' => function (self $o, ParseNode $n) { $o->setModifiedBy($n->getStringValue()); },
            'modifiedDateTime' => function (self $o, ParseNode $n) { $o->setModifiedDateTime($n->getDateTimeValue()); },
            'originId' => function (self $o, ParseNode $n) { $o->setOriginId($n->getStringValue()); },
            'originSystem' => function (self $o, ParseNode $n) { $o->setOriginSystem($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the isDefaultEnvironment property value. Determines whether this is default environment or not. It is set to true for all static origin systems, such as Azure AD groups and Azure AD Applications.
     * @return bool|null
    */
    public function getIsDefaultEnvironment(): ?bool {
        return $this->isDefaultEnvironment;
    }

    /**
     * Gets the modifiedBy property value. The display name of the entity that last modified this object.
     * @return string|null
    */
    public function getModifiedBy(): ?string {
        return $this->modifiedBy;
    }

    /**
     * Gets the modifiedDateTime property value. The date and time that this object was last modified. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        return $this->modifiedDateTime;
    }

    /**
     * Gets the originId property value. The unique identifier of this environment in the origin system.
     * @return string|null
    */
    public function getOriginId(): ?string {
        return $this->originId;
    }

    /**
     * Gets the originSystem property value. The type of the resource in the origin system, that is, SharePointOnline. Requires $filter (eq).
     * @return string|null
    */
    public function getOriginSystem(): ?string {
        return $this->originSystem;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('accessPackageResources', $this->accessPackageResources);
        $writer->writeObjectValue('connectionInfo', $this->connectionInfo);
        $writer->writeStringValue('createdBy', $this->createdBy);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBooleanValue('isDefaultEnvironment', $this->isDefaultEnvironment);
        $writer->writeStringValue('modifiedBy', $this->modifiedBy);
        $writer->writeDateTimeValue('modifiedDateTime', $this->modifiedDateTime);
        $writer->writeStringValue('originId', $this->originId);
        $writer->writeStringValue('originSystem', $this->originSystem);
    }

    /**
     * Sets the accessPackageResources property value. Read-only. Required.
     *  @param array<AccessPackageResource>|null $value Value to set for the accessPackageResources property.
    */
    public function setAccessPackageResources(?array $value ): void {
        $this->accessPackageResources = $value;
    }

    /**
     * Sets the connectionInfo property value. Connection information of an environment used to connect to a resource.
     *  @param ConnectionInfo|null $value Value to set for the connectionInfo property.
    */
    public function setConnectionInfo(?ConnectionInfo $value ): void {
        $this->connectionInfo = $value;
    }

    /**
     * Sets the createdBy property value. The display name of the user that created this object.
     *  @param string|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?string $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdDateTime property value. The date and time that this object was created. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. The description of this object.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The display name of this object.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the isDefaultEnvironment property value. Determines whether this is default environment or not. It is set to true for all static origin systems, such as Azure AD groups and Azure AD Applications.
     *  @param bool|null $value Value to set for the isDefaultEnvironment property.
    */
    public function setIsDefaultEnvironment(?bool $value ): void {
        $this->isDefaultEnvironment = $value;
    }

    /**
     * Sets the modifiedBy property value. The display name of the entity that last modified this object.
     *  @param string|null $value Value to set for the modifiedBy property.
    */
    public function setModifiedBy(?string $value ): void {
        $this->modifiedBy = $value;
    }

    /**
     * Sets the modifiedDateTime property value. The date and time that this object was last modified. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value ): void {
        $this->modifiedDateTime = $value;
    }

    /**
     * Sets the originId property value. The unique identifier of this environment in the origin system.
     *  @param string|null $value Value to set for the originId property.
    */
    public function setOriginId(?string $value ): void {
        $this->originId = $value;
    }

    /**
     * Sets the originSystem property value. The type of the resource in the origin system, that is, SharePointOnline. Requires $filter (eq).
     *  @param string|null $value Value to set for the originSystem property.
    */
    public function setOriginSystem(?string $value ): void {
        $this->originSystem = $value;
    }

}
