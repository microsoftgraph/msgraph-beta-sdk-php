<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacAppIdentifier extends MobileAppIdentifier implements Parsable 
{
    /**
     * @var string|null $bundleId The identifier for an app, as specified in the app store.
    */
    private ?string $bundleId = null;
    
    /**
     * Instantiates a new MacAppIdentifier and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.macAppIdentifier');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacAppIdentifier
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacAppIdentifier {
        return new MacAppIdentifier();
    }

    /**
     * Gets the bundleId property value. The identifier for an app, as specified in the app store.
     * @return string|null
    */
    public function getBundleId(): ?string {
        return $this->bundleId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'bundleId' => function (ParseNode $n) use ($o) { $o->setBundleId($n->getStringValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('bundleId', $this->bundleId);
    }

    /**
     * Sets the bundleId property value. The identifier for an app, as specified in the app store.
     *  @param string|null $value Value to set for the bundleId property.
    */
    public function setBundleId(?string $value ): void {
        $this->bundleId = $value;
    }

}
