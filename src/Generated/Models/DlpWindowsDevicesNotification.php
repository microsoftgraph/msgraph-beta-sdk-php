<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DlpWindowsDevicesNotification extends DlpNotification implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new dlpWindowsDevicesNotification and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.dlpWindowsDevicesNotification');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DlpWindowsDevicesNotification
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DlpWindowsDevicesNotification {
        return new DlpWindowsDevicesNotification();
    }

    /**
     * Gets the contentName property value. The contentName property
     * @return string|null
    */
    public function getContentName(): ?string {
        $val = $this->getBackingStore()->get('contentName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'contentName' => fn(ParseNode $n) => $o->setContentName($n->getStringValue()),
            'lastModfiedBy' => fn(ParseNode $n) => $o->setLastModfiedBy($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastModfiedBy property value. The lastModfiedBy property
     * @return string|null
    */
    public function getLastModfiedBy(): ?string {
        $val = $this->getBackingStore()->get('lastModfiedBy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModfiedBy'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('contentName', $this->getContentName());
        $writer->writeStringValue('lastModfiedBy', $this->getLastModfiedBy());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the contentName property value. The contentName property
     * @param string|null $value Value to set for the contentName property.
    */
    public function setContentName(?string $value): void {
        $this->getBackingStore()->set('contentName', $value);
    }

    /**
     * Sets the lastModfiedBy property value. The lastModfiedBy property
     * @param string|null $value Value to set for the lastModfiedBy property.
    */
    public function setLastModfiedBy(?string $value): void {
        $this->getBackingStore()->set('lastModfiedBy', $value);
    }

}
