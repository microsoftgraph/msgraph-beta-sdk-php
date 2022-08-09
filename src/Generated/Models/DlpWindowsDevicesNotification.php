<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DlpWindowsDevicesNotification extends DlpNotification implements Parsable 
{
    /**
     * @var string|null $contentName The contentName property
    */
    private ?string $contentName = null;
    
    /**
     * @var string|null $lastModfiedBy The lastModfiedBy property
    */
    private ?string $lastModfiedBy = null;
    
    /**
     * Instantiates a new DlpWindowsDevicesNotification and sets the default values.
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
        return $this->contentName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'contentName' => function (ParseNode $n) use ($o) { $o->setContentName($n->getStringValue()); },
            'lastModfiedBy' => function (ParseNode $n) use ($o) { $o->setLastModfiedBy($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastModfiedBy property value. The lastModfiedBy property
     * @return string|null
    */
    public function getLastModfiedBy(): ?string {
        return $this->lastModfiedBy;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('contentName', $this->contentName);
        $writer->writeStringValue('lastModfiedBy', $this->lastModfiedBy);
    }

    /**
     * Sets the contentName property value. The contentName property
     *  @param string|null $value Value to set for the contentName property.
    */
    public function setContentName(?string $value ): void {
        $this->contentName = $value;
    }

    /**
     * Sets the lastModfiedBy property value. The lastModfiedBy property
     *  @param string|null $value Value to set for the lastModfiedBy property.
    */
    public function setLastModfiedBy(?string $value ): void {
        $this->lastModfiedBy = $value;
    }

}
