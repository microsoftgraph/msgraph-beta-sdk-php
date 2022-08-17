<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BulkManagedDeviceActionResult implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $failedDeviceIds Failed devices
    */
    private ?array $failedDeviceIds = null;
    
    /**
     * @var array<string>|null $notFoundDeviceIds Not found devices
    */
    private ?array $notFoundDeviceIds = null;
    
    /**
     * @var array<string>|null $notSupportedDeviceIds Not supported devices
    */
    private ?array $notSupportedDeviceIds = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var array<string>|null $successfulDeviceIds Successful devices
    */
    private ?array $successfulDeviceIds = null;
    
    /**
     * Instantiates a new bulkManagedDeviceActionResult and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.bulkManagedDeviceActionResult');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BulkManagedDeviceActionResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BulkManagedDeviceActionResult {
        return new BulkManagedDeviceActionResult();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the failedDeviceIds property value. Failed devices
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
     * Gets the notFoundDeviceIds property value. Not found devices
     * @return array<string>|null
    */
    public function getNotFoundDeviceIds(): ?array {
        return $this->notFoundDeviceIds;
    }

    /**
     * Gets the notSupportedDeviceIds property value. Not supported devices
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
     * Gets the successfulDeviceIds property value. Successful devices
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
     * Sets the failedDeviceIds property value. Failed devices
     *  @param array<string>|null $value Value to set for the failedDeviceIds property.
    */
    public function setFailedDeviceIds(?array $value ): void {
        $this->failedDeviceIds = $value;
    }

    /**
     * Sets the notFoundDeviceIds property value. Not found devices
     *  @param array<string>|null $value Value to set for the notFoundDeviceIds property.
    */
    public function setNotFoundDeviceIds(?array $value ): void {
        $this->notFoundDeviceIds = $value;
    }

    /**
     * Sets the notSupportedDeviceIds property value. Not supported devices
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
     * Sets the successfulDeviceIds property value. Successful devices
     *  @param array<string>|null $value Value to set for the successfulDeviceIds property.
    */
    public function setSuccessfulDeviceIds(?array $value ): void {
        $this->successfulDeviceIds = $value;
    }

}
