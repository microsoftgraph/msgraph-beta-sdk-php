<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CloudPcDiscoveredApp implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CloudPcDiscoveredApp and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcDiscoveredApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcDiscoveredApp {
        return new CloudPcDiscoveredApp();
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
     * Gets the appDetail property value. The appDetail property
     * @return CloudPcCloudAppDetail|null
    */
    public function getAppDetail(): ?CloudPcCloudAppDetail {
        $val = $this->getBackingStore()->get('appDetail');
        if (is_null($val) || $val instanceof CloudPcCloudAppDetail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appDetail'");
    }

    /**
     * Gets the appName property value. The name of the discovered app; for example, Paint. Read-only.
     * @return string|null
    */
    public function getAppName(): ?string {
        $val = $this->getBackingStore()->get('appName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appName'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the discoveredAppId property value. The unique identifier of the discovered app. Read-only.
     * @return string|null
    */
    public function getDiscoveredAppId(): ?string {
        $val = $this->getBackingStore()->get('discoveredAppId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'discoveredAppId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'appDetail' => fn(ParseNode $n) => $o->setAppDetail($n->getObjectValue([CloudPcCloudAppDetail::class, 'createFromDiscriminatorValue'])),
            'appName' => fn(ParseNode $n) => $o->setAppName($n->getStringValue()),
            'discoveredAppId' => fn(ParseNode $n) => $o->setDiscoveredAppId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sourceId' => fn(ParseNode $n) => $o->setSourceId($n->getStringValue()),
        ];
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
     * Gets the sourceId property value. The ID of the source of the discovered app. For example, if the source is a custom device image, the sourceId value is the ID of that image. For example, 3035e17f-c0f7-49c1-9502-5990afcaf86f. Read-only.
     * @return string|null
    */
    public function getSourceId(): ?string {
        $val = $this->getBackingStore()->get('sourceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('appDetail', $this->getAppDetail());
        $writer->writeStringValue('appName', $this->getAppName());
        $writer->writeStringValue('discoveredAppId', $this->getDiscoveredAppId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('sourceId', $this->getSourceId());
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
     * Sets the appDetail property value. The appDetail property
     * @param CloudPcCloudAppDetail|null $value Value to set for the appDetail property.
    */
    public function setAppDetail(?CloudPcCloudAppDetail $value): void {
        $this->getBackingStore()->set('appDetail', $value);
    }

    /**
     * Sets the appName property value. The name of the discovered app; for example, Paint. Read-only.
     * @param string|null $value Value to set for the appName property.
    */
    public function setAppName(?string $value): void {
        $this->getBackingStore()->set('appName', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the discoveredAppId property value. The unique identifier of the discovered app. Read-only.
     * @param string|null $value Value to set for the discoveredAppId property.
    */
    public function setDiscoveredAppId(?string $value): void {
        $this->getBackingStore()->set('discoveredAppId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the sourceId property value. The ID of the source of the discovered app. For example, if the source is a custom device image, the sourceId value is the ID of that image. For example, 3035e17f-c0f7-49c1-9502-5990afcaf86f. Read-only.
     * @param string|null $value Value to set for the sourceId property.
    */
    public function setSourceId(?string $value): void {
        $this->getBackingStore()->set('sourceId', $value);
    }

}
