<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidDeviceOwnerKioskModeWeblink extends AndroidDeviceOwnerKioskModeFolderItem implements Parsable 
{
    /**
     * Instantiates a new AndroidDeviceOwnerKioskModeWeblink and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidDeviceOwnerKioskModeWeblink');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidDeviceOwnerKioskModeWeblink
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidDeviceOwnerKioskModeWeblink {
        return new AndroidDeviceOwnerKioskModeWeblink();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'label' => fn(ParseNode $n) => $o->setLabel($n->getStringValue()),
            'link' => fn(ParseNode $n) => $o->setLink($n->getStringValue()),
        ]);
    }

    /**
     * Gets the label property value. Display name for weblink
     * @return string|null
    */
    public function getLabel(): ?string {
        $val = $this->getBackingStore()->get('label');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'label'");
    }

    /**
     * Gets the link property value. Link for weblink
     * @return string|null
    */
    public function getLink(): ?string {
        $val = $this->getBackingStore()->get('link');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'link'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('label', $this->getLabel());
        $writer->writeStringValue('link', $this->getLink());
    }

    /**
     * Sets the label property value. Display name for weblink
     * @param string|null $value Value to set for the label property.
    */
    public function setLabel(?string $value): void {
        $this->getBackingStore()->set('label', $value);
    }

    /**
     * Sets the link property value. Link for weblink
     * @param string|null $value Value to set for the link property.
    */
    public function setLink(?string $value): void {
        $this->getBackingStore()->set('link', $value);
    }

}
