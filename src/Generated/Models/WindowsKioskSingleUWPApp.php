<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The class used to identify the UWP app info for the kiosk configuration
*/
class WindowsKioskSingleUWPApp extends WindowsKioskAppConfiguration implements Parsable 
{
    /**
     * Instantiates a new WindowsKioskSingleUWPApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsKioskSingleUWPApp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsKioskSingleUWPApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsKioskSingleUWPApp {
        return new WindowsKioskSingleUWPApp();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'uwpApp' => fn(ParseNode $n) => $o->setUwpApp($n->getObjectValue([WindowsKioskUWPApp::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the uwpApp property value. The uwpApp property
     * @return WindowsKioskUWPApp|null
    */
    public function getUwpApp(): ?WindowsKioskUWPApp {
        $val = $this->getBackingStore()->get('uwpApp');
        if (is_null($val) || $val instanceof WindowsKioskUWPApp) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'uwpApp'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('uwpApp', $this->getUwpApp());
    }

    /**
     * Sets the uwpApp property value. The uwpApp property
     * @param WindowsKioskUWPApp|null $value Value to set for the uwpApp property.
    */
    public function setUwpApp(?WindowsKioskUWPApp $value): void {
        $this->getBackingStore()->set('uwpApp', $value);
    }

}
