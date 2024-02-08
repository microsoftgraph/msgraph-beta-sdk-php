<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Contains properties and inherited properties for macOS web apps.
*/
class MacOSWebClip extends MobileApp implements Parsable 
{
    /**
     * Instantiates a new MacOSWebClip and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.macOSWebClip');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSWebClip
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSWebClip {
        return new MacOSWebClip();
    }

    /**
     * Gets the appUrl property value. The web app URL starting with http:// or https://, such as https://learn.microsoft.com/mem/.
     * @return string|null
    */
    public function getAppUrl(): ?string {
        $val = $this->getBackingStore()->get('appUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appUrl'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appUrl' => fn(ParseNode $n) => $o->setAppUrl($n->getStringValue()),
            'fullScreenEnabled' => fn(ParseNode $n) => $o->setFullScreenEnabled($n->getBooleanValue()),
            'preComposedIconEnabled' => fn(ParseNode $n) => $o->setPreComposedIconEnabled($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the fullScreenEnabled property value. Whether or not to open the web clip as a full-screen web app. Defaults to false. If TRUE, opens the web clip as a full-screen web app. If FALSE, the web clip opens inside of another app.
     * @return bool|null
    */
    public function getFullScreenEnabled(): ?bool {
        $val = $this->getBackingStore()->get('fullScreenEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fullScreenEnabled'");
    }

    /**
     * Gets the preComposedIconEnabled property value. Whether or not the icon for the app is precomosed. Defaults to false. If TRUE, prevents SpringBoard from adding 'shine' to the icon. If FALSE, SpringBoard can add 'shine'.
     * @return bool|null
    */
    public function getPreComposedIconEnabled(): ?bool {
        $val = $this->getBackingStore()->get('preComposedIconEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'preComposedIconEnabled'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appUrl', $this->getAppUrl());
        $writer->writeBooleanValue('fullScreenEnabled', $this->getFullScreenEnabled());
        $writer->writeBooleanValue('preComposedIconEnabled', $this->getPreComposedIconEnabled());
    }

    /**
     * Sets the appUrl property value. The web app URL starting with http:// or https://, such as https://learn.microsoft.com/mem/.
     * @param string|null $value Value to set for the appUrl property.
    */
    public function setAppUrl(?string $value): void {
        $this->getBackingStore()->set('appUrl', $value);
    }

    /**
     * Sets the fullScreenEnabled property value. Whether or not to open the web clip as a full-screen web app. Defaults to false. If TRUE, opens the web clip as a full-screen web app. If FALSE, the web clip opens inside of another app.
     * @param bool|null $value Value to set for the fullScreenEnabled property.
    */
    public function setFullScreenEnabled(?bool $value): void {
        $this->getBackingStore()->set('fullScreenEnabled', $value);
    }

    /**
     * Sets the preComposedIconEnabled property value. Whether or not the icon for the app is precomosed. Defaults to false. If TRUE, prevents SpringBoard from adding 'shine' to the icon. If FALSE, SpringBoard can add 'shine'.
     * @param bool|null $value Value to set for the preComposedIconEnabled property.
    */
    public function setPreComposedIconEnabled(?bool $value): void {
        $this->getBackingStore()->set('preComposedIconEnabled', $value);
    }

}
