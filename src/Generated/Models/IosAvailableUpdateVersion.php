<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class IosAvailableUpdateVersion implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new iosAvailableUpdateVersion and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.iosAvailableUpdateVersion');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosAvailableUpdateVersion
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosAvailableUpdateVersion {
        return new IosAvailableUpdateVersion();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the expirationDateTime property value. The expiration date of the update.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->getBackingStore()->get('expirationDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'postingDateTime' => fn(ParseNode $n) => $o->setPostingDateTime($n->getDateTimeValue()),
            'productVersion' => fn(ParseNode $n) => $o->setProductVersion($n->getStringValue()),
            'supportedDevices' => fn(ParseNode $n) => $o->setSupportedDevices($n->getCollectionOfPrimitiveValues()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the postingDateTime property value. The posting date of the update.
     * @return DateTime|null
    */
    public function getPostingDateTime(): ?DateTime {
        return $this->getBackingStore()->get('postingDateTime');
    }

    /**
     * Gets the productVersion property value. The version of the update.
     * @return string|null
    */
    public function getProductVersion(): ?string {
        return $this->getBackingStore()->get('productVersion');
    }

    /**
     * Gets the supportedDevices property value. List of supported devices for the update.
     * @return array<string>|null
    */
    public function getSupportedDevices(): ?array {
        return $this->getBackingStore()->get('supportedDevices');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeDateTimeValue('postingDateTime', $this->getPostingDateTime());
        $writer->writeStringValue('productVersion', $this->getProductVersion());
        $writer->writeCollectionOfPrimitiveValues('supportedDevices', $this->getSupportedDevices());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the expirationDateTime property value. The expiration date of the update.
     *  @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the postingDateTime property value. The posting date of the update.
     *  @param DateTime|null $value Value to set for the postingDateTime property.
    */
    public function setPostingDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('postingDateTime', $value);
    }

    /**
     * Sets the productVersion property value. The version of the update.
     *  @param string|null $value Value to set for the productVersion property.
    */
    public function setProductVersion(?string $value): void {
        $this->getBackingStore()->set('productVersion', $value);
    }

    /**
     * Sets the supportedDevices property value. List of supported devices for the update.
     *  @param array<string>|null $value Value to set for the supportedDevices property.
    */
    public function setSupportedDevices(?array $value): void {
        $this->getBackingStore()->set('supportedDevices', $value);
    }

}
