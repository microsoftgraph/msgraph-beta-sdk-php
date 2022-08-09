<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomExtensionHandlerInstance implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $customExtensionId Identifier of the customAccessPackageWorkflowExtension triggered at this instance.
    */
    private ?string $customExtensionId = null;
    
    /**
     * @var string|null $externalCorrelationId The unique run ID for the logic app.
    */
    private ?string $externalCorrelationId = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var AccessPackageCustomExtensionStage|null $stage Indicates the stage of the request workflow when the access package custom extension runs. The possible values are: assignmentRequestCreated, assignmentRequestApproved, assignmentRequestGranted, assignmentRequestRemoved, assignmentFourteenDaysBeforeExpiration, assignmentOneDayBeforeExpiration, unknownFutureValue.
    */
    private ?AccessPackageCustomExtensionStage $stage = null;
    
    /**
     * @var AccessPackageCustomExtensionHandlerStatus|null $status Status of the request to run the access package custom extension workflow that is associated with the logic app. The possible values are: requestSent, requestReceived, unknownFutureValue.
    */
    private ?AccessPackageCustomExtensionHandlerStatus $status = null;
    
    /**
     * Instantiates a new customExtensionHandlerInstance and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.customExtensionHandlerInstance');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomExtensionHandlerInstance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomExtensionHandlerInstance {
        return new CustomExtensionHandlerInstance();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the customExtensionId property value. Identifier of the customAccessPackageWorkflowExtension triggered at this instance.
     * @return string|null
    */
    public function getCustomExtensionId(): ?string {
        return $this->customExtensionId;
    }

    /**
     * Gets the externalCorrelationId property value. The unique run ID for the logic app.
     * @return string|null
    */
    public function getExternalCorrelationId(): ?string {
        return $this->externalCorrelationId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'customExtensionId' => function (ParseNode $n) use ($o) { $o->setCustomExtensionId($n->getStringValue()); },
            'externalCorrelationId' => function (ParseNode $n) use ($o) { $o->setExternalCorrelationId($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'stage' => function (ParseNode $n) use ($o) { $o->setStage($n->getEnumValue(AccessPackageCustomExtensionStage::class)); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(AccessPackageCustomExtensionHandlerStatus::class)); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the stage property value. Indicates the stage of the request workflow when the access package custom extension runs. The possible values are: assignmentRequestCreated, assignmentRequestApproved, assignmentRequestGranted, assignmentRequestRemoved, assignmentFourteenDaysBeforeExpiration, assignmentOneDayBeforeExpiration, unknownFutureValue.
     * @return AccessPackageCustomExtensionStage|null
    */
    public function getStage(): ?AccessPackageCustomExtensionStage {
        return $this->stage;
    }

    /**
     * Gets the status property value. Status of the request to run the access package custom extension workflow that is associated with the logic app. The possible values are: requestSent, requestReceived, unknownFutureValue.
     * @return AccessPackageCustomExtensionHandlerStatus|null
    */
    public function getStatus(): ?AccessPackageCustomExtensionHandlerStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('customExtensionId', $this->customExtensionId);
        $writer->writeStringValue('externalCorrelationId', $this->externalCorrelationId);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('stage', $this->stage);
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
     * Sets the customExtensionId property value. Identifier of the customAccessPackageWorkflowExtension triggered at this instance.
     *  @param string|null $value Value to set for the customExtensionId property.
    */
    public function setCustomExtensionId(?string $value ): void {
        $this->customExtensionId = $value;
    }

    /**
     * Sets the externalCorrelationId property value. The unique run ID for the logic app.
     *  @param string|null $value Value to set for the externalCorrelationId property.
    */
    public function setExternalCorrelationId(?string $value ): void {
        $this->externalCorrelationId = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the stage property value. Indicates the stage of the request workflow when the access package custom extension runs. The possible values are: assignmentRequestCreated, assignmentRequestApproved, assignmentRequestGranted, assignmentRequestRemoved, assignmentFourteenDaysBeforeExpiration, assignmentOneDayBeforeExpiration, unknownFutureValue.
     *  @param AccessPackageCustomExtensionStage|null $value Value to set for the stage property.
    */
    public function setStage(?AccessPackageCustomExtensionStage $value ): void {
        $this->stage = $value;
    }

    /**
     * Sets the status property value. Status of the request to run the access package custom extension workflow that is associated with the logic app. The possible values are: requestSent, requestReceived, unknownFutureValue.
     *  @param AccessPackageCustomExtensionHandlerStatus|null $value Value to set for the status property.
    */
    public function setStatus(?AccessPackageCustomExtensionHandlerStatus $value ): void {
        $this->status = $value;
    }

}
