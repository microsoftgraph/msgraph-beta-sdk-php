<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\BulkRestoreCloudPc;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\RestoreTimeRange;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BulkRestoreCloudPcPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $managedDeviceIds The managedDeviceIds property
    */
    private ?array $managedDeviceIds = null;
    
    /**
     * @var DateTime|null $restorePointDateTime The restorePointDateTime property
    */
    private ?DateTime $restorePointDateTime = null;
    
    /**
     * @var RestoreTimeRange|null $timeRange The timeRange property
    */
    private ?RestoreTimeRange $timeRange = null;
    
    /**
     * Instantiates a new bulkRestoreCloudPcPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BulkRestoreCloudPcPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BulkRestoreCloudPcPostRequestBody {
        return new BulkRestoreCloudPcPostRequestBody();
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
            'restorePointDateTime' => function (ParseNode $n) use ($o) { $o->setRestorePointDateTime($n->getDateTimeValue()); },
            'timeRange' => function (ParseNode $n) use ($o) { $o->setTimeRange($n->getEnumValue(RestoreTimeRange::class)); },
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
     * Gets the restorePointDateTime property value. The restorePointDateTime property
     * @return DateTime|null
    */
    public function getRestorePointDateTime(): ?DateTime {
        return $this->restorePointDateTime;
    }

    /**
     * Gets the timeRange property value. The timeRange property
     * @return RestoreTimeRange|null
    */
    public function getTimeRange(): ?RestoreTimeRange {
        return $this->timeRange;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('managedDeviceIds', $this->managedDeviceIds);
        $writer->writeDateTimeValue('restorePointDateTime', $this->restorePointDateTime);
        $writer->writeEnumValue('timeRange', $this->timeRange);
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
     * Sets the restorePointDateTime property value. The restorePointDateTime property
     *  @param DateTime|null $value Value to set for the restorePointDateTime property.
    */
    public function setRestorePointDateTime(?DateTime $value ): void {
        $this->restorePointDateTime = $value;
    }

    /**
     * Sets the timeRange property value. The timeRange property
     *  @param RestoreTimeRange|null $value Value to set for the timeRange property.
    */
    public function setTimeRange(?RestoreTimeRange $value ): void {
        $this->timeRange = $value;
    }

}
