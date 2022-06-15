<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\ValidateXml;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class ValidateXmlPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var StreamInterface|null $officeConfigurationXml The officeConfigurationXml property
    */
    private ?StreamInterface $officeConfigurationXml = null;
    
    /**
     * Instantiates a new validateXmlPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ValidateXmlPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ValidateXmlPostRequestBody {
        return new ValidateXmlPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'officeConfigurationXml' => function (ParseNode $n) use ($o) { $o->setOfficeConfigurationXml($n->getBinaryContent()); },
        ];
    }

    /**
     * Gets the officeConfigurationXml property value. The officeConfigurationXml property
     * @return StreamInterface|null
    */
    public function getOfficeConfigurationXml(): ?StreamInterface {
        return $this->officeConfigurationXml;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBinaryContent('officeConfigurationXml', $this->officeConfigurationXml);
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
     * Sets the officeConfigurationXml property value. The officeConfigurationXml property
     *  @param StreamInterface|null $value Value to set for the officeConfigurationXml property.
    */
    public function setOfficeConfigurationXml(?StreamInterface $value ): void {
        $this->officeConfigurationXml = $value;
    }

}
