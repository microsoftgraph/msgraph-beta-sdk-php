<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedAppDiagnosticStatus implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $mitigationInstruction Instruction on how to mitigate a failed validation
    */
    private ?string $mitigationInstruction = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $state The state of the operation
    */
    private ?string $state = null;
    
    /**
     * @var string|null $validationName The validation friendly name
    */
    private ?string $validationName = null;
    
    /**
     * Instantiates a new managedAppDiagnosticStatus and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.managedAppDiagnosticStatus');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedAppDiagnosticStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedAppDiagnosticStatus {
        return new ManagedAppDiagnosticStatus();
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
        $o = $this;
        return  [
            'mitigationInstruction' => function (ParseNode $n) use ($o) { $o->setMitigationInstruction($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getStringValue()); },
            'validationName' => function (ParseNode $n) use ($o) { $o->setValidationName($n->getStringValue()); },
        ];
    }

    /**
     * Gets the mitigationInstruction property value. Instruction on how to mitigate a failed validation
     * @return string|null
    */
    public function getMitigationInstruction(): ?string {
        return $this->mitigationInstruction;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the state property value. The state of the operation
     * @return string|null
    */
    public function getState(): ?string {
        return $this->state;
    }

    /**
     * Gets the validationName property value. The validation friendly name
     * @return string|null
    */
    public function getValidationName(): ?string {
        return $this->validationName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('mitigationInstruction', $this->mitigationInstruction);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('state', $this->state);
        $writer->writeStringValue('validationName', $this->validationName);
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
     * Sets the mitigationInstruction property value. Instruction on how to mitigate a failed validation
     *  @param string|null $value Value to set for the mitigationInstruction property.
    */
    public function setMitigationInstruction(?string $value ): void {
        $this->mitigationInstruction = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the state property value. The state of the operation
     *  @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value ): void {
        $this->state = $value;
    }

    /**
     * Sets the validationName property value. The validation friendly name
     *  @param string|null $value Value to set for the validationName property.
    */
    public function setValidationName(?string $value ): void {
        $this->validationName = $value;
    }

}
