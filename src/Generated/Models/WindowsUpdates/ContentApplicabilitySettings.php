<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ContentApplicabilitySettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ContentApplicabilitySettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ContentApplicabilitySettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ContentApplicabilitySettings {
        return new ContentApplicabilitySettings();
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
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'offerWhileRecommendedBy' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setOfferWhileRecommendedBy($val);
            },
            'safeguard' => fn(ParseNode $n) => $o->setSafeguard($n->getObjectValue([SafeguardSettings::class, 'createFromDiscriminatorValue'])),
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
     * Gets the offerWhileRecommendedBy property value. Offer if the update is recommended by a vendor in the list, otherwise withhold the offer.
     * @return array<string>|null
    */
    public function getOfferWhileRecommendedBy(): ?array {
        $val = $this->getBackingStore()->get('offerWhileRecommendedBy');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'offerWhileRecommendedBy'");
    }

    /**
     * Gets the safeguard property value. Settings for governing safeguard-holds on offering content.
     * @return SafeguardSettings|null
    */
    public function getSafeguard(): ?SafeguardSettings {
        $val = $this->getBackingStore()->get('safeguard');
        if (is_null($val) || $val instanceof SafeguardSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'safeguard'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfPrimitiveValues('offerWhileRecommendedBy', $this->getOfferWhileRecommendedBy());
        $writer->writeObjectValue('safeguard', $this->getSafeguard());
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
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the offerWhileRecommendedBy property value. Offer if the update is recommended by a vendor in the list, otherwise withhold the offer.
     * @param array<string>|null $value Value to set for the offerWhileRecommendedBy property.
    */
    public function setOfferWhileRecommendedBy(?array $value): void {
        $this->getBackingStore()->set('offerWhileRecommendedBy', $value);
    }

    /**
     * Sets the safeguard property value. Settings for governing safeguard-holds on offering content.
     * @param SafeguardSettings|null $value Value to set for the safeguard property.
    */
    public function setSafeguard(?SafeguardSettings $value): void {
        $this->getBackingStore()->set('safeguard', $value);
    }

}
