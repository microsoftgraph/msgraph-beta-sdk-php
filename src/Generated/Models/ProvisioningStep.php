<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProvisioningStep implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $description Summary of what occurred during the step.
    */
    private ?string $description = null;
    
    /**
     * @var DetailsInfo|null $details Details of what occurred during the step.
    */
    private ?DetailsInfo $details = null;
    
    /**
     * @var string|null $name Name of the step.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var ProvisioningStepType|null $provisioningStepType Type of step. Possible values are: import, scoping, matching, processing, referenceResolution, export, unknownFutureValue.
    */
    private ?ProvisioningStepType $provisioningStepType = null;
    
    /**
     * @var ProvisioningResult|null $status Status of the step. Possible values are: success, warning,  failure, skipped, unknownFutureValue.
    */
    private ?ProvisioningResult $status = null;
    
    /**
     * Instantiates a new provisioningStep and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.provisioningStep');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProvisioningStep
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProvisioningStep {
        return new ProvisioningStep();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the description property value. Summary of what occurred during the step.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the details property value. Details of what occurred during the step.
     * @return DetailsInfo|null
    */
    public function getDetails(): ?DetailsInfo {
        return $this->details;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'details' => function (ParseNode $n) use ($o) { $o->setDetails($n->getObjectValue(array(DetailsInfo::class, 'createFromDiscriminatorValue'))); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'provisioningStepType' => function (ParseNode $n) use ($o) { $o->setProvisioningStepType($n->getEnumValue(ProvisioningStepType::class)); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(ProvisioningResult::class)); },
        ];
    }

    /**
     * Gets the name property value. Name of the step.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the provisioningStepType property value. Type of step. Possible values are: import, scoping, matching, processing, referenceResolution, export, unknownFutureValue.
     * @return ProvisioningStepType|null
    */
    public function getProvisioningStepType(): ?ProvisioningStepType {
        return $this->provisioningStepType;
    }

    /**
     * Gets the status property value. Status of the step. Possible values are: success, warning,  failure, skipped, unknownFutureValue.
     * @return ProvisioningResult|null
    */
    public function getStatus(): ?ProvisioningResult {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('description', $this->description);
        $writer->writeObjectValue('details', $this->details);
        $writer->writeStringValue('name', $this->name);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('provisioningStepType', $this->provisioningStepType);
        $writer->writeEnumValue('status', $this->status);
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
     * Sets the description property value. Summary of what occurred during the step.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the details property value. Details of what occurred during the step.
     *  @param DetailsInfo|null $value Value to set for the details property.
    */
    public function setDetails(?DetailsInfo $value ): void {
        $this->details = $value;
    }

    /**
     * Sets the name property value. Name of the step.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the provisioningStepType property value. Type of step. Possible values are: import, scoping, matching, processing, referenceResolution, export, unknownFutureValue.
     *  @param ProvisioningStepType|null $value Value to set for the provisioningStepType property.
    */
    public function setProvisioningStepType(?ProvisioningStepType $value ): void {
        $this->provisioningStepType = $value;
    }

    /**
     * Sets the status property value. Status of the step. Possible values are: success, warning,  failure, skipped, unknownFutureValue.
     *  @param ProvisioningResult|null $value Value to set for the status property.
    */
    public function setStatus(?ProvisioningResult $value ): void {
        $this->status = $value;
    }

}
