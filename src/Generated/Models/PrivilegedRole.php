<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrivilegedRole extends Entity implements Parsable 
{
    /**
     * Instantiates a new PrivilegedRole and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrivilegedRole
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrivilegedRole {
        return new PrivilegedRole();
    }

    /**
     * Gets the assignments property value. The assignments for this role. Read-only. Nullable.
     * @return array<PrivilegedRoleAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->getBackingStore()->get('assignments');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([PrivilegedRoleAssignment::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([PrivilegedRoleSettings::class, 'createFromDiscriminatorValue'])),
            'summary' => fn(ParseNode $n) => $o->setSummary($n->getObjectValue([PrivilegedRoleSummary::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the name property value. Role name.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->getBackingStore()->get('name');
    }

    /**
     * Gets the settings property value. The settings for this role. Read-only. Nullable.
     * @return PrivilegedRoleSettings|null
    */
    public function getSettings(): ?PrivilegedRoleSettings {
        return $this->getBackingStore()->get('settings');
    }

    /**
     * Gets the summary property value. The summary information for this role. Read-only. Nullable.
     * @return PrivilegedRoleSummary|null
    */
    public function getSummary(): ?PrivilegedRoleSummary {
        return $this->getBackingStore()->get('summary');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeObjectValue('settings', $this->getSettings());
        $writer->writeObjectValue('summary', $this->getSummary());
    }

    /**
     * Sets the assignments property value. The assignments for this role. Read-only. Nullable.
     * @param array<PrivilegedRoleAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the name property value. Role name.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the settings property value. The settings for this role. Read-only. Nullable.
     * @param PrivilegedRoleSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?PrivilegedRoleSettings $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

    /**
     * Sets the summary property value. The summary information for this role. Read-only. Nullable.
     * @param PrivilegedRoleSummary|null $value Value to set for the summary property.
    */
    public function setSummary(?PrivilegedRoleSummary $value): void {
        $this->getBackingStore()->set('summary', $value);
    }

}
