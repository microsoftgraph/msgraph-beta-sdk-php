<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuditActivityType extends Entity implements Parsable 
{
    /**
     * Instantiates a new AuditActivityType and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuditActivityType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuditActivityType {
        return new AuditActivityType();
    }

    /**
     * Gets the activity property value. Indicates the activity name or the operation name (for example 'Create User', 'Add member to group'). For a list of activities logged, refer to Microsoft Entra audit log categories and activities. Supports $filter (eq).
     * @return string|null
    */
    public function getActivity(): ?string {
        $val = $this->getBackingStore()->get('activity');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activity'");
    }

    /**
     * Gets the category property value. Indicates which resource category that's targeted by the activity. For example: UserManagement, GroupManagement, ApplicationManagement, RoleManagement. For a list of categories for activities logged, refer to Microsoft Entra audit log categories and activities. Supports $filter (eq).
     * @return string|null
    */
    public function getCategory(): ?string {
        $val = $this->getBackingStore()->get('category');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'category'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activity' => fn(ParseNode $n) => $o->setActivity($n->getStringValue()),
            'category' => fn(ParseNode $n) => $o->setCategory($n->getStringValue()),
            'service' => fn(ParseNode $n) => $o->setService($n->getStringValue()),
        ]);
    }

    /**
     * Gets the service property value. Indicates information on which service initiated the activity. For example: Self-service Password Management, Core Directory, B2C, Invited Users, Microsoft Identity Manager, Privileged Identity Management. Supports $filter (eq).
     * @return string|null
    */
    public function getService(): ?string {
        $val = $this->getBackingStore()->get('service');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'service'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('activity', $this->getActivity());
        $writer->writeStringValue('category', $this->getCategory());
        $writer->writeStringValue('service', $this->getService());
    }

    /**
     * Sets the activity property value. Indicates the activity name or the operation name (for example 'Create User', 'Add member to group'). For a list of activities logged, refer to Microsoft Entra audit log categories and activities. Supports $filter (eq).
     * @param string|null $value Value to set for the activity property.
    */
    public function setActivity(?string $value): void {
        $this->getBackingStore()->set('activity', $value);
    }

    /**
     * Sets the category property value. Indicates which resource category that's targeted by the activity. For example: UserManagement, GroupManagement, ApplicationManagement, RoleManagement. For a list of categories for activities logged, refer to Microsoft Entra audit log categories and activities. Supports $filter (eq).
     * @param string|null $value Value to set for the category property.
    */
    public function setCategory(?string $value): void {
        $this->getBackingStore()->set('category', $value);
    }

    /**
     * Sets the service property value. Indicates information on which service initiated the activity. For example: Self-service Password Management, Core Directory, B2C, Invited Users, Microsoft Identity Manager, Privileged Identity Management. Supports $filter (eq).
     * @param string|null $value Value to set for the service property.
    */
    public function setService(?string $value): void {
        $this->getBackingStore()->set('service', $value);
    }

}
