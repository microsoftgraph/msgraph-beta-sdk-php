<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CloudPcCloudAppDetail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CloudPcCloudAppDetail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcCloudAppDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcCloudAppDetail {
        return new CloudPcCloudAppDetail();
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
     * Gets the commandLineArguments property value. The commandLineArguments property
     * @return string|null
    */
    public function getCommandLineArguments(): ?string {
        $val = $this->getBackingStore()->get('commandLineArguments');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'commandLineArguments'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'commandLineArguments' => fn(ParseNode $n) => $o->setCommandLineArguments($n->getStringValue()),
            'filePath' => fn(ParseNode $n) => $o->setFilePath($n->getStringValue()),
            'iconIndex' => fn(ParseNode $n) => $o->setIconIndex($n->getIntegerValue()),
            'iconPath' => fn(ParseNode $n) => $o->setIconPath($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the filePath property value. The filePath property
     * @return string|null
    */
    public function getFilePath(): ?string {
        $val = $this->getBackingStore()->get('filePath');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'filePath'");
    }

    /**
     * Gets the iconIndex property value. The iconIndex property
     * @return int|null
    */
    public function getIconIndex(): ?int {
        $val = $this->getBackingStore()->get('iconIndex');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iconIndex'");
    }

    /**
     * Gets the iconPath property value. The iconPath property
     * @return string|null
    */
    public function getIconPath(): ?string {
        $val = $this->getBackingStore()->get('iconPath');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iconPath'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('commandLineArguments', $this->getCommandLineArguments());
        $writer->writeStringValue('filePath', $this->getFilePath());
        $writer->writeIntegerValue('iconIndex', $this->getIconIndex());
        $writer->writeStringValue('iconPath', $this->getIconPath());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the commandLineArguments property value. The commandLineArguments property
     * @param string|null $value Value to set for the commandLineArguments property.
    */
    public function setCommandLineArguments(?string $value): void {
        $this->getBackingStore()->set('commandLineArguments', $value);
    }

    /**
     * Sets the filePath property value. The filePath property
     * @param string|null $value Value to set for the filePath property.
    */
    public function setFilePath(?string $value): void {
        $this->getBackingStore()->set('filePath', $value);
    }

    /**
     * Sets the iconIndex property value. The iconIndex property
     * @param int|null $value Value to set for the iconIndex property.
    */
    public function setIconIndex(?int $value): void {
        $this->getBackingStore()->set('iconIndex', $value);
    }

    /**
     * Sets the iconPath property value. The iconPath property
     * @param string|null $value Value to set for the iconPath property.
    */
    public function setIconPath(?string $value): void {
        $this->getBackingStore()->set('iconPath', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
