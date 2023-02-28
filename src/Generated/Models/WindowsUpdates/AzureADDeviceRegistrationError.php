<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AzureADDeviceRegistrationError extends UpdatableAssetError implements Parsable 
{
    /**
     * Instantiates a new AzureADDeviceRegistrationError and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsUpdates.azureADDeviceRegistrationError');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AzureADDeviceRegistrationError
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AzureADDeviceRegistrationError {
        return new AzureADDeviceRegistrationError();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'reason' => fn(ParseNode $n) => $o->setReason($n->getEnumValue(AzureADDeviceRegistrationErrorReason::class)),
        ]);
    }

    /**
     * Gets the reason property value. The reason property
     * @return AzureADDeviceRegistrationErrorReason|null
    */
    public function getReason(): ?AzureADDeviceRegistrationErrorReason {
        return $this->getBackingStore()->get('reason');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('reason', $this->getReason());
    }

    /**
     * Sets the reason property value. The reason property
     * @param AzureADDeviceRegistrationErrorReason|null $value Value to set for the reason property.
    */
    public function setReason(?AzureADDeviceRegistrationErrorReason $value): void {
        $this->getBackingStore()->set('reason', $value);
    }

}
