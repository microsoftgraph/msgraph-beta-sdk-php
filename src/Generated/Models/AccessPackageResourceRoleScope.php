<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageResourceRoleScope extends Entity implements Parsable 
{
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageResourceRoleScope {
        return new AccessPackageResourceRoleScope();
    }

    /**
     * Gets the accessPackageResourceRole property value. Read-only. Nullable. Supports $expand.
     * @return AccessPackageResourceRole|null
    */
    public function getAccessPackageResourceRole(): ?AccessPackageResourceRole {
        return $this->getBackingStore()->get('accessPackageResourceRole');
    }

    /**
     * Gets the accessPackageResourceScope property value. The accessPackageResourceScope property
     * @return AccessPackageResourceScope|null
    */
    public function getAccessPackageResourceScope(): ?AccessPackageResourceScope {
        return $this->getBackingStore()->get('accessPackageResourceScope');
    }

    /**
     * Gets the createdBy property value. The createdBy property
     * @return string|null
    */
    public function getCreatedBy(): ?string {
        return $this->getBackingStore()->get('createdBy');
    }

    /**
     * Gets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackageResourceRole' => fn(ParseNode $n) => $o->setAccessPackageResourceRole($n->getObjectValue([AccessPackageResourceRole::class, 'createFromDiscriminatorValue'])),
            'accessPackageResourceScope' => fn(ParseNode $n) => $o->setAccessPackageResourceScope($n->getObjectValue([AccessPackageResourceScope::class, 'createFromDiscriminatorValue'])),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'modifiedBy' => fn(ParseNode $n) => $o->setModifiedBy($n->getStringValue()),
            'modifiedDateTime' => fn(ParseNode $n) => $o->setModifiedDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the modifiedBy property value. The modifiedBy property
     * @return string|null
    */
    public function getModifiedBy(): ?string {
        return $this->getBackingStore()->get('modifiedBy');
    }

    /**
     * Gets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('modifiedDateTime');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('accessPackageResourceRole', $this->getAccessPackageResourceRole());
        $writer->writeObjectValue('accessPackageResourceScope', $this->getAccessPackageResourceScope());
        $writer->writeStringValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('modifiedBy', $this->getModifiedBy());
        $writer->writeDateTimeValue('modifiedDateTime', $this->getModifiedDateTime());
    }

    /**
     * Sets the accessPackageResourceRole property value. Read-only. Nullable. Supports $expand.
     * @param AccessPackageResourceRole|null $value Value to set for the accessPackageResourceRole property.
    */
    public function setAccessPackageResourceRole(?AccessPackageResourceRole $value): void {
        $this->getBackingStore()->set('accessPackageResourceRole', $value);
    }

    /**
     * Sets the accessPackageResourceScope property value. The accessPackageResourceScope property
     * @param AccessPackageResourceScope|null $value Value to set for the accessPackageResourceScope property.
    */
    public function setAccessPackageResourceScope(?AccessPackageResourceScope $value): void {
        $this->getBackingStore()->set('accessPackageResourceScope', $value);
    }

    /**
     * Sets the createdBy property value. The createdBy property
     * @param string|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?string $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the modifiedBy property value. The modifiedBy property
     * @param string|null $value Value to set for the modifiedBy property.
    */
    public function setModifiedBy(?string $value): void {
        $this->getBackingStore()->set('modifiedBy', $value);
    }

    /**
     * Sets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('modifiedDateTime', $value);
    }

}
