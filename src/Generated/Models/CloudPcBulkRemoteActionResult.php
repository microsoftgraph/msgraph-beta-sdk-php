<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CloudPcBulkRemoteActionResult implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new cloudPcBulkRemoteActionResult and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * Gets the failedDeviceIds property value. A list of all the Intune managed device IDs that completed the bulk action with a failure.
     * @return array<string>|null
    */
    public function getFailedDeviceIds(): ?array {
        $val = $this->getBackingStore()->get('failedDeviceIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'failedDeviceIds'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'failedDeviceIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setFailedDeviceIds($val);
            },
            'notFoundDeviceIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setNotFoundDeviceIds($val);
            },
            'notSupportedDeviceIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setNotSupportedDeviceIds($val);
            },
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'successfulDeviceIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSuccessfulDeviceIds($val);
            },
        ];
    }

    /**
     * Gets the notFoundDeviceIds property value. A list of all the Intune managed device IDs that were not found when the bulk action was attempted.
     * @return array<string>|null
    */
    public function getNotFoundDeviceIds(): ?array {
        $val = $this->getBackingStore()->get('notFoundDeviceIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notFoundDeviceIds'");
    }

    /**
     * Gets the notSupportedDeviceIds property value. A list of all the Intune managed device IDs that were identified as unsupported for the bulk action.
     * @return array<string>|null
    */
    public function getNotSupportedDeviceIds(): ?array {
        $val = $this->getBackingStore()->get('notSupportedDeviceIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notSupportedDeviceIds'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the successfulDeviceIds property value. A list of all the Intune managed device IDs that completed the bulk action successfully.
     * @return array<string>|null
    */
    public function getSuccessfulDeviceIds(): ?array {
        $val = $this->getBackingStore()->get('successfulDeviceIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'successfulDeviceIds'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('failedDeviceIds', $this->getFailedDeviceIds());
        $writer->writeCollectionOfPrimitiveValues('notFoundDeviceIds', $this->getNotFoundDeviceIds());
        $writer->writeCollectionOfPrimitiveValues('notSupportedDeviceIds', $this->getNotSupportedDeviceIds());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfPrimitiveValues('successfulDeviceIds', $this->getSuccessfulDeviceIds());
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
     * Sets the failedDeviceIds property value. A list of all the Intune managed device IDs that completed the bulk action with a failure.
     * @param array<string>|null $value Value to set for the failedDeviceIds property.
    */
    public function setFailedDeviceIds(?array $value): void {
        $this->getBackingStore()->set('failedDeviceIds', $value);
    }

    /**
     * Sets the notFoundDeviceIds property value. A list of all the Intune managed device IDs that were not found when the bulk action was attempted.
     * @param array<string>|null $value Value to set for the notFoundDeviceIds property.
    */
    public function setNotFoundDeviceIds(?array $value): void {
        $this->getBackingStore()->set('notFoundDeviceIds', $value);
    }

    /**
     * Sets the notSupportedDeviceIds property value. A list of all the Intune managed device IDs that were identified as unsupported for the bulk action.
     * @param array<string>|null $value Value to set for the notSupportedDeviceIds property.
    */
    public function setNotSupportedDeviceIds(?array $value): void {
        $this->getBackingStore()->set('notSupportedDeviceIds', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the successfulDeviceIds property value. A list of all the Intune managed device IDs that completed the bulk action successfully.
     * @param array<string>|null $value Value to set for the successfulDeviceIds property.
    */
    public function setSuccessfulDeviceIds(?array $value): void {
        $this->getBackingStore()->set('successfulDeviceIds', $value);
    }

}
