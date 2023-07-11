<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * An application on the Android Device Owner Managed Home Screen
*/
class AndroidDeviceOwnerKioskModeApp extends AndroidDeviceOwnerKioskModeFolderItem implements Parsable 
{
    /**
     * Instantiates a new androidDeviceOwnerKioskModeApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidDeviceOwnerKioskModeApp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidDeviceOwnerKioskModeApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidDeviceOwnerKioskModeApp {
        return new AndroidDeviceOwnerKioskModeApp();
    }

    /**
     * Gets the className property value. Class name of application
     * @return string|null
    */
    public function getClassName(): ?string {
        $val = $this->getBackingStore()->get('className');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'className'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'className' => fn(ParseNode $n) => $o->setClassName($n->getStringValue()),
            'package' => fn(ParseNode $n) => $o->setPackage($n->getStringValue()),
        ]);
    }

    /**
     * Gets the package property value. Package name of application
     * @return string|null
    */
    public function getPackage(): ?string {
        $val = $this->getBackingStore()->get('package');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'package'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('className', $this->getClassName());
        $writer->writeStringValue('package', $this->getPackage());
    }

    /**
     * Sets the className property value. Class name of application
     * @param string|null $value Value to set for the className property.
    */
    public function setClassName(?string $value): void {
        $this->getBackingStore()->set('className', $value);
    }

    /**
     * Sets the package property value. Package name of application
     * @param string|null $value Value to set for the package property.
    */
    public function setPackage(?string $value): void {
        $this->getBackingStore()->set('package', $value);
    }

}
