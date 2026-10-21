<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A tenant-scoped Microsoft Security workbook containing a display name and arbitrary JSON content.
*/
class Workbook extends Entity implements Parsable 
{
    /**
     * Instantiates a new Workbook and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Workbook
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Workbook {
        return new Workbook();
    }

    /**
     * Gets the content property value. The workbook's JSON document. Required when creating or replacing a workbook. Supply a JSON object, not a JSON-encoded string. Replaced as a whole on update. Omitted from collection responses by default; use $select to include it.
     * @return WorkbookContent|null
    */
    public function getContent(): ?WorkbookContent {
        $val = $this->getBackingStore()->get('content');
        if (is_null($val) || $val instanceof WorkbookContent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'content'");
    }

    /**
     * Gets the createdAtDateTime property value. The date and time when the workbook was created. Set by the service and preserved on update. Read-only.
     * @return DateTime|null
    */
    public function getCreatedAtDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdAtDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdAtDateTime'");
    }

    /**
     * Gets the createdByUpn property value. The user principal name recorded when the workbook was created. Set by the service and preserved on update. Read-only.
     * @return string|null
    */
    public function getCreatedByUpn(): ?string {
        $val = $this->getBackingStore()->get('createdByUpn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdByUpn'");
    }

    /**
     * Gets the etag property value. The opaque concurrency token derived from the workbook's storage ETag. Set by the service. Read-only. For conditional updates, use the value returned in the HTTP ETag response header.
     * @return string|null
    */
    public function getEtag(): ?string {
        $val = $this->getBackingStore()->get('etag');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'etag'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'content' => fn(ParseNode $n) => $o->setContent($n->getObjectValue([WorkbookContent::class, 'createFromDiscriminatorValue'])),
            'createdAtDateTime' => fn(ParseNode $n) => $o->setCreatedAtDateTime($n->getDateTimeValue()),
            'createdByUpn' => fn(ParseNode $n) => $o->setCreatedByUpn($n->getStringValue()),
            'etag' => fn(ParseNode $n) => $o->setEtag($n->getStringValue()),
            'lastUpdatedByUpn' => fn(ParseNode $n) => $o->setLastUpdatedByUpn($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'updatedAtDateTime' => fn(ParseNode $n) => $o->setUpdatedAtDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the lastUpdatedByUpn property value. The user principal name recorded for the most recent update. Set by the service. Read-only.
     * @return string|null
    */
    public function getLastUpdatedByUpn(): ?string {
        $val = $this->getBackingStore()->get('lastUpdatedByUpn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastUpdatedByUpn'");
    }

    /**
     * Gets the name property value. The display name of the workbook. Required when creating or replacing a workbook. Maximum length is 256 characters.
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
     * Gets the updatedAtDateTime property value. The date and time of the most recent update. Set by the service. Read-only.
     * @return DateTime|null
    */
    public function getUpdatedAtDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('updatedAtDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'updatedAtDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('content', $this->getContent());
        $writer->writeStringValue('name', $this->getName());
    }

    /**
     * Sets the content property value. The workbook's JSON document. Required when creating or replacing a workbook. Supply a JSON object, not a JSON-encoded string. Replaced as a whole on update. Omitted from collection responses by default; use $select to include it.
     * @param WorkbookContent|null $value Value to set for the content property.
    */
    public function setContent(?WorkbookContent $value): void {
        $this->getBackingStore()->set('content', $value);
    }

    /**
     * Sets the createdAtDateTime property value. The date and time when the workbook was created. Set by the service and preserved on update. Read-only.
     * @param DateTime|null $value Value to set for the createdAtDateTime property.
    */
    public function setCreatedAtDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdAtDateTime', $value);
    }

    /**
     * Sets the createdByUpn property value. The user principal name recorded when the workbook was created. Set by the service and preserved on update. Read-only.
     * @param string|null $value Value to set for the createdByUpn property.
    */
    public function setCreatedByUpn(?string $value): void {
        $this->getBackingStore()->set('createdByUpn', $value);
    }

    /**
     * Sets the etag property value. The opaque concurrency token derived from the workbook's storage ETag. Set by the service. Read-only. For conditional updates, use the value returned in the HTTP ETag response header.
     * @param string|null $value Value to set for the etag property.
    */
    public function setEtag(?string $value): void {
        $this->getBackingStore()->set('etag', $value);
    }

    /**
     * Sets the lastUpdatedByUpn property value. The user principal name recorded for the most recent update. Set by the service. Read-only.
     * @param string|null $value Value to set for the lastUpdatedByUpn property.
    */
    public function setLastUpdatedByUpn(?string $value): void {
        $this->getBackingStore()->set('lastUpdatedByUpn', $value);
    }

    /**
     * Sets the name property value. The display name of the workbook. Required when creating or replacing a workbook. Maximum length is 256 characters.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the updatedAtDateTime property value. The date and time of the most recent update. Set by the service. Read-only.
     * @param DateTime|null $value Value to set for the updatedAtDateTime property.
    */
    public function setUpdatedAtDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('updatedAtDateTime', $value);
    }

}
