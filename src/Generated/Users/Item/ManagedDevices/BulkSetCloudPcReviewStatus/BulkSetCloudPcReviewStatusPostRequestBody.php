<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\ManagedDevices\BulkSetCloudPcReviewStatus;

use Microsoft\Graph\Beta\Generated\Models\CloudPcReviewStatus;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BulkSetCloudPcReviewStatusPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $managedDeviceIds The managedDeviceIds property
    */
    private ?array $managedDeviceIds = null;
    
    /**
     * @var CloudPcReviewStatus|null $reviewStatus The reviewStatus property
    */
    private ?CloudPcReviewStatus $reviewStatus = null;
    
    /**
     * Instantiates a new bulkSetCloudPcReviewStatusPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BulkSetCloudPcReviewStatusPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BulkSetCloudPcReviewStatusPostRequestBody {
        return new BulkSetCloudPcReviewStatusPostRequestBody();
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
            'managedDeviceIds' => function (ParseNode $n) use ($o) { $o->setManagedDeviceIds($n->getCollectionOfPrimitiveValues()); },
            'reviewStatus' => function (ParseNode $n) use ($o) { $o->setReviewStatus($n->getObjectValue(array(CloudPcReviewStatus::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the managedDeviceIds property value. The managedDeviceIds property
     * @return array<string>|null
    */
    public function getManagedDeviceIds(): ?array {
        return $this->managedDeviceIds;
    }

    /**
     * Gets the reviewStatus property value. The reviewStatus property
     * @return CloudPcReviewStatus|null
    */
    public function getReviewStatus(): ?CloudPcReviewStatus {
        return $this->reviewStatus;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('managedDeviceIds', $this->managedDeviceIds);
        $writer->writeObjectValue('reviewStatus', $this->reviewStatus);
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
     * Sets the managedDeviceIds property value. The managedDeviceIds property
     *  @param array<string>|null $value Value to set for the managedDeviceIds property.
    */
    public function setManagedDeviceIds(?array $value ): void {
        $this->managedDeviceIds = $value;
    }

    /**
     * Sets the reviewStatus property value. The reviewStatus property
     *  @param CloudPcReviewStatus|null $value Value to set for the reviewStatus property.
    */
    public function setReviewStatus(?CloudPcReviewStatus $value ): void {
        $this->reviewStatus = $value;
    }

}
