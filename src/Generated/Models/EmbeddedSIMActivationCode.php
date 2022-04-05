<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EmbeddedSIMActivationCode implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $integratedCircuitCardIdentifier The Integrated Circuit Card Identifier (ICCID) for this embedded SIM activation code as provided by the mobile operator. */
    private ?string $integratedCircuitCardIdentifier = null;
    
    /** @var string|null $matchingIdentifier The MatchingIdentifier (MatchingID) as specified in the GSMA Association SGP.22 RSP Technical Specification section 4.1. */
    private ?string $matchingIdentifier = null;
    
    /** @var string|null $smdpPlusServerAddress The fully qualified domain name of the SM-DP+ server as specified in the GSM Association SPG .22 RSP Technical Specification. */
    private ?string $smdpPlusServerAddress = null;
    
    /**
     * Instantiates a new embeddedSIMActivationCode and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EmbeddedSIMActivationCode
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): EmbeddedSIMActivationCode {
        return new EmbeddedSIMActivationCode();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'integratedCircuitCardIdentifier' => function (self $o, ParseNode $n) { $o->setIntegratedCircuitCardIdentifier($n->getStringValue()); },
            'matchingIdentifier' => function (self $o, ParseNode $n) { $o->setMatchingIdentifier($n->getStringValue()); },
            'smdpPlusServerAddress' => function (self $o, ParseNode $n) { $o->setSmdpPlusServerAddress($n->getStringValue()); },
        ];
    }

    /**
     * Gets the integratedCircuitCardIdentifier property value. The Integrated Circuit Card Identifier (ICCID) for this embedded SIM activation code as provided by the mobile operator.
     * @return string|null
    */
    public function getIntegratedCircuitCardIdentifier(): ?string {
        return $this->integratedCircuitCardIdentifier;
    }

    /**
     * Gets the matchingIdentifier property value. The MatchingIdentifier (MatchingID) as specified in the GSMA Association SGP.22 RSP Technical Specification section 4.1.
     * @return string|null
    */
    public function getMatchingIdentifier(): ?string {
        return $this->matchingIdentifier;
    }

    /**
     * Gets the smdpPlusServerAddress property value. The fully qualified domain name of the SM-DP+ server as specified in the GSM Association SPG .22 RSP Technical Specification.
     * @return string|null
    */
    public function getSmdpPlusServerAddress(): ?string {
        return $this->smdpPlusServerAddress;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('integratedCircuitCardIdentifier', $this->integratedCircuitCardIdentifier);
        $writer->writeStringValue('matchingIdentifier', $this->matchingIdentifier);
        $writer->writeStringValue('smdpPlusServerAddress', $this->smdpPlusServerAddress);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the integratedCircuitCardIdentifier property value. The Integrated Circuit Card Identifier (ICCID) for this embedded SIM activation code as provided by the mobile operator.
     *  @param string|null $value Value to set for the integratedCircuitCardIdentifier property.
    */
    public function setIntegratedCircuitCardIdentifier(?string $value ): void {
        $this->integratedCircuitCardIdentifier = $value;
    }

    /**
     * Sets the matchingIdentifier property value. The MatchingIdentifier (MatchingID) as specified in the GSMA Association SGP.22 RSP Technical Specification section 4.1.
     *  @param string|null $value Value to set for the matchingIdentifier property.
    */
    public function setMatchingIdentifier(?string $value ): void {
        $this->matchingIdentifier = $value;
    }

    /**
     * Sets the smdpPlusServerAddress property value. The fully qualified domain name of the SM-DP+ server as specified in the GSM Association SPG .22 RSP Technical Specification.
     *  @param string|null $value Value to set for the smdpPlusServerAddress property.
    */
    public function setSmdpPlusServerAddress(?string $value ): void {
        $this->smdpPlusServerAddress = $value;
    }

}
