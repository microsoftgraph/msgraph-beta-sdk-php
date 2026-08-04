<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class StatusDefinition extends Entity implements Parsable 
{
    /**
     * Instantiates a new StatusDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return StatusDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): StatusDefinition {
        return new StatusDefinition();
    }

    /**
     * Gets the customStatuses property value. The custom statuses returned inline within this top-level status. These aren't separately addressable.
     * @return array<CustomStatusDefinition>|null
    */
    public function getCustomStatuses(): ?array {
        $val = $this->getBackingStore()->get('customStatuses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CustomStatusDefinition::class);
            /** @var array<CustomStatusDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customStatuses'");
    }

    /**
     * Gets the displayName property value. The human-readable label of the status. Supports $filter and $orderby.
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
            'customStatuses' => fn(ParseNode $n) => $o->setCustomStatuses($n->getCollectionOfObjectValues([CustomStatusDefinition::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'sortOrder' => fn(ParseNode $n) => $o->setSortOrder($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the sortOrder property value. The display order of the status relative to other statuses of the same case type. Supports $filter and $orderby.
     * @return int|null
    */
    public function getSortOrder(): ?int {
        $val = $this->getBackingStore()->get('sortOrder');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sortOrder'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('customStatuses', $this->getCustomStatuses());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeIntegerValue('sortOrder', $this->getSortOrder());
    }

    /**
     * Sets the customStatuses property value. The custom statuses returned inline within this top-level status. These aren't separately addressable.
     * @param array<CustomStatusDefinition>|null $value Value to set for the customStatuses property.
    */
    public function setCustomStatuses(?array $value): void {
        $this->getBackingStore()->set('customStatuses', $value);
    }

    /**
     * Sets the displayName property value. The human-readable label of the status. Supports $filter and $orderby.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the sortOrder property value. The display order of the status relative to other statuses of the same case type. Supports $filter and $orderby.
     * @param int|null $value Value to set for the sortOrder property.
    */
    public function setSortOrder(?int $value): void {
        $this->getBackingStore()->set('sortOrder', $value);
    }

}
