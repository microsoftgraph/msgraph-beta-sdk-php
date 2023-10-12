<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * The embedded SIM activation code as provided by the mobile operator.
*/
class EmbeddedSIMActivationCode implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new embeddedSIMActivationCode and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EmbeddedSIMActivationCode
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EmbeddedSIMActivationCode {
        return new EmbeddedSIMActivationCode();
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
            'integratedCircuitCardIdentifier' => fn(ParseNode $n) => $o->setIntegratedCircuitCardIdentifier($n->getStringValue()),
            'matchingIdentifier' => fn(ParseNode $n) => $o->setMatchingIdentifier($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'smdpPlusServerAddress' => fn(ParseNode $n) => $o->setSmdpPlusServerAddress($n->getStringValue()),
        ];
    }

    /**
     * Gets the integratedCircuitCardIdentifier property value. The Integrated Circuit Card Identifier (ICCID) for this embedded SIM activation code as provided by the mobile operator.
     * @return string|null
    */
    public function getIntegratedCircuitCardIdentifier(): ?string {
        $val = $this->getBackingStore()->get('integratedCircuitCardIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'integratedCircuitCardIdentifier'");
    }

    /**
     * Gets the matchingIdentifier property value. The MatchingIdentifier (MatchingID) as specified in the GSMA Association SGP.22 RSP Technical Specification section 4.1.
     * @return string|null
    */
    public function getMatchingIdentifier(): ?string {
        $val = $this->getBackingStore()->get('matchingIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'matchingIdentifier'");
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
     * Gets the smdpPlusServerAddress property value. The fully qualified domain name of the SM-DP+ server as specified in the GSM Association SPG .22 RSP Technical Specification.
     * @return string|null
    */
    public function getSmdpPlusServerAddress(): ?string {
        $val = $this->getBackingStore()->get('smdpPlusServerAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'smdpPlusServerAddress'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('integratedCircuitCardIdentifier', $this->getIntegratedCircuitCardIdentifier());
        $writer->writeStringValue('matchingIdentifier', $this->getMatchingIdentifier());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('smdpPlusServerAddress', $this->getSmdpPlusServerAddress());
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
     * Sets the integratedCircuitCardIdentifier property value. The Integrated Circuit Card Identifier (ICCID) for this embedded SIM activation code as provided by the mobile operator.
     * @param string|null $value Value to set for the integratedCircuitCardIdentifier property.
    */
    public function setIntegratedCircuitCardIdentifier(?string $value): void {
        $this->getBackingStore()->set('integratedCircuitCardIdentifier', $value);
    }

    /**
     * Sets the matchingIdentifier property value. The MatchingIdentifier (MatchingID) as specified in the GSMA Association SGP.22 RSP Technical Specification section 4.1.
     * @param string|null $value Value to set for the matchingIdentifier property.
    */
    public function setMatchingIdentifier(?string $value): void {
        $this->getBackingStore()->set('matchingIdentifier', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the smdpPlusServerAddress property value. The fully qualified domain name of the SM-DP+ server as specified in the GSM Association SPG .22 RSP Technical Specification.
     * @param string|null $value Value to set for the smdpPlusServerAddress property.
    */
    public function setSmdpPlusServerAddress(?string $value): void {
        $this->getBackingStore()->set('smdpPlusServerAddress', $value);
    }

}
