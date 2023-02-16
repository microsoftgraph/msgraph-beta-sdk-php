<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AppLogCollectionDownloadDetails implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new appLogCollectionDownloadDetails and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppLogCollectionDownloadDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppLogCollectionDownloadDetails {
        return new AppLogCollectionDownloadDetails();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the appLogDecryptionAlgorithm property value. The appLogDecryptionAlgorithm property
     * @return AppLogDecryptionAlgorithm|null
    */
    public function getAppLogDecryptionAlgorithm(): ?AppLogDecryptionAlgorithm {
        return $this->getBackingStore()->get('appLogDecryptionAlgorithm');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the decryptionKey property value. Decryption key that used to decrypt the log.
     * @return string|null
    */
    public function getDecryptionKey(): ?string {
        return $this->getBackingStore()->get('decryptionKey');
    }

    /**
     * Gets the downloadUrl property value. Download SAS (Shared Access Signature) Url for completed app log request.
     * @return string|null
    */
    public function getDownloadUrl(): ?string {
        return $this->getBackingStore()->get('downloadUrl');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'appLogDecryptionAlgorithm' => fn(ParseNode $n) => $o->setAppLogDecryptionAlgorithm($n->getEnumValue(AppLogDecryptionAlgorithm::class)),
            'decryptionKey' => fn(ParseNode $n) => $o->setDecryptionKey($n->getStringValue()),
            'downloadUrl' => fn(ParseNode $n) => $o->setDownloadUrl($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('appLogDecryptionAlgorithm', $this->getAppLogDecryptionAlgorithm());
        $writer->writeStringValue('decryptionKey', $this->getDecryptionKey());
        $writer->writeStringValue('downloadUrl', $this->getDownloadUrl());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the appLogDecryptionAlgorithm property value. The appLogDecryptionAlgorithm property
     * @param AppLogDecryptionAlgorithm|null $value Value to set for the appLogDecryptionAlgorithm property.
    */
    public function setAppLogDecryptionAlgorithm(?AppLogDecryptionAlgorithm $value): void {
        $this->getBackingStore()->set('appLogDecryptionAlgorithm', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the decryptionKey property value. Decryption key that used to decrypt the log.
     * @param string|null $value Value to set for the decryptionKey property.
    */
    public function setDecryptionKey(?string $value): void {
        $this->getBackingStore()->set('decryptionKey', $value);
    }

    /**
     * Sets the downloadUrl property value. Download SAS (Shared Access Signature) Url for completed app log request.
     * @param string|null $value Value to set for the downloadUrl property.
    */
    public function setDownloadUrl(?string $value): void {
        $this->getBackingStore()->set('downloadUrl', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
