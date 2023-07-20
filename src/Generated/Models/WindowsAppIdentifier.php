<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The identifier for a Windows app.
*/
class WindowsAppIdentifier extends MobileAppIdentifier implements Parsable 
{
    /**
     * Instantiates a new windowsAppIdentifier and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsAppIdentifier');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsAppIdentifier
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsAppIdentifier {
        return new WindowsAppIdentifier();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'windowsAppId' => fn(ParseNode $n) => $o->setWindowsAppId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the windowsAppId property value. The identifier for an app, as specified in the app store.
     * @return string|null
    */
    public function getWindowsAppId(): ?string {
        $val = $this->getBackingStore()->get('windowsAppId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsAppId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('windowsAppId', $this->getWindowsAppId());
    }

    /**
     * Sets the windowsAppId property value. The identifier for an app, as specified in the app store.
     * @param string|null $value Value to set for the windowsAppId property.
    */
    public function setWindowsAppId(?string $value): void {
        $this->getBackingStore()->set('windowsAppId', $value);
    }

}
