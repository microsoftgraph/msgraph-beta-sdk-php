<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The base class for a type of apps
*/
class WindowsKioskDesktopApp extends WindowsKioskAppBase implements Parsable 
{
    /**
     * Instantiates a new WindowsKioskDesktopApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsKioskDesktopApp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsKioskDesktopApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsKioskDesktopApp {
        return new WindowsKioskDesktopApp();
    }

    /**
     * Gets the desktopApplicationId property value. Define the DesktopApplicationID of the app
     * @return string|null
    */
    public function getDesktopApplicationId(): ?string {
        $val = $this->getBackingStore()->get('desktopApplicationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'desktopApplicationId'");
    }

    /**
     * Gets the desktopApplicationLinkPath property value. Define the DesktopApplicationLinkPath of the app
     * @return string|null
    */
    public function getDesktopApplicationLinkPath(): ?string {
        $val = $this->getBackingStore()->get('desktopApplicationLinkPath');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'desktopApplicationLinkPath'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'desktopApplicationId' => fn(ParseNode $n) => $o->setDesktopApplicationId($n->getStringValue()),
            'desktopApplicationLinkPath' => fn(ParseNode $n) => $o->setDesktopApplicationLinkPath($n->getStringValue()),
            'path' => fn(ParseNode $n) => $o->setPath($n->getStringValue()),
        ]);
    }

    /**
     * Gets the path property value. Define the path of a desktop app
     * @return string|null
    */
    public function getPath(): ?string {
        $val = $this->getBackingStore()->get('path');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'path'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('desktopApplicationId', $this->getDesktopApplicationId());
        $writer->writeStringValue('desktopApplicationLinkPath', $this->getDesktopApplicationLinkPath());
        $writer->writeStringValue('path', $this->getPath());
    }

    /**
     * Sets the desktopApplicationId property value. Define the DesktopApplicationID of the app
     * @param string|null $value Value to set for the desktopApplicationId property.
    */
    public function setDesktopApplicationId(?string $value): void {
        $this->getBackingStore()->set('desktopApplicationId', $value);
    }

    /**
     * Sets the desktopApplicationLinkPath property value. Define the DesktopApplicationLinkPath of the app
     * @param string|null $value Value to set for the desktopApplicationLinkPath property.
    */
    public function setDesktopApplicationLinkPath(?string $value): void {
        $this->getBackingStore()->set('desktopApplicationLinkPath', $value);
    }

    /**
     * Sets the path property value. Define the path of a desktop app
     * @param string|null $value Value to set for the path property.
    */
    public function setPath(?string $value): void {
        $this->getBackingStore()->set('path', $value);
    }

}
