<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnTokenIssuanceStartCustomExtensionHandler extends OnTokenIssuanceStartHandler implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new onTokenIssuanceStartCustomExtensionHandler and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.onTokenIssuanceStartCustomExtensionHandler');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnTokenIssuanceStartCustomExtensionHandler
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnTokenIssuanceStartCustomExtensionHandler {
        return new OnTokenIssuanceStartCustomExtensionHandler();
    }

    /**
     * Gets the customExtension property value. The customExtension property
     * @return OnTokenIssuanceStartCustomExtension|null
    */
    public function getCustomExtension(): ?OnTokenIssuanceStartCustomExtension {
        $val = $this->getBackingStore()->get('customExtension');
        if (is_null($val) || $val instanceof OnTokenIssuanceStartCustomExtension) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customExtension'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'customExtension' => fn(ParseNode $n) => $o->setCustomExtension($n->getObjectValue([OnTokenIssuanceStartCustomExtension::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('customExtension', $this->getCustomExtension());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the customExtension property value. The customExtension property
     * @param OnTokenIssuanceStartCustomExtension|null $value Value to set for the customExtension property.
    */
    public function setCustomExtension(?OnTokenIssuanceStartCustomExtension $value): void {
        $this->getBackingStore()->set('customExtension', $value);
    }

}
