<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PrivilegedRole extends Entity implements Parsable 
{
    /**
     * Instantiates a new privilegedRole and sets the default values.
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
     * Gets the assignments property value. The assignments property
     * @return array<PrivilegedRoleAssignment>|null
    */
    public function getAssignments(): ?array {
        $val = $this->getBackingStore()->get('assignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PrivilegedRoleAssignment::class);
            /** @var array<PrivilegedRoleAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignments'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Gets the settings property value. The settings property
     * @return PrivilegedRoleSettings|null
    */
    public function getSettings(): ?PrivilegedRoleSettings {
        $val = $this->getBackingStore()->get('settings');
        if (is_null($val) || $val instanceof PrivilegedRoleSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settings'");
    }

    /**
     * Gets the summary property value. The summary property
     * @return PrivilegedRoleSummary|null
    */
    public function getSummary(): ?PrivilegedRoleSummary {
        $val = $this->getBackingStore()->get('summary');
        if (is_null($val) || $val instanceof PrivilegedRoleSummary) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'summary'");
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
     * Sets the assignments property value. The assignments property
     * @param array<PrivilegedRoleAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the settings property value. The settings property
     * @param PrivilegedRoleSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?PrivilegedRoleSettings $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

    /**
     * Sets the summary property value. The summary property
     * @param PrivilegedRoleSummary|null $value Value to set for the summary property.
    */
    public function setSummary(?PrivilegedRoleSummary $value): void {
        $this->getBackingStore()->set('summary', $value);
    }

}
