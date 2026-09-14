<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CaseTypeConfiguration extends Entity implements Parsable 
{
    /**
     * Instantiates a new CaseTypeConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CaseTypeConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CaseTypeConfiguration {
        return new CaseTypeConfiguration();
    }

    /**
     * Gets the customFields property value. The contained custom-field definitions that make up the blank-form schema for this case type. Read-only. Supports $count, $expand, $filter, $orderby, $select, $skip, and $top.
     * @return array<CustomFieldDefinition>|null
    */
    public function getCustomFields(): ?array {
        $val = $this->getBackingStore()->get('customFields');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CustomFieldDefinition::class);
            /** @var array<CustomFieldDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customFields'");
    }

    /**
     * Gets the defaultStatusId property value. The id of the top-level status that a new case of this type starts in.
     * @return string|null
    */
    public function getDefaultStatusId(): ?string {
        $val = $this->getBackingStore()->get('defaultStatusId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultStatusId'");
    }

    /**
     * Gets the displayName property value. The human-readable label of the case type.
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
            'customFields' => fn(ParseNode $n) => $o->setCustomFields($n->getCollectionOfObjectValues([CustomFieldDefinition::class, 'createFromDiscriminatorValue'])),
            'defaultStatusId' => fn(ParseNode $n) => $o->setDefaultStatusId($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'statuses' => fn(ParseNode $n) => $o->setStatuses($n->getCollectionOfObjectValues([StatusDefinition::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the statuses property value. The contained top-level statuses that a case of this type can be set to. Read-only. Supports $count, $expand, $filter, $orderby, $select, $skip, and $top.
     * @return array<StatusDefinition>|null
    */
    public function getStatuses(): ?array {
        $val = $this->getBackingStore()->get('statuses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, StatusDefinition::class);
            /** @var array<StatusDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'statuses'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('customFields', $this->getCustomFields());
        $writer->writeStringValue('defaultStatusId', $this->getDefaultStatusId());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('statuses', $this->getStatuses());
    }

    /**
     * Sets the customFields property value. The contained custom-field definitions that make up the blank-form schema for this case type. Read-only. Supports $count, $expand, $filter, $orderby, $select, $skip, and $top.
     * @param array<CustomFieldDefinition>|null $value Value to set for the customFields property.
    */
    public function setCustomFields(?array $value): void {
        $this->getBackingStore()->set('customFields', $value);
    }

    /**
     * Sets the defaultStatusId property value. The id of the top-level status that a new case of this type starts in.
     * @param string|null $value Value to set for the defaultStatusId property.
    */
    public function setDefaultStatusId(?string $value): void {
        $this->getBackingStore()->set('defaultStatusId', $value);
    }

    /**
     * Sets the displayName property value. The human-readable label of the case type.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the statuses property value. The contained top-level statuses that a case of this type can be set to. Read-only. Supports $count, $expand, $filter, $orderby, $select, $skip, and $top.
     * @param array<StatusDefinition>|null $value Value to set for the statuses property.
    */
    public function setStatuses(?array $value): void {
        $this->getBackingStore()->set('statuses', $value);
    }

}
