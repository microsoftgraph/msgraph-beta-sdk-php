<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * The details of the application which the user has requested to elevate
*/
class ElevationRequestApplicationDetail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ElevationRequestApplicationDetail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ElevationRequestApplicationDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ElevationRequestApplicationDetail {
        return new ElevationRequestApplicationDetail();
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
            'fileDescription' => fn(ParseNode $n) => $o->setFileDescription($n->getStringValue()),
            'fileHash' => fn(ParseNode $n) => $o->setFileHash($n->getStringValue()),
            'fileName' => fn(ParseNode $n) => $o->setFileName($n->getStringValue()),
            'filePath' => fn(ParseNode $n) => $o->setFilePath($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'productInternalName' => fn(ParseNode $n) => $o->setProductInternalName($n->getStringValue()),
            'productName' => fn(ParseNode $n) => $o->setProductName($n->getStringValue()),
            'productVersion' => fn(ParseNode $n) => $o->setProductVersion($n->getStringValue()),
            'publisherCert' => fn(ParseNode $n) => $o->setPublisherCert($n->getStringValue()),
            'publisherName' => fn(ParseNode $n) => $o->setPublisherName($n->getStringValue()),
        ];
    }

    /**
     * Gets the fileDescription property value. The path of the file in the request for elevation, for example, %programfiles%/git/cmd
     * @return string|null
    */
    public function getFileDescription(): ?string {
        $val = $this->getBackingStore()->get('fileDescription');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileDescription'");
    }

    /**
     * Gets the fileHash property value. The SHA256 hash of the file in the request for elevation, for example, '18ee24150dcb1d96752a4d6dd0f20dfd8ba8c38527e40aa8509b7adecf78f9c6'
     * @return string|null
    */
    public function getFileHash(): ?string {
        $val = $this->getBackingStore()->get('fileHash');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileHash'");
    }

    /**
     * Gets the fileName property value. The name of the file in the request for elevation, for example, git.exe
     * @return string|null
    */
    public function getFileName(): ?string {
        $val = $this->getBackingStore()->get('fileName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileName'");
    }

    /**
     * Gets the filePath property value. The path of the file in the request for elevation, for example, %programfiles%/git/cmd
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
     * Gets the productInternalName property value. The internal name of the application for which elevation request has been made. For example, 'git'
     * @return string|null
    */
    public function getProductInternalName(): ?string {
        $val = $this->getBackingStore()->get('productInternalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'productInternalName'");
    }

    /**
     * Gets the productName property value. The product name of the application for which elevation request has been made. For example, 'Git'
     * @return string|null
    */
    public function getProductName(): ?string {
        $val = $this->getBackingStore()->get('productName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'productName'");
    }

    /**
     * Gets the productVersion property value. The product version of the application for which elevation request has been made. For example, '2.40.1.0'
     * @return string|null
    */
    public function getProductVersion(): ?string {
        $val = $this->getBackingStore()->get('productVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'productVersion'");
    }

    /**
     * Gets the publisherCert property value. The list of base64 encoded certificate for each signer, for example, string[encodedleafcert1, encodedleafcert2....]
     * @return string|null
    */
    public function getPublisherCert(): ?string {
        $val = $this->getBackingStore()->get('publisherCert');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publisherCert'");
    }

    /**
     * Gets the publisherName property value. The certificate issuer name of the certificate used to sign the application, for example, 'Sectigo Public Code Signing CA R36'
     * @return string|null
    */
    public function getPublisherName(): ?string {
        $val = $this->getBackingStore()->get('publisherName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publisherName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('fileDescription', $this->getFileDescription());
        $writer->writeStringValue('fileHash', $this->getFileHash());
        $writer->writeStringValue('fileName', $this->getFileName());
        $writer->writeStringValue('filePath', $this->getFilePath());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('productInternalName', $this->getProductInternalName());
        $writer->writeStringValue('productName', $this->getProductName());
        $writer->writeStringValue('productVersion', $this->getProductVersion());
        $writer->writeStringValue('publisherCert', $this->getPublisherCert());
        $writer->writeStringValue('publisherName', $this->getPublisherName());
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
     * Sets the fileDescription property value. The path of the file in the request for elevation, for example, %programfiles%/git/cmd
     * @param string|null $value Value to set for the fileDescription property.
    */
    public function setFileDescription(?string $value): void {
        $this->getBackingStore()->set('fileDescription', $value);
    }

    /**
     * Sets the fileHash property value. The SHA256 hash of the file in the request for elevation, for example, '18ee24150dcb1d96752a4d6dd0f20dfd8ba8c38527e40aa8509b7adecf78f9c6'
     * @param string|null $value Value to set for the fileHash property.
    */
    public function setFileHash(?string $value): void {
        $this->getBackingStore()->set('fileHash', $value);
    }

    /**
     * Sets the fileName property value. The name of the file in the request for elevation, for example, git.exe
     * @param string|null $value Value to set for the fileName property.
    */
    public function setFileName(?string $value): void {
        $this->getBackingStore()->set('fileName', $value);
    }

    /**
     * Sets the filePath property value. The path of the file in the request for elevation, for example, %programfiles%/git/cmd
     * @param string|null $value Value to set for the filePath property.
    */
    public function setFilePath(?string $value): void {
        $this->getBackingStore()->set('filePath', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the productInternalName property value. The internal name of the application for which elevation request has been made. For example, 'git'
     * @param string|null $value Value to set for the productInternalName property.
    */
    public function setProductInternalName(?string $value): void {
        $this->getBackingStore()->set('productInternalName', $value);
    }

    /**
     * Sets the productName property value. The product name of the application for which elevation request has been made. For example, 'Git'
     * @param string|null $value Value to set for the productName property.
    */
    public function setProductName(?string $value): void {
        $this->getBackingStore()->set('productName', $value);
    }

    /**
     * Sets the productVersion property value. The product version of the application for which elevation request has been made. For example, '2.40.1.0'
     * @param string|null $value Value to set for the productVersion property.
    */
    public function setProductVersion(?string $value): void {
        $this->getBackingStore()->set('productVersion', $value);
    }

    /**
     * Sets the publisherCert property value. The list of base64 encoded certificate for each signer, for example, string[encodedleafcert1, encodedleafcert2....]
     * @param string|null $value Value to set for the publisherCert property.
    */
    public function setPublisherCert(?string $value): void {
        $this->getBackingStore()->set('publisherCert', $value);
    }

    /**
     * Sets the publisherName property value. The certificate issuer name of the certificate used to sign the application, for example, 'Sectigo Public Code Signing CA R36'
     * @param string|null $value Value to set for the publisherName property.
    */
    public function setPublisherName(?string $value): void {
        $this->getBackingStore()->set('publisherName', $value);
    }

}
