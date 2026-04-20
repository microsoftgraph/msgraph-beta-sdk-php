<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AzureADPremiumP1FeatureUtilizations implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AzureADPremiumP1FeatureUtilizations and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AzureADPremiumP1FeatureUtilizations
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AzureADPremiumP1FeatureUtilizations {
        return new AzureADPremiumP1FeatureUtilizations();
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
     * Gets the conditionalAccess property value. The conditionalAccess property
     * @return AzureADPremiumFeatureUtilization|null
    */
    public function getConditionalAccess(): ?AzureADPremiumFeatureUtilization {
        $val = $this->getBackingStore()->get('conditionalAccess');
        if (is_null($val) || $val instanceof AzureADPremiumFeatureUtilization) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conditionalAccess'");
    }

    /**
     * Gets the conditionalAccessGuestUsers property value. The conditionalAccessGuestUsers property
     * @return AzureADPremiumFeatureUtilization|null
    */
    public function getConditionalAccessGuestUsers(): ?AzureADPremiumFeatureUtilization {
        $val = $this->getBackingStore()->get('conditionalAccessGuestUsers');
        if (is_null($val) || $val instanceof AzureADPremiumFeatureUtilization) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conditionalAccessGuestUsers'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'conditionalAccess' => fn(ParseNode $n) => $o->setConditionalAccess($n->getObjectValue([AzureADPremiumFeatureUtilization::class, 'createFromDiscriminatorValue'])),
            'conditionalAccessGuestUsers' => fn(ParseNode $n) => $o->setConditionalAccessGuestUsers($n->getObjectValue([AzureADPremiumFeatureUtilization::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
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
        $writer->writeObjectValue('conditionalAccess', $this->getConditionalAccess());
        $writer->writeObjectValue('conditionalAccessGuestUsers', $this->getConditionalAccessGuestUsers());
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
     * Sets the conditionalAccess property value. The conditionalAccess property
     * @param AzureADPremiumFeatureUtilization|null $value Value to set for the conditionalAccess property.
    */
    public function setConditionalAccess(?AzureADPremiumFeatureUtilization $value): void {
        $this->getBackingStore()->set('conditionalAccess', $value);
    }

    /**
     * Sets the conditionalAccessGuestUsers property value. The conditionalAccessGuestUsers property
     * @param AzureADPremiumFeatureUtilization|null $value Value to set for the conditionalAccessGuestUsers property.
    */
    public function setConditionalAccessGuestUsers(?AzureADPremiumFeatureUtilization $value): void {
        $this->getBackingStore()->set('conditionalAccessGuestUsers', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
