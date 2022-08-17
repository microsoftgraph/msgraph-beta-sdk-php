<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RequestSignatureVerification implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var WeakAlgorithms|null $allowedWeakAlgorithms The allowedWeakAlgorithms property
    */
    private ?WeakAlgorithms $allowedWeakAlgorithms = null;
    
    /**
     * @var bool|null $isSignedRequestRequired The isSignedRequestRequired property
    */
    private ?bool $isSignedRequestRequired = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new requestSignatureVerification and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.requestSignatureVerification');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RequestSignatureVerification
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RequestSignatureVerification {
        return new RequestSignatureVerification();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowedWeakAlgorithms property value. The allowedWeakAlgorithms property
     * @return WeakAlgorithms|null
    */
    public function getAllowedWeakAlgorithms(): ?WeakAlgorithms {
        return $this->allowedWeakAlgorithms;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowedWeakAlgorithms' => function (ParseNode $n) use ($o) { $o->setAllowedWeakAlgorithms($n->getEnumValue(WeakAlgorithms::class)); },
            'isSignedRequestRequired' => function (ParseNode $n) use ($o) { $o->setIsSignedRequestRequired($n->getBooleanValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the isSignedRequestRequired property value. The isSignedRequestRequired property
     * @return bool|null
    */
    public function getIsSignedRequestRequired(): ?bool {
        return $this->isSignedRequestRequired;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('allowedWeakAlgorithms', $this->allowedWeakAlgorithms);
        $writer->writeBooleanValue('isSignedRequestRequired', $this->isSignedRequestRequired);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the allowedWeakAlgorithms property value. The allowedWeakAlgorithms property
     *  @param WeakAlgorithms|null $value Value to set for the allowedWeakAlgorithms property.
    */
    public function setAllowedWeakAlgorithms(?WeakAlgorithms $value ): void {
        $this->allowedWeakAlgorithms = $value;
    }

    /**
     * Sets the isSignedRequestRequired property value. The isSignedRequestRequired property
     *  @param bool|null $value Value to set for the isSignedRequestRequired property.
    */
    public function setIsSignedRequestRequired(?bool $value ): void {
        $this->isSignedRequestRequired = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
