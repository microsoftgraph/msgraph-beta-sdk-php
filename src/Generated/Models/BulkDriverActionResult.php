<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BulkDriverActionResult implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<string>|null $failedDriverIds List of driver Ids where the action is failed. */
    private ?array $failedDriverIds = null;
    
    /** @var array<string>|null $notFoundDriverIds List of driver Ids that are not found. */
    private ?array $notFoundDriverIds = null;
    
    /** @var array<string>|null $successfulDriverIds List of driver Ids where the action is successful. */
    private ?array $successfulDriverIds = null;
    
    /**
     * Instantiates a new bulkDriverActionResult and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BulkDriverActionResult
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): BulkDriverActionResult {
        return new BulkDriverActionResult();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the failedDriverIds property value. List of driver Ids where the action is failed.
     * @return array<string>|null
    */
    public function getFailedDriverIds(): ?array {
        return $this->failedDriverIds;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'failedDriverIds' => function (self $o, ParseNode $n) { $o->setFailedDriverIds($n->getCollectionOfPrimitiveValues()); },
            'notFoundDriverIds' => function (self $o, ParseNode $n) { $o->setNotFoundDriverIds($n->getCollectionOfPrimitiveValues()); },
            'successfulDriverIds' => function (self $o, ParseNode $n) { $o->setSuccessfulDriverIds($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the notFoundDriverIds property value. List of driver Ids that are not found.
     * @return array<string>|null
    */
    public function getNotFoundDriverIds(): ?array {
        return $this->notFoundDriverIds;
    }

    /**
     * Gets the successfulDriverIds property value. List of driver Ids where the action is successful.
     * @return array<string>|null
    */
    public function getSuccessfulDriverIds(): ?array {
        return $this->successfulDriverIds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('failedDriverIds', $this->failedDriverIds);
        $writer->writeCollectionOfPrimitiveValues('notFoundDriverIds', $this->notFoundDriverIds);
        $writer->writeCollectionOfPrimitiveValues('successfulDriverIds', $this->successfulDriverIds);
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
     * Sets the failedDriverIds property value. List of driver Ids where the action is failed.
     *  @param array<string>|null $value Value to set for the failedDriverIds property.
    */
    public function setFailedDriverIds(?array $value ): void {
        $this->failedDriverIds = $value;
    }

    /**
     * Sets the notFoundDriverIds property value. List of driver Ids that are not found.
     *  @param array<string>|null $value Value to set for the notFoundDriverIds property.
    */
    public function setNotFoundDriverIds(?array $value ): void {
        $this->notFoundDriverIds = $value;
    }

    /**
     * Sets the successfulDriverIds property value. List of driver Ids where the action is successful.
     *  @param array<string>|null $value Value to set for the successfulDriverIds property.
    */
    public function setSuccessfulDriverIds(?array $value ): void {
        $this->successfulDriverIds = $value;
    }

}
