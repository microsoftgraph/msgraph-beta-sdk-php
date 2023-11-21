<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PermissionsManagement extends Entity implements Parsable 
{
    /**
     * Instantiates a new permissionsManagement and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PermissionsManagement
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PermissionsManagement {
        return new PermissionsManagement();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'permissionsRequestChanges' => fn(ParseNode $n) => $o->setPermissionsRequestChanges($n->getCollectionOfObjectValues([PermissionsRequestChange::class, 'createFromDiscriminatorValue'])),
            'scheduledPermissionsRequests' => fn(ParseNode $n) => $o->setScheduledPermissionsRequests($n->getCollectionOfObjectValues([ScheduledPermissionsRequest::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the permissionsRequestChanges property value. Represents a change event of the scheduledPermissionsRequest entity.
     * @return array<PermissionsRequestChange>|null
    */
    public function getPermissionsRequestChanges(): ?array {
        $val = $this->getBackingStore()->get('permissionsRequestChanges');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PermissionsRequestChange::class);
            /** @var array<PermissionsRequestChange>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissionsRequestChanges'");
    }

    /**
     * Gets the scheduledPermissionsRequests property value. Represents a permissions request that Permissions Management uses to manage permissions for an identity on resources in the authorization system. This request can be granted, rejected or canceled by identities in Permissions Management.
     * @return array<ScheduledPermissionsRequest>|null
    */
    public function getScheduledPermissionsRequests(): ?array {
        $val = $this->getBackingStore()->get('scheduledPermissionsRequests');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ScheduledPermissionsRequest::class);
            /** @var array<ScheduledPermissionsRequest>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scheduledPermissionsRequests'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('permissionsRequestChanges', $this->getPermissionsRequestChanges());
        $writer->writeCollectionOfObjectValues('scheduledPermissionsRequests', $this->getScheduledPermissionsRequests());
    }

    /**
     * Sets the permissionsRequestChanges property value. Represents a change event of the scheduledPermissionsRequest entity.
     * @param array<PermissionsRequestChange>|null $value Value to set for the permissionsRequestChanges property.
    */
    public function setPermissionsRequestChanges(?array $value): void {
        $this->getBackingStore()->set('permissionsRequestChanges', $value);
    }

    /**
     * Sets the scheduledPermissionsRequests property value. Represents a permissions request that Permissions Management uses to manage permissions for an identity on resources in the authorization system. This request can be granted, rejected or canceled by identities in Permissions Management.
     * @param array<ScheduledPermissionsRequest>|null $value Value to set for the scheduledPermissionsRequests property.
    */
    public function setScheduledPermissionsRequests(?array $value): void {
        $this->getBackingStore()->set('scheduledPermissionsRequests', $value);
    }

}
