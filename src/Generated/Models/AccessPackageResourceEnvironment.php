<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AccessPackageResourceEnvironment extends Entity implements Parsable 
{
    /**
     * Instantiates a new AccessPackageResourceEnvironment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageResourceEnvironment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageResourceEnvironment {
        return new AccessPackageResourceEnvironment();
    }

    /**
     * Gets the accessPackageResources property value. Read-only. Required.
     * @return array<AccessPackageResource>|null
    */
    public function getAccessPackageResources(): ?array {
        $val = $this->getBackingStore()->get('accessPackageResources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageResource::class);
            /** @var array<AccessPackageResource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackageResources'");
    }

    /**
     * Gets the connectionInfo property value. Connection information of an environment used to connect to a resource.
     * @return ConnectionInfo|null
    */
    public function getConnectionInfo(): ?ConnectionInfo {
        $val = $this->getBackingStore()->get('connectionInfo');
        if (is_null($val) || $val instanceof ConnectionInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectionInfo'");
    }

    /**
     * Gets the createdBy property value. The display name of the user that created this object.
     * @return string|null
    */
    public function getCreatedBy(): ?string {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the createdDateTime property value. The date and time that this object was created. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the description property value. The description of this object.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The display name of this object.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackageResources' => fn(ParseNode $n) => $o->setAccessPackageResources($n->getCollectionOfObjectValues([AccessPackageResource::class, 'createFromDiscriminatorValue'])),
            'connectionInfo' => fn(ParseNode $n) => $o->setConnectionInfo($n->getObjectValue([ConnectionInfo::class, 'createFromDiscriminatorValue'])),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isDefaultEnvironment' => fn(ParseNode $n) => $o->setIsDefaultEnvironment($n->getBooleanValue()),
            'modifiedBy' => fn(ParseNode $n) => $o->setModifiedBy($n->getStringValue()),
            'modifiedDateTime' => fn(ParseNode $n) => $o->setModifiedDateTime($n->getDateTimeValue()),
            'originId' => fn(ParseNode $n) => $o->setOriginId($n->getStringValue()),
            'originSystem' => fn(ParseNode $n) => $o->setOriginSystem($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isDefaultEnvironment property value. Determines whether this is default environment or not. It is set to true for all static origin systems, such as Microsoft Entra groups and Microsoft Entra Applications.
     * @return bool|null
    */
    public function getIsDefaultEnvironment(): ?bool {
        $val = $this->getBackingStore()->get('isDefaultEnvironment');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDefaultEnvironment'");
    }

    /**
     * Gets the modifiedBy property value. The display name of the entity that last modified this object.
     * @return string|null
    */
    public function getModifiedBy(): ?string {
        $val = $this->getBackingStore()->get('modifiedBy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'modifiedBy'");
    }

    /**
     * Gets the modifiedDateTime property value. The date and time that this object was last modified. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('modifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'modifiedDateTime'");
    }

    /**
     * Gets the originId property value. The unique identifier of this environment in the origin system.
     * @return string|null
    */
    public function getOriginId(): ?string {
        $val = $this->getBackingStore()->get('originId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'originId'");
    }

    /**
     * Gets the originSystem property value. The type of the resource in the origin system, that is, SharePointOnline. Requires $filter (eq).
     * @return string|null
    */
    public function getOriginSystem(): ?string {
        $val = $this->getBackingStore()->get('originSystem');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'originSystem'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('accessPackageResources', $this->getAccessPackageResources());
        $writer->writeObjectValue('connectionInfo', $this->getConnectionInfo());
        $writer->writeStringValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('isDefaultEnvironment', $this->getIsDefaultEnvironment());
        $writer->writeStringValue('modifiedBy', $this->getModifiedBy());
        $writer->writeDateTimeValue('modifiedDateTime', $this->getModifiedDateTime());
        $writer->writeStringValue('originId', $this->getOriginId());
        $writer->writeStringValue('originSystem', $this->getOriginSystem());
    }

    /**
     * Sets the accessPackageResources property value. Read-only. Required.
     * @param array<AccessPackageResource>|null $value Value to set for the accessPackageResources property.
    */
    public function setAccessPackageResources(?array $value): void {
        $this->getBackingStore()->set('accessPackageResources', $value);
    }

    /**
     * Sets the connectionInfo property value. Connection information of an environment used to connect to a resource.
     * @param ConnectionInfo|null $value Value to set for the connectionInfo property.
    */
    public function setConnectionInfo(?ConnectionInfo $value): void {
        $this->getBackingStore()->set('connectionInfo', $value);
    }

    /**
     * Sets the createdBy property value. The display name of the user that created this object.
     * @param string|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?string $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time that this object was created. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. The description of this object.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name of this object.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isDefaultEnvironment property value. Determines whether this is default environment or not. It is set to true for all static origin systems, such as Microsoft Entra groups and Microsoft Entra Applications.
     * @param bool|null $value Value to set for the isDefaultEnvironment property.
    */
    public function setIsDefaultEnvironment(?bool $value): void {
        $this->getBackingStore()->set('isDefaultEnvironment', $value);
    }

    /**
     * Sets the modifiedBy property value. The display name of the entity that last modified this object.
     * @param string|null $value Value to set for the modifiedBy property.
    */
    public function setModifiedBy(?string $value): void {
        $this->getBackingStore()->set('modifiedBy', $value);
    }

    /**
     * Sets the modifiedDateTime property value. The date and time that this object was last modified. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('modifiedDateTime', $value);
    }

    /**
     * Sets the originId property value. The unique identifier of this environment in the origin system.
     * @param string|null $value Value to set for the originId property.
    */
    public function setOriginId(?string $value): void {
        $this->getBackingStore()->set('originId', $value);
    }

    /**
     * Sets the originSystem property value. The type of the resource in the origin system, that is, SharePointOnline. Requires $filter (eq).
     * @param string|null $value Value to set for the originSystem property.
    */
    public function setOriginSystem(?string $value): void {
        $this->getBackingStore()->set('originSystem', $value);
    }

}
