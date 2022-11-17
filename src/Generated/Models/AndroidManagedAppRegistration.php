<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidManagedAppRegistration extends ManagedAppRegistration implements Parsable 
{
    /**
     * Instantiates a new AndroidManagedAppRegistration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidManagedAppRegistration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidManagedAppRegistration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidManagedAppRegistration {
        return new AndroidManagedAppRegistration();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'patchVersion' => fn(ParseNode $n) => $o->setPatchVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the patchVersion property value. The patch version for the current android app registration
     * @return string|null
    */
    public function getPatchVersion(): ?string {
        return $this->getBackingStore()->get('patchVersion');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('patchVersion', $this->getPatchVersion());
    }

    /**
     * Sets the patchVersion property value. The patch version for the current android app registration
     *  @param string|null $value Value to set for the patchVersion property.
    */
    public function setPatchVersion(?string $value): void {
        $this->getBackingStore()->set('patchVersion', $value);
    }

}
