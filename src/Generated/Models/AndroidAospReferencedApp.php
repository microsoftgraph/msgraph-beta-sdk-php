<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * An app that references an Android application on an AOSP device by its package name.
*/
class AndroidAospReferencedApp extends MobileApp implements Parsable 
{
    /**
     * Instantiates a new AndroidAospReferencedApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidAospReferencedApp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidAospReferencedApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidAospReferencedApp {
        return new AndroidAospReferencedApp();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'packageId' => fn(ParseNode $n) => $o->setPackageId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the packageId property value. The package name of the app as it exists on the AOSP device. This property is immutable after creation.
     * @return string|null
    */
    public function getPackageId(): ?string {
        $val = $this->getBackingStore()->get('packageId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'packageId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('packageId', $this->getPackageId());
    }

    /**
     * Sets the packageId property value. The package name of the app as it exists on the AOSP device. This property is immutable after creation.
     * @param string|null $value Value to set for the packageId property.
    */
    public function setPackageId(?string $value): void {
        $this->getBackingStore()->set('packageId', $value);
    }

}
