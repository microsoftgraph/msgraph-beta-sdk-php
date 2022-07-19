<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidEnrollmentCompanyCode implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $enrollmentToken Enrollment Token used by the User to enroll their device.
    */
    private ?string $enrollmentToken = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $qrCodeContent String used to generate a QR code for the token.
    */
    private ?string $qrCodeContent = null;
    
    /**
     * @var MimeContent|null $qrCodeImage Generated QR code for the token.
    */
    private ?MimeContent $qrCodeImage = null;
    
    /**
     * Instantiates a new androidEnrollmentCompanyCode and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.androidEnrollmentCompanyCode');
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the enrollmentToken property value. Enrollment Token used by the User to enroll their device.
     * @return string|null
    */
    public function getEnrollmentToken(): ?string {
        return $this->enrollmentToken;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'enrollmentToken' => function (ParseNode $n) use ($o) { $o->setEnrollmentToken($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'qrCodeContent' => function (ParseNode $n) use ($o) { $o->setQrCodeContent($n->getStringValue()); },
            'qrCodeImage' => function (ParseNode $n) use ($o) { $o->setQrCodeImage($n->getObjectValue(array(MimeContent::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the qrCodeContent property value. String used to generate a QR code for the token.
     * @return string|null
    */
    public function getQrCodeContent(): ?string {
        return $this->qrCodeContent;
    }

    /**
     * Gets the qrCodeImage property value. Generated QR code for the token.
     * @return MimeContent|null
    */
    public function getQrCodeImage(): ?MimeContent {
        return $this->qrCodeImage;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('enrollmentToken', $this->enrollmentToken);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('qrCodeContent', $this->qrCodeContent);
        $writer->writeObjectValue('qrCodeImage', $this->qrCodeImage);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the enrollmentToken property value. Enrollment Token used by the User to enroll their device.
     *  @param string|null $value Value to set for the enrollmentToken property.
    */
    public function setEnrollmentToken(?string $value ): void {
        $this->enrollmentToken = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the qrCodeContent property value. String used to generate a QR code for the token.
     *  @param string|null $value Value to set for the qrCodeContent property.
    */
    public function setQrCodeContent(?string $value ): void {
        $this->qrCodeContent = $value;
    }

    /**
     * Sets the qrCodeImage property value. Generated QR code for the token.
     *  @param MimeContent|null $value Value to set for the qrCodeImage property.
    */
    public function setQrCodeImage(?MimeContent $value ): void {
        $this->qrCodeImage = $value;
    }

}
