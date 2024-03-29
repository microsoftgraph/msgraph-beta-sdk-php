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
 * A class to hold specialty enrollment data used for enrolling via Google's Android Management API, such as Token, Url, and QR code content
*/
class AndroidEnrollmentCompanyCode implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AndroidEnrollmentCompanyCode and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidEnrollmentCompanyCode
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidEnrollmentCompanyCode {
        return new AndroidEnrollmentCompanyCode();
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
     * Gets the enrollmentToken property value. Enrollment Token used by the User to enroll their device.
     * @return string|null
    */
    public function getEnrollmentToken(): ?string {
        $val = $this->getBackingStore()->get('enrollmentToken');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enrollmentToken'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'enrollmentToken' => fn(ParseNode $n) => $o->setEnrollmentToken($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'qrCodeContent' => fn(ParseNode $n) => $o->setQrCodeContent($n->getStringValue()),
            'qrCodeImage' => fn(ParseNode $n) => $o->setQrCodeImage($n->getObjectValue([MimeContent::class, 'createFromDiscriminatorValue'])),
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
     * Gets the qrCodeContent property value. String used to generate a QR code for the token.
     * @return string|null
    */
    public function getQrCodeContent(): ?string {
        $val = $this->getBackingStore()->get('qrCodeContent');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'qrCodeContent'");
    }

    /**
     * Gets the qrCodeImage property value. Generated QR code for the token.
     * @return MimeContent|null
    */
    public function getQrCodeImage(): ?MimeContent {
        $val = $this->getBackingStore()->get('qrCodeImage');
        if (is_null($val) || $val instanceof MimeContent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'qrCodeImage'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('enrollmentToken', $this->getEnrollmentToken());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('qrCodeContent', $this->getQrCodeContent());
        $writer->writeObjectValue('qrCodeImage', $this->getQrCodeImage());
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
     * Sets the enrollmentToken property value. Enrollment Token used by the User to enroll their device.
     * @param string|null $value Value to set for the enrollmentToken property.
    */
    public function setEnrollmentToken(?string $value): void {
        $this->getBackingStore()->set('enrollmentToken', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the qrCodeContent property value. String used to generate a QR code for the token.
     * @param string|null $value Value to set for the qrCodeContent property.
    */
    public function setQrCodeContent(?string $value): void {
        $this->getBackingStore()->set('qrCodeContent', $value);
    }

    /**
     * Sets the qrCodeImage property value. Generated QR code for the token.
     * @param MimeContent|null $value Value to set for the qrCodeImage property.
    */
    public function setQrCodeImage(?MimeContent $value): void {
        $this->getBackingStore()->set('qrCodeImage', $value);
    }

}
