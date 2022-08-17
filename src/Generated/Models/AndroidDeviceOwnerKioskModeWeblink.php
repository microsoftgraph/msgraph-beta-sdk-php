<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidDeviceOwnerKioskModeWeblink extends AndroidDeviceOwnerKioskModeFolderItem implements Parsable 
{
    /**
     * @var string|null $label Display name for weblink
    */
    private ?string $label = null;
    
    /**
     * @var string|null $link Link for weblink
    */
    private ?string $link = null;
    
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'label' => function (ParseNode $n) use ($o) { $o->setLabel($n->getStringValue()); },
            'link' => function (ParseNode $n) use ($o) { $o->setLink($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the label property value. Display name for weblink
     * @return string|null
    */
    public function getLabel(): ?string {
        return $this->label;
    }

    /**
     * Gets the link property value. Link for weblink
     * @return string|null
    */
    public function getLink(): ?string {
        return $this->link;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('label', $this->label);
        $writer->writeStringValue('link', $this->link);
    }

    /**
     * Sets the label property value. Display name for weblink
     *  @param string|null $value Value to set for the label property.
    */
    public function setLabel(?string $value ): void {
        $this->label = $value;
    }

    /**
     * Sets the link property value. Link for weblink
     *  @param string|null $value Value to set for the link property.
    */
    public function setLink(?string $value ): void {
        $this->link = $value;
    }

}
