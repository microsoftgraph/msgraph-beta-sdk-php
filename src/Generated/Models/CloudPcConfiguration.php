<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CloudPcConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CloudPcConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcConfiguration {
        return new CloudPcConfiguration();
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
            'imageDisplayName' => fn(ParseNode $n) => $o->setImageDisplayName($n->getStringValue()),
            'imageId' => fn(ParseNode $n) => $o->setImageId($n->getStringValue()),
            'imageType' => fn(ParseNode $n) => $o->setImageType($n->getEnumValue(CloudPcProvisioningPolicyImageType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'osLocale' => fn(ParseNode $n) => $o->setOsLocale($n->getStringValue()),
        ];
    }

    /**
     * Gets the imageDisplayName property value. The display name of the image. Read-only.
     * @return string|null
    */
    public function getImageDisplayName(): ?string {
        $val = $this->getBackingStore()->get('imageDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'imageDisplayName'");
    }

    /**
     * Gets the imageId property value. The unique identifier of the operating system image used for provisioning new Cloud PCs. The format for a gallery type image is: {publisherNameofferNameskuName}.
     * @return string|null
    */
    public function getImageId(): ?string {
        $val = $this->getBackingStore()->get('imageId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'imageId'");
    }

    /**
     * Gets the imageType property value. The imageType property
     * @return CloudPcProvisioningPolicyImageType|null
    */
    public function getImageType(): ?CloudPcProvisioningPolicyImageType {
        $val = $this->getBackingStore()->get('imageType');
        if (is_null($val) || $val instanceof CloudPcProvisioningPolicyImageType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'imageType'");
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
     * Gets the osLocale property value. The operating system locale for the Cloud PC.
     * @return string|null
    */
    public function getOsLocale(): ?string {
        $val = $this->getBackingStore()->get('osLocale');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osLocale'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('imageDisplayName', $this->getImageDisplayName());
        $writer->writeStringValue('imageId', $this->getImageId());
        $writer->writeEnumValue('imageType', $this->getImageType());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('osLocale', $this->getOsLocale());
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
     * Sets the imageDisplayName property value. The display name of the image. Read-only.
     * @param string|null $value Value to set for the imageDisplayName property.
    */
    public function setImageDisplayName(?string $value): void {
        $this->getBackingStore()->set('imageDisplayName', $value);
    }

    /**
     * Sets the imageId property value. The unique identifier of the operating system image used for provisioning new Cloud PCs. The format for a gallery type image is: {publisherNameofferNameskuName}.
     * @param string|null $value Value to set for the imageId property.
    */
    public function setImageId(?string $value): void {
        $this->getBackingStore()->set('imageId', $value);
    }

    /**
     * Sets the imageType property value. The imageType property
     * @param CloudPcProvisioningPolicyImageType|null $value Value to set for the imageType property.
    */
    public function setImageType(?CloudPcProvisioningPolicyImageType $value): void {
        $this->getBackingStore()->set('imageType', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the osLocale property value. The operating system locale for the Cloud PC.
     * @param string|null $value Value to set for the osLocale property.
    */
    public function setOsLocale(?string $value): void {
        $this->getBackingStore()->set('osLocale', $value);
    }

}
