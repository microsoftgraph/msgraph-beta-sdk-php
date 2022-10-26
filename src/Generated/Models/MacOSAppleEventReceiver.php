<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacOSAppleEventReceiver implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $allowed Allow or block this app from receiving Apple events.
    */
    private ?bool $allowed = null;
    
    /**
     * @var string|null $codeRequirement Code requirement for the app or binary that receives the Apple Event.
    */
    private ?string $codeRequirement = null;
    
    /**
     * @var string|null $identifier Bundle ID of the app or file path of the process or executable that receives the Apple Event.
    */
    private ?string $identifier = null;
    
    /**
     * @var MacOSProcessIdentifierType|null $identifierType Process identifier types for MacOS Privacy Preferences
    */
    private ?MacOSProcessIdentifierType $identifierType = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new macOSAppleEventReceiver and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.macOSAppleEventReceiver');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSAppleEventReceiver
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSAppleEventReceiver {
        return new MacOSAppleEventReceiver();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowed property value. Allow or block this app from receiving Apple events.
     * @return bool|null
    */
    public function getAllowed(): ?bool {
        return $this->allowed;
    }

    /**
     * Gets the codeRequirement property value. Code requirement for the app or binary that receives the Apple Event.
     * @return string|null
    */
    public function getCodeRequirement(): ?string {
        return $this->codeRequirement;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowed' => fn(ParseNode $n) => $o->setAllowed($n->getBooleanValue()),
            'codeRequirement' => fn(ParseNode $n) => $o->setCodeRequirement($n->getStringValue()),
            'identifier' => fn(ParseNode $n) => $o->setIdentifier($n->getStringValue()),
            'identifierType' => fn(ParseNode $n) => $o->setIdentifierType($n->getEnumValue(MacOSProcessIdentifierType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the identifier property value. Bundle ID of the app or file path of the process or executable that receives the Apple Event.
     * @return string|null
    */
    public function getIdentifier(): ?string {
        return $this->identifier;
    }

    /**
     * Gets the identifierType property value. Process identifier types for MacOS Privacy Preferences
     * @return MacOSProcessIdentifierType|null
    */
    public function getIdentifierType(): ?MacOSProcessIdentifierType {
        return $this->identifierType;
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
        $writer->writeBooleanValue('allowed', $this->allowed);
        $writer->writeStringValue('codeRequirement', $this->codeRequirement);
        $writer->writeStringValue('identifier', $this->identifier);
        $writer->writeEnumValue('identifierType', $this->identifierType);
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
     * Sets the allowed property value. Allow or block this app from receiving Apple events.
     *  @param bool|null $value Value to set for the allowed property.
    */
    public function setAllowed(?bool $value ): void {
        $this->allowed = $value;
    }

    /**
     * Sets the codeRequirement property value. Code requirement for the app or binary that receives the Apple Event.
     *  @param string|null $value Value to set for the codeRequirement property.
    */
    public function setCodeRequirement(?string $value ): void {
        $this->codeRequirement = $value;
    }

    /**
     * Sets the identifier property value. Bundle ID of the app or file path of the process or executable that receives the Apple Event.
     *  @param string|null $value Value to set for the identifier property.
    */
    public function setIdentifier(?string $value ): void {
        $this->identifier = $value;
    }

    /**
     * Sets the identifierType property value. Process identifier types for MacOS Privacy Preferences
     *  @param MacOSProcessIdentifierType|null $value Value to set for the identifierType property.
    */
    public function setIdentifierType(?MacOSProcessIdentifierType $value ): void {
        $this->identifierType = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
