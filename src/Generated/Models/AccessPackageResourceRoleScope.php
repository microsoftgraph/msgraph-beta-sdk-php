<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageResourceRoleScope extends Entity 
{
    /** @var AccessPackageResourceRole|null $accessPackageResourceRole Read-only. Nullable. Supports $expand. */
    private ?AccessPackageResourceRole $accessPackageResourceRole = null;
    
    /** @var AccessPackageResourceScope|null $accessPackageResourceScope Read-only. Nullable. */
    private ?AccessPackageResourceScope $accessPackageResourceScope = null;
    
    /** @var string|null $createdBy Read-only. */
    private ?string $createdBy = null;
    
    /** @var DateTime|null $createdDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    private ?DateTime $createdDateTime = null;
    
    /** @var string|null $modifiedBy Read-only. */
    private ?string $modifiedBy = null;
    
    /** @var DateTime|null $modifiedDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    private ?DateTime $modifiedDateTime = null;
    
    /**
     * Instantiates a new accessPackageResourceRoleScope and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageResourceRoleScope
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageResourceRoleScope {
        return new AccessPackageResourceRoleScope();
    }

    /**
     * Gets the accessPackageResourceRole property value. Read-only. Nullable. Supports $expand.
     * @return AccessPackageResourceRole|null
    */
    public function getAccessPackageResourceRole(): ?AccessPackageResourceRole {
        return $this->accessPackageResourceRole;
    }

    /**
     * Gets the accessPackageResourceScope property value. Read-only. Nullable.
     * @return AccessPackageResourceScope|null
    */
    public function getAccessPackageResourceScope(): ?AccessPackageResourceScope {
        return $this->accessPackageResourceScope;
    }

    /**
     * Gets the createdBy property value. Read-only.
     * @return string|null
    */
    public function getCreatedBy(): ?string {
        return $this->createdBy;
    }

    /**
     * Gets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackageResourceRole' => function (self $o, ParseNode $n) { $o->setAccessPackageResourceRole($n->getObjectValue(AccessPackageResourceRole::class)); },
            'accessPackageResourceScope' => function (self $o, ParseNode $n) { $o->setAccessPackageResourceScope($n->getObjectValue(AccessPackageResourceScope::class)); },
            'createdBy' => function (self $o, ParseNode $n) { $o->setCreatedBy($n->getStringValue()); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'modifiedBy' => function (self $o, ParseNode $n) { $o->setModifiedBy($n->getStringValue()); },
            'modifiedDateTime' => function (self $o, ParseNode $n) { $o->setModifiedDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the modifiedBy property value. Read-only.
     * @return string|null
    */
    public function getModifiedBy(): ?string {
        return $this->modifiedBy;
    }

    /**
     * Gets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        return $this->modifiedDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('accessPackageResourceRole', $this->accessPackageResourceRole);
        $writer->writeObjectValue('accessPackageResourceScope', $this->accessPackageResourceScope);
        $writer->writeStringValue('createdBy', $this->createdBy);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('modifiedBy', $this->modifiedBy);
        $writer->writeDateTimeValue('modifiedDateTime', $this->modifiedDateTime);
    }

    /**
     * Sets the accessPackageResourceRole property value. Read-only. Nullable. Supports $expand.
     *  @param AccessPackageResourceRole|null $value Value to set for the accessPackageResourceRole property.
    */
    public function setAccessPackageResourceRole(?AccessPackageResourceRole $value ): void {
        $this->accessPackageResourceRole = $value;
    }

    /**
     * Sets the accessPackageResourceScope property value. Read-only. Nullable.
     *  @param AccessPackageResourceScope|null $value Value to set for the accessPackageResourceScope property.
    */
    public function setAccessPackageResourceScope(?AccessPackageResourceScope $value ): void {
        $this->accessPackageResourceScope = $value;
    }

    /**
     * Sets the createdBy property value. Read-only.
     *  @param string|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?string $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the modifiedBy property value. Read-only.
     *  @param string|null $value Value to set for the modifiedBy property.
    */
    public function setModifiedBy(?string $value ): void {
        $this->modifiedBy = $value;
    }

    /**
     * Sets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value ): void {
        $this->modifiedDateTime = $value;
    }

}
