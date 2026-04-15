<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class InternetAccessFeatureUtilizations implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new InternetAccessFeatureUtilizations and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InternetAccessFeatureUtilizations
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InternetAccessFeatureUtilizations {
        return new InternetAccessFeatureUtilizations();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'internetAccess' => fn(ParseNode $n) => $o->setInternetAccess($n->getObjectValue([AzureADPremiumFeatureUtilization::class, 'createFromDiscriminatorValue'])),
            'internetAccessM365' => fn(ParseNode $n) => $o->setInternetAccessM365($n->getObjectValue([AzureADPremiumFeatureUtilization::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the internetAccess property value. The internetAccess property
     * @return AzureADPremiumFeatureUtilization|null
    */
    public function getInternetAccess(): ?AzureADPremiumFeatureUtilization {
        $val = $this->getBackingStore()->get('internetAccess');
        if (is_null($val) || $val instanceof AzureADPremiumFeatureUtilization) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'internetAccess'");
    }

    /**
     * Gets the internetAccessM365 property value. The internetAccessM365 property
     * @return AzureADPremiumFeatureUtilization|null
    */
    public function getInternetAccessM365(): ?AzureADPremiumFeatureUtilization {
        $val = $this->getBackingStore()->get('internetAccessM365');
        if (is_null($val) || $val instanceof AzureADPremiumFeatureUtilization) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'internetAccessM365'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('internetAccess', $this->getInternetAccess());
        $writer->writeObjectValue('internetAccessM365', $this->getInternetAccessM365());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the internetAccess property value. The internetAccess property
     * @param AzureADPremiumFeatureUtilization|null $value Value to set for the internetAccess property.
    */
    public function setInternetAccess(?AzureADPremiumFeatureUtilization $value): void {
        $this->getBackingStore()->set('internetAccess', $value);
    }

    /**
     * Sets the internetAccessM365 property value. The internetAccessM365 property
     * @param AzureADPremiumFeatureUtilization|null $value Value to set for the internetAccessM365 property.
    */
    public function setInternetAccessM365(?AzureADPremiumFeatureUtilization $value): void {
        $this->getBackingStore()->set('internetAccessM365', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
