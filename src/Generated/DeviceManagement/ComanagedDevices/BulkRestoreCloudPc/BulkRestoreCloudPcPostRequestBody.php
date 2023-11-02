<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\BulkRestoreCloudPc;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\RestoreTimeRange;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class BulkRestoreCloudPcPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new bulkRestoreCloudPcPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'managedDeviceIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setManagedDeviceIds($val);
            },
            'restorePointDateTime' => fn(ParseNode $n) => $o->setRestorePointDateTime($n->getDateTimeValue()),
            'timeRange' => fn(ParseNode $n) => $o->setTimeRange($n->getEnumValue(RestoreTimeRange::class)),
        ];
    }

    /**
     * Gets the managedDeviceIds property value. The managedDeviceIds property
     * @return array<string>|null
    */
    public function getManagedDeviceIds(): ?array {
        $val = $this->getBackingStore()->get('managedDeviceIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedDeviceIds'");
    }

    /**
     * Gets the restorePointDateTime property value. The restorePointDateTime property
     * @return DateTime|null
    */
    public function getRestorePointDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('restorePointDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restorePointDateTime'");
    }

    /**
     * Gets the timeRange property value. The timeRange property
     * @return RestoreTimeRange|null
    */
    public function getTimeRange(): ?RestoreTimeRange {
        $val = $this->getBackingStore()->get('timeRange');
        if (is_null($val) || $val instanceof RestoreTimeRange) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'timeRange'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('managedDeviceIds', $this->getManagedDeviceIds());
        $writer->writeDateTimeValue('restorePointDateTime', $this->getRestorePointDateTime());
        $writer->writeEnumValue('timeRange', $this->getTimeRange());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the managedDeviceIds property value. The managedDeviceIds property
     * @param array<string>|null $value Value to set for the managedDeviceIds property.
    */
    public function setManagedDeviceIds(?array $value): void {
        $this->getBackingStore()->set('managedDeviceIds', $value);
    }

    /**
     * Sets the restorePointDateTime property value. The restorePointDateTime property
     * @param DateTime|null $value Value to set for the restorePointDateTime property.
    */
    public function setRestorePointDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('restorePointDateTime', $value);
    }

    /**
     * Sets the timeRange property value. The timeRange property
     * @param RestoreTimeRange|null $value Value to set for the timeRange property.
    */
    public function setTimeRange(?RestoreTimeRange $value): void {
        $this->getBackingStore()->set('timeRange', $value);
    }

}
