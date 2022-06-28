<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class AndroidOmaCpConfiguration extends DeviceConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var StreamInterface|null $configurationXml Configuration XML that will be applied to the device. When it is read, it only provides a placeholder string since the original data is encrypted and stored.
    */
    private ?StreamInterface $configurationXml = null;
    
    /**
     * Instantiates a new AndroidOmaCpConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidOmaCpConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidOmaCpConfiguration {
        return new AndroidOmaCpConfiguration();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the configurationXml property value. Configuration XML that will be applied to the device. When it is read, it only provides a placeholder string since the original data is encrypted and stored.
     * @return StreamInterface|null
    */
    public function getConfigurationXml(): ?StreamInterface {
        return $this->configurationXml;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'configurationXml' => function (ParseNode $n) use ($o) { $o->setConfigurationXml($n->getBinaryContent()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('configurationXml', $this->configurationXml);
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
     * Sets the configurationXml property value. Configuration XML that will be applied to the device. When it is read, it only provides a placeholder string since the original data is encrypted and stored.
     *  @param StreamInterface|null $value Value to set for the configurationXml property.
    */
    public function setConfigurationXml(?StreamInterface $value ): void {
        $this->configurationXml = $value;
    }

}
