<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\RestoreCloudPc;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RestoreCloudPcPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $cloudPcSnapshotId The cloudPcSnapshotId property
    */
    private ?string $cloudPcSnapshotId = null;
    
    /**
     * Instantiates a new restoreCloudPcPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RestoreCloudPcPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RestoreCloudPcPostRequestBody {
        return new RestoreCloudPcPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the cloudPcSnapshotId property value. The cloudPcSnapshotId property
     * @return string|null
    */
    public function getCloudPcSnapshotId(): ?string {
        return $this->cloudPcSnapshotId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cloudPcSnapshotId' => function (ParseNode $n) use ($o) { $o->setCloudPcSnapshotId($n->getStringValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('cloudPcSnapshotId', $this->cloudPcSnapshotId);
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
     * Sets the cloudPcSnapshotId property value. The cloudPcSnapshotId property
     *  @param string|null $value Value to set for the cloudPcSnapshotId property.
    */
    public function setCloudPcSnapshotId(?string $value ): void {
        $this->cloudPcSnapshotId = $value;
    }

}
