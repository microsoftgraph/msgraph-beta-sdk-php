<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AssignmentFilters\ValidateFilter;

use Microsoft\Graph\Beta\Generated\Models\DeviceAndAppManagementAssignmentFilter;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ValidateFilterPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new validateFilterPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ValidateFilterPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ValidateFilterPostRequestBody {
        return new ValidateFilterPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the deviceAndAppManagementAssignmentFilter property value. The deviceAndAppManagementAssignmentFilter property
     * @return DeviceAndAppManagementAssignmentFilter|null
    */
    public function getDeviceAndAppManagementAssignmentFilter(): ?DeviceAndAppManagementAssignmentFilter {
        $val = $this->getBackingStore()->get('deviceAndAppManagementAssignmentFilter');
        if (is_null($val) || $val instanceof DeviceAndAppManagementAssignmentFilter) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceAndAppManagementAssignmentFilter'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deviceAndAppManagementAssignmentFilter' => fn(ParseNode $n) => $o->setDeviceAndAppManagementAssignmentFilter($n->getObjectValue([DeviceAndAppManagementAssignmentFilter::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('deviceAndAppManagementAssignmentFilter', $this->getDeviceAndAppManagementAssignmentFilter());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the deviceAndAppManagementAssignmentFilter property value. The deviceAndAppManagementAssignmentFilter property
     * @param DeviceAndAppManagementAssignmentFilter|null $value Value to set for the deviceAndAppManagementAssignmentFilter property.
    */
    public function setDeviceAndAppManagementAssignmentFilter(?DeviceAndAppManagementAssignmentFilter $value): void {
        $this->getBackingStore()->set('deviceAndAppManagementAssignmentFilter', $value);
    }

}
