<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamsAppIcon extends Entity implements Parsable 
{
    /**
     * Instantiates a new TeamsAppIcon and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamsAppIcon
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamsAppIcon {
        return new TeamsAppIcon();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'hostedContent' => fn(ParseNode $n) => $o->setHostedContent($n->getObjectValue([TeamworkHostedContent::class, 'createFromDiscriminatorValue'])),
            'webUrl' => fn(ParseNode $n) => $o->setWebUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the hostedContent property value. The contents of the app icon if the icon is hosted within the Teams infrastructure.
     * @return TeamworkHostedContent|null
    */
    public function getHostedContent(): ?TeamworkHostedContent {
        $val = $this->getBackingStore()->get('hostedContent');
        if (is_null($val) || $val instanceof TeamworkHostedContent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hostedContent'");
    }

    /**
     * Gets the webUrl property value. The web URL that can be used for downloading the image.
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
        $writer->writeObjectValue('hostedContent', $this->getHostedContent());
        $writer->writeStringValue('webUrl', $this->getWebUrl());
    }

    /**
     * Sets the hostedContent property value. The contents of the app icon if the icon is hosted within the Teams infrastructure.
     * @param TeamworkHostedContent|null $value Value to set for the hostedContent property.
    */
    public function setHostedContent(?TeamworkHostedContent $value): void {
        $this->getBackingStore()->set('hostedContent', $value);
    }

    /**
     * Sets the webUrl property value. The web URL that can be used for downloading the image.
     * @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value): void {
        $this->getBackingStore()->set('webUrl', $value);
    }

}
