<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcBulkRemoteActionResult implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $failedDeviceIds A list of all the Intune managed device IDs that completed the bulk action with a failure.
    */
    private ?array $failedDeviceIds = null;
    
    /**
     * @var array<string>|null $notFoundDeviceIds A list of all the Intune managed device IDs that were not found when the bulk action was attempted.
    */
    private ?array $notFoundDeviceIds = null;
    
    /**
     * @var array<string>|null $notSupportedDeviceIds A list of all the Intune managed device IDs that were identified as unsupported for the bulk action.
    */
    private ?array $notSupportedDeviceIds = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var array<string>|null $successfulDeviceIds A list of all the Intune managed device IDs that completed the bulk action successfully.
    */
    private ?array $successfulDeviceIds = null;
    
    /**
     * Instantiates a new cloudPcBulkRemoteActionResult and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.cloudPcBulkRemoteActionResult');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcBulkRemoteActionResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcBulkRemoteActionResult {
        return new CloudPcBulkRemoteActionResult();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the failedDeviceIds property value. A list of all the Intune managed device IDs that completed the bulk action with a failure.
     * @return array<string>|null
    */
    public function getFailedDeviceIds(): ?array {
        return $this->failedDeviceIds;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'failedDeviceIds' => function (ParseNode $n) use ($o) { $o->setFailedDeviceIds($n->getCollectionOfPrimitiveValues()); },
            'notFoundDeviceIds' => function (ParseNode $n) use ($o) { $o->setNotFoundDeviceIds($n->getCollectionOfPrimitiveValues()); },
            'notSupportedDeviceIds' => function (ParseNode $n) use ($o) { $o->setNotSupportedDeviceIds($n->getCollectionOfPrimitiveValues()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'successfulDeviceIds' => function (ParseNode $n) use ($o) { $o->setSuccessfulDeviceIds($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the notFoundDeviceIds property value. A list of all the Intune managed device IDs that were not found when the bulk action was attempted.
     * @return array<string>|null
    */
    public function getNotFoundDeviceIds(): ?array {
        return $this->notFoundDeviceIds;
    }

    /**
     * Gets the notSupportedDeviceIds property value. A list of all the Intune managed device IDs that were identified as unsupported for the bulk action.
     * @return array<string>|null
    */
    public function getNotSupportedDeviceIds(): ?array {
        return $this->notSupportedDeviceIds;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the successfulDeviceIds property value. A list of all the Intune managed device IDs that completed the bulk action successfully.
     * @return array<string>|null
    */
    public function getSuccessfulDeviceIds(): ?array {
        return $this->successfulDeviceIds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('failedDeviceIds', $this->failedDeviceIds);
        $writer->writeCollectionOfPrimitiveValues('notFoundDeviceIds', $this->notFoundDeviceIds);
        $writer->writeCollectionOfPrimitiveValues('notSupportedDeviceIds', $this->notSupportedDeviceIds);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeCollectionOfPrimitiveValues('successfulDeviceIds', $this->successfulDeviceIds);
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
     * Sets the failedDeviceIds property value. A list of all the Intune managed device IDs that completed the bulk action with a failure.
     *  @param array<string>|null $value Value to set for the failedDeviceIds property.
    */
    public function setFailedDeviceIds(?array $value ): void {
        $this->failedDeviceIds = $value;
    }

    /**
     * Sets the notFoundDeviceIds property value. A list of all the Intune managed device IDs that were not found when the bulk action was attempted.
     *  @param array<string>|null $value Value to set for the notFoundDeviceIds property.
    */
    public function setNotFoundDeviceIds(?array $value ): void {
        $this->notFoundDeviceIds = $value;
    }

    /**
     * Sets the notSupportedDeviceIds property value. A list of all the Intune managed device IDs that were identified as unsupported for the bulk action.
     *  @param array<string>|null $value Value to set for the notSupportedDeviceIds property.
    */
    public function setNotSupportedDeviceIds(?array $value ): void {
        $this->notSupportedDeviceIds = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the successfulDeviceIds property value. A list of all the Intune managed device IDs that completed the bulk action successfully.
     *  @param array<string>|null $value Value to set for the successfulDeviceIds property.
    */
    public function setSuccessfulDeviceIds(?array $value ): void {
        $this->successfulDeviceIds = $value;
    }

}
