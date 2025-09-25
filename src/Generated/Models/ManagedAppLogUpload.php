<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * A `managedAppLogUpload` represents the log upload result for a given Mobile Application Management (MAM) Logs Uploading Component. Such components can be the application itself, the MAM SDK, and other on-device components that are capable of uploading diagnostic logs.
*/
class ManagedAppLogUpload implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ManagedAppLogUpload and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedAppLogUpload
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedAppLogUpload {
        return new ManagedAppLogUpload();
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
            'managedAppComponentDescription' => fn(ParseNode $n) => $o->setManagedAppComponentDescription($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'referenceId' => fn(ParseNode $n) => $o->setReferenceId($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(ManagedAppLogUploadState::class)),
        ];
    }

    /**
     * Gets the managedAppComponentDescription property value. The Mobile Application Management (MAM) Logs Uploading Component. Such components can be the application itself, the MAM SDK, and other on-device components that are capable of uploading diagnostic logs. Read-only.
     * @return string|null
    */
    public function getManagedAppComponentDescription(): ?string {
        $val = $this->getBackingStore()->get('managedAppComponentDescription');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedAppComponentDescription'");
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
     * Gets the referenceId property value. A provider-specific reference id for the uploaded logs. Read-only.
     * @return string|null
    */
    public function getReferenceId(): ?string {
        $val = $this->getBackingStore()->get('referenceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'referenceId'");
    }

    /**
     * Gets the status property value. Represents the current status of the associated `managedAppLogCollectionRequest`.
     * @return ManagedAppLogUploadState|null
    */
    public function getStatus(): ?ManagedAppLogUploadState {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof ManagedAppLogUploadState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('managedAppComponentDescription', $this->getManagedAppComponentDescription());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('referenceId', $this->getReferenceId());
        $writer->writeEnumValue('status', $this->getStatus());
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
     * Sets the managedAppComponentDescription property value. The Mobile Application Management (MAM) Logs Uploading Component. Such components can be the application itself, the MAM SDK, and other on-device components that are capable of uploading diagnostic logs. Read-only.
     * @param string|null $value Value to set for the managedAppComponentDescription property.
    */
    public function setManagedAppComponentDescription(?string $value): void {
        $this->getBackingStore()->set('managedAppComponentDescription', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the referenceId property value. A provider-specific reference id for the uploaded logs. Read-only.
     * @param string|null $value Value to set for the referenceId property.
    */
    public function setReferenceId(?string $value): void {
        $this->getBackingStore()->set('referenceId', $value);
    }

    /**
     * Sets the status property value. Represents the current status of the associated `managedAppLogCollectionRequest`.
     * @param ManagedAppLogUploadState|null $value Value to set for the status property.
    */
    public function setStatus(?ManagedAppLogUploadState $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
