<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ContentLink extends PlannerDelta implements Parsable 
{
    /**
     * Instantiates a new ContentLink and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ContentLink
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ContentLink {
        return new ContentLink();
    }

    /**
     * Gets the capabilities property value. Server-computed, read-only capability flags indicating which optional features are enabled for the entity.
     * @return ContentLinkCapability|null
    */
    public function getCapabilities(): ?ContentLinkCapability {
        $val = $this->getBackingStore()->get('capabilities');
        if (is_null($val) || $val instanceof ContentLinkCapability) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'capabilities'");
    }

    /**
     * Gets the createdBy property value. Identity of the user (or application) who created the entity. Read-only.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the displayName property value. Display label for the link.
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
     * Gets the extensions property value. Custom extension field values set on the entity. Supports $select.
     * @return ExtensionFieldCollection|null
    */
    public function getExtensions(): ?ExtensionFieldCollection {
        $val = $this->getBackingStore()->get('extensions');
        if (is_null($val) || $val instanceof ExtensionFieldCollection) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extensions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'capabilities' => fn(ParseNode $n) => $o->setCapabilities($n->getObjectValue([ContentLinkCapability::class, 'createFromDiscriminatorValue'])),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'extensions' => fn(ParseNode $n) => $o->setExtensions($n->getObjectValue([ExtensionFieldCollection::class, 'createFromDiscriminatorValue'])),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'linkType' => fn(ParseNode $n) => $o->setLinkType($n->getEnumValue(ContentLinkType::class)),
            'webUrl' => fn(ParseNode $n) => $o->setWebUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastModifiedBy property value. Identity of the user (or application) who last modified the entity. Read-only.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('lastModifiedBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedBy'");
    }

    /**
     * Gets the lastModifiedDateTime property value. Date and time the entity was last modified. The value is represented in ISO 8601 format and is always in UTC time. Read-only.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the linkType property value. Type of content the link points to. The possible values are: documentReference, webReference, unknownFutureValue.
     * @return ContentLinkType|null
    */
    public function getLinkType(): ?ContentLinkType {
        $val = $this->getBackingStore()->get('linkType');
        if (is_null($val) || $val instanceof ContentLinkType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'linkType'");
    }

    /**
     * Gets the webUrl property value. URL the link points to.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        $val = $this->getBackingStore()->get('webUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'webUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('extensions', $this->getExtensions());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeEnumValue('linkType', $this->getLinkType());
        $writer->writeStringValue('webUrl', $this->getWebUrl());
    }

    /**
     * Sets the capabilities property value. Server-computed, read-only capability flags indicating which optional features are enabled for the entity.
     * @param ContentLinkCapability|null $value Value to set for the capabilities property.
    */
    public function setCapabilities(?ContentLinkCapability $value): void {
        $this->getBackingStore()->set('capabilities', $value);
    }

    /**
     * Sets the createdBy property value. Identity of the user (or application) who created the entity. Read-only.
     * @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the displayName property value. Display label for the link.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the extensions property value. Custom extension field values set on the entity. Supports $select.
     * @param ExtensionFieldCollection|null $value Value to set for the extensions property.
    */
    public function setExtensions(?ExtensionFieldCollection $value): void {
        $this->getBackingStore()->set('extensions', $value);
    }

    /**
     * Sets the lastModifiedBy property value. Identity of the user (or application) who last modified the entity. Read-only.
     * @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Date and time the entity was last modified. The value is represented in ISO 8601 format and is always in UTC time. Read-only.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the linkType property value. Type of content the link points to. The possible values are: documentReference, webReference, unknownFutureValue.
     * @param ContentLinkType|null $value Value to set for the linkType property.
    */
    public function setLinkType(?ContentLinkType $value): void {
        $this->getBackingStore()->set('linkType', $value);
    }

    /**
     * Sets the webUrl property value. URL the link points to.
     * @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value): void {
        $this->getBackingStore()->set('webUrl', $value);
    }

}
