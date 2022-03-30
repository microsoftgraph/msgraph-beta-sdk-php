<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagementCertificateWithThumbprint implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $certificate The Base 64 encoded management certificate */
    private ?string $certificate = null;
    
    /** @var string|null $thumbprint The thumbprint of the management certificate */
    private ?string $thumbprint = null;
    
    /**
     * Instantiates a new managementCertificateWithThumbprint and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagementCertificateWithThumbprint
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ManagementCertificateWithThumbprint {
        return new ManagementCertificateWithThumbprint();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the certificate property value. The Base 64 encoded management certificate
     * @return string|null
    */
    public function getCertificate(): ?string {
        return $this->certificate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'certificate' => function (self $o, ParseNode $n) { $o->setCertificate($n->getStringValue()); },
            'thumbprint' => function (self $o, ParseNode $n) { $o->setThumbprint($n->getStringValue()); },
        ];
    }

    /**
     * Gets the thumbprint property value. The thumbprint of the management certificate
     * @return string|null
    */
    public function getThumbprint(): ?string {
        return $this->thumbprint;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('certificate', $this->certificate);
        $writer->writeStringValue('thumbprint', $this->thumbprint);
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
     * Sets the certificate property value. The Base 64 encoded management certificate
     *  @param string|null $value Value to set for the certificate property.
    */
    public function setCertificate(?string $value ): void {
        $this->certificate = $value;
    }

    /**
     * Sets the thumbprint property value. The thumbprint of the management certificate
     *  @param string|null $value Value to set for the thumbprint property.
    */
    public function setThumbprint(?string $value ): void {
        $this->thumbprint = $value;
    }

}
