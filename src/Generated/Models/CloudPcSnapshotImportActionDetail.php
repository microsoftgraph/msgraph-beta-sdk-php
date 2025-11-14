<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CloudPcSnapshotImportActionDetail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CloudPcSnapshotImportActionDetail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcSnapshotImportActionDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcSnapshotImportActionDetail {
        return new CloudPcSnapshotImportActionDetail();
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
            'fileType' => fn(ParseNode $n) => $o->setFileType($n->getEnumValue(CloudPcSnapshotImportFileType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sasUrl' => fn(ParseNode $n) => $o->setSasUrl($n->getStringValue()),
            'sourceType' => fn(ParseNode $n) => $o->setSourceType($n->getEnumValue(CloudPcSnapshotImportSourceType::class)),
            'storageBlobInfo' => fn(ParseNode $n) => $o->setStorageBlobInfo($n->getObjectValue([CloudPcStorageBlobDetail::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the fileType property value. The fileType property
     * @return CloudPcSnapshotImportFileType|null
    */
    public function getFileType(): ?CloudPcSnapshotImportFileType {
        $val = $this->getBackingStore()->get('fileType');
        if (is_null($val) || $val instanceof CloudPcSnapshotImportFileType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileType'");
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
     * Gets the sasUrl property value. The shared access signature URL of the snapshot import action.
     * @return string|null
    */
    public function getSasUrl(): ?string {
        $val = $this->getBackingStore()->get('sasUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sasUrl'");
    }

    /**
     * Gets the sourceType property value. The sourceType property
     * @return CloudPcSnapshotImportSourceType|null
    */
    public function getSourceType(): ?CloudPcSnapshotImportSourceType {
        $val = $this->getBackingStore()->get('sourceType');
        if (is_null($val) || $val instanceof CloudPcSnapshotImportSourceType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceType'");
    }

    /**
     * Gets the storageBlobInfo property value. The storage account information of the snapshot import action.
     * @return CloudPcStorageBlobDetail|null
    */
    public function getStorageBlobInfo(): ?CloudPcStorageBlobDetail {
        $val = $this->getBackingStore()->get('storageBlobInfo');
        if (is_null($val) || $val instanceof CloudPcStorageBlobDetail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'storageBlobInfo'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('fileType', $this->getFileType());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('sasUrl', $this->getSasUrl());
        $writer->writeEnumValue('sourceType', $this->getSourceType());
        $writer->writeObjectValue('storageBlobInfo', $this->getStorageBlobInfo());
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
     * Sets the fileType property value. The fileType property
     * @param CloudPcSnapshotImportFileType|null $value Value to set for the fileType property.
    */
    public function setFileType(?CloudPcSnapshotImportFileType $value): void {
        $this->getBackingStore()->set('fileType', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the sasUrl property value. The shared access signature URL of the snapshot import action.
     * @param string|null $value Value to set for the sasUrl property.
    */
    public function setSasUrl(?string $value): void {
        $this->getBackingStore()->set('sasUrl', $value);
    }

    /**
     * Sets the sourceType property value. The sourceType property
     * @param CloudPcSnapshotImportSourceType|null $value Value to set for the sourceType property.
    */
    public function setSourceType(?CloudPcSnapshotImportSourceType $value): void {
        $this->getBackingStore()->set('sourceType', $value);
    }

    /**
     * Sets the storageBlobInfo property value. The storage account information of the snapshot import action.
     * @param CloudPcStorageBlobDetail|null $value Value to set for the storageBlobInfo property.
    */
    public function setStorageBlobInfo(?CloudPcStorageBlobDetail $value): void {
        $this->getBackingStore()->set('storageBlobInfo', $value);
    }

}
