<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class OrganizationalMessageLogo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var OrganizationalMessageLogoType|null $contentType The content type of the logo that is contained in the logo array. This is null when logoCdnUrl is used to send the logo. Possible values are: png, unknownFutureValue.
    */
    private ?OrganizationalMessageLogoType $contentType = null;
    
    /**
     * @var StreamInterface|null $logo The binary contents of the logo. This is null when logoCdnUrl is used to send the logo
    */
    private ?StreamInterface $logo = null;
    
    /**
     * @var string|null $logoCdnUrl The url at which the logo resides. This is null when logo and contentType are used to send the logo
    */
    private ?string $logoCdnUrl = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new organizationalMessageLogo and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.organizationalMessageLogo');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizationalMessageLogo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrganizationalMessageLogo {
        return new OrganizationalMessageLogo();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the contentType property value. The content type of the logo that is contained in the logo array. This is null when logoCdnUrl is used to send the logo. Possible values are: png, unknownFutureValue.
     * @return OrganizationalMessageLogoType|null
    */
    public function getContentType(): ?OrganizationalMessageLogoType {
        return $this->contentType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'contentType' => function (ParseNode $n) use ($o) { $o->setContentType($n->getEnumValue(OrganizationalMessageLogoType::class)); },
            'logo' => function (ParseNode $n) use ($o) { $o->setLogo($n->getBinaryContent()); },
            'logoCdnUrl' => function (ParseNode $n) use ($o) { $o->setLogoCdnUrl($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the logo property value. The binary contents of the logo. This is null when logoCdnUrl is used to send the logo
     * @return StreamInterface|null
    */
    public function getLogo(): ?StreamInterface {
        return $this->logo;
    }

    /**
     * Gets the logoCdnUrl property value. The url at which the logo resides. This is null when logo and contentType are used to send the logo
     * @return string|null
    */
    public function getLogoCdnUrl(): ?string {
        return $this->logoCdnUrl;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('contentType', $this->contentType);
        $writer->writeBinaryContent('logo', $this->logo);
        $writer->writeStringValue('logoCdnUrl', $this->logoCdnUrl);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the contentType property value. The content type of the logo that is contained in the logo array. This is null when logoCdnUrl is used to send the logo. Possible values are: png, unknownFutureValue.
     *  @param OrganizationalMessageLogoType|null $value Value to set for the contentType property.
    */
    public function setContentType(?OrganizationalMessageLogoType $value ): void {
        $this->contentType = $value;
    }

    /**
     * Sets the logo property value. The binary contents of the logo. This is null when logoCdnUrl is used to send the logo
     *  @param StreamInterface|null $value Value to set for the logo property.
    */
    public function setLogo(?StreamInterface $value ): void {
        $this->logo = $value;
    }

    /**
     * Sets the logoCdnUrl property value. The url at which the logo resides. This is null when logo and contentType are used to send the logo
     *  @param string|null $value Value to set for the logoCdnUrl property.
    */
    public function setLogoCdnUrl(?string $value ): void {
        $this->logoCdnUrl = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
